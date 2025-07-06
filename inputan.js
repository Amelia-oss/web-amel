function HitungBiaya() {
    // Ambil nilai input dari form
    var name = document.getElementById("name").value;
    var address = document.getElementById("alamat").value;
    var distance = document.getElementById("jarak").value;
  
    // Perhitungan biaya pengiriman barang
    var biayaPengfrtiriman = 0;
    if (distance <= 10) {
      biayaPengiriman = distance * 15000;
    } else if (distance <= 20) {
      biayaPengiriman = 10 * 15000 + (distance - 10) * 15000;
    } else if (distance <= 30) {
      biayaPengiriman = 20 * 15000 + (distance - 20) * 15000;
    } else {
      biayaPengiriman = 30 * 15000 + (distance - 30) * 15000;
    }
  
    // Tampilkan hasil perhitungan
  
    document.getElementById('indek').innerHTML =
    var hasil = "Nama: " + name + "<br>";
    hasil += "Alamat: " + address + "<br>";
    hasil += "Jarak Alamat Yang Dituju: " + distance + " km<br>";
    hasil += "Biaya Pengiriman Barang: Rp " + biayaPengiriman + "<br>";
  };