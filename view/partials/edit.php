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
    <link rel="stylesheet" href="css/member.css">
    <title>edit</title>
</head>
<body>
<section class="form-edit" id="form-edit">
<div class="judul-container">
    <h2>Ubah Data User</h2>
</div>

<form action="" method="post">
        <input type="hidden" name="id" value="<?= $userById['id']; ?>">
                <div class="inputan-user">
                    <div class="username">
                        <label for="username">Username<span class="required"></span></label>
                        <?php if(isset($notSpasi)): ?>
                            <p style="color:red; font-style:italic;">Username tidak boleh mengandung spasi!!</p>
                        <?php endif; ?>
                        <input type="text" name="username" id="username" placeholder="Nama Anda" autofocus required value="<?= $userById['username']; ?>">
                    </div>
                    <div class="email">
                        <label for="email">Email<span class="required"></span></label>
                        <input type="email" name="email" id="email" placeholder="Email" requiredvalue="<?= $userById['email']; ?>">
                    </div>
       
                    <div class="password">
                        <label for="password">Password<span class="required"></span></label>
                        <input type="password" name="password" id="password" placeholder="**********" requiredvalue="<?= $userById['password']; ?>">
                    </div>
                    <div class="konfirmasi-password">
                        <label for="konfirmasi-password">Konformasi Password<span class="required"></span></label>
                        <input type="password" name="konfirmasi-password" id="konfirmasi-password" placeholder="**********" required value="<?= $userById['konfirmasi-password']; ?>">
                    </div>
                    </div>
                    <div class="button-log-reg">
                    <button type="submit" name="ubah">Ubah Data</button>
                    </div>
                </form>
</section>
</body>
</html>

