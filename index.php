<?php
$page_title = 'AB&D Software India Pvt Ltd | IT Services, Software Licensing & Technology Solutions';
$page_desc  = 'AB&D Software India Pvt Ltd — Trusted IT procurement, software licensing, cybersecurity, cloud, developer tools and managed support for enterprises, SMBs, government and BFSI across India.';
include 'includes/header.php';
?>

<!-- ══════════════ SECTION 1: HERO ══════════════ -->
<section class="hero" aria-label="Hero">
  <!-- Background grid & orbs -->
  <div class="hero-bg-grid"></div>
  <div class="hero-orbs">
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
    <div class="hero-orb hero-orb-3"></div>
  </div>

  <div class="container">
    <div class="hero-inner">

      <!-- Left: Content -->
      <div class="hero-content">
        <div class="hero-badge">
          <span class="hero-badge-dot"></span>
          Trusted IT Solutions Partner · Pan-India
        </div>

        <h1>
          IT Services That Help Businesses
          <span class="highlight">Buy, Build, Secure &amp; Scale</span>
          Technology<span class="red-dot">.</span>
        </h1>

        <p class="hero-sub">
          AB&amp;D Software helps enterprises, SMBs, government institutions and financial organizations choose, procure, implement and support reliable software and hardware solutions.
        </p>

        <div class="hero-actions">
          <a href="services.php" class="btn btn-primary">
            <i class="fa-solid fa-bolt"></i> Explore Services
          </a>
          <a href="contact.php" class="btn btn-outline">
            <i class="fa-solid fa-calendar-check"></i> Request Consultation
          </a>
        </div>

        <!-- Trust logos -->
        <div style="margin-top:2.5rem;display:flex;align-items:center;gap:1rem;flex-wrap:wrap;">
          <span style="font-size:0.78rem;font-weight:600;color:rgba(255,255,255,0.35);letter-spacing:0.08em;text-transform:uppercase;">Trusted by</span>
          <div style="display:flex;gap:0.6rem;flex-wrap:wrap;">
            <?php
            $trust = ['Enterprise','SMB','Govt','BFSI','Education'];
            foreach($trust as $t): ?>
            <span style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:999px;padding:0.3rem 0.85rem;font-size:0.76rem;font-weight:600;color:rgba(255,255,255,0.55);"><?= $t ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Right: Dashboard visual -->
      <div class="hero-visual">
        <div class="hero-dashboard">
          <div class="hero-dash-header">
            <div class="hero-dash-dot"></div>
            <div class="hero-dash-dot"></div>
            <div class="hero-dash-dot"></div>
            <span class="hero-dash-title">AB&amp;D Solutions Dashboard</span>
          </div>

          <div class="hero-float-cards">
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(37,99,235,0.15); color: var(--clr-blue);"><i class="fa-solid fa-file-certificate"></i></div>
              <div class="hfc-title">Software Licensing</div>
              <div class="hfc-sub">Genuine · Competitive</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(244,63,94,0.15); color: #f43f5e;"><i class="fa-solid fa-shield-halved"></i></div>
              <div class="hfc-title">Cybersecurity</div>
              <div class="hfc-sub">Endpoint · AppSec</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(6,182,212,0.15); color: #06b6d4;"><i class="fa-solid fa-cloud"></i></div>
              <div class="hfc-title">Cloud Solutions</div>
              <div class="hfc-sub">Infra · Virtualization</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(16,185,129,0.15); color: #10b981;"><i class="fa-solid fa-code"></i></div>
              <div class="hfc-title">Developer Tools</div>
              <div class="hfc-sub">IDE · Testing · QA</div>
            </div>
            <div class="hero-float-card">
              <div class="hfc-icon" style="background: rgba(245,158,11,0.15); color: #f59e0b;"><i class="fa-solid fa-arrows-rotate"></i></div>
              <div class="hfc-title">Support &amp; Renewals</div>
              <div class="hfc-sub">Lifecycle Tracking</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════ SECTION 2: STATS STRIP ══════════════ -->
