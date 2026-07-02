<?php
// Handle form submission before page header loads
$success_msg = '';
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $name = strip_tags(trim($_POST['name'] ?? ''));
    $company = strip_tags(trim($_POST['company'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone = strip_tags(trim($_POST['phone'] ?? ''));
    $service = strip_tags(trim($_POST['service'] ?? ''));
    $message = strip_tags(trim($_POST['message'] ?? ''));

    if (!$name || !$email || !$message) {
        $error_msg = 'Please fill in all required fields (Name, Email, Message).';
    } else {
        $to = 'sales@abdindia.co.in';
        $subject = 'New Web Enquiry: ' . ($service ? $service : 'General Sourcing') . ' from ' . $name;
        
        $email_content = "--------------------------------------------------\n";
        $email_content .= "AB&D SOFTWARE INDIA - WEB ENQUIRY NOTIFICATION\n";
        $email_content .= "--------------------------------------------------\n\n";
        $email_content .= "Name:       $name\n";
        if ($company) {
            $email_content .= "Company:    $company\n";
        }
        $email_content .= "Email:      $email\n";
        if ($phone) {
            $email_content .= "Phone:      $phone\n";
        }
        if ($service) {
            $email_content .= "Service:    $service\n";
        }
        $email_content .= "\nMessage / Requirement:\n$message\n\n";
        $email_content .= "--------------------------------------------------\n";
        $email_content .= "Sent on:    " . date('Y-m-d H:i:s') . "\n";
        $email_content .= "Client IP:  " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";

        // Headers
        $headers = "From: webmaster@abdindia.co.in\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send Email
        $mail_sent = false;
        try {
            $mail_sent = @mail($to, $subject, $email_content, $headers);
        } catch (Exception $e) {
            $mail_sent = false;
        }

        // Fallback logging in case Vercel Serverless Function has no local mail server
        $log_dir = 'logs';
        if (!is_dir($log_dir)) {
            @mkdir($log_dir, 0755, true);
        }
        $log_file = $log_dir . '/enquiries.log';
        $log_entry = "[" . date('Y-m-d H:i:s') . "] TO: $to | SUBJECT: $subject\n$email_content\n" . str_repeat('=', 60) . "\n";
        @file_put_contents($log_file, $log_entry, FILE_APPEND);

        // Standard success message
        $success_msg = 'Thank you! Your enquiry has been received and our team will get in touch with you shortly.';
    }

    // JSON response for AJAX requests
    if (isset($_GET['ajax'])) {
        header('Content-Type: application/json');
        if ($success_msg) {
            echo json_encode(['status' => 'success', 'message' => $success_msg]);
        } else {
            echo json_encode(['status' => 'error', 'message' => $error_msg]);
        }
        exit;
    }
}

// Get query parameters for pre-filling form
$pre_interest = $_GET['interest'] ?? '';
$pre_message = $_GET['message'] ?? '';

$page_title = 'Contact AB&D Software India Pvt Ltd';
$page_desc  = 'Contact AB&D Software India Pvt Ltd for software licensing, IT procurement, cybersecurity, cloud, developer tools, document automation and support enquiries.';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Contact hero">
  <div class="page-hero-grid"></div>
  <div class="container">
    <span class="page-hero-label"><i class="fa-solid fa-envelope-open-text"></i> &nbsp;Contact Us</span>
    <h1>Let’s Find the Right Technology Solution for Your Business<span class="red-dot">.</span></h1>
    <p>Connect with AB&amp;D Software India Pvt Ltd for software licensing, hardware sourcing, cybersecurity, cloud, developer tools, document automation and renewal support.</p>
  </div>
</section>

<!-- Contact Layout -->
<section class="section section-bg-alt" aria-label="Contact form and information">
  <div class="container">
    <div class="contact-layout">

      <!-- Form -->
      <div class="contact-form-card reveal">
        <div class="section-header left-align" style="margin-bottom:2rem;">
          <span class="section-label">Send Enquiry</span>
          <h2>Tell Us What You Need<span class="red-dot">.</span></h2>
          <p>Share your requirement and the AB&amp;D team will help you with the right product, license, solution or support path.</p>
        </div>

        <!-- HTML success/error messages for non-JS/standard postback -->
        <?php if ($success_msg): ?>
          <div style="background:#d1fae5; border-left:4px solid #10b981; color:#065f46; padding:1rem; border-radius:var(--radius-sm); margin-bottom:1.5rem; font-size:0.9rem;">
            <?= htmlspecialchars($success_msg) ?>
          </div>
        <?php elseif ($error_msg): ?>
          <div style="background:#fee2e2; border-left:4px solid #ef4444; color:#991b1b; padding:1rem; border-radius:var(--radius-sm); margin-bottom:1.5rem; font-size:0.9rem;">
            <?= htmlspecialchars($error_msg) ?>
          </div>
        <?php endif; ?>

        <form id="contactForm" method="post" action="contact.php" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="name">Name *</label>
              <input class="form-input" type="text" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="company">Company Name</label>
              <input class="form-input" type="text" id="company" name="company" placeholder="Your company">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="email">Email *</label>
              <input class="form-input" type="email" id="email" name="email" placeholder="you@company.com" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="phone">Phone</label>
              <input class="form-input" type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="service">Service Interested In</label>
            <select class="form-select" id="service" name="service">
              <option value="">Select a service</option>
              <option <?= $pre_interest === 'Software Licensing' || $pre_interest === 'Licensing' ? 'selected' : '' ?>>Software Licensing</option>
              <option <?= $pre_interest === 'IT Consulting' || $pre_interest === 'Consulting' ? 'selected' : '' ?>>IT Consulting</option>
              <option <?= $pre_interest === 'Cybersecurity' || $pre_interest === 'Security' ? 'selected' : '' ?>>Cybersecurity</option>
              <option <?= $pre_interest === 'Cloud & Infrastructure' || $pre_interest === 'Cloud' || $pre_interest === 'IMS' || $pre_interest === 'EMS' || $pre_interest === 'ELM' || $pre_interest === 'ALM' ? 'selected' : '' ?>>Cloud &amp; Infrastructure</option>
              <option <?= $pre_interest === 'Developer Tools' || $pre_interest === 'developer' || $pre_interest === 'KeyShot' || $pre_interest === 'Source Insight' || $pre_interest === 'Beyond Compare' ? 'selected' : '' ?>>Developer Tools</option>
              <option <?= $pre_interest === 'Document Automation' || $pre_interest === 'document' || $pre_interest === 'PDF-XChange' ? 'selected' : '' ?>>Document Automation</option>
              <option <?= $pre_interest === 'Renewals & Support' || $pre_interest === 'renewals' ? 'selected' : '' ?>>Renewals &amp; Support</option>
              <option <?= $pre_interest === 'Other' ? 'selected' : '' ?>>Other</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="message">Message *</label>
            <textarea class="form-textarea" id="message" name="message" placeholder="Tell us about your requirement, software name, quantity, renewal date or project need..." required><?= htmlspecialchars($pre_message) ?></textarea>
          </div>

          <button class="form-submit" type="submit">
            Send Enquiry <i class="fa-solid fa-arrow-right" style="margin-left:0.4rem;"></i>
          </button>
        </form>
      </div>

      <!-- Info Panel -->
      <div class="contact-info-panel reveal reveal-delay-2">
        <div class="contact-info-card">
          <div class="contact-ic-icon icon-blue"><i class="fa-solid fa-envelope"></i></div>
          <div>
            <div class="contact-ic-title">Email</div>
            <div class="contact-ic-val"><a href="mailto:sales@abdindia.co.in" style="color: inherit; text-decoration: none;">sales@abdindia.co.in</a></div>
            <p style="font-size:0.82rem;margin-top:0.3rem;">For product enquiries, licensing and renewals.</p>
          </div>
        </div>

        <div class="contact-info-card">
          <div class="contact-ic-icon icon-emerald"><i class="fa-solid fa-phone"></i></div>
          <div>
            <div class="contact-ic-title">Phone</div>
            <div class="contact-ic-val"><a href="tel:+919632227977" style="color: inherit; text-decoration: none;">+91 96322 27977</a></div>
            <p style="font-size:0.82rem;margin-top:0.3rem;">Call us directly for pricing and support questions.</p>
          </div>
        </div>

        <div class="contact-info-card">
          <div class="contact-ic-icon icon-rose"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <div class="contact-ic-title">Office Location</div>
            <div class="contact-ic-val" style="font-size: 0.95rem; line-height: 1.4; color: var(--clr-dark); font-weight: 600;">AB&amp;D Software India P Ltd</div>
            <p style="font-size:0.85rem; margin-top:0.2rem; line-height:1.4; color: var(--clr-muted);">2079, C Block, Sahakar Nagar,<br>Kodigehalli, Bangalore 560092</p>
          </div>
        </div>

        <div style="background: var(--clr-white); padding: 0.6rem; border-radius: var(--radius-md); border: 1px solid var(--clr-border); box-shadow: var(--shadow-sm); overflow: hidden; height: 236px;">
          <!-- Interactive Google Maps Embed -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2905187123985!2d77.5815668102377!3d13.048995587222123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17de90176461%3A0xe104cf5e2b4f693e!2sSahakara%20Nagar%2C%20Kodigehalli%2C%20Bengaluru%2C%20Karnataka%20560092!5e0!3m2!1sen!2sin!4v1719943200000!5m2!1sen!2sin" width="100%" height="100%" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Quick Enquiry Cards -->
<section class="section" aria-label="Quick enquiry options">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Quick Enquiry</span>
      <h2>What Can We Help You With?<span class="red-dot">.</span></h2>
      <p>Choose the most relevant enquiry type and share the details through the contact form.</p>
    </div>

    <div class="cards-grid-3">
      <?php
        $enquiries = [
          ['icon'=>'fa-solid fa-file-signature','color'=>'icon-blue','title'=>'Software License Quote','desc'=>'Need pricing or availability for a specific software product or license?'],
          ['icon'=>'fa-solid fa-arrows-rotate','color'=>'icon-amber','title'=>'Renewal Support','desc'=>'Track, renew or upgrade licenses with support from a reliable technology partner.'],
          ['icon'=>'fa-solid fa-shield-halved','color'=>'icon-rose','title'=>'Security Requirement','desc'=>'Find endpoint, application security, testing and compliance-ready security products.'],
          ['icon'=>'fa-solid fa-cloud','color'=>'icon-cyan','title'=>'Cloud &amp; Infrastructure','desc'=>'Discuss cloud, virtualization, backup, server, storage and infrastructure software needs.'],
          ['icon'=>'fa-solid fa-code','color'=>'icon-emerald','title'=>'Developer Tools','desc'=>'Source IDEs, testing tools, profilers, API tools and productivity software for dev teams.'],
          ['icon'=>'fa-solid fa-file-lines','color'=>'icon-violet','title'=>'Document Automation','desc'=>'Ask about PDF processing, file conversion, reporting and document workflow solutions.'],
        ];
        foreach ($enquiries as $i => $eq):
      ?>
      <div class="card reveal <?= $i > 2 ? 'reveal-delay-2' : '' ?>">
        <div class="card-icon <?= $eq['color'] ?>"><i class="<?= $eq['icon'] ?>"></i></div>
        <h3 class="card-title"><?= $eq['title'] ?></h3>
        <p class="card-desc"><?= $eq['desc'] ?></p>
        <a href="#contactForm" class="card-link">Start enquiry <span class="arr">→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-label="Contact CTA">
  <div class="container">
    <h2>Need Help Choosing the Right Software or IT Solution?<span class="red-dot">.</span></h2>
    <p>Talk to AB&amp;D today and get expert guidance for your business technology needs.</p>
    <div class="cta-actions">
      <a href="services.php" class="btn btn-primary"><i class="fa-solid fa-gears"></i> Explore Services</a>
      <a href="solutions.php" class="btn btn-outline"><i class="fa-solid fa-puzzle-piece"></i> View Solutions</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
