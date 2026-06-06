<?php
// Set working directory to the root of the project so that root-relative includes/requires work correctly.
chdir(__DIR__ . '/..');

// Get the requested URI path
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Normalize the request path
$path = ltrim($request_uri, '/');

// Default to index.php for root request
if ($path === '') {
    $path = 'index.php';
}

// Append .php extension if it's missing (e.g. /about -> /about.php) and it doesn't have an extension
if (!str_ends_with($path, '.php') && !str_contains($path, '.')) {
    $path .= '.php';
}

// Security: Prevent directory traversal
$path = str_replace(['..', '\\'], '', $path);

// Check if the file exists in the root directory
if (file_exists($path) && is_file($path) && $path !== 'vercel.json' && !str_starts_with($path, 'api/')) {
    // Execute the PHP page
    include $path;
} else {
    // Fallback to 404
    http_response_code(404);
    include 'includes/header.php';
    echo '
    <section class="section" style="min-height: 60vh; display: flex; align-items: center; justify-content: center; text-align: center;">
      <div class="container reveal">
        <h1 style="font-size: 3rem; margin-bottom: 1rem; color: var(--clr-dark);">404 Page Not Found</h1>
        <p style="font-size: 1.1rem; color: #64748b; margin-bottom: 2rem;">The page you are looking for does not exist or has been moved.</p>
        <a href="/" class="btn btn-primary"><i class="fa-solid fa-home"></i> Back to Home</a>
      </div>
    </section>';
    include 'includes/footer.php';
}
