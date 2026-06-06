<?php
// Get current page for active state
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($page_title) ? htmlspecialchars($page_title) : 'AB&D Software India Pvt Ltd | IT Services, Software Licensing & Technology Solutions' ?></title>
  <meta name="description" content="<?= isset($page_desc) ? htmlspecialchars($page_desc) : 'AB&D Software India Pvt Ltd — Trusted IT procurement, software licensing, cybersecurity, cloud and technology solutions partner for enterprise, SMB, government and BFSI organizations.' ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://www.abdindia.co.in/">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="page-body">

<!-- ══════════════ NAVBAR ══════════════ -->
<nav class="navbar" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">

    <!-- Logo -->
    <a href="index.php" class="nav-logo" aria-label="AB&D Software India Pvt Ltd Home">
      <div class="nav-logo-mark">AB</div>
      <div class="nav-logo-text">
        <span class="nav-logo-name">AB&amp;D Software</span>
        <span class="nav-logo-sub">India Pvt Ltd</span>
      </div>
    </a>

    <!-- Desktop Menu -->
    <ul class="nav-menu" role="list">
      <li><a href="index.php"    <?= $current_page === 'index.php'    ? 'class="active"' : '' ?>>Home</a></li>
      <li><a href="services.php" <?= $current_page === 'services.php' ? 'class="active"' : '' ?>>Services</a></li>
      <li><a href="solutions.php"<?= $current_page === 'solutions.php'? 'class="active"' : '' ?>>Solutions</a></li>
      <li><a href="products.php" <?= $current_page === 'products.php' ? 'class="active"' : '' ?>>Products</a></li>
      <li><a href="partners.php" <?= $current_page === 'partners.php' ? 'class="active"' : '' ?>>Partners</a></li>
      <li><a href="about.php"    <?= $current_page === 'about.php'    ? 'class="active"' : '' ?>>About</a></li>
      <li><a href="contact.php"  <?= $current_page === 'contact.php'  ? 'class="active"' : '' ?>>Contact</a></li>
    </ul>

    <!-- Desktop CTA -->
    <div class="nav-actions">
      <a href="contact.php" class="btn btn-nav-cta">Contact Sales <i class="fa-solid fa-arrow-right" style="font-size:0.75rem;"></i></a>
    </div>

    <!-- Mobile Hamburger -->
    <button class="nav-hamburger" id="hamburger" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="navDrawer">
      <span></span><span></span><span></span>
    </button>

  </div>
</nav>

<!-- Mobile Drawer -->
<div class="nav-drawer" id="navDrawer" aria-hidden="true">
  <a href="index.php"    <?= $current_page === 'index.php'    ? 'class="active"' : '' ?>><i class="fa-solid fa-house"></i> Home</a>
  <a href="services.php" <?= $current_page === 'services.php' ? 'class="active"' : '' ?>><i class="fa-solid fa-gears"></i> Services</a>
  <a href="solutions.php"<?= $current_page === 'solutions.php'? 'class="active"' : '' ?>><i class="fa-solid fa-puzzle-piece"></i> Solutions</a>
  <a href="products.php" <?= $current_page === 'products.php' ? 'class="active"' : '' ?>><i class="fa-solid fa-box"></i> Products</a>
  <a href="partners.php" <?= $current_page === 'partners.php' ? 'class="active"' : '' ?>><i class="fa-solid fa-handshake"></i> Partners</a>
  <a href="about.php"    <?= $current_page === 'about.php'    ? 'class="active"' : '' ?>><i class="fa-solid fa-building"></i> About</a>
  <a href="contact.php"  <?= $current_page === 'contact.php'  ? 'class="active"' : '' ?>><i class="fa-solid fa-envelope"></i> Contact</a>
  <div class="nav-drawer-cta">
    <a href="contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Contact Sales</a>
  </div>
</div>
