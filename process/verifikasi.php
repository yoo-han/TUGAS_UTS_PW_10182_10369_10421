<?php $title = 'Verifikasi';?>
<?php include('../component/header.php');?>

<?php
    require('../db.php');

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM users WHERE verif_code = '$code'";
        $query = mysqli_query($con,$sql);

        if(mysqli_num_rows($query)>0){
            $user = mysqli_fetch_assoc($query);
            $id = $user['id'];
            $sql = "UPDATE users SET is_verified = 1 WHERE id = $id";
            $query = mysqli_query($con,$sql);
            if($query){
                echo 
                '<script>
                alert("VERIFIKASI BERHASIL!");
                window.location = "../page/index.php"
                </script>';
            }else {
                echo '<script>
                alert("VERIFIKASI GAGAL. ERROR: "'.$query.');
                window.location = "../page/index.php"
                </script>';
            }
        }else {
            echo 
            '<script>
            alert("CODE TIDAK VALID!");
            window.location = "../page/index.php"
            </script>';
        }
    }else {
        echo 
        '<script>
        alert("CODE TIDAK VALID!");
        window.location = "../page/index.php"
        </script>';
    }
?>