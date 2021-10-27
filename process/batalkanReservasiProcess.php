<?php
  include ('../db.php');
  session_start();
  $id_order = $_GET['id'];
  $id_user = $_SESSION['user']['id'];
  $query = "SELECT jenis_tiket FROM orders where id_order='$id_order'";
  $jenis_tiket = mysqli_query($con, $query);
  if($jenis_tiket == 'Reguler')
    $query = mysqli_query($con,"UPDATE users SET saldo=(saldo + 5000) WHERE id = '$id_user'") or die(mysqli_error($con));
  else
    $query = mysqli_query($con,"UPDATE users SET saldo=(saldo + 10000) WHERE id = '$id_user'") or die(mysqli_error($con));

  $sql = mysqli_query($con, "SELECT * FROM users WHERE id = '$id_user' ") or die(mysqli_error($con));
  $user = mysqli_fetch_assoc($sql);
  $_SESSION['user'] = $user;

  $queryDelete = mysqli_query($con, "DELETE FROM orders WHERE id_order='$id_order'") or die(mysqli_error($con));
  if($queryDelete){
      echo
          '<script>
          alert("Pembatalan Success"); window.location = "../page/riwayat.php"
          </script>';
  }else{
      echo
          '<script>
          alert("Pembatalan Failed"); window.location = "../page/riwayat.php"
          </script>';
  }
?>