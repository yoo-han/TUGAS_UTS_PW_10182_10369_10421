<?php
    include('../db.php');
    $id_order = $_POST['id_order'];
    $gelar = $_POST['gelar'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $country_code = $_POST['country_code'];
    $phone= $_POST['noTelp'];
    $tanggal_reservasi = $_POST['tanggal_rsv'];

    $query = mysqli_query($con,"UPDATE orders SET gelar='$gelar', nama='$nama', email='$email', country_code = '$country_code', phone_number = '$phone', tanggal_reservasi = '$tanggal_reservasi' WHERE id_order = '$id_order'") or die(mysqli_error($con));
    if($query){
        echo
            '<script>
            alert("Reschedule Sukses"); window.location = "../page/riwayat.php"
            </script>';
    }else{
        echo
            '<script>
            alert("Reschedule Gagal");
            </script>';
    }
    
?>