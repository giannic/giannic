<!DOCTYPE html>
<html lang="en">

<head>
    <title>gianni's profiles</title>
    <meta charset="utf-8">
    <meta name="Description" content="Learn a little about Gianni's life">
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
                <h2 class="section-title">my profiles</h2><br/>
                <table>
                    <tr>
                        <td class="badge">
                            <a target="_blank"
                                href="http://www.linkedin.com/in/giannic">
                                <img src="img/linkedin.png"
                                    width="80" height="80" border="0"
                                    alt="LinkedIn"/>
                            </a>
                        </td>
                        <td class="badge">
                            <a target="_blank"
                                href="http://www.github.com/giannic">
                                <img src="img/octocat.png"
                                    width="80" height="80" border="0"
                                    alt="Github"/>
                            </a>
                        </td>
                        <td class="badge">
                            <a target="_blank"
                                href="http://pinterest.com/giannic">
                                <img src="http://passets-cdn.pinterest.com/images/big-p-button.png"
                                width="64" height="64"
                                alt="Pinterest"/>
                            </a>
                        </td>
                    </tr>
                </table>
            </article>
        </section>

        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>
