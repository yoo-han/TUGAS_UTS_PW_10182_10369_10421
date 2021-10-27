<?php
    include ('../db.php');
    ob_start();
    session_start();
    $id_user = $_SESSION['user']['id'];
    $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id='$id_user'") or die(mysqli_error($con));

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
    session_destroy();
    header("location: ../page/index.php");
?>