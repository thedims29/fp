<?php
// form.php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "rental");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['namaLengkap'];
$address = $_POST['alamatLengkap'];
$pickup_area = $_POST['areaPenjemputan'];
$car_selection = $_POST['jenisMobil'];
$phone = $_POST['noTelp'];
$email = $_POST['alamatEmail'];
$delivery_date = $_POST['tanggalPengiriman'];
$delivery_time = $_POST['jamPengiriman'];
$remarks = $_POST['keterangan'];

// Insert data into the database
$sql = "INSERT INTO users (name, address, pickup_area, car_selection, phone, email, delivery_date, delivery_time, remarks)
        VALUES ('$name', '$address', '$pickup_area', '$car_selection', '$phone', '$email', '$delivery_date', '$delivery_time', '$remarks')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<?php
include "layout/header.html";
?>
    <div class="container" style="padding-top: 110px;">
        <h1>Form Pemesanan</h1>

                <form action="form.php" method="post">
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap *</label>
                <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required>
            </div>

            <div class="mb-3">
                <label for="alamatLengkap" class="form-label">Alamat Lengkap *</label>
                <textarea class="form-control" id="alamatLengkap" name="alamatLengkap" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="areaPenjemputan" class="form-label">Area Penjemputan</label>
                <select class="form-select" id="areaPenjemputan" name="areaPenjemputan" aria-label="Pilih area penjemputan">
                    <option value="">Pilih area penjemputan</option>
                    <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                    <option value="Sleman">Sleman</option>
                    <option value="Bantul">Bantul</option>
                    <option value="Gunung Kidul">Gunung Kidul</option>
                    <option value="Kulon Progo">Kulon Progo</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="jenisMobil" class="form-label">Mobil</label>
                <select class="form-select" id="jenisMobil" name="jenisMobil" aria-label="Pilih Mobil yang disewa">
                    <option value="">Pilih Mobil yang disewa</option>
                    <option value="Daihatsu Ayla">Daihatsu Ayla</option>
                    <option value="Daihatsu Ayla Matic">Daihatsu Ayla Matic</option>
                    <option value="Honda Brio">Honda Brio</option>
                    <option value="Honda Cityhatchback">Honda Cityhatchback</option>
                    <option value="Toyota Raize">Toyota Raize</option>
                    <option value="Honda HRV">Honda HRV</option>
                    <option value="Toyota Calya">Toyota Calya</option>
                    <option value="Toyota Avanza">Toyota Avanza</option>
                    <option value="Toyota Avanza Facelift">Toyota Avanza Facelift</option>
                    <option value="Toyota Veloz">Toyota Veloz</option>
                    <option value="Toyota Rush">Toyota Rush</option>
                    <option value="Mitsubishi Xpander">Mitsubishi Xpander</option>
                    <option value="Toyota Grand Innova">Toyota Grand Innova</option>
                    <option value="Toyota Innova Reborn">Toyota Innova Reborn</option>
                    <option value="Toyota Innova Zenix">Toyota Innova Zenix</option>
                    <option value="Toyota Fortuner Vrz">Toyota Fortuner Vrz</option>
                    <option value="Mitsubishi Pajero Sport">Mitsubishi Pajero Sport</option>
                    <option value="Toyota Alphard">Toyota Alphard</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="noTelp" class="form-label">No Telp</label>
                <input type="tel" class="form-control" id="noTelp" name="noTelp">
            </div>

            <div class="mb-3">
                <label for="alamatEmail" class="form-label">Alamat Email *</label>
                <input type="email" class="form-control" id="alamatEmail" name="alamatEmail">
            </div>

            <div class="mb-3">
                <label for="tanggalPengiriman" class="form-label">Tanggal Pengiriman *</label>
                <input type="date" class="form-control" id="tanggalPengiriman" name="tanggalPengiriman">
            </div>

            <div class="mb-3">
                <label for="jamPengiriman" class="form-label">Jam Pengiriman *</label>
                <input type="time" class="form-control" id="jamPengiriman" name="jamPengiriman">
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan Untuk jenis sewa yang dipilih (Opsional)</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="kirimpesan">Kirim Pesanan</button>
        </form>
    </div>

    <?php
include "layout/footer.html";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="javascript.js"></script>

</body>
</html>