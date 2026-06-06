<?php
$page_title = 'About AB&D Software India Pvt Ltd';
$page_desc  = 'Learn about AB&D Software India Pvt Ltd, a trusted technology sourcing, software licensing, hardware procurement and IT solutions partner for organizations across India.';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="About hero">
  <div class="page-hero-grid"></div>
  <div class="container">
    <span class="page-hero-label"><i class="fa-solid fa-building"></i> &nbsp;About AB&amp;D</span>
    <h1>About AB&amp;D Software India Pvt Ltd<span class="red-dot">.</span></h1>
    <p>A trusted technology sourcing and IT solutions partner helping businesses across India adopt the right software, hardware and digital tools.</p>
  </div>
</section>

<!-- Who We Are -->
<section class="section section-bg-alt" aria-label="Who we are">
  <div class="container">
    <div class="about-who-grid">
      <div class="about-content reveal">
        <div class="section-header left-align">
          <span class="section-label">Who We Are</span>
          <h2>Your Trusted Technology Sourcing Partner<span class="red-dot">.</span></h2>
          <p>AB&amp;D Software India Pvt Ltd supports organizations with software licensing, hardware sourcing, technology consulting and reliable procurement assistance.</p>
        </div>

        <p style="margin-bottom:1rem;">We help customers simplify technology buying by connecting them with genuine products, trusted vendors and practical IT solutions that match their business requirements.</p>
        <p>Our focus is to make software and hardware procurement easier, more transparent and more reliable for enterprise, SMB, government, BFSI, education and IT customers across India.</p>

        <div class="strengths-grid">
          <div class="strength-item"><span>✅</span> Genuine product sourcing</div>
          <div class="strength-item"><span>🤝</span> Vendor coordination</div>
          <div class="strength-item"><span>💡</span> Practical IT guidance</div>
          <div class="strength-item"><span>🇮🇳</span> Pan-India support</div>
        </div>
      </div>

      <div class="about-visual reveal reveal-delay-2">
        <div class="about-img-wrap">
          <div class="about-metrics">
            <div class="about-metric">
              <div class="about-metric-num"><span>20</span>+</div>
              <div class="about-metric-label">Years Experience</div>
            </div>
            <div class="about-metric">
              <div class="about-metric-num"><span>500</span>+</div>
              <div class="about-metric-label">Customers Supported</div>
            </div>
            <div class="about-metric">
              <div class="about-metric-num"><span>50</span>+</div>
              <div class="about-metric-label">Technology Brands</div>
            </div>
            <div class="about-metric">
              <div class="about-metric-num"><span>8</span></div>
              <div class="about-metric-label">Industry Segments</div>
            </div>
          </div>
        </div>
        <div class="about-floating-badge">
          <div style="font-size:1.2rem;margin-bottom:0.3rem;">🚀</div>
          Modern IT Solutions<br>
          <span style="font-size:0.75rem;font-weight:500;opacity:0.8;">Built for growing teams</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What We Do -->
<section class="section section-glow" aria-label="What we do">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">What We Do</span>
      <h2>Helping Businesses Choose, Buy &amp; Manage Technology<span class="red-dot">.</span></h2>
      <p>AB&amp;D brings procurement support, product knowledge and technology guidance together in one place.</p>
    </div>

    <div class="cards-grid-3">
      <?php
        $whatWeDo = [
          ['icon'=>'fa-solid fa-file-signature','color'=>'icon-blue','title'=>'Software Licensing','desc'=>'We help customers access genuine software licenses with better product selection, pricing support and renewal coordination.'],
          ['icon'=>'fa-solid fa-server','color'=>'icon-cyan','title'=>'Hardware Sourcing','desc'=>'We support reliable sourcing for business hardware, infrastructure products, accessories and IT equipment requirements.'],
          ['icon'=>'fa-solid fa-lightbulb','color'=>'icon-indigo','title'=>'Technology Consulting','desc'=>'We understand customer requirements and recommend suitable software, hardware and digital solutions.'],
          ['icon'=>'fa-solid fa-shield-halved','color'=>'icon-rose','title'=>'Security Solutions','desc'=>'We help organizations identify security software, endpoint protection and application testing tools for safer operations.'],
          ['icon'=>'fa-solid fa-code','color'=>'icon-emerald','title'=>'Developer Tools','desc'=>'We support development teams with IDEs, testing tools, debugging software, profilers and productivity platforms.'],
          ['icon'=>'fa-solid fa-arrows-rotate','color'=>'icon-amber','title'=>'Renewal Support','desc'=>'We assist with license validity, renewals, upgrades, support coordination and software lifecycle planning.'],
        ];
        foreach ($whatWeDo as $i => $item):
      ?>
      <div class="card reveal <?= $i > 2 ? 'reveal-delay-2' : '' ?>">
        <div class="card-icon <?= $item['color'] ?>"><i class="<?= $item['icon'] ?>"></i></div>
        <h3 class="card-title"><?= $item['title'] ?></h3>
        <p class="card-desc"><?= $item['desc'] ?></p>
        <a href="services.php" class="card-link">Explore service <span class="arr">→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Who We Serve -->
