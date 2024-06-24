<?php
// admin.php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "rental");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Query to retrieve all data from the users table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Display the data in a table
    echo "<table border='1'>";
    echo "<tr><th>Nama Lengkap</th><th>Alamat Lengkap</th><th>Area Penjemputan</th><th>Mobil</th><th>No Telp</th><th>Alamat Email</th><th>Tanggal Pengiriman</th><th>Jam Pengiriman</th><th>Keterangan</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["name"]. "</td>";
        echo "<td>". $row["address"]. "</td>";
        echo "<td>". $row["pickup_area"]. "</td>";
        echo "<td>". $row["car_selection"]. "</td>";
        echo "<td>". $row["phone"]. "</td>";
        echo "<td>". $row["email"]. "</td>";
        echo "<td>". $row["delivery_date"]. "</td>";
        echo "<td>". $row["delivery_time"]. "</td>";
        echo "<td>". $row["remarks"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found";
}

// Close the connection
mysqli_close($conn);
?>