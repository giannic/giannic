<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="Description" content="A little bit about Gianni (UPenn).">
    <title>about gianni</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php
        include 'config.php';
        include 'php/functions.php';
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
                <h2 class="section-title">about</h2><br/>
                <p class="entry">
                    Hi! I am Gianni. I am a senior in Digital Media Design at the University of Pennsylvania. I have an interest in coding, but I do art casually as well. I love clean code and minimalistic designs. My hobbies include table tennis, badminton and sketching.
                    <br/><br/>
                    A lot of my free time is spent working on personal and group projects as well as customizing my computer. I am most familiar with the gnu emacs text editor, but have recently begun to learn vi as well. I have spent countless hours battling the irregularities of the unix environment on Macs, but still enjoy the strings it has drawn between the Terminal, Photoshop and Maya.
                    <br/><br/>
                    Please take a look around my site. All comments are welcome!
                </p>
            </article>
        </section>
        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>