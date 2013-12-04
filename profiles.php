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
                <table>
                    <tr>
                        <td class="badge">
                            <a target="_blank"
                                href="http://medium.com/@giannichen">
                                <img src="https://s3.amazonaws.com/obvious/logos/M_128_black.png"
                                width="64" height="64"
                                alt="Medium"/>
                            </a>
                        </td>

                        <td class="badge">
                            <a target="_blank"
                                href="http://github.com/giannic">
                                <img src="https://a248.e.akamai.net/assets.github.com/images/modules/logos_page/GitHub-Mark.png"
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

                        <td class="badge">
                            <a target="_blank"
                                href="http://twitter.com/giannichen">
                                <img src="https://abs.twimg.com/a/1372759208/images/resources/twitter-bird-white-on-blue.png"
                                width="64" height="64"
                                alt="Twitter"/>
                            </a>
                        </td>

                        <td class="badge">
                            <a target="_blank"
                                href="http://linkedin.com/in/giannic">
                                <img src="http://developer.linkedin.com/sites/default/files/LinkedIn_Logo60px.png"
                                    width="81" height="64" border="0"
                                    alt="LinkedIn"/>
                            </a>
                        </td>
                        <td class="badge">
                            <a target="_blank"
                                href="http://facebook.com/in/giannic">
                                <img src="https://www.facebookbrand.com/img/assets/asset.f.logo.lg.png"
                                    width="64" height="64" border="0"
                                    alt="Facebook"/>
                            </a>
                        </td>
                        <td class="badge">
                            <a target="_blank"
                                href="http://google.com/profiles/giannikchen">
                                <img src="https://ssl.gstatic.com/images/icons/gplus-64.png"
                                    width="64" height="64" border="0"
                                    alt="Google"/>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="badge">
                            <a target="_blank"
                                href="http://instagr.am/giannichen">
                                <img src="http://badges.instagram.com/static/images/ig-badge-48.png"
                                    width="64" height="64" border="0"
                                    alt="Instagram"/>
                            </a>
                        </td>
                        <td class="badge">
                            <a target="_blank"
                                href="http://gkc.vsco.co">
                                <img src="http://vsco.co/images/vscocam/cam_logo.svg"
                                    width="64" height="64" border="0"
                                    alt="VSCO"/>
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
