<?php
include_once("phpCommandCode.php");

if (!isset($_POST["Sender"])) {
    print("Unknow request sent to this API. Please provode the Sender");
    die();
};

if (isset($_POST["Username"])) {
    $_SESSION["Username"] = $_POST["Username"];
    
};

if (isset($_POST["ItemToBuy"])) {
    $_SESSION["itemToBuy"] = $_POST["ItemToBuy"];
};




header("Location: ".$_POST["Sender"]);
die();
?>