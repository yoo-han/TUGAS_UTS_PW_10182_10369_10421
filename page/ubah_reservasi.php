<?php $currentPage = 'editReservasi';?>
<?php $title = 'Reschedule Reservasi';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

<?php 
    include ('../db.php');
    $id_order = $_GET['id'];
    $query = "SELECT * FROM orders where id_order='$id_order'";
    $order = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($order);
    $gelar = array('Mr','Mrs');
    $country_code = array('+62','+60','+63', '+66', '+673', '+856', '+855','+84','+95');?>
    <section class="pt-5 align-center">
        <div class="row pt-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="font-weight-bold">Reservasi Tiket</h1>
            <p class="text-muted">Isi data pribadi anda dengan benar.</p>
        </div>
        </div>
    </section>
    <div class="container min-vh-100 pt-5 align-items-center justify-content-center">
        <form action="../process/ubahReservasiProcess.php" method="post">
            <div class="row center">
            <input type="hidden" value="<?php echo $row['id_order'];?>" name="id_order">
                <div class="col-xl-2 col-sm-2 col-md-2">
                    <label for="gelar" class="form-label">Title</label>
                    <select class="form-select align-center" aria-label="Default select example" name="gelar" id="gelar">
                        <?php
                        foreach ($gelar as $gl){
                            echo "<option value='$gl' ";
                            echo $row['gelar']==$gl?'selected="selected"':'';
                            echo ">$gl</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-xl-10 col-sm-10 col-md-10 ">
                    <label for="exampleInputEmail1" class="form-label">Fullname</label>
                        <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?php echo $row['nama'] ?>" required>
                </div>
                <div class="col-xl-12 col-sm-12 col-md-12">
                    <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $row['email'] ?>" required>
                </div>
                <div class="col-xl-2 col-sm-2 col-md-2">
                    <label for="country_code" class="form-label">Title</label>
                    <select class="form-select align-center" aria-label="Default select example" name="country_code" id="country_code" required>
                        <?php
                        foreach ($country_code as $cc){
                            echo "<option value='$cc' ";
                            echo $row['country_code']==$cc?'selected="selected"':'';
                            echo ">$cc</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-xl-10 col-sm-10 col-md-10">
                    <label for="noTelp" class="form-label">Phone Number</label>
                        <input class="form-control" type="number" id="noTelp" name="noTelp" aria-describedby="phoneHelp" value="<?php echo $row['phone_number'] ?>" required>
                </div>
                <div class="col-xl-12 col-sm-12 col-md-12">
                    <label for="location" class="form-label">Lokasi</label>
                        <input class="form-control" id="location" name="location" aria-describedby="emailHelp" value="<?php echo $row['lokasi'] ?>" disabled required>
                </div>
                <div class="col-xl-4 col-sm-4 col-md-4">
                    <label for="jenis_tiket" class="form-label">Jenis Tiket</label>
                        <input class="form-control align-center" id="jenis_tiket" name="jenis_tiket" aria-describedby="emailHelp" value="<?php echo $row['jenis_tiket'] ?>" disabled required>
                </div>
                <div class="col-xl-8 col-sm-8 col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input class="form-control align-center" id="tanggal_rsv" name="tanggal_rsv" value="<?php echo $row['tanggal_reservasi'] ?>" type="date" required>
                </div>
                <div class="d-grid gap-2 mt-5">
                    <button type="submit" class="btn btn-primary" name="Next">Ubah Reservasi</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
    </main>
<?php include('../component/footer.php');?>