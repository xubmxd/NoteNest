<?php

// --------------------------------------------------
// NoteNest - Note Viewer (Intentionally Vulnerable)
// --------------------------------------------------

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Requested note
$file = $_GET['file'] ?? 'welcome.txt';

// Intentionally vulnerable path construction
$path = __DIR__ . "/uploads/" . $file;

// Default values
$title = "Document Not Found";
$modified = "Unknown";
$content = "The requested document could not be found.";

if (is_file($path)) {

    $content = file_get_contents($path);

    $title = ucwords(
        str_replace(
            ['.txt', '_', '-'],
            ['', ' ', ' '],
            basename($file)
        )
    );

    $modified = date("F j, Y", filemtime($path));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($title) ?> | NoteNest</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<header class="navbar">

    <div class="container">

        <a href="index.php" class="logo">
            NoteNest
        </a>

        <nav>

            <a href="index.php">Home</a>
            <a href="#">Notes</a>
            <a href="#">Login</a>

        </nav>

    </div>

</header>

<main>

<div class="container">

    <div class="breadcrumb">

        <a href="index.php">Home</a>

        <span>›</span>

        <span>Notes</span>

        <span>›</span>

        <strong><?= htmlspecialchars($title) ?></strong>

    </div>

    <section class="viewer-card">

        <div class="viewer-header">

            <div>

                <h1><?= htmlspecialchars($title) ?></h1>

                <p>
                    Last Updated · <?= htmlspecialchars($modified) ?>
                </p>

            </div>

            <button class="download-btn" disabled>

                Download

            </button>

        </div>

        <pre><?= htmlspecialchars($content) ?></pre>

    </section>

</div>

</main>

</body>

</html>
