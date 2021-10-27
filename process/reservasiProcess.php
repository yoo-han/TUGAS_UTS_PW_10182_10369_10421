<?php
    include('../db.php');
    session_start();
    $lokasi = $_SESSION['lokasi'];
    $id_user = $_SESSION['user']['id'];
    $saldo= $_SESSION['user']['saldo'];
    $title = $_POST['gelar'];
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $country_code = $_POST['country_code'];
    $number= $_POST['noTelp'];
    $jenis_tiket = $_POST['jenis'];
    $tanggal_reservasi = $_POST['tanggal_rsv'];

    if($jenis_tiket == 'Reguler')
        $harga=5000;
    else
        $harga=10000;

    if($saldo < $harga){
        echo
            '<script>
            alert("Saldo Anda Kurang, Top Up Sekarang"); window.location = "../page/tambah_saldo.php"
            </script>';
    }else{
        $query = mysqli_query($con,"UPDATE users SET saldo=(saldo - $harga) WHERE id = '$id_user'") or die(mysqli_error($con));
        $sql = mysqli_query($con, "SELECT * FROM users WHERE id = '$id_user' ") or die(mysqli_error($con));
        $user = mysqli_fetch_assoc($sql);
        $_SESSION['user'] = $user;

        $query = mysqli_query($con,"INSERT INTO orders (id_user,gelar,nama,email,country_code,phone_number,lokasi,jenis_tiket,tanggal_reservasi) VALUES ('$id_user','$title','$name','$email','$country_code','$number','$lokasi','$jenis_tiket','$tanggal_reservasi')")or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Pemesanan Sukses"); window.location = "../page/index.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Pemesanan Gagal");
                </script>';
        }
    }
    
?>