<?php $currentPage = 'index';?>
<?php $title = 'OurTrip';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

    <main>
      <!-- <div class="container-fluid"> -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade mb-5" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../resources/WhatsApp Image 2021-10-22 at 17.03.00.jpeg" class="d-block w-100" alt="Foto 1">
              <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                  <h1>OurTrip</h1>
                  <p><b>Dapatkan Experience Perjalanan Anda Bersama OurTrip</b></p>
                  <?php if(isset($_SESSION['isLogin'])){
                    echo '<p><a class="btn btn-lg btn-primary" href="../page/daftar_wisata.php">Pesan Sekarang</a></p>';
                  }else{
                    echo '<p><a class="btn btn-lg btn-primary" href="../page/register.php">Daftar Sekarang</a></p>';
                  }?>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../resources/WhatsApp Image 2021-10-22 at 17.10.40.jpeg" class="d-block w-100" alt="Foto 2">
              <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                  <h1>OurTrip</h1>
                  <p><b>Dapatkan Experience Perjalanan Anda Bersama OurTrip</b></p>
                  <?php if(isset($_SESSION['isLogin'])){
                    echo '<p><a class="btn btn-lg btn-primary" href="../page/daftar_wisata.php">Pesan Sekarang</a></p>';
                  }else{
                    echo '<p><a class="btn btn-lg btn-primary" href="../page/register.php">Daftar Sekarang</a></p>';
                  }?>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../resources/WhatsApp Image 2021-10-22 at 17.15.39.jpeg" class="d-block w-100" alt="Foto 3">
              <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                  <h1>OurTrip</h1>
                  <p><b>Dapatkan Experience Perjalanan Anda Bersama OurTrip</b></p>
                  <?php if(isset($_SESSION['isLogin'])){
                    echo '<p><a class="btn btn-lg btn-primary" href="../page/daftar_wisata.php">Pesan Sekarang</a></p>';
                  }else{
                    echo '<p><a class="btn btn-lg btn-primary" href="../page/register.php">Daftar Sekarang</a></p>';
                  }?>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      <!-- </div> -->
      <hr>
      <div class="container align-center mt-5 mb-5">
        <div class="align-center">
          <h2>Tentang OurTrip</h2>
          <h5 class="text-black-50 mb-5">Siapakah kami?</h5>
        </div>
        <p class="mt-2 align-center">OurTrip merupakan agen wisata perjalanan yang didirikan pada tahun 2021. Kami terdiri dari profesional yang memiliki pengalaman di bidang pariwisata. Saat ini kami melayani pemesanan tiket lokasi wisata dengan harga terjangkau, aman, dan terpercaya. Selain sebagai layanan pemesanan tiket wisata, kami pun menyediakan Paket Tour Domestik dan International.</p>
        <h5>Visi</h5>
          <p>Menjadi perusahaan multi nasional tingkat global dalam jasa pelayanan transportasi, akomodasi, tours & travel yang dapat memberikan kontribusi pertumbuhan ekonomi.</p>
        <h5>Misi</h5>
          <li>Melayani dan menyediakan produk yang terbaik kepada seluruh pelanggan dan mitra, untuk jasa transportasi, akomodasi dan tours & travel. </li>
          <li>Menyiapkan SDM yang handal dan terampil dibidangnya dan berkomitmen pada standard kerja yang tinggi.</li>
      </div>
      <hr>
      <div class="container align-center mt-5 mb-5">
        <h2>Kelebihan OurTrip</h2>
        <h5 class="text-black-50 mb-3">Penasaran dengan kelebihan OurTrip dibanding yang lain?</h5>
        <br><br>
        <div class="row">
          <div class="col-lg-4">
            <img src="../resources/Cepat.png" width="140" height="130">
            <h2>Cepat</h2>
            <p>OurTrip mengutamakan kecepatan proses demi kenyamanan pelanggan.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="../resources/Hemat.png" width="140" height="130">
            <h2>Murah</h2>
            <p>Harga tiket yang cukup ekonomis dan dapat bersaing dengan yang lain.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="../resources/Aman.png" width="140" height="130">
            <h2>Aman</h2>
            <p>Lakukan pemesanan tiket anda dengan aman bersama OurTrip.</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>
      <hr>
      <div class="container">
        <div class="align-center">
          <h2>Ulasan Pelanggan</h2>
          <h5 class="text-black-50 mb-5">Berikut beberapa ulasan pelanggan OurTrip</h5>
        </div>
        <div class="container mt-5 mb-5">
          <div class="row g-2">
              <div class="col-md-4">
                  <div class="card p-3 text-center px-4">
                      <div class="user-image"> <img src="https://images.squarespace-cdn.com/content/v1/559b2478e4b05d22b1e75b2d/1549568089409-SJ70E6DVG3XTE70232OL/Nesbit.jpg" class="rounded-circle" width="80" height="80"> </div>
                      <div class="user-content">
                          <h5 class="mb-0">Heri Utama</h5> <span>Bali, Indonesia</span>
                          <p class="mt-2">Terima kasih OurTrip. Pelayanan yang cepat dan aman, membuat saya menjadi nyaman ketika hendak berpergian.</p>
                      </div>
                      <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card p-3 text-center px-4">
                      <div class="user-image"> <img src="http://www.zennioptical.com/blog/wp-content/uploads/2017/08/square-glasses-round-face.jpg" class="rounded-circle" width="80" height="80"> </div>
                      <div class="user-content">
                          <h5 class="mb-0">Peter Yasopp</h5> <span>Sulawesi Utara, Indonesia</span>
                          <p class="mt-2">Wisata bersama keluarga menjadi mudah dengan OurTrip. Pengalaman yang menarik bersama OurTrip! Terima kasih.</p>
                      </div>
                      <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card p-3 text-center px-4">
                      <div class="user-image"> <img src="https://i.pinimg.com/736x/e9/e5/86/e9e58638830cbee43a6d9841d05f0bbd.jpg" class="rounded-circle" width="80" height="80"> </div>
                      <div class="user-content">
                          <h5 class="mb-0">Natashaa</h5> <span>Yogyakarta, Indonesia</span>
                          <p class="mt-2">Cepat, aman, dan nyaman ketika pesan tiket disini. Wisata jadi tidak perlu pusing!</p>
                      </div>
                      <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      </main>
<?php include('../component/footer.php');?>




