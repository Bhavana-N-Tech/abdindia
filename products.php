<?php
$page_title = 'Software & Hardware Products | AB&D Software India Pvt Ltd';
$page_desc  = 'Browse software, developer tools, security, cloud, document automation and hardware products available through AB&D Software India.';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Products hero">
  <div class="page-hero-grid"></div>
  <div class="container">
    <span class="page-hero-label"><i class="fa-solid fa-box"></i> &nbsp;Products &amp; Vendors</span>
    <h1>Software &amp; Hardware Products<span class="red-dot">.</span></h1>
    <p>Access a wide range of genuine software, developer tools, security solutions and IT hardware from trusted global and specialized technology vendors.</p>
  </div>
</section>

<!-- ══════════════ PRODUCTS SECTION ══════════════ -->
<section class="section section-bg-alt" aria-label="Products listing">
  <div class="container">

    <!-- Search -->
    <div class="search-bar-wrap reveal">
      <input type="text" id="productSearch" class="search-bar" placeholder="🔍  Search software, tools or vendors…" autocomplete="off">
    </div>

    <!-- Category Filter Chips -->
    <div class="filter-chips reveal">
      <button class="filter-chip active" data-filter="all">All Products</button>
      <button class="filter-chip" data-filter="developer">Developer Tools</button>
      <button class="filter-chip" data-filter="security">Security Tools</button>
      <button class="filter-chip" data-filter="document">Document Automation</button>
      <button class="filter-chip" data-filter="remote">Remote Access</button>
      <button class="filter-chip" data-filter="database">Database Tools</button>
      <button class="filter-chip" data-filter="design">Design &amp; Media</button>
      <button class="filter-chip" data-filter="productivity">Productivity</button>
      <button class="filter-chip" data-filter="infrastructure">Infrastructure</button>
      <button class="filter-chip" data-filter="hardware">Hardware</button>
    </div>

    <!-- Featured Products Showcase -->
    <div class="featured-products-showcase reveal" style="margin-top: 2.5rem; margin-bottom: 3.5rem;">
      <h2 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 1.5rem; text-align: left; border-bottom: 2px solid var(--clr-border); padding-bottom: 0.8rem;">Featured Software Solutions</h2>
      
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
        
        <!-- KeyShot -->
        <div class="card" style="border-top: 4px solid var(--clr-rose); background: var(--clr-white); display: flex; flex-direction: column;">
          <span class="card-badge" style="background: var(--clr-rose);">3D Visualization</span>
          <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.2rem;">
            <div class="card-icon icon-rose" style="margin: 0; width: 48px; height: 48px; border-radius: 12px; font-size: 1.2rem;"><i class="fa-solid fa-cube"></i></div>
            <div>
              <h3 style="font-size: 1.25rem; margin: 0; color: var(--clr-dark);">KeyShot Studio AI</h3>
              <span style="font-size: 0.78rem; font-weight: 600; color: var(--clr-muted);">by Luxion</span>
            </div>
          </div>
          <p class="card-desc" style="font-size: 0.92rem; margin-bottom: 1.2rem;">Industry-leading real-time 3D rendering and animation software. Sourced directly for engineers, product designers, and artists across India.</p>
          <ul class="card-features" style="margin-bottom: 1.5rem; flex: 1;">
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Local Generative AI features (Restyle, Background, Imagine, and Replace modes) that run locally to keep CAD data private</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Real-time ray tracing engine (CPU/GPU-based) showing instant lighting, material, and perspective viewport changes</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">LiveLinking CAD integrations to sync updates without losing material settings</li>
          </ul>
          <a href="contact.php?interest=Developer%20Tools&message=I%20am%20interested%20in%20KeyShot%20Studio%20AI%20licensing." class="btn btn-primary btn-sm" style="justify-content: center;">Enquire for KeyShot <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Source Insight -->
        <div class="card" style="border-top: 4px solid var(--clr-blue); background: var(--clr-white); display: flex; flex-direction: column;">
          <span class="card-badge" style="background: var(--clr-blue);">Code Analysis</span>
          <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.2rem;">
            <div class="card-icon icon-blue" style="margin: 0; width: 48px; height: 48px; border-radius: 12px; font-size: 1.2rem;"><i class="fa-solid fa-code"></i></div>
            <div>
              <h3 style="font-size: 1.25rem; margin: 0; color: var(--clr-dark);">Source Insight</h3>
              <span style="font-size: 0.78rem; font-weight: 600; color: var(--clr-muted);">by Source Dynamics</span>
            </div>
          </div>
          <p class="card-desc" style="font-size: 0.92rem; margin-bottom: 1.2rem;">Project-oriented programming editor, code browser, and analyzer specifically designed for large, complex codebases.</p>
          <ul class="card-features" style="margin-bottom: 1.5rem; flex: 1;">
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Real-time dynamic symbol database that parses code and maps functions/classes without compilation</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Relationship graphing to automatically generate call trees and class inheritance diagrams</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Context-sensitive syntax formatting, symbolic auto-completion, and project-wide Smart Rename refactoring</li>
          </ul>
          <a href="contact.php?interest=Developer%20Tools&message=I%20am%20interested%20in%20Source%20Insight%20programming%20editor." class="btn btn-primary btn-sm" style="justify-content: center;">Enquire for Source Insight <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Beyond Compare -->
        <div class="card" style="border-top: 4px solid var(--clr-emerald); background: var(--clr-white); display: flex; flex-direction: column;">
          <span class="card-badge" style="background: var(--clr-emerald);">Data Comparison</span>
          <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.2rem;">
            <div class="card-icon icon-emerald" style="margin: 0; width: 48px; height: 48px; border-radius: 12px; font-size: 1.2rem;"><i class="fa-solid fa-arrows-left-right"></i></div>
            <div>
              <h3 style="font-size: 1.25rem; margin: 0; color: var(--clr-dark);">Beyond Compare</h3>
              <span style="font-size: 0.78rem; font-weight: 600; color: var(--clr-muted);">by Scooter Software</span>
            </div>
          </div>
          <p class="card-desc" style="font-size: 0.92rem; margin-bottom: 1.2rem;">Robust cross-platform utility for comparing, merging, and synchronizing files, folders, and directories.</p>
          <ul class="card-features" style="margin-bottom: 1.5rem; flex: 1;">
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Side-by-side folder comparison, sync utilities, and advanced 3-Way Merge (Pro edition)</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Dedicated file viewers for text (syntax highlighted), CSV/Excel tables, images, and binary comparison</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Seamless Git integration as an external diff and merge engine; compatible with Windows, macOS, and Linux</li>
          </ul>
          <a href="contact.php?interest=Developer%20Tools&message=I%20am%20interested%20in%20Beyond%20Compare%20licensing." class="btn btn-primary btn-sm" style="justify-content: center;">Enquire for Beyond Compare <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- PDF-XChange Editor -->
        <div class="card" style="border-top: 4px solid var(--clr-indigo); background: var(--clr-white); display: flex; flex-direction: column;">
          <span class="card-badge" style="background: var(--clr-indigo);">PDF Sourcing</span>
          <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.2rem;">
            <div class="card-icon icon-indigo" style="margin: 0; width: 48px; height: 48px; border-radius: 12px; font-size: 1.2rem;"><i class="fa-solid fa-file-pdf"></i></div>
            <div>
              <h3 style="font-size: 1.25rem; margin: 0; color: var(--clr-dark);">PDF-XChange Editor</h3>
              <span style="font-size: 0.78rem; font-weight: 600; color: var(--clr-muted);">by Tracker Software</span>
            </div>
          </div>
          <p class="card-desc" style="font-size: 0.92rem; margin-bottom: 1.2rem;">Lightweight, fast, and feature-rich PDF editor, creator, and OCR manager designed specifically for Windows environments.</p>
          <ul class="card-features" style="margin-bottom: 1.5rem; flex: 1;">
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Built-in OCR (Optical Character Recognition) to convert scanned pages into fully searchable and editable text</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Comprehensive PDF editing, annotations, digital signatures, side-by-side comparison, and form creation (Plus version)</li>
            <li style="font-size: 0.88rem; padding: 0.2rem 0; color: var(--clr-muted);">Cost-effective licensing models (perpetual licenses) that drastically reduce enterprise software overhead</li>
          </ul>
          <a href="contact.php?interest=Document%20Automation&message=I%20am%20interested%20in%20PDF-XChange%20Editor." class="btn btn-primary btn-sm" style="justify-content: center;">Enquire for PDF-XChange <i class="fa-solid fa-arrow-right"></i></a>
        </div>

      </div>
    </div>

    <!-- Info Note -->
    <div class="info-note reveal">
      <i class="fa-solid fa-circle-info"></i> &nbsp;Looking for a specific product or software license? <a href="contact.php" style="color:var(--clr-blue);text-decoration:underline;">Contact AB&amp;D</a> for availability and pricing.
    </div>

    <!-- Products Grid -->
    <div class="product-grid" id="filterContainer">
      <?php
      $products = [
        // Developer Tools
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=jetbrains.com',         'name'=>'JetBrains IDEs',       'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=microsoft.com',         'name'=>'Visual Studio',         'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=sublimetext.com',       'name'=>'Sublime Text',          'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=smartbear.com',         'name'=>'SmartBear Tools',       'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=postman.com',           'name'=>'Postman API',           'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=dynatrace.com',         'name'=>'Dynatrace',             'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=idera.com',             'name'=>'IDERA DevOps',          'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=sourcedynamics.com',    'name'=>'Source Insight',        'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=scootersoftware.com',    'name'=>'Beyond Compare',        'cat'=>'Developer Tools','catkey'=>'developer'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=embarcadero.com',       'name'=>'Embarcadero RAD',       'cat'=>'Developer Tools','catkey'=>'developer'],
        // Security
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=bitdefender.com',       'name'=>'Bitdefender',           'cat'=>'Security Tools','catkey'=>'security'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=kaspersky.com',         'name'=>'Kaspersky Business',    'cat'=>'Security Tools','catkey'=>'security'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=symantec.com',          'name'=>'Symantec Endpoint',     'cat'=>'Security Tools','catkey'=>'security'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=veracode.com',          'name'=>'Veracode AppSec',       'cat'=>'Security Tools','catkey'=>'security'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=manageengine.com',      'name'=>'ManageEngine Security', 'cat'=>'Security Tools','catkey'=>'security'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=eset.com',              'name'=>'ESET Endpoint',         'cat'=>'Security Tools','catkey'=>'security'],
        // Document Automation
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=kofax.com',             'name'=>'Kofax Automation',      'cat'=>'Document Automation','catkey'=>'document'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=foxit.com',             'name'=>'Foxit PDF',             'cat'=>'Document Automation','catkey'=>'document'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=adobe.com',             'name'=>'Adobe Acrobat',         'cat'=>'Document Automation','catkey'=>'document'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=imanage.com',           'name'=>'iManage Docs',          'cat'=>'Document Automation','catkey'=>'document'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=abbyy.com',             'name'=>'ABBYY FlexiCapture',    'cat'=>'Document Automation','catkey'=>'document'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=tracker-software.com',  'name'=>'PDF-XChange Editor',    'cat'=>'Document Automation','catkey'=>'document'],
        // Remote Access
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=citrix.com',            'name'=>'Citrix Virtual Apps',   'cat'=>'Remote Access','catkey'=>'remote'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=teamviewer.com',        'name'=>'TeamViewer Tensor',     'cat'=>'Remote Access','catkey'=>'remote'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=anydesk.com',           'name'=>'AnyDesk Business',      'cat'=>'Remote Access','catkey'=>'remote'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=splashtop.com',         'name'=>'Splashtop Enterprise',  'cat'=>'Remote Access','catkey'=>'remote'],
        // Database Tools
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=navicat.com',           'name'=>'Navicat Premium',       'cat'=>'Database Tools','catkey'=>'database'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=microsoft.com',         'name'=>'SQL Server Tools',      'cat'=>'Database Tools','catkey'=>'database'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=oracle.com',            'name'=>'Oracle DB Tools',       'cat'=>'Database Tools','catkey'=>'database'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=postgresql.org',        'name'=>'PostgreSQL Tools',      'cat'=>'Database Tools','catkey'=>'database'],
        // Design & Media
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=adobe.com',             'name'=>'Adobe Creative Cloud',  'cat'=>'Design & Media','catkey'=>'design'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=coreldraw.com',         'name'=>'CorelDRAW Graphics',    'cat'=>'Design & Media','catkey'=>'design'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=affinity.serif.com',    'name'=>'Affinity Suite',        'cat'=>'Design & Media','catkey'=>'design'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=keyshot.com',           'name'=>'KeyShot Studio AI',     'cat'=>'Design & Media','catkey'=>'design'],
        // Productivity
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=microsoft.com',         'name'=>'Microsoft 365',         'cat'=>'Productivity','catkey'=>'productivity'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=slack.com',             'name'=>'Slack Business',        'cat'=>'Productivity','catkey'=>'productivity'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=atlassian.com',         'name'=>'Atlassian Suite',       'cat'=>'Productivity','catkey'=>'productivity'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=zoho.com',              'name'=>'Zoho Workplace',        'cat'=>'Productivity','catkey'=>'productivity'],
        // Infrastructure
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=vmware.com',            'name'=>'VMware vSphere',        'cat'=>'Infrastructure','catkey'=>'infrastructure'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=veeam.com',             'name'=>'Veeam Backup',          'cat'=>'Infrastructure','catkey'=>'infrastructure'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=acronis.com',           'name'=>'Acronis Backup',        'cat'=>'Infrastructure','catkey'=>'infrastructure'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=nakivo.com',            'name'=>'NAKIVO Backup',         'cat'=>'Infrastructure','catkey'=>'infrastructure'],
        // Hardware
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=hp.com',                'name'=>'HP Printers',           'cat'=>'Hardware','catkey'=>'hardware'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=lenovo.com',            'name'=>'Lenovo Workstations',   'cat'=>'Hardware','catkey'=>'hardware'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=dell.com',              'name'=>'Dell Business PCs',     'cat'=>'Hardware','catkey'=>'hardware'],
        ['logo'=>'https://www.google.com/s2/favicons?sz=128&domain=apc.com',               'name'=>'UPS & Power Systems',   'cat'=>'Hardware','catkey'=>'hardware'],
      ];
      foreach ($products as $i => $p): ?>
      <div class="product-card reveal <?= $i >= 8 ? 'reveal-delay-'.min(($i % 4)+1, 5) : '' ?>"
           data-category="<?= $p['catkey'] ?>">
        <div class="product-logo-wrap">
          <img src="<?= $p['logo'] ?>" alt="<?= $p['name'] ?>" width="40" height="40"
               style="object-fit:contain;"
               onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-block';"/>
          <span class="product-fallback-icon" style="display:none; font-size:1.4rem; font-weight:800; color:var(--clr-blue);"><?= substr($p['name'], 0, 1) ?></span>
        </div>
        <div class="product-name"><?= $p['name'] ?></div>
        <div class="product-cat"><?= $p['cat'] ?></div>
        <button class="product-enquire" onclick="window.location='contact.php?interest=<?= urlencode($p['cat']) ?>&message=I%20am%20interested%20in%20<?= urlencode($p['name']) ?>.'">Enquire Now</button>
      </div>
      <?php endforeach; ?>
    </div><!-- /filterContainer -->

  </div>
