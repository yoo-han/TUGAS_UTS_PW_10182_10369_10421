<?php $currentPage = 'daftar_wisata';?>
<?php $title = 'Daftar Tempat Wisata';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

    <main>
    <section class="pt-5 align-center">
        <div class="row pt-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="font-weight-bold">Destinasi Wisata</h1>
            <p class="text-muted">Destinasi wisata yang tersedia saat ini.</p>
        </div>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
            <div class="card shadow-sm">
                <img src="../resources/WhatsApp Image 2021-10-22 at 17.03.00.jpeg" alt="Foto 1">
                <div class="card-body">
                <h4 class="card-text">Candi Borobudur<span><h6>Kab. Magelang, Jawa Tengah</h6></span></h4>
                <p class="card-text">Borobudur adalah candi Budha terbesar pada masa abad ke-19, memiliki luas kira-kira 123 x 123 meter. Berbentuk seperti piramida dengan tinggi kira-kira 29 meter dan terdiri lebih dari 500 patung Budha dan tersusun lebih dari 2 juta batu.</p>
                <div class="align-right">
                    <form action="./reservasi.php" method="post">
                        <button type="submit" name="lokasi" value="Candi Borobudur" class="btn btn-outline-primary">Reservasi Sekarang</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card shadow-sm">
                <img src="../resources/WhatsApp Image 2021-10-22 at 17.10.40.jpeg" alt="Foto 2">
                <div class="card-body">
                <h4 class="card-text">Gunung Bromo<span><h6>Kab. Malang, Jawa Timur</h6></span></h4>
                <p class="card-text">Gunung Bromo atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang.</p>
                <div class="align-right">
                    <form action="./reservasi.php" method="post">
                        <button type="submit" name="lokasi" value="Gunung Bromo" class="btn btn-outline-primary">Reservasi Sekarang</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card shadow-sm">
                <img src="../resources/WhatsApp Image 2021-10-22 at 17.15.39.jpeg" class="d-block w-100" alt="Foto 3">
                <div class="card-body">
                <h4 class="card-text">Museum Benteng Vredeburg<span><h6>Kota Yogyakarta, Daerah Istimewa Yogyakarta</h6></span></h4>
                <p class="card-text">Museum Benteng Vredeburg bahasa Jawa: ꦩꦸꦱꦶꦪꦸꦩ꧀​ꦧꦺꦠꦺꦁ​ꦮ꦳ꦽꦢꦼꦧꦸꦂꦒ꧀, translit. Musiyum Bètèng Vredeburg adalah sebuah benteng yang terletak di depan Gedung Agung dan Kraton Kesultanan Yogyakarta. Sekarang, benteng ini menjadi sebuah museum.</p>
                <div class="align-right">
                    <form action="./reservasi.php" method="post">
                        <button type="submit" name="lokasi" value="Museum Benteng Vredeburg" class="btn btn-outline-primary">Reservasi Sekarang</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            
    </main>

<?php include('../component/footer.php');?>