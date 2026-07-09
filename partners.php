<?php
$page_title = 'Technology Partners | AB&D Software India Pvt Ltd';
$page_desc  = 'AB&D Software partners with global software, developer tool, cybersecurity, document automation, remote access and hardware vendors.';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Partners hero">
  <div class="page-hero-grid"></div>
  <div class="container">
    <span class="page-hero-label"><i class="fa-solid fa-handshake"></i> &nbsp;Our Partners</span>
    <h1>A Wide Technology Partner Ecosystem<span class="red-dot">.</span></h1>
    <p>AB&amp;D helps customers access trusted software, hardware and digital technology products from global and specialized vendors across every IT domain.</p>
  </div>
</section>

<!-- ══════════════ PRIMARY PARTNERS (KEYSHOT & SOURCE INSIGHT) ══════════════ -->
<section class="section" id="primary-partners" aria-label="Primary Partners">
  <div class="container">
    
    <div class="section-header left-align reveal">
      <span class="section-label">Strategic Alliances</span>
      <h2>Primary Partner Brands<span class="red-dot">.</span></h2>
      <p>AB&amp;D is a value-added reseller for world-class developer tools and design visualization platforms, serving clients and resellers across India.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; margin-bottom: 2rem;">
      
      <!-- KeyShot Strategic Card -->
      <div class="card reveal" style="border-top: 4px solid var(--clr-rose); background: var(--clr-white); display: flex; flex-direction: column;">
        <span class="card-badge" style="background: var(--clr-rose);">Authorized Reseller</span>
        <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.2rem;">
          <div class="card-icon icon-rose" style="margin: 0; width: 56px; height: 56px; border-radius: 14px; font-size: 1.4rem;"><i class="fa-solid fa-cube"></i></div>
          <div>
            <h3 style="font-size: 1.4rem; margin: 0; color: var(--clr-dark);">KeyShot Studio AI</h3>
            <span style="font-size: 0.8rem; font-weight: 600; color: var(--clr-muted);">Luxion Inc.</span>
          </div>
        </div>
        <p class="card-desc" style="font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.2rem;">
          AB&amp;D Software remains a trusted value-added reseller for KeyShot Studio in India. We supply genuine corporate, educational, and commercial licenses, offering pre-sales consulting and post-purchase deployment support.
        </p>
        <div style="display: flex; gap: 1rem; margin-top: auto; padding-top: 1.2rem;">
          <a href="products.php" class="btn btn-outline-dark btn-sm" style="flex: 1; justify-content: center;">View Product Specs</a>
          <a href="contact.php?interest=Developer%20Tools&message=We%20need%20a%20price%20quote%20for%20KeyShot%20Studio%20AI%20licensing." class="btn btn-primary btn-sm" style="flex: 1; justify-content: center; box-shadow: none;">Request a Quote</a>
        </div>
      </div>

      <!-- Source Insight Strategic Card -->
      <div class="card reveal reveal-delay-1" style="border-top: 4px solid var(--clr-blue); background: var(--clr-white); display: flex; flex-direction: column;">
        <span class="card-badge" style="background: var(--clr-blue);">Authorized Reseller</span>
        <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.2rem;">
          <div class="card-icon icon-blue" style="margin: 0; width: 56px; height: 56px; border-radius: 14px; font-size: 1.4rem;"><i class="fa-solid fa-code"></i></div>
          <div>
            <h3 style="font-size: 1.4rem; margin: 0; color: var(--clr-dark);">Source Insight</h3>
            <span style="font-size: 0.8rem; font-weight: 600; color: var(--clr-muted);">Source Dynamics Inc.</span>
          </div>
        </div>
        <p class="card-desc" style="font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.2rem;">
          We are the primary sourcing partner for Source Insight in India. Our dedicated licensing desk ensures rapid deployment, volume licensing optimization, and seamless renewals for enterprise developer teams.
        </p>
        <div style="display: flex; gap: 1rem; margin-top: auto; padding-top: 1.2rem;">
          <a href="products.php" class="btn btn-outline-dark btn-sm" style="flex: 1; justify-content: center;">View Product Specs</a>
          <a href="contact.php?interest=Developer%20Tools&message=We%20need%20a%20price%20quote%20for%20Source%20Insight%20programming%20editor%20licenses." class="btn btn-primary btn-sm" style="flex: 1; justify-content: center; box-shadow: none;">Request a Quote</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════ PARTNER CATEGORIES ══════════════ -->
