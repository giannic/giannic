<!DOCTYPE html>
<html lang="en">

<head>
    <title>contact gianni</title>
    <meta charset="utf-8">
    <meta name="description" content="Contact Gianni via this form.">
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
                <h2 class="section-title">leave a message</h2><br/>
                <form action="comment.php" method="post">
                    <textarea name="from"
                        class="from"
                        placeholder="Name"></textarea>

                    <textarea name="email"
                        class="email"
                        placeholder="E-mail"></textarea>

                    <textarea name="msg"
                        class="msg"
                        placeholder="Message"></textarea>

                    <button type="submit">Send</button>
                </form>
            </article>
        </section>

        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>