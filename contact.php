<?php
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

        <form id="contactForm" method="post" action="#" novalidate>
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
              <option>Software Licensing</option>
              <option>IT Consulting</option>
              <option>Cybersecurity</option>
              <option>Cloud &amp; Infrastructure</option>
              <option>Developer Tools</option>
              <option>Document Automation</option>
              <option>Renewals &amp; Support</option>
              <option>Other</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="message">Message *</label>
            <textarea class="form-textarea" id="message" name="message" placeholder="Tell us about your requirement, software name, quantity, renewal date or project need..." required></textarea>
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
            <div class="contact-ic-val">sales@abdindia.co.in</div>
            <p style="font-size:0.82rem;margin-top:0.3rem;">For product enquiries, licensing and renewals.</p>
          </div>
        </div>

        <div class="contact-info-card">
          <div class="contact-ic-icon icon-emerald"><i class="fa-solid fa-phone"></i></div>
          <div>
            <div class="contact-ic-title">Phone</div>
            <div class="contact-ic-val">+91 — Contact for number</div>
            <p style="font-size:0.82rem;margin-top:0.3rem;">Use the enquiry form for a quick callback request.</p>
          </div>
        </div>

        <div class="contact-info-card">
          <div class="contact-ic-icon icon-rose"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <div class="contact-ic-title">Location</div>
            <div class="contact-ic-val">India — Pan-India Operations</div>
            <p style="font-size:0.82rem;margin-top:0.3rem;">Serving enterprise, SMB, government and BFSI customers.</p>
          </div>
        </div>

        <div class="map-placeholder" aria-label="Map placeholder">
          <div class="map-pin"><i class="fa-solid fa-map-location-dot"></i></div>
          <div class="map-text">Map / Office Location Placeholder</div>
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
