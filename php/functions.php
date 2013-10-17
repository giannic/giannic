<?php
date_default_timezone_set('America/New_York');

function stylesheets() {
    echo "<link rel=\"stylesheet/less\" type=\"text/css\" href=\"less/styles.less\">";
}

function less() {
    echo "<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/less.js/1.4.1/less.min.js\"></script>";
}

function getheader() {
    $page = $_SERVER["SCRIPT_NAME"];
    echo "<header class=\"name-head\">";
    echo "<a class=\"name\" href=\"index.php\">Gianni Chen</a>";
    echo "</header>";
}

function nav() {
    $page = $_SERVER["SCRIPT_NAME"];
    echo "<nav>";
    if ($page == "/info.php") {
        echo "<a href=\"info.php\" class=\"active\">info</a>";
    } else {
        echo "<a href=\"info.php\">info</a>";
    }

    if ($page == "/projects.php") {
        echo "<a href=\"projects.php\" class=\"active\">projects</a>";
    } else {
        echo "<a href=\"projects.php\">projects</a>";
    }

    if ($page == "/art.php") {
        echo "<a href=\"art.php\" class=\"active\">art</a>";
    } else {
        echo "<a href=\"art.php\">art</a>";
    }

    if ($page == "/coursework.php") {
        echo "<a href=\"coursework.php\" class=\"active\">courses</a>";
    } else {
        echo "<a href=\"coursework.php\">courses</a>";
    }

    /*
    if ($page == "journal.php") {
        echo "<a href=\"journal.php\" class=\"active\">journal</a>";
    } else {
        echo "<a href=\"journal.php\">journal</a>";
    }
    */

    if ($page == "/profiles.php") {
        echo "<a href=\"profiles.php\" class=\"active\">profiles</a>";
    } else {
        echo "<a href=\"profiles.php\">profiles</a>";
    }

    if ($page == "/contact.php") {
        echo "<a href=\"contact.php\" class=\"active\">contact</a>";
    } else {
        echo "<a href=\"contact.php\">contact</a>";
    }
    echo "</nav>";
}

function footer() {
    $page = $_SERVER["SCRIPT_NAME"];
    echo "<h6 class=\"copyright\">" . date("Y") . "</h6>";
}

function meta() {
    echo "<meta name=\"author\" content=\"Gianni Chen\">";
    echo "<meta name=\"keywords\" content=\"Gianni Chen, Gianni, DMD, Digital Media Design, UPenn, University of Pennsylvania, Engineering\"/>";
}

?>