<section class="stats-strip" aria-label="Company stats">
  <div class="container">
    <div class="stats-grid">

      <div class="stat-item reveal">
        <div class="stat-icon"><i class="fa-solid fa-award" style="color:#2563eb;"></i></div>
        <div class="stat-num" data-count="20" data-suffix="+ Yrs">0<span>+ Yrs</span></div>
        <div class="stat-label">IT Industry Expertise</div>
      </div>

      <div class="stat-item reveal reveal-delay-1">
        <div class="stat-icon"><i class="fa-solid fa-map-location-dot" style="color:#2563eb;"></i></div>
        <div class="stat-num">Pan‑<span>India</span></div>
        <div class="stat-label">Customer Support Coverage</div>
      </div>

      <div class="stat-item reveal reveal-delay-2">
        <div class="stat-icon"><i class="fa-solid fa-buildings" style="color:#2563eb;"></i></div>
        <div class="stat-num">Enterprise<span> &amp; SMB</span></div>
        <div class="stat-label">Focused Customer Segments</div>
      </div>

      <div class="stat-item reveal reveal-delay-3">
        <div class="stat-icon"><i class="fa-solid fa-globe" style="color:#2563eb;"></i></div>
        <div class="stat-num">Global<span> Vendors</span></div>
        <div class="stat-label">Technology Partner Ecosystem</div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════ SECTION 3: ABOUT PREVIEW ══════════════ -->
<section class="section" aria-label="About preview">
  <div class="container">
    <div class="about-split">

      <!-- Visual left -->
      <div class="about-visual reveal">
        <div class="about-img-wrap">
          <div class="about-metrics">
            <div class="about-metric">
              <div class="about-metric-num"><span>20</span>+</div>
              <div class="about-metric-label">Years Experience</div>
            </div>
            <div class="about-metric">
              <div class="about-metric-num"><span>500</span>+</div>
              <div class="about-metric-label">Clients Served</div>
            </div>
            <div class="about-metric">
              <div class="about-metric-num"><span>50</span>+</div>
              <div class="about-metric-label">Technology Brands</div>
            </div>
            <div class="about-metric">
              <div class="about-metric-num"><span>8</span></div>
              <div class="about-metric-label">Industries Served</div>
            </div>
          </div>
        </div>
        <div class="about-floating-badge">
          <div style="font-size:1.2rem;margin-bottom:0.3rem;">🇮🇳</div>
          Pan-India IT Partner<br>
          <span style="font-size:0.75rem;font-weight:500;opacity:0.8;">Trusted by Enterprises &amp; SMBs</span>
        </div>
      </div>

      <!-- Content right -->
      <div class="about-content reveal reveal-delay-2">
        <div class="section-header left-align">
          <span class="section-label">About AB&amp;D Software</span>
          <h2>Your Trusted Technology Sourcing &amp; Solutions Partner<span class="red-dot">.</span></h2>
          <p>AB&amp;D Software India Pvt Ltd helps organizations simplify technology buying and adoption through genuine software licensing, hardware sourcing, IT consulting, product recommendations, renewals, and support coordination. We work with businesses across India to deliver reliable and cost-effective technology solutions.</p>
        </div>

        <div class="strengths-grid">
          <div class="strength-item"><span>✅</span> Genuine Product Sourcing</div>
          <div class="strength-item"><span>🌐</span> Wide Vendor Ecosystem</div>
          <div class="strength-item"><span>💰</span> Cost-Effective Pricing</div>
          <div class="strength-item"><span>🎧</span> Reliable Support</div>
          <div class="strength-item"><span>🗺️</span> Pan-India Reach</div>
          <div class="strength-item"><span>🏆</span> Domain Experience</div>
        </div>

        <a href="about.php" class="btn btn-primary" style="margin-top:2rem;">
          Know More About Us <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════ SECTION 4: SERVICES PREVIEW ══════════════ -->
