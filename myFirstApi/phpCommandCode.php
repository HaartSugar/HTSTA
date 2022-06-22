<?php
session_start();
if (!isset($_SESSION["Username"])) {
    $_SESSION["Username"] = "Unknown";
}

if (!isset($_SESSION["itemToBuy"])) {
    $_SESSION["itemToBuy"] = "Unknown";
}
?>