<?php 
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$emailUser = isset($_SESSION['email']) ? $_SESSION['email'] : "";

// Ambil URL saat ini
$currentURL = $_SERVER['REQUEST_URI'];

// Tambahkan "/" di akhir URL untuk memastikan kecocokan dengan URL yang diharapkan
$currentURL = rtrim($currentURL, "/");

if ($currentURL == "haydeberita.my.id/index.php" || $currentURL == "haydeberita.my.id/") {
  if (!empty($_SESSION["login"])) {
      $buttonText = "Dashboard";
      $buttonLink = "dashboard.php?username=" .base64_encode($username)."&email=".base64_encode($emailUser);
  } else {
      $buttonText = "Masuk/Daftar";
      $buttonLink = "login.php";
  }
} else {
  $buttonText = "Masuk/Daftar";
  $buttonLink = "login.php";
}



require('view/index.view.php'); 
