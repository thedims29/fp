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

  
  <section style="padding-top: 110px;" class="company-info">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="asset/logo-black.png" alt="Company Logo" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <div class="company-details">
            <h2>PT. Sewa In Kendaraan, TBK</h2>
            <p>Jl. Samping Gunung No. 48, Sinduharjo, Ngaglik, Sleman, Yogyakarta, Indonesia</p>
            <p>Telp: +62 8123456789 Fax: +62 8123456789</p>
            <p>Email: sewain.co.id</p>
            <p>Solution Center: 1500-4848</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-info">
    <div class="container">
      <h2>Hubungi Kami</h2>
      <p>Silahkan hubungi kami kapanpun jika Anda memiliki pertanyaan atau saran mengenai perusahaan dan layanan kami.</p>
      <div class="row">
        <div class="col-md-6">
          <p><a href="https://wa.me/081911500369" class="btn btn-success btn-sm">Whatsapp </a></p>
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
