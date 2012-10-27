<!DOCTYPE html>
<html lang="en">
<head>
    <title>gianni's projects</title>
    <meta charset="utf-8">
    <meta name="description" content="A list of projects involving code that Gianni has worked on.">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <?php
        include 'config.php';
        include 'php/functions.php';
        if ($env == 'prod') {
            include 'php/analytics.php';
        }
    ?>
</head>

<body>
    <section class="container">
        <?php
            getheader();
            nav();
        ?>

        <section class="content">
            <article>
                <!--Randy Pausch, The Last Lecture-->
                <h5 class="quote">
                    Fundamentals, fundamentals, fundamentals. You've got to get the fundamentals down because otherwise the fancy stuff isn't going to work. -Randy Pausch
                </h5>

                <h3 class="section-title">
                    <a href="https://github.com/giannic/melt" target="_blank">
                        ice melting (physically based animation)
                    </a>
                </h3>
                <p class="entry">
                    Just started a project with <a href="http://ksuvee.wordpress.com">Kanchalai Suveepattananont</a> to simulate melting using Smoothed-particle Hydrodyanamics. We will be updating on our progress soon. Stay tuned! <!--Check out our progress <a href="http://meltsim.tumblr.com">blog</a>-->.
                </p>

                <h3 class="section-title">pennos (operating systems)</h3>
                <p class="entry">
                    Single process operating system implemented in C in a team of 4. Worked mainly on the kernel and shell.
                </p>

                <h3 class="section-title">raytracer (computer graphics)</h3>
                <p class="entry">
                    Implemented a raytracer in C++ that supports diffuse and reflective surfaces.
                </p>

                <h3 class="section-title">
                    <a href="http://www.tabdat.com" target="_blank">
                        tabdat (web design)
                    </a>
                </h3>
                <p class="entry">
                    Implemented and designed a flexible and quick tool to save and access web pages.
                </p>

                <h3 class="section-title">gnoui (personal)</h3>
                <p class="entry">
                    Implemented a light-weight injectable blogging system in C and PHP.
                </p>

                <h3 class="section-title">mini maya (computer graphics)</h3>
                <p class="entry">
                    Implementation of a few 3D space features using Qt Creator with C++ and OpenGL in a team of 3. Implemented camera functionality.
                </p>

                <h3 class="section-title">mini twitter (databases)</h3>
                <p class="entry">
                    An implementation of Twitter as a database management systems final project in a team of 3. Concentrated on querying the database via OJDBC and styling JSP with CSS.
                </p>

                <h3 class="section-title">hypup (hackathon)</h3>
                <p class="entry">
                    An event-based social networking Android app for a 48 hour hackathon in a team of 4. Designed and created all artwork for the user interface. Wrote most XML for page layouts. Implemented parts of android events.
                </p>

                <h3 class="section-title">edabble (social digital media)</h3>
                <p class="entry">
                    An interactive physical forum that allows users to discuss a given topic in a location on Penn campus. The goal of this project is to boost civil, civic, and political deliberation. Wrote the HTML and CSS for the layout of the projected forum. Used PHP to integrate a word cloud (API) into the project.
                </p>
            </article>
        </section>
        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>
