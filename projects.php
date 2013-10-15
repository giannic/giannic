<!DOCTYPE html>
<html lang="en">
<head>
    <title>gianni's projects</title>
    <meta charset="utf-8">
    <meta name="description" content="A list of projects involving code that Gianni has worked on.">

    <?php
        include 'config.php';
        include 'php/functions.php';

        stylesheets();
        less();

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
                    windows phone marketing (consumer behavior)
                </h3>
                <p class="entry">
                    Developed a marketing strategy for Windows Phone. Creative assets are a web-based game and posters. Advised by the Microsoft team.<br/>
                    <a class="bit">
                        Gianni Chen
                    </a>
                    <a class="bit">
                        Osman Azami
                    </a>
                    <a class="bit">
                        Justine Shiou
                    </a>
                    <a class="bit">
                        Gina Ah-fenne
                    </a>
                    <a class="bit">
                        Daniel Nunez
                    </a>
                    <a class="bit">
                        David Sawyers
                    </a>
                </p>


                <h3 class="section-title">
                    <a href="https://github.com/giannic/melt" target="_blank">
                        ice melting (physically based animation)
                    </a>
                </h3>
                <p class="entry">
                    Implemented a ice melting simulation using Smoothed-Particle Hydrodyanamics.<!--Check out our progress <a href="http://meltsim.tumblr.com">blog</a>--><br/>
                    <a class="bit">
                        Gianni Chen
                    </a>
                    <a class="bit"
                        href="http://ksuvee.wordpress.com"
                        target="_blank">
                        Kanchalai Suveepattananont
                    </a>
                </p>

                <h3 class="section-title">rigid body simulator (physically based animation)</h3>
                <p class="entry">
                    Implemented an impulse-based rigid body simulator for simple geometries with broadphase and narrowphase collision detection and resolution.
                </p>

                <h3 class="section-title">smoke simulator (physically based animation)</h3>
                <p class="entry">
                    Implemented a semi-lagrangian 3D incompressible fluid simulation.
                </p>

                <h3 class="section-title">jello simulator (physically based animation)</h3>
                <p class="entry">
                    Implemented a lightly interactive jello simulator modeled by a mass-spring network.
                </p>

                <h3 class="section-title">pennos (operating systems)</h3>
                <p class="entry">
                    Single process operating system implemented in C. Worked mainly on the kernel and shell.<br/>
                    <a class="bit">
                        Gianni Chen
                    </a>
                    <a class="bit"
                        href="http://www.albertkwon.com"
                        target="_blank">
                        Albert Kwon
                    </a>
                    <a class="bit"
                        href="http://www.seas.upenn.edu/~nmarshak"
                        target="_blank">
                        Nathan Marshak
                    </a>
                    <a class="bit"
                        href="http://www.ericob.com"
                        target="_blank">
                        Eric O'Brien
                    </a>
                </p>

                <h3 class="section-title">raytracer (computer graphics)</h3>
                <p class="entry">
                    Implemented a raytracer in C++ that supports diffuse and reflective surfaces.
                </p>

                <h3 class="section-title">voxel renderer (computer graphics)</h3>
                <p class="entry">
                    Implemented a simple voxel-based cloud renderer.
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
                    Implementation of a few 3D space features using Qt Creator with C++ and OpenGL. Implemented camera functionality.<br/>
                    <a class="bit">
                        Gianni Chen
                    </a>
                    <a class="bit"
                        href="http://www.linkedin.com/in/kevinxu"
                        target="_blank">
                        Kevin Xu
                    </a>
                    <a class="bit"
                        href="http://ksuvee.wordpress.com"
                        target="_blank">
                        Kanchalai Suveepattananont
                    </a>
                </p>

                <h3 class="section-title">mini twitter (databases)</h3>
                <p class="entry">
                    An implementation of Twitter as a database management systems final project. Concentrated on querying the database via OJDBC and styling JSP with CSS.<br/>
                    <a class="bit">
                        Gianni Chen
                    </a>
                    <a class="bit"
                        href="http://www.linkedin.com/in/kevinxu"
                        target="_blank">
                        Kevin Xu
                    </a>
                    <a class="bit"
                        href="http://www.ericob.com"
                        target="_blank">
                        Eric O'Brien
                    </a>
                </p>

                <h3 class="section-title">hypup (hackathon)</h3>
                <p class="entry">
                    An event-based social networking Android app for a 48 hour hackathon. Designed and created all artwork for the user interface. Wrote most XML for page layouts. Implemented parts of android events. <br/>
                    <a class="bit">
                        Gianni Chen
                    </a>
                    <a class="bit"
                        href="http://www.sshannin.com"
                        target="_blank">
                        Seth Shannin
                    </a>
                    <a class="bit"
                        href="http://www.albertkwon.com"
                        target="_blank">
                        Albert Kwon
                    </a>
                    <a class="bit"
                        href="http://www.linkedin.com/pub/philip-peng/33/a75/456"
                        target="_blank">
                        Philip Peng
                    </a>
                </p>

                <h3 class="section-title">edabble (social digital media)</h3>
                <p class="entry">
                    An interactive physical forum that allows users to discuss a given topic in a location on Penn campus. The goal of this project is to boost civil, civic, and political deliberation. Wrote the HTML and CSS for the layout of the projected forum. Used PHP to integrate a word cloud (API) into the project. <br/>
                    <a class="bit">
                        Gianni Chen
                    </a>
                    <a class="bit"
                        href="http://www.danknowlton.com"
                        target="_blank">
                        Daniel Knowlton
                    </a>
                    <a class="bit"
                        href="http://www.kaitlynreese.com"
                        target="_blank">
                        Kaitlyn Reese
                    </a>
                    <a class="bit">
                        Ivan Zdanov
                    </a>
                </p>
            </article>
        </section>
        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>
