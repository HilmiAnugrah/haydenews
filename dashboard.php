<?php
session_start();
require "functions.php";
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

$sayToHello= $_GET['username'];
$username = isset($_GET["username"]) ? base64_decode($_GET["username"]) : "";
$emailUser = isset($_GET["email"]) ? base64_decode($_GET["email"]) : "";


//query data user
$queryUser="SELECT * FROM user";
//setelah di query masukan ke $user
$users = query($queryUser);

// cari user
if (!empty($_POST['keyword'])) {
    //cek apakah tombol cari pernah di pencet atau belum
    if(isset($_POST["search"])){
        $mahasiswa = cari($_POST['keyword']);
        if (count($mahasiswa) == 0 ){
            $hidden = true;
        }
        $pagination =true;// tapi jika tombol cari tidak di tekan maka script ini true
    }
    }
require("view/dashboard.view.php");

