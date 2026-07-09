<?php
$page_title = 'Digital Solutions | AB&D Software India Pvt Ltd';
$page_desc  = 'AB&D Software delivers digital solutions for procurement, licensing, cybersecurity, cloud, automation, developer productivity and more.';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Solutions hero">
  <div class="page-hero-grid"></div>
  <div class="container">
    <div class="page-hero-inner">
      <!-- Left Column: Content -->
      <div class="page-hero-content">
        <span class="page-hero-label"><i class="fa-solid fa-puzzle-piece"></i> &nbsp;Digital Solutions</span>
        <h1>Digital Solutions Built for Modern Organizations<span class="red-dot">.</span></h1>
        <p>AB&amp;D Software delivers practical technology solutions across procurement, automation, cybersecurity, cloud, workplace productivity and industry-specific IT needs.</p>
        <div class="page-hero-actions">
          <a href="#all-solutions" class="btn btn-primary"><i class="fa-solid fa-puzzle-piece"></i> Browse Solutions</a>
          <a href="contact.php" class="btn btn-outline"><i class="fa-solid fa-envelope"></i> Contact Sales</a>
        </div>
      </div>
      <!-- Right Column: Visual Dashboard -->
      <div class="page-hero-visual">
        <div class="hero-dashboard">
          <div class="hero-dash-header">
            <div class="hero-dash-dot"></div>
            <div class="hero-dash-dot"></div>
            <div class="hero-dash-dot"></div>
            <span class="hero-dash-title">Solutions Suite</span>
          </div>
          <div class="hero-float-cards">
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(26,86,219,0.18); color: var(--clr-blue);"><i class="fa-solid fa-cart-shopping"></i></div>
              <div class="hfc-title">Digital Procurement</div>
              <div class="hfc-sub">Streamlined Sourcing</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(139,92,246,0.15); color: #8b5cf6;"><i class="fa-solid fa-database"></i></div>
              <div class="hfc-title">Asset Management</div>
              <div class="hfc-sub">Lifecycle & Sourcing</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(16,185,129,0.15); color: #10b981;"><i class="fa-solid fa-file-lines"></i></div>
              <div class="hfc-title">Document Automation</div>
              <div class="hfc-sub">Workflows & Reports</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(244,63,94,0.15); color: #f43f5e;"><i class="fa-solid fa-bug-slash"></i></div>
              <div class="hfc-title">Security Testing</div>
              <div class="hfc-sub">Vulnerability & Audit</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(245,158,11,0.15); color: #f59e0b;"><i class="fa-solid fa-desktop"></i></div>
              <div class="hfc-title">Digital Workplace</div>
              <div class="hfc-sub">Collaboration & Security</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════ SOLUTIONS WITH FILTERS ══════════════ -->