<section class="section section-bg-alt" aria-label="Who we serve">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Who We Serve</span>
      <h2>Supporting Organizations Across India<span class="red-dot">.</span></h2>
      <p>Our services are designed for teams that need reliable technology procurement, licensing and support guidance.</p>
    </div>

    <div class="industry-grid">
      <?php
        $industries = [
          ['icon'=>'fa-solid fa-building','color'=>'icon-blue','title'=>'Enterprise Organizations','desc'=>'Large businesses with multi-team IT needs'],
          ['icon'=>'fa-solid fa-store','color'=>'icon-emerald','title'=>'SMB Businesses','desc'=>'Growing companies that need practical solutions'],
          ['icon'=>'fa-solid fa-landmark','color'=>'icon-indigo','title'=>'Government Institutions','desc'=>'Public sector procurement and software needs'],
          ['icon'=>'fa-solid fa-building-columns','color'=>'icon-rose','title'=>'BFSI Customers','desc'=>'Banking, finance and compliance-focused teams'],
          ['icon'=>'fa-solid fa-graduation-cap','color'=>'icon-amber','title'=>'Education Institutions','desc'=>'Schools, colleges and training organizations'],
          ['icon'=>'fa-solid fa-laptop-code','color'=>'icon-cyan','title'=>'IT &amp; Software Companies','desc'=>'Development, QA and product engineering teams'],
          ['icon'=>'fa-solid fa-heart-pulse','color'=>'icon-violet','title'=>'Healthcare Companies','desc'=>'Technology tools for healthcare operations'],
          ['icon'=>'fa-solid fa-truck-fast','color'=>'icon-teal','title'=>'Manufacturing &amp; Logistics','desc'=>'Operational and infrastructure software needs'],
        ];
        foreach ($industries as $i => $ind):
      ?>
      <div class="industry-card reveal <?= $i > 3 ? 'reveal-delay-2' : '' ?>">
        <div class="ind-icon <?= $ind['color'] ?>"><i class="<?= $ind['icon'] ?>"></i></div>
        <h3 class="ind-title"><?= $ind['title'] ?></h3>
        <p class="ind-desc"><?= $ind['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Our Strengths -->
<section class="section" aria-label="Our strengths">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Our Strengths</span>
      <h2>Why Customers Choose AB&amp;D<span class="red-dot">.</span></h2>
      <p>We combine vendor access, technology understanding and customer-focused support to simplify IT decisions.</p>
    </div>

    <div class="strength-cards">
      <?php
        $strengths = [
          ['num'=>'01','label'=>'Genuine Product Sourcing'],
          ['num'=>'02','label'=>'Strong Vendor Ecosystem'],
          ['num'=>'03','label'=>'Cost-Effective Procurement'],
          ['num'=>'04','label'=>'Customer-Focused Support'],
          ['num'=>'05','label'=>'Pan-India Reach'],
          ['num'=>'06','label'=>'Domain Experience'],
        ];
        foreach ($strengths as $strength):
      ?>
      <div class="strength-card reveal">
        <div class="strength-num"><?= $strength['num'] ?></div>
        <div class="strength-label"><?= $strength['label'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-label="About CTA">
  <div class="container">
    <h2>Ready to Modernize Your IT Procurement?<span class="red-dot">.</span></h2>
    <p>Talk to AB&amp;D Software India Pvt Ltd and get guidance for software licensing, hardware sourcing, security, cloud and IT support needs.</p>
    <div class="cta-actions">
      <a href="contact.php" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Contact Sales</a>
      <a href="services.php" class="btn btn-outline"><i class="fa-solid fa-gears"></i> Explore Services</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
