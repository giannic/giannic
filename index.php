<!DOCTYPE html>
<html lang="en">

<head>
    <title>about gianni</title>
    <meta charset="utf-8">
    <meta name="description"
        content="Gianni, software engineer at Medium.">
    <meta name="google-site-verification"
        content="C6_wOCVRZCOck1tRKN7tWxzKq0t2rBLxWFDEUMgrS5c"/>
    <meta name="p:domain_verify" content="bfc9fbb599b3e78fa77875f50ae02ad1"/>
    <?php
        include 'config.php';
        include 'php/functions.php';

        meta();
        stylesheets();
        less();

        if ($env == 'prod') {
            include 'php/analytics.php';
            include_once 'php/vip.php';
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
                <!--hax-->
                <h3 class="section-title">&nbsp;</h3>
                <p class="entry">
                    Hi! My name is Gianni.
                    <br>
                    I am a software engineer
                    <br>
                    at <a href="http://google.com">Google</a>.
                </p>
            </article>
        </section>
        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>
