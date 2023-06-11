<?php 
require "functions.php";
if(isset($_GET['id'])){
$id= $_GET['id'];
$userById =query("SELECT * FROM user WHERE id = $id")[0];
}



if (isset($_POST['submit'])){
// cek apakah data berhasil di tambahkan atau tidak?
  ubah($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "view/partials/meta.php" ?>
    <link rel="stylesheet" href="css/edit.css">
    <!-- botstraplink -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <title>Hayde | Edit</title>
</head>
<body>
<section class="form-edit" id="form-edit">
<div class="judul-container">
    <h1>Ubah Data User</h1>
</div>

<form action="" method="post">
        <input type="hidden" name="id">
           
                    <div class="username">
                        <label for="username">Username<span class="required"></span></label>
                        <?php if(isset($notSpasi)): ?>
                            <p style="color:red; font-style:italic;">Username tidak boleh mengandung spasi!!</p>
                        <?php endif; ?>
                        <input type="text" name="username" id="username" placeholder="Nama Anda" autofocus required ">
                    </div>
                    <div class="email">
                        <label for="email">Email<span class="required"></span></label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
       
                    <div class="password">
                        <label for="password">Password<span class="required"></span></label>
                        <input type="password" name="password" id="password" placeholder="**********" required>
                    </div>
                    <div class="konfirmasi-password">
                        <label for="konfirmasi-password">Konformasi Password<span class="required"></span></label>
                        <input type="password" name="konfirmasi-password" id="konfirmasi-password" placeholder="**********" required >
                    </div>
                    <div class="button-log-reg">
                    <button type="submit" name="ubah">Ubah Data</button>
                    </div>
                </form>
</section>
</body>
</html>

