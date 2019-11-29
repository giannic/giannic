<!DOCTYPE html>
<html lang="en">

<head>
    <title>gianni's profiles</title>
    <meta charset="utf-8">
    <meta name="description" content="Gianni's web presence">

    <?php
        include 'config.php';
        include 'php/functions.php';

        meta();
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
                <h2 class="section-title">my profiles</h2><br/>
                <p class="entry">
                    <a target="_blank"
                        href="http://medium.com/@g">
                        Medium
                    </a>
                </p>

                <p class="entry">
                    <a target="_blank"
                        href="http://github.com/giannic">
                        Github
                    </a>
                </p>

                <p class="entry">
                    <a target="_blank"
                        href="http://twitter.com/giawni">
                        Twitter
                    </a>
                </p>

                <p class="entry">
                    <a target="_blank"
                        href="http://instagr.am/giawni">
                        Instagram
                    </a>
                </p>

                <p class="entry">
                    <a target="_blank"
                        href="http://facebook.com/giannic">
                        Facebook
                    </a>
                </p>

                <p class="entry">
                    <a target="_blank"
                        href="http://gkc.vsco.co">
                        VSCO
                    </a>
                </p>

                <p class="entry">
                    <a target="_blank"
                        href="http://pinterest.com/giannic">
                        Pinterest
                    </a>
                </p>

                <p class="entry">
                    <a target="_blank"
                        href="http://linkedin.com/in/giannic">
                        LinkedIn
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