<section class="section section-bg-alt" id="all-solutions" aria-label="All solutions">
  <div class="container">

    <div class="section-header left-align reveal">
      <span class="section-label">Our Solutions</span>
      <h2>Browse All Solutions<span class="red-dot">.</span></h2>
    </div>

    <!-- Filter Chips -->
    <div class="sol-filters reveal">
      <button class="filter-chip active" data-filter="all">All Solutions</button>
      <button class="filter-chip" data-filter="procurement">Procurement</button>
      <button class="filter-chip" data-filter="licensing">Licensing</button>
      <button class="filter-chip" data-filter="security">Security</button>
      <button class="filter-chip" data-filter="cloud">Cloud</button>
      <button class="filter-chip" data-filter="developer">Developer Tools</button>
      <button class="filter-chip" data-filter="automation">Automation</button>
      <button class="filter-chip" data-filter="education">Education</button>
      <button class="filter-chip" data-filter="government">Government</button>
      <button class="filter-chip" data-filter="workplace">Digital Workplace</button>
    </div>

    <!-- Solutions Grid -->
    <div class="cards-grid-3" id="solContainer">
      <?php
      $solutions = [
        [
          'icon'=>'fa-solid fa-cart-shopping','color'=>'icon-blue','cat'=>'procurement',
          'title'=>'Digital Procurement Solution',
          'desc'=>'A streamlined approach to source, compare, purchase and renew business software and hardware through a trusted technology partner.',
          'tags'=>['Enterprise','SMB','Government','BFSI'],
          'bg'=>'linear-gradient(135deg, rgba(194,30,37,0.08), rgba(194,30,37,0.03))',
          'badge'=>'Enterprise Ready',
        ],
        [
          'icon'=>'fa-solid fa-database','color'=>'icon-violet','cat'=>'licensing',
          'title'=>'Software Asset Management',
          'desc'=>'Track software usage, license validity, renewals and compliance to reduce waste and improve visibility across your software investments.',
          'tags'=>['IT Teams','Finance Teams','Enterprise Buyers'],
          'bg'=>'linear-gradient(135deg, rgba(139,92,246,0.08), rgba(139,92,246,0.03))',
          'badge'=>'Cost Control',
        ],
        [
          'icon'=>'fa-solid fa-file-lines','color'=>'icon-emerald','cat'=>'automation',
          'title'=>'Document Automation Solution',
          'desc'=>'Automate document creation, file conversion, PDF workflows, spreadsheet processing and report generation for business applications.',
          'tags'=>['Finance','Legal','Operations','Software Teams'],
          'bg'=>'linear-gradient(135deg, rgba(16,185,129,0.08), rgba(16,185,129,0.03))',
        ],
        [
          'icon'=>'fa-solid fa-laptop-code','color'=>'icon-cyan','cat'=>'developer',
          'title'=>'Developer Productivity Suite',
          'desc'=>'A curated stack of IDEs, testing tools, debugging platforms, profiling software and team productivity tools for faster software delivery.',
          'tags'=>['Software Companies','IT Teams','Product Teams'],
          'bg'=>'linear-gradient(135deg, rgba(6,182,212,0.08), rgba(6,182,212,0.03))',
        ],
        [
          'icon'=>'fa-solid fa-bug-slash','color'=>'icon-rose','cat'=>'security',
          'title'=>'Cybersecurity &amp; Testing Solution',
          'desc'=>'Support security teams with application testing, vulnerability assessment, endpoint protection and security-focused software tools.',
          'tags'=>['Security Teams','IT Departments','BFSI','SaaS Companies'],
          'bg'=>'linear-gradient(135deg, rgba(244,63,94,0.08), rgba(244,63,94,0.03))',
        ],
        [
          'icon'=>'fa-solid fa-cloud','color'=>'icon-sky','cat'=>'cloud',
          'title'=>'Cloud &amp; Virtualization Solution',
          'desc'=>'Plan and support cloud, virtualization, backup, infrastructure and server modernization using trusted software and hardware ecosystems.',
          'tags'=>['Enterprises','Data Centers','IT Infrastructure'],
          'bg'=>'linear-gradient(135deg, rgba(14,165,233,0.08), rgba(14,165,233,0.03))',
        ],
        [
          'icon'=>'fa-solid fa-desktop','color'=>'icon-amber','cat'=>'workplace',
          'title'=>'Digital Workplace Solution',
          'desc'=>'Enable secure and productive work with collaboration tools, remote access software, endpoint applications and productivity platforms.',
          'tags'=>['Remote Teams','Corporate Teams','SMBs'],
          'bg'=>'linear-gradient(135deg, rgba(245,158,11,0.08), rgba(245,158,11,0.03))',
        ],
        [
          'icon'=>'fa-solid fa-graduation-cap','color'=>'icon-indigo','cat'=>'education',
          'title'=>'Education &amp; Training Technology',
          'desc'=>'Support institutions and training teams with e-learning platforms, digital classroom tools, content creation and assessment solutions.',
          'tags'=>['Schools','Colleges','Training Companies'],
          'bg'=>'linear-gradient(135deg, rgba(99,102,241,0.08), rgba(99,102,241,0.03))',
        ],
        [
          'icon'=>'fa-solid fa-landmark','color'=>'icon-teal','cat'=>'government',
          'title'=>'Government &amp; BFSI IT Solutions',
          'desc'=>'Reliable IT procurement, software licensing, compliance-ready tools and support coordination for government, banking and financial organizations.',
          'tags'=>['Government','Banks','NBFCs','Financial Institutions'],
          'bg'=>'linear-gradient(135deg, rgba(20,184,166,0.08), rgba(20,184,166,0.03))',
        ],
      ];
      foreach ($solutions as $i => $sol): ?>

      <div class="solution-card reveal <?= $i >= 3 ? 'reveal-delay-'.min($i-2,5) : '' ?>"
           data-category="<?= $sol['cat'] ?>"
           style="background:<?= $sol['bg'] ?>;">
        <?php if (!empty($sol['badge'])): ?>
        <span class="card-badge"><?= $sol['badge'] ?></span>
        <?php endif; ?>
        <div class="card-icon <?= $sol['color'] ?>">
          <i class="<?= $sol['icon'] ?>"></i>
        </div>
        <h2 class="card-title"><?= $sol['title'] ?></h2>
        <p class="card-desc"><?= $sol['desc'] ?></p>

        <div style="margin-top:1rem;position:relative;z-index:1;">
          <div style="font-size:0.75rem;font-weight:700;color:var(--clr-muted);text-transform:uppercase;letter-spacing:0.06em;margin-bottom:0.5rem;">Best For</div>
          <div class="solution-badge">
            <?php foreach($sol['tags'] as $tag): ?>
            <span class="sol-tag"><?= $tag ?></span>
            <?php endforeach; ?>
          </div>
        </div>

        <a href="contact.php" class="card-link btn-ghost" style="margin-top:1.4rem;">
          Get This Solution <span class="arr">→</span>
        </a>
      </div>

      <?php endforeach; ?>
    </div><!-- /solContainer -->

  </div>
</section>

<!-- ══════════════ SOLUTIONS CTA ══════════════ -->
<section class="cta-section" aria-label="Solutions CTA">
  <div class="container">
    <div class="reveal">
      <span class="section-label" style="background:rgba(26,86,219,0.12);border-color:rgba(26,86,219,0.25);color:#93c5fd;">Expert Guidance</span>
      <h2>Not sure which solution fits your requirement?<span class="red-dot">.</span></h2>
      <p>Our technology advisors will map your business needs to the right solution and procurement path.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-primary"><i class="fa-solid fa-comments"></i> Talk to Our Experts</a>
        <a href="services.php" class="btn btn-outline"><i class="fa-solid fa-gears"></i> View Our Services</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
