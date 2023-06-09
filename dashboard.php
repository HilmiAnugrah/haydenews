<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require("view/dashboard.view.php");

