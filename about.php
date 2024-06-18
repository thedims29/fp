<?php
include "service/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SewaIn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">

</head>
<body>
  <?php
  include "layout/header.html";
  ?>
  
  

  <section style="padding-top: 110px;" class="image-heading-paragraph">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="asset/logo-black.png" alt="Image Description" class="img-fluid">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-12">
          <h2>Sewa.In</h2>
          <p> Sewa.In didirikan sejak tahun 2022, kami berjalan dalam bidang otomotif dengan sistem penyewaan/rental Mobil. 
            Kami menawarkan kemudahan dan kenyamanan dalam mencari mobil yang sesuai kebutuhan Anda. 
            Disini costumer dapat memilih berbagai macam jenis mobil, mulai dari mobil keluarga hingga mobil sport. 
            Sewa.In menjadi solusi cerdas untuk menyewa kendaraan dengan simpel dan terpercaya.</p>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <h2>Mengapa Memilih Sewa.In?</h2>
          <li>
            Jangkauan luas: SewaIn menyediakan berbagai macam kendaraan, mulai dari motor yang praktis hingga mobil keluarga yang lega, di berbagai kota di Indonesia.
          </li>
          <li>
            Perbandingan mudah: Bandingkan harga sewa, fitur kendaraan, dan baca ulasan dari penyewa lain dengan mudah di aplikasi SewaIn.
          </li>
          <li>
            Transaksi aman: SewaIn menjamin keamanan transaksi Anda dengan sistem pembayaran yang terpercaya.
          </li>
          <li>
            Fitur chat: Berkomunikasi langsung dengan penyewa melalui fitur chat untuk mendiskusikan detail sewa.
          </li>
          <li>
            Dukungan penuh: Tim customer service SewaIn siap membantu Anda 24/7 jika Anda memiliki pertanyaan atau kendala.
          </li>
        </div>
      </div>

    </div>
  </section>
  
 <?php
include "layout/footer.html";
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="javascript.js"></script>
  
</body>
</html>
