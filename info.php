<!DOCTYPE html>
<html lang="en">

<head>
    <title>gianni's info</title>
    <meta charset="utf-8">

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
                <h3 class="section-title">education</h3>
                <p class="entry">The University of Pennsylvania</p>
                <p class="entry">M.S.E. Computer Graphics and Game Technology</p>
                <p class="meta-info">ON LEAVE</p>
                <p class="entry">B.S.E. Digital Media Design</p>
                <p class="meta-info">2013</p>
                <p class="entry">The University of British Columbia, Vancouver
                    <a class="bit"
                        target="_blank"
                        href="http://students.ubc.ca/enrolment/courses/non-degree/access">
                        Concurrent Studies
                    </a>
                </p>
                <p class="meta-info">2009</p>
                <p class="entry">Stanford University
                    <a class="bit"
                        target="_blank"
                        href="https://summercollege.stanford.edu/">
                        Summer College
                    </a>
                </p>
                <p class="meta-info">2008</p>

                <h3 class="section-title">experience</h3>
                <p class="entry">Software Engineer
                    <a class="bit"
                        target="_blank"
                        href="http://www.medium.com">
                        Medium
                    </a>
                </p>
                <p class="meta-info">02.2014 - PRESENT</p>

                <p class="entry">Lecturer
                    <a class="bit"
                        target="_blank"
                        href="http://www.cis.upenn.edu">
                        UPenn Computer Science
                    </a>
                    <a class="bit"
                        target="_blank"
                        href="http://www.seas.upenn.edu/~cis191">
                        CIS 191
                    </a>
                </p>
                <p class="meta-info">01.2013 - 12.2013</p>

                <p class="entry">Teaching Assistant
                    <a class="bit"
                        target="_blank"
                        href="http://www.cis.upenn.edu">
                        UPenn Computer Science
                    </a>
                </p>
                <p class="meta-info">01.2010 - 12.2013</p>

                <p class="entry">Engineering Intern
                    <a class="bit"
                        target="_blank"
                        href="http://www.medium.com">
                        Medium
                    </a>
                    <a class="bit"
                        target="_blank"
                        href="http://www.obvious.com">
                        Obvious
                    </a>
                </p>
                <p class="meta-info">06.2013 - 08.2013</p>

                <p class="entry">Head Grader, Manager
                    <a class="bit">UPenn Computer Science 1XX Courses</a>
                </p>
                <p class="meta-info">01.2011 - 01.2013</p>

                <p class="entry">Technology Summer Analyst
                    <a class="bit"
                        target="_blank"
                        href="http://www.gs.com">
                        Goldman Sachs
                    </a>
                </p>
                <p class="meta-info">06.2012 - 08.2012</p>

                <p class="entry">Engineering and Design Intern
                    <a class="bit"
                        target="_blank"
                        href="http://www.wapolabs.com">
                        The Washington Post Company
                    </a>
                </p>
                <p class="meta-info">06.2011 - 09.2011</p>

                <p class="entry">Research Assistant
                    <a class="bit"
                        target="_blank"
                        href="http://cg.cis.upenn.edu">
                        UPenn SIG Center for Computer Graphics
                    </a>
                </p>
                <p class="meta-info">05.2010 - 02.2011</p>

                <p class="entry">Residential and Teaching Assistant
                    <a class="bit"
                        target="_blank"
                        href="http://www.seas.upenn.edu/saast">
                        UPenn SAAST Program
                    </a>
                </p>
                <p class="meta-info">07.2010</p>

                <p class="entry">Web Development Assistant
                    <a class="bit"
                        target="_blank"
                        href="http://www.thedp.com">
                        The Daily Pennsylvanian
                    </a>
                </p>
                <p class="meta-info">09.2009 - 12.2009</p>

                <h3 class="section-title">code</h3>
                <p class="entry">C, Java, C++ (OpenGL), Python, MATLAB</p>
                <p class="entry">Javascript, HTML, CSS, PHP</p>

                <h3 class="section-title">design</h3>
                <p class="entry">Photoshop, Illustrator, InDesign</p>
                <p class="entry">Maya, 3ds Max</p>

                <h3 class="section-title">activities</h3>
                <p class="entry">Alumni Interviewer
                    <a class="bit"
                        target="_blank"
                        href="http://www.upenn.edu">
                        UPenn
                    </a>
                </p>
                <p class="meta-info">2014 - PRESENT</p>
                <p class="entry">Communications Chair, Member
                    <a class="bit"
                        target="_blank"
                        href="http://www.stwing.upenn.edu">
                        UPenn Science and Technology Wing
                    </a>
                </p>
                <p class="meta-info">01.2010 - 12.2013</p>

                <p class="entry">Orientation Peer Advisor
                    <a class="bit"
                        target="_blank"
                        href="http://www.seas.upenn.edu">
                        UPenn School of Engineering and Applied Science
                    </a>
                </p>
                <p class="meta-info">2010 - 2011</p>

                <h3 class="section-title">honors</h3>
                <p class="entry">Cover page artist
                    <span class="bit">Canadian National Calendar Contest</span>
                </p>
                <p class="meta-info">2007</p>
            </article>
        </section>
        <footer>
            <?php footer(); ?>
        </footer>
    </section>
</body>
</html>
