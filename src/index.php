<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NoteNest</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="navbar">

    <div class="container">

        <a href="#" class="logo">
            NoteNest
        </a>

        <nav>

            <a href="#">Home</a>
            <a href="#features">Features</a>
            <a href="#notes">Notes</a>

        </nav>

    </div>

</header>


<main>

    <!-- Hero -->

    <section class="hero">

        <div class="container">

            <h1>
                Plain text notes,<br>
                done right.
            </h1>

            <p>
                NoteNest is a lightweight note viewing application built with
                simplicity in mind. Browse plain text notes through a clean,
                distraction-free interface.
            </p>

            <a href="#notes" class="button">
                Explore Notes
            </a>

        </div>

    </section>


    <!-- Features -->

    <section class="features" id="features">

        <div class="container">

            <div class="section-title">

                <h2>
                    Built for simplicity.
                </h2>

                <p>
                    Everything you need to browse notes—nothing you don't.
                </p>

            </div>


            <div class="feature-grid">

                <article class="feature-card">

                    <h3>Minimal</h3>

                    <p>
                        A clean interface that focuses entirely on your notes.
                    </p>

                </article>


                <article class="feature-card">

                    <h3>Lightweight</h3>

                    <p>
                        No unnecessary frameworks or distractions. Just fast,
                        readable content.
                    </p>

                </article>


                <article class="feature-card">

                    <h3>Responsive</h3>

                    <p>
                        Designed to work comfortably on desktops, tablets,
                        and mobile devices.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- Notes -->

    <section class="notes" id="notes">

        <div class="container">

            <div class="section-title">

                <h2>
                    Sample Notes
                </h2>

                <p>
                    Browse a few example notes bundled with the application.
                </p>

            </div>


            <div class="note-grid">

                <article class="note-card">

                    <span class="meta">
                        Last updated · June 2026
                    </span>

                    <h3>
                        Welcome
                    </h3>

                    <p>
                        A quick introduction to NoteNest and what it offers.
                    </p>

                    <a href="view.php?note=welcome.txt">
                        View Note →
                    </a>

                </article>


                <article class="note-card">

                    <span class="meta">
                        Last updated · June 2026
                    </span>

                    <h3>
                        Changelog
                    </h3>

                    <p>
                        Review the latest improvements and recent updates.
                    </p>

                    <a href="view.php?note=changelog.txt">
                        View Note →
                    </a>

                </article>

            </div>

        </div>

    </section>

</main>


<footer>

    <div class="container footer-content">

        <div>

            <h3>
                NoteNest
            </h3>

            <p>
                Built for educational purposes.
            </p>

        </div>

        <span>
            © 2026 NoteNest
        </span>

    </div>

</footer>

</body>
</html>