<section class="section section-bg-alt section-glow" aria-label="Services preview">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Our Services</span>
      <h2>Services Designed for Modern IT Needs<span class="red-dot">.</span></h2>
      <p>From licensing to cloud, cybersecurity, developer tools and support, we help organizations make better technology decisions.</p>
    </div>

    <div class="cards-grid-3">
      <?php
      $services = [
        ['icon'=>'fa-solid fa-file-certificate','color'=>'icon-blue',   'title'=>'Software Licensing &amp; Procurement', 'desc'=>'Simplify software buying with genuine licensing, competitive pricing and vendor coordination for enterprises, SMBs and government customers.', 'badge'=>'Most Requested'],
        ['icon'=>'fa-solid fa-lightbulb',        'color'=>'icon-indigo', 'title'=>'IT Consulting &amp; Advisory',          'desc'=>'Get expert guidance to identify the right technology products and platforms based on your business requirements and budget.'],
        ['icon'=>'fa-solid fa-shield-halved',    'color'=>'icon-rose',   'title'=>'Cybersecurity Solutions',               'desc'=>'Strengthen your security posture with endpoint protection, application security testing and compliance-focused tools.', 'badge'=>'Security Focused'],
        ['icon'=>'fa-solid fa-cloud',            'color'=>'icon-cyan',   'title'=>'Cloud &amp; Infrastructure Solutions',  'desc'=>'Modernize your IT infrastructure with cloud, virtualization, server, storage, backup and networking solutions.', 'badge'=>'Cloud Ready'],
        ['icon'=>'fa-solid fa-code',             'color'=>'icon-emerald','title'=>'Developer Tools &amp; App Software',    'desc'=>'Equip development teams with trusted IDEs, testing tools, debugging software and team productivity platforms.', 'badge'=>'Developer Stack'],
        ['icon'=>'fa-solid fa-arrows-rotate',    'color'=>'icon-amber',  'title'=>'Managed Support &amp; Renewals',        'desc'=>'Stay on top of renewals, upgrades and license validity through one reliable technology partner across your ecosystem.'],
      ];
      foreach ($services as $i => $s): ?>
      <div class="card reveal <?= $i < 3 ? '' : 'reveal-delay-'.($i-2) ?>">
        <?php if (!empty($s['badge'])): ?>
        <span class="card-badge"><?= $s['badge'] ?></span>
        <?php endif; ?>
        <div class="card-num"><?= str_pad($i+1, 2, '0', STR_PAD_LEFT) ?></div>
        <div class="card-icon <?= $s['color'] ?>">
          <i class="<?= $s['icon'] ?>"></i>
        </div>
        <h3 class="card-title"><?= $s['title'] ?></h3>
        <p class="card-desc"><?= $s['desc'] ?></p>
        <a href="services.php" class="card-link btn-ghost">Learn More <span class="arrow arr">→</span></a>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="section-footer reveal">
      <a href="services.php" class="btn btn-outline-dark">
        View All Services <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════ SECTION 5: SOLUTIONS PREVIEW ══════════════ -->
