<?php
// turn on output buffering
ob_start();
include("head.php");
include("logo.php");
    echo "<div class='processMessage'>";
    echo "<p>Your mail was successfully sent!</p>";
    echo "<p>Sending you back <a href='.'>home</a>.</p>";
    echo "</div>";
    header('Refresh: 7; URL=.');
include("foot.php");
?>