<section class="section section-bg-alt" aria-label="All partners">
  <div class="container">

    <div class="section-header left-align reveal">
      <span class="section-label">Partner Network</span>
      <h2>Global &amp; Specialized Technology Vendors<span class="red-dot">.</span></h2>
      <p>Our partner ecosystem covers every layer of modern IT — from application software and developer tools to security, cloud and infrastructure.</p>
    </div>

    <?php
    $categories = [
      [
        'title' => 'Software Vendors',
        'icon'  => 'fa-solid fa-box-open',
        'color' => 'icon-blue',
        'partners' => [
          ['name'=>'Microsoft',  'logo'=>'https://cdn.simpleicons.org/microsoft/0078D4'],
          ['name'=>'Adobe',      'logo'=>'https://cdn.simpleicons.org/adobe/FF0000'],
          ['name'=>'Oracle',     'logo'=>'https://cdn.simpleicons.org/oracle/F80000'],
          ['name'=>'SAP',        'logo'=>'https://cdn.simpleicons.org/sap/0FAAFF'],
          ['name'=>'Autodesk',   'logo'=>'https://cdn.simpleicons.org/autodesk/000000'],
          ['name'=>'VMware',     'logo'=>'https://cdn.simpleicons.org/vmware/607078'],
          ['name'=>'Citrix',     'logo'=>'https://cdn.simpleicons.org/citrix/1383C4'],
          ['name'=>'Zoho',       'logo'=>'https://cdn.simpleicons.org/zoho/C8202B'],
          ['name'=>'Progress',   'logo'=>'https://cdn.simpleicons.org/progress/5CE500'],
          ['name'=>'Atlassian',  'logo'=>'https://cdn.simpleicons.org/atlassian/0052CC'],
        ],
      ],
      [
        'title' => 'Developer Tool Vendors',
        'icon'  => 'fa-solid fa-code',
        'color' => 'icon-emerald',
        'partners' => [
          ['name'=>'JetBrains',   'logo'=>'https://cdn.simpleicons.org/jetbrains/000000'],
          ['name'=>'Postman',     'logo'=>'https://cdn.simpleicons.org/postman/FF6C37'],
          ['name'=>'GitLab',      'logo'=>'https://cdn.simpleicons.org/gitlab/FC6D26'],
          ['name'=>'GitHub',      'logo'=>'https://cdn.simpleicons.org/github/181717'],
          ['name'=>'Gradle',      'logo'=>'https://cdn.simpleicons.org/gradle/02303A'],
          ['name'=>'SmartBear',   'logo'=>'https://cdn.simpleicons.org/swagger/85EA2D'],
          ['name'=>'Embarcadero', 'logo'=>'https://cdn.simpleicons.org/delphi/E62431'],
          ['name'=>'Navicat',     'logo'=>'https://cdn.simpleicons.org/mysql/4479A1'],
          ['name'=>'IDERA',       'logo'=>'https://cdn.simpleicons.org/postgresql/4169E1'],
          ['name'=>'Perforce',    'logo'=>'https://cdn.simpleicons.org/perforce/404040'],
        ],
      ],
      [
        'title' => 'Cybersecurity Vendors',
        'icon'  => 'fa-solid fa-shield-halved',
        'color' => 'icon-rose',
        'partners' => [
          ['name'=>'Bitdefender',  'logo'=>'https://cdn.simpleicons.org/bitdefender/ED1C24'],
          ['name'=>'Kaspersky',    'logo'=>'https://cdn.simpleicons.org/kaspersky/006D5C'],
          ['name'=>'ESET',         'logo'=>'https://cdn.simpleicons.org/eset/1F4E97'],
          ['name'=>'Sophos',       'logo'=>'https://cdn.simpleicons.org/sophos/0085CF'],
          ['name'=>'Veracode',     'logo'=>'https://cdn.simpleicons.org/veracode/009BDE'],
          ['name'=>'Qualys',       'logo'=>'https://cdn.simpleicons.org/qualys/ED2E26'],
          ['name'=>'Symantec',     'logo'=>'https://cdn.simpleicons.org/broadcom/CC0000'],
          ['name'=>'ManageEngine', 'logo'=>'https://cdn.simpleicons.org/zoho/C8202B'],
          ['name'=>'Nessus',       'logo'=>'https://cdn.simpleicons.org/tenable/00B4C8'],
          ['name'=>'CrowdStrike',  'logo'=>'https://cdn.simpleicons.org/crowdstrike/E00400'],
        ],
      ],
      [
        'title' => 'Document Automation Vendors',
        'icon'  => 'fa-solid fa-file-lines',
        'color' => 'icon-violet',
        'partners' => [
          ['name'=>'Adobe Acrobat', 'logo'=>'https://cdn.simpleicons.org/adobeacrobatreader/EC1C24'],
          ['name'=>'Foxit',         'logo'=>'https://cdn.simpleicons.org/foxit/FF2116'],
          ['name'=>'ABBYY',         'logo'=>'https://cdn.simpleicons.org/abbyy/E8000D'],
          ['name'=>'DocuWare',      'logo'=>'https://cdn.simpleicons.org/docusign/FFBE00'],
          ['name'=>'Kofax',         'logo'=>'https://cdn.simpleicons.org/kofax/2A52BE'],
          ['name'=>'Laserfiche',    'logo'=>'https://cdn.simpleicons.org/files/000000'],
          ['name'=>'iManage',       'logo'=>'https://cdn.simpleicons.org/files/5C6BC0'],
          ['name'=>'Nuance',        'logo'=>'https://cdn.simpleicons.org/nuget/004880'],
          ['name'=>'PDF-XChange',   'logo'=>'https://cdn.simpleicons.org/adobeacrobatreader/C84B31'],
          ['name'=>'DocuSign',      'logo'=>'https://cdn.simpleicons.org/docusign/FFBE00'],
        ],
      ],
      [
        'title' => 'Remote Access & Collaboration',
        'icon'  => 'fa-solid fa-display',
        'color' => 'icon-cyan',
        'partners' => [
          ['name'=>'TeamViewer', 'logo'=>'https://cdn.simpleicons.org/teamviewer/0E8EE9'],
          ['name'=>'AnyDesk',   'logo'=>'https://cdn.simpleicons.org/anydesk/EF443B'],
          ['name'=>'Citrix',    'logo'=>'https://cdn.simpleicons.org/citrix/1383C4'],
          ['name'=>'Zoom',      'logo'=>'https://cdn.simpleicons.org/zoom/2D8CFF'],
          ['name'=>'Slack',     'logo'=>'https://cdn.simpleicons.org/slack/4A154B'],
          ['name'=>'Microsoft Teams','logo'=>'https://cdn.simpleicons.org/microsoftteams/6264A7'],
          ['name'=>'Splashtop', 'logo'=>'https://cdn.simpleicons.org/splashtop/EB4136'],
          ['name'=>'Parallels', 'logo'=>'https://cdn.simpleicons.org/parallels/DC3C2E'],
          ['name'=>'RealVNC',   'logo'=>'https://cdn.simpleicons.org/vnc/4376BE'],
          ['name'=>'LogMeIn',   'logo'=>'https://cdn.simpleicons.org/goto/F36C23'],
        ],
      ],
      [
        'title' => 'Hardware & Infrastructure Brands',
        'icon'  => 'fa-solid fa-microchip',
        'color' => 'icon-amber',
        'partners' => [
          ['name'=>'HP',       'logo'=>'https://cdn.simpleicons.org/hp/0096D6'],
          ['name'=>'Dell',     'logo'=>'https://cdn.simpleicons.org/dell/007DB8'],
          ['name'=>'Lenovo',   'logo'=>'https://cdn.simpleicons.org/lenovo/E2231A'],
          ['name'=>'Intel',    'logo'=>'https://cdn.simpleicons.org/intel/0071C5'],
          ['name'=>'AMD',      'logo'=>'https://cdn.simpleicons.org/amd/ED1C24'],
          ['name'=>'Veeam',    'logo'=>'https://cdn.simpleicons.org/veeam/00B336'],
          ['name'=>'Acronis',  'logo'=>'https://cdn.simpleicons.org/acronis/EF4136'],
          ['name'=>'QNAP',     'logo'=>'https://cdn.simpleicons.org/qnap/2D6FAD'],
          ['name'=>'Synology', 'logo'=>'https://cdn.simpleicons.org/synology/B5B5B6'],
          ['name'=>'APC',      'logo'=>'https://cdn.simpleicons.org/schneiderelectric/3DCD58'],
        ],
      ],
    ];

    foreach ($categories as $idx => $cat): ?>

    <div class="partner-category reveal <?= $idx > 0 ? 'reveal-delay-2' : '' ?>">
      <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1.5rem;">
        <div class="card-icon <?= $cat['color'] ?>" style="width:44px;height:44px;border-radius:13px;font-size:1.1rem;margin:0;">
          <i class="<?= $cat['icon'] ?>"></i>
        </div>
        <h2 class="partner-cat-title" style="margin:0;border-left:none;padding-left:0;font-size:1.1rem;"><?= $cat['title'] ?></h2>
      </div>

      <div class="partner-grid partner-grid-lg">
        <?php foreach ($cat['partners'] as $p): ?>
        <div class="partner-logo" title="<?= $p['name'] ?>">
          <img src="<?= $p['logo'] ?>" alt="<?= $p['name'] ?> logo" width="36" height="36"
               onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"/>
          <span class="partner-logo-name" style="display:none;"><?= $p['name'] ?></span>
          <span class="partner-logo-name"><?= $p['name'] ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <?php endforeach; ?>

  </div>