<section class="section" aria-label="Solutions preview">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Digital Solutions</span>
      <h2>Business-Ready Digital Solutions<span class="red-dot">.</span></h2>
      <p>Practical, scalable and reliable solutions for procurement, automation, security, digital workplace and industry-specific needs.</p>
    </div>

    <div class="cards-grid-3">
      <?php
      $solutions = [
        ['icon'=>'fa-solid fa-cart-shopping',  'color'=>'icon-blue',   'title'=>'Digital Procurement Solution',  'desc'=>'Streamlined approach to source, compare, purchase and renew business software and hardware through a trusted partner.',   'tags'=>['Enterprise','SMB','Government','BFSI'], 'badge'=>'Enterprise Ready'],
        ['icon'=>'fa-solid fa-database',        'color'=>'icon-violet', 'title'=>'Software Asset Management',     'desc'=>'Track software usage, license validity and renewals to reduce waste and improve visibility across your IT investments.',  'tags'=>['IT Teams','Finance','Enterprise'], 'badge'=>'Cost Control'],
        ['icon'=>'fa-solid fa-file-lines',      'color'=>'icon-emerald','title'=>'Document Automation Solution',  'desc'=>'Automate document creation, PDF workflows, file conversion and report generation for business applications.',            'tags'=>['Finance','Legal','Operations']],
        ['icon'=>'fa-solid fa-laptop-code',     'color'=>'icon-cyan',   'title'=>'Developer Productivity Suite',  'desc'=>'Curated stack of IDEs, testing tools, debugging platforms and team productivity tools for faster software delivery.',    'tags'=>['Software Companies','IT Teams']],
        ['icon'=>'fa-solid fa-bug-slash',       'color'=>'icon-rose',   'title'=>'Cybersecurity &amp; Testing',   'desc'=>'Support security teams with application testing, vulnerability assessment and endpoint protection software tools.',      'tags'=>['Security','BFSI','SaaS']],
        ['icon'=>'fa-solid fa-desktop',         'color'=>'icon-amber',  'title'=>'Digital Workplace Solution',    'desc'=>'Enable secure and productive work with collaboration tools, remote access software and endpoint productivity platforms.','tags'=>['Remote Teams','SMB','Corporate']],
      ];
      foreach ($solutions as $i => $s): ?>
      <div class="solution-card reveal <?= $i >= 3 ? 'reveal-delay-'.($i-2) : '' ?>">
        <?php if (!empty($s['badge'])): ?>
        <span class="card-badge"><?= $s['badge'] ?></span>
        <?php endif; ?>
        <div class="card-icon <?= $s['color'] ?>">
          <i class="<?= $s['icon'] ?>"></i>
        </div>
        <h3 class="card-title"><?= $s['title'] ?></h3>
        <p class="card-desc"><?= $s['desc'] ?></p>
        <div class="solution-badge">
          <?php foreach($s['tags'] as $tag): ?>
          <span class="sol-tag"><?= $tag ?></span>
          <?php endforeach; ?>
        </div>
        <a href="solutions.php" class="card-link btn-ghost" style="margin-top:1.2rem;">Learn More <span class="arrow arr">→</span></a>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="section-footer reveal">
      <a href="solutions.php" class="btn btn-outline-dark">
        Explore All Solutions <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════ SECTION 6: INDUSTRIES ══════════════ -->
