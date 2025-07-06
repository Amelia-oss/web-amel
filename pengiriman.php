<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Mengambil data dari form HTML
    $nama = htmlspecialchars($_GET['name']);
    $alamat = htmlspecialchars($_GET['alamat']);
    $distance = (int)$_GET['jarak'];

    // Menghitung biaya berdasarkan jarak
    $biaya = $distance * 15000;

    // Membuat string data yang akan disimpan
    $data = "Nama: $nama\nAlamat: $alamat\nJarak: $distance km\nBiaya: Rp $biaya\n\n";

    // Menyimpan data ke file text
    $file = fopen("indek.txt", "a") or die("Unable to open file!");
    fwrite($file, $data);
    fclose($file);
    
    // Menampilkan data yang disimpan
    echo "<h2>Data Yang Disimpan:</h2>";
    echo "<p>Nama: $nama</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>Tipe Kamera: $distance</p>";
        echo "<p>Total: Rp $biaya</p>";
        echo "<p>Data telah disimpan ke dalam ekspedisi pengiriman kami </p>";
} else {
    echo "Invalid request method";
}
?>   
