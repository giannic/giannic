<!DOCTYPE html>
<html lang="en">
<head>
    <title>gianni's art</title>
    <meta charset="utf-8">
    <meta name="description" content="A bit about Gianni's artwork.">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
                <!--Derren Brown on interview with BBC London (Typhon)-->
                <!--http://www.youtube.com/watch?v=Z_U8kwvdyZM-->
                <h5 class="quote">It's like being musical I suppose. Anybody could sit down and play a tune, and if you're musical, you can play a better tune, you can play a tune well. But, what makes you musical is not really a gift, it is ten thousand hours of practice. -Derren Brown</h5>
                <p class="section-title">for now, just an example of my work...</p>
                <img src="img/art_sample.jpg" class="artwork"/>
            </article>
        </section>
        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>