</section>

<!-- ══════════════ PRODUCT CATEGORIES ══════════════ -->
<section class="section" aria-label="Product categories">
  <div class="container">
    <div class="section-header left-align reveal">
      <span class="section-label">Browse by Category</span>
      <h2>Product Categories We Support<span class="red-dot">.</span></h2>
    </div>

    <div class="cards-grid-3">
      <?php
      $cats = [
        ['icon'=>'fa-solid fa-code','color'=>'icon-emerald','title'=>'Developer Tools',       'desc'=>'IDEs, testing platforms, debugging, profiling and API tools for modern development teams.'],
        ['icon'=>'fa-solid fa-shield-halved','color'=>'icon-rose',   'title'=>'Security Tools',        'desc'=>'Endpoint protection, SAST/DAST, vulnerability scanners and compliance security software.'],
        ['icon'=>'fa-solid fa-file-lines','color'=>'icon-blue',    'title'=>'Document Automation',   'desc'=>'PDF processing, file conversion, document generation and data extraction software.'],
        ['icon'=>'fa-solid fa-globe','color'=>'icon-cyan',    'title'=>'Remote Access',         'desc'=>'Secure remote desktop, VDI, and virtual workspace access solutions.'],
        ['icon'=>'fa-solid fa-database','color'=>'icon-violet', 'title'=>'Database Tools',        'desc'=>'Database design, querying, administration and profiling tools for SQL and NoSQL.'],
        ['icon'=>'fa-solid fa-palette','color'=>'icon-indigo',  'title'=>'Design &amp; Media',    'desc'=>'Creative software for design, illustration, video editing and digital publishing.'],
        ['icon'=>'fa-solid fa-envelope','color'=>'icon-amber',   'title'=>'Productivity Tools',    'desc'=>'Office suites, collaboration platforms, email and team productivity applications.'],
        ['icon'=>'fa-solid fa-server','color'=>'icon-teal',   'title'=>'Infrastructure Software','desc'=>'Virtualization, backup, disaster recovery and server management platforms.'],
        ['icon'=>'fa-solid fa-plug','color'=>'icon-sky',     'title'=>'Hardware &amp; Accessories','desc'=>'Workstations, printers, networking equipment and enterprise accessories.'],
      ];
      foreach ($cats as $i => $c): ?>
      <div class="card reveal <?= $i >= 3 ? 'reveal-delay-'.min($i-2,5) : '' ?>">
        <div class="card-icon <?= $c['color'] ?>"><i class="<?= $c['icon'] ?>"></i></div>
        <h3 class="card-title"><?= $c['title'] ?></h3>
        <p class="card-desc"><?= $c['desc'] ?></p>
        <a href="contact.php" class="card-link btn-ghost">Enquire <span class="arr">→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-label="Products CTA">
  <div class="container">
    <div class="reveal">
      <span class="section-label" style="background:rgba(26,86,219,0.12);border-color:rgba(26,86,219,0.25);color:#93c5fd;">Request a Quote</span>
      <h2>Can't find a specific product or software?<span class="red-dot">.</span></h2>
      <p>Contact our procurement team — we source from a wide vendor ecosystem and can help with custom software licensing requirements.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-primary"><i class="fa-solid fa-envelope"></i> Request a Quote</a>
        <a href="partners.php" class="btn btn-outline"><i class="fa-solid fa-handshake"></i> View Partners</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