</section>

<!-- ══════════════ PARTNER VALUE SECTION ══════════════ -->
<section class="section" aria-label="Partner value">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Our Advantage</span>
      <h2>Why AB&amp;D's Partner Ecosystem Matters<span class="red-dot">.</span></h2>
      <p>Our vendor relationships give you access to genuine products, competitive pricing and expert sourcing across every technology category.</p>
    </div>

    <div class="cards-grid-4">
      <?php
      $vals = [
        ['icon'=>'fa-solid fa-handshake','color'=>'icon-blue',    'title'=>'Authorized Reseller',      'desc'=>'We source directly from authorized channels ensuring product authenticity and valid licensing.', 'stat'=>'100% Genuine'],
        ['icon'=>'fa-solid fa-tags',     'color'=>'icon-emerald', 'title'=>'Competitive Pricing',      'desc'=>'Volume relationships and negotiation expertise help us secure cost-effective pricing for customers.', 'stat'=>'Best Rates'],
        ['icon'=>'fa-solid fa-arrows-rotate','color'=>'icon-amber',   'title'=>'Renewal Management',       'desc'=>'We track license expiry and renewal schedules so you never miss a critical update.', 'stat'=>'Automated'],
        ['icon'=>'fa-solid fa-headset',  'color'=>'icon-rose',    'title'=>'Vendor Escalation Support', 'desc'=>'When you need help, we coordinate escalations directly with vendors for faster resolution.', 'stat'=>'Direct Line'],
      ];
      foreach ($vals as $i => $v): ?>
      <div class="why-card reveal reveal-delay-<?= $i+1 ?>">
        <div class="why-icon <?= $v['color'] ?>"><i class="<?= $v['icon'] ?>"></i></div>
        <h3 class="card-title"><?= $v['title'] ?></h3>
        <p class="card-desc" style="font-size:0.88rem;"><?= $v['desc'] ?></p>
        <?php if (!empty($v['stat'])): ?>
        <span class="why-stat"><?= $v['stat'] ?></span>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Partners CTA -->
<section class="cta-section" aria-label="Partners CTA">
  <div class="container">
    <div class="reveal">
      <span class="section-label" style="background:rgba(26,86,219,0.12);border-color:rgba(26,86,219,0.25);color:#93c5fd;">Become a Customer</span>
      <h2>Looking for a specific vendor product or software license?<span class="red-dot">.</span></h2>
      <p>Contact AB&amp;D Software and let our procurement team source the right product for your organization.</p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-primary"><i class="fa-solid fa-envelope"></i> Send Enquiry</a>
        <a href="products.php" class="btn btn-outline"><i class="fa-solid fa-box"></i> Browse Products</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