<section class="section section-bg-alt" aria-label="Industries we serve">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Industries</span>
      <h2>Industries We Serve<span class="red-dot">.</span></h2>
    </div>

    <div class="industry-grid">
      <?php
      $industries = [
        ['icon'=>'🏢','color'=>'icon-blue',   'title'=>'Enterprise Businesses',     'desc'=>'Large-scale IT procurement and solutions for enterprise organizations.'],
        ['icon'=>'🏪','color'=>'icon-indigo', 'title'=>'SMB Companies',             'desc'=>'Affordable, right-sized software and hardware for growing businesses.'],
        ['icon'=>'🏛️','color'=>'icon-violet', 'title'=>'Government Organizations',  'desc'=>'Compliant IT procurement and software licensing for public sector.'],
        ['icon'=>'🏦','color'=>'icon-emerald','title'=>'BFSI',                       'desc'=>'Secure, compliant IT tools for banks, NBFCs and financial services.'],
        ['icon'=>'🎓','color'=>'icon-amber',  'title'=>'Education &amp; Training',   'desc'=>'Digital learning tools and software for schools, colleges and trainers.'],
        ['icon'=>'💻','color'=>'icon-cyan',   'title'=>'IT &amp; Software Companies','desc'=>'Developer tools, testing platforms and team productivity software.'],
        ['icon'=>'🏥','color'=>'icon-rose',   'title'=>'Healthcare',                 'desc'=>'Reliable IT solutions and software procurement for healthcare providers.'],
        ['icon'=>'🏭','color'=>'icon-teal',   'title'=>'Manufacturing &amp; Logistics','desc'=>'Scalable IT infrastructure and software for industrial operations.'],
      ];
      foreach ($industries as $i => $ind): ?>
      <div class="industry-card reveal <?= $i >= 4 ? 'reveal-delay-'.($i-3) : '' ?>">
        <div class="ind-icon <?= $ind['color'] ?>"><?= $ind['icon'] ?></div>
        <div class="ind-title"><?= $ind['title'] ?></div>
        <p class="ind-desc"><?= $ind['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════ SECTION 7: PROCESS ══════════════ -->
<section class="section" aria-label="Our process">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Our Process</span>
      <h2>How AB&amp;D Helps You Choose the Right Technology<span class="red-dot">.</span></h2>
    </div>

    <div class="process-track reveal">
      <?php
      $steps = [
        ['num'=>'01','title'=>'Discover',   'desc'=>'We understand your business, technical requirements, users, and budget.','icon'=>'🔍'],
        ['num'=>'02','title'=>'Recommend',  'desc'=>'We shortlist suitable software, hardware, and solution options.','icon'=>'💡'],
        ['num'=>'03','title'=>'Procure',    'desc'=>'We help with pricing, licensing, sourcing, and vendor coordination.','icon'=>'🛒'],
        ['num'=>'04','title'=>'Implement',  'desc'=>'We support setup, deployment guidance, and adoption planning.','icon'=>'🚀'],
        ['num'=>'05','title'=>'Support',    'desc'=>'We assist with renewals, support coordination, and lifecycle management.','icon'=>'🎧'],
      ];
      foreach ($steps as $step): ?>
      <div class="process-step">
        <div class="process-node"><?= $step['num'] ?></div>
        <div class="process-title"><?= $step['icon'] ?> <?= $step['title'] ?></div>
        <p class="process-desc"><?= $step['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════ SECTION 8: PARTNERS PREVIEW ══════════════ -->
<section class="section section-bg-alt" aria-label="Technology partners">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Partners &amp; Vendors</span>
      <h2>Connecting Businesses with Trusted Technology Brands<span class="red-dot">.</span></h2>
      <p>AB&amp;D works with a wide ecosystem of technology vendors to help customers access reliable software, hardware and digital tools.</p>
    </div>

    <div class="partner-grid reveal">
      <?php
      $partners = ['Microsoft','Adobe','Autodesk','JetBrains','KeyShot','Source Insight','Symantec','VMware','Citrix','Oracle','Atlassian','IDERA','Bitdefender','Veeam','ManageEngine','Kaspersky','Kofax','Foxit','Progress','Devart'];
      foreach($partners as $p): ?>
      <div class="partner-logo"><span><?= $p ?></span></div>
      <?php endforeach; ?>
    </div>

    <div class="section-footer reveal">
      <a href="partners.php" class="btn btn-outline-dark">
        View All Partners <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════ SECTION 9: FINAL CTA ══════════════ -->
<section class="cta-section" aria-label="Call to action">
  <div class="container">
    <div class="reveal">
      <span class="section-label" style="background:rgba(37,99,235,0.15);border-color:rgba(37,99,235,0.3);color:#60a5fa;">Get Started Today</span>
      <h2>Need help choosing the right software or IT solution?<span class="red-dot">.</span></h2>
      <p>Talk to AB&amp;D Software India Pvt Ltd and get expert guidance for your business technology needs.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-primary">
          <i class="fa-solid fa-phone"></i> Contact Sales
        </a>
        <a href="contact.php" class="btn btn-outline">
          <i class="fa-solid fa-paper-plane"></i> Send Enquiry
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
