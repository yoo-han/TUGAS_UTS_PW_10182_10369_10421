<?php
    include('../db.php');
    session_start();
    $id = $_SESSION['user']['id'];
    $tambahSaldo = $_POST['tambahSaldo'];

    $query = mysqli_query($con,"UPDATE users SET saldo=(saldo + '$tambahSaldo') WHERE id = '$id'") or die(mysqli_error($con)); 

    $sql = mysqli_query($con, "SELECT * FROM users WHERE id = '$id' ") or die(mysqli_error($con));
    $user = mysqli_fetch_assoc($sql);
    $_SESSION['user'] = $user;

    if($query){
        echo
            '<script>
            alert("Tambah Saldo Sukses"); window.location = "../page/profil.php"
            </script>';
    }else{
        echo
            '<script>
            alert("Tambah Saldo Gagal");
            </script>';
    }
?>