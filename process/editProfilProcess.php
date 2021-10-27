<?php
    include('../db.php');
    session_start();
    $id = $_SESSION['user']['id'];
    $nama = $_POST['nama'];
    $date = $_POST['date'];
    $gender = $_POST['genderRadio'];
    $country_code = $_POST['country_code'];
    $telp = $_POST['telp'];
    $fullnumber = $country_code.$telp;
    $query = mysqli_query($con,"UPDATE users SET nama='$nama', tgl_lahir='$date', jenis_kelamin='$gender', telp = '$fullnumber' WHERE id = '$id'") or die(mysqli_error($con)); 
    
    $sql = mysqli_query($con, "SELECT * FROM users WHERE id = '$id' ") or die(mysqli_error($con));
    $user = mysqli_fetch_assoc($sql);
    $_SESSION['user'] = $user;

    if($query){
        echo
            '<script>
            alert("Edit Data Sukses"); window.location = "../page/profil.php"
            </script>';
    }else{
        echo
            '<script>
            alert("Edit Data Gagal");
            </script>';
    }
?>