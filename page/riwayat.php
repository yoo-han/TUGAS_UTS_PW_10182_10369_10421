<?php $currentPage = 'riwayat';?>
<?php $title = 'Riwayat Pemesanan';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>
<?php include('../db.php');?>

  <main>
    <div id="print">
    <section class="pt-5 align-center">
        <div class="row pt-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="font-weight-bold">Riwayat Reservasi</h1><?php if($_SESSION['user']['email'] == 'administrator'){ echo '<button type="button" class="btn btn-secondary" style="float: right;" id="getPDF" onclick="getPDF()"><i class="fas fa-print"></i> Print PDF </button>';}?>
            
            <!-- <p class="text-muted"></p> -->
        </div>
        </div>
    </section>
    <div class="container min-vh-100 pt-5 align-items-center align-center justify-content-center">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No. Telepon</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Jenis Tiket</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if($_SESSION['user']['email'] == 'administrator'){
              $query = mysqli_query($con, "SELECT * FROM orders") or die(mysqli_error($con));
          }else{
              $id_user = $_SESSION['user']['id'];
              $query = mysqli_query($con, "SELECT * FROM orders WHERE id_user = '$id_user'") or die(mysqli_error($con));
          }
          if (mysqli_num_rows($query) == 0) {
          echo '<tr> <td colspan="7"> Belum ada Pesanan </td> </tr>';
          }else {
            while($order = mysqli_fetch_assoc($query)){
              echo'
              <tr>
              <th scope="row">'.$order['id_order'].'</th>
              <td>'.$order['gelar'].' '.$order['nama'].'</td>
              <td>'.$order['email'].'</td>
              <td>'.$order['country_code'].$order['phone_number'].'</td>
              <td>'.$order['lokasi'].'</td>
              <td>'.$order['jenis_tiket'].'</td>
              <td>'.$order['tanggal_reservasi'].'</td>
              <td>
              <a href="../page/ubah_reservasi.php?id='.$order['id_order'].'"><i style="color: green" class="fa fa-edit"></i></a>
              <a href="../process/batalkanReservasiProcess.php?id='.$order['id_order'].'" onClick="return confirm ( \'Yakin?\')">
              <i style="color: red" class="fa fa-trash"></i>
              </a>
              </td>
              </tr>';
            }
          }
          ?>
        </tbody>
      </table>
    </div>
    </div>
    
    <script>
    function getPDF() {
      var doc = new jsPDF('l', 'pt','a4');
      doc.setFont("helvetica");
      doc.setFontSize(24);
      doc.text(350, 50, 'Data Reservasi');
     
      // We'll make our own renderer to skip this editor
      var specialElementHandlers = {
        '#getPDF': function(element, renderer){
          return true;
        },
        '.controls': function(element, renderer){
          return true;
        }
      };
    
      // All units are in the set measurement for the document
      // This can be changed to "pt" (points), "mm" (Default), "cm", "in"
      doc.fromHTML($('#print').get(0), 110, 15, {
        'width': 550, 
        'elementHandlers': specialElementHandlers
      });
      
    
      doc.save('Reservasi.pdf');
    }
    </script>

  </main>

<?php include('../component/footer.php');?>