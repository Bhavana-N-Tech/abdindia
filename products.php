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

    <!-- Info Note -->
    <div class="info-note reveal">
      <i class="fa-solid fa-circle-info"></i> &nbsp;Looking for a specific product or software license? <a href="contact.php" style="color:var(--clr-blue);text-decoration:underline;">Contact AB&amp;D</a> for availability and pricing.
    </div>

    <!-- Products Grid -->
    <div class="product-grid" id="filterContainer">
      <?php
      $products = [
        // Developer Tools
        ['emoji'=>'⚙️','name'=>'JetBrains IDEs',        'cat'=>'Developer Tools','catkey'=>'developer'],
        ['emoji'=>'🔵','name'=>'Visual Studio',          'cat'=>'Developer Tools','catkey'=>'developer'],
        ['emoji'=>'📝','name'=>'Sublime Text',           'cat'=>'Developer Tools','catkey'=>'developer'],
        ['emoji'=>'🔧','name'=>'SmartBear Tools',        'cat'=>'Developer Tools','catkey'=>'developer'],
        ['emoji'=>'🧪','name'=>'Telerik Testing',        'cat'=>'Developer Tools','catkey'=>'developer'],
        ['emoji'=>'🔍','name'=>'Dynatrace',              'cat'=>'Developer Tools','catkey'=>'developer'],
        ['emoji'=>'📊','name'=>'IDERA DevOps',           'cat'=>'Developer Tools','catkey'=>'developer'],
        ['emoji'=>'⚡','name'=>'Postman API',             'cat'=>'Developer Tools','catkey'=>'developer'],
        // Security
        ['emoji'=>'🛡️','name'=>'Bitdefender',           'cat'=>'Security Tools', 'catkey'=>'security'],
        ['emoji'=>'🔐','name'=>'Kaspersky Business',     'cat'=>'Security Tools', 'catkey'=>'security'],
        ['emoji'=>'🔒','name'=>'Symantec Endpoint',      'cat'=>'Security Tools', 'catkey'=>'security'],
        ['emoji'=>'🕵️','name'=>'Veracode AppSec',        'cat'=>'Security Tools', 'catkey'=>'security'],
        ['emoji'=>'🧱','name'=>'ManageEngine Security',  'cat'=>'Security Tools', 'catkey'=>'security'],
        ['emoji'=>'🛡️','name'=>'ESET Endpoint',         'cat'=>'Security Tools', 'catkey'=>'security'],
        // Document Automation
        ['emoji'=>'📄','name'=>'Kofax Automation',       'cat'=>'Document Automation','catkey'=>'document'],
        ['emoji'=>'📑','name'=>'Foxit PDF',              'cat'=>'Document Automation','catkey'=>'document'],
        ['emoji'=>'📋','name'=>'Adobe Acrobat',          'cat'=>'Document Automation','catkey'=>'document'],
        ['emoji'=>'🗂️','name'=>'iManage Docs',          'cat'=>'Document Automation','catkey'=>'document'],
        ['emoji'=>'🖨️','name'=>'PDF Creator Plus',      'cat'=>'Document Automation','catkey'=>'document'],
        // Remote Access
        ['emoji'=>'🖥️','name'=>'Citrix Virtual Apps',  'cat'=>'Remote Access',  'catkey'=>'remote'],
        ['emoji'=>'🌐','name'=>'TeamViewer Tensor',      'cat'=>'Remote Access',  'catkey'=>'remote'],
        ['emoji'=>'🔗','name'=>'AnyDesk Business',       'cat'=>'Remote Access',  'catkey'=>'remote'],
        ['emoji'=>'🛡️','name'=>'Splashtop Enterprise', 'cat'=>'Remote Access',  'catkey'=>'remote'],
        // Database Tools
        ['emoji'=>'🗄️','name'=>'Devart DB Tools',       'cat'=>'Database Tools', 'catkey'=>'database'],
        ['emoji'=>'🔵','name'=>'SQL Server Tools',       'cat'=>'Database Tools', 'catkey'=>'database'],
        ['emoji'=>'🟠','name'=>'Oracle DB Tools',        'cat'=>'Database Tools', 'catkey'=>'database'],
        ['emoji'=>'📊','name'=>'Navicat Premium',        'cat'=>'Database Tools', 'catkey'=>'database'],
        // Design & Media
        ['emoji'=>'🎨','name'=>'Adobe Creative Cloud',  'cat'=>'Design & Media', 'catkey'=>'design'],
        ['emoji'=>'✏️','name'=>'CorelDRAW Graphics',    'cat'=>'Design & Media', 'catkey'=>'design'],
        ['emoji'=>'🖼️','name'=>'Affinity Suite',        'cat'=>'Design & Media', 'catkey'=>'design'],
        // Productivity
        ['emoji'=>'📧','name'=>'Microsoft 365',          'cat'=>'Productivity',   'catkey'=>'productivity'],
        ['emoji'=>'📱','name'=>'Slack Business',         'cat'=>'Productivity',   'catkey'=>'productivity'],
        ['emoji'=>'📋','name'=>'Atlassian Suite',        'cat'=>'Productivity',   'catkey'=>'productivity'],
        ['emoji'=>'✅','name'=>'Zoho Workplace',         'cat'=>'Productivity',   'catkey'=>'productivity'],
        // Infrastructure
        ['emoji'=>'🖥️','name'=>'VMware vSphere',        'cat'=>'Infrastructure', 'catkey'=>'infrastructure'],
        ['emoji'=>'💾','name'=>'Veeam Backup',           'cat'=>'Infrastructure', 'catkey'=>'infrastructure'],
        ['emoji'=>'🔄','name'=>'Acronis Backup',         'cat'=>'Infrastructure', 'catkey'=>'infrastructure'],
        ['emoji'=>'⚡','name'=>'NAKIVO Backup',          'cat'=>'Infrastructure', 'catkey'=>'infrastructure'],
        // Hardware
        ['emoji'=>'🖨️','name'=>'HP Printers',          'cat'=>'Hardware',       'catkey'=>'hardware'],
        ['emoji'=>'💻','name'=>'Lenovo Workstations',    'cat'=>'Hardware',       'catkey'=>'hardware'],
        ['emoji'=>'🖥️','name'=>'Dell Business PCs',     'cat'=>'Hardware',       'catkey'=>'hardware'],
        ['emoji'=>'🔌','name'=>'UPS & Power Systems',    'cat'=>'Hardware',       'catkey'=>'hardware'],
      ];
      foreach ($products as $i => $p): ?>
      <div class="product-card reveal <?= $i >= 8 ? 'reveal-delay-'.min(($i % 4)+1, 5) : '' ?>"
           data-category="<?= $p['catkey'] ?>">
        <div class="product-logo-wrap"><?= $p['emoji'] ?></div>
        <div class="product-name"><?= $p['name'] ?></div>
        <div class="product-cat"><?= $p['cat'] ?></div>
        <button class="product-enquire" onclick="window.location='contact.php'">Enquire Now</button>
      </div>
      <?php endforeach; ?>
    </div><!-- /filterContainer -->

  </div>
</section>

<!-- ══════════════ PRODUCT CATEGORIES ══════════════ -->
<section class="section" aria-label="Product categories">
  <div class="container">
    <div class="section-header reveal">
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
      <span class="section-label" style="background:rgba(37,99,235,0.15);border-color:rgba(37,99,235,0.3);color:#60a5fa;">Request a Quote</span>
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
