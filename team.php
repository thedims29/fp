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
  

  <section style="padding-top: 110px;">
    <div class="container">
      <h2 class="text-center">Our Team</h2>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="asset/tim1.jpg" alt="Team member 1">
            <h3>Rezanda</h3>
            <p>Leader</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="asset/tim2.jpg" alt="Team member 2">
            <h3>Dimas</h3>
            <p>Programmer</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="asset/kevintampan.jpg" alt="Team member 3">
            <h3>Kevin</h3>
            <p>Marketing</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <img src="asset/tim4.jpg" alt="Team member 4">
            <h3>Asep</h3>
            <p>Konsumsi</p>
          </div>
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
