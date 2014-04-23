<?php
// turn on output buffering
ob_start();
include("head.php");
include("logo.php");
    echo "<div class='processMessage'>";
    echo "<p>There was an issue sending your message</p>";
    echo "<p>Sending you <a href='index.php'>home</a> now</p>";
    echo "</div>";
    header('Refresh: 7; URL=.');
include("foot.php");
?>