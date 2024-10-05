<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Penjualan Pempek</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2, h3 {
            color: #004085; /* Biru tua */
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        form:hover {
            transform: scale(1.02);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold; /* Bold untuk label */
        }
        input[type="number"] {
            width: 100px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #007bff; /* Border biru */
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        input[type="number"]:focus {
            border-color: #0056b3; /* Border lebih gelap saat fokus */
            outline: none;
        }
        input[type="submit"] {
            background-color: #007bff; /* Biru */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold; /* Bold untuk tombol */
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
        }
        .results {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 5px solid #007bff;
        }
        .payment-info {
            margin-top: 30px;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .gif-container {
            text-align: center;
            margin-top: 20px;
        }
        .item-section {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<h1>Pempek Bulin Serengseng</h1>

<form method="post">
    <div class="item-section">
        <h2>Pempe Mentah Kecil (Rp 5.000/pcs)</h2>
        Lenjer Kecil: <input type="number" name="lenjer_kecil" value="0" min="0"><br>
        Adaan: <input type="number" name="adaan" value="0" min="0"><br>
        Kulit: <input type="number" name="kulit" value="0" min="0"><br>
        Keriting: <input type="number" name="keriting" value="0" min="0"><br>
        Telur: <input type="number" name="telur" value="0" min="0"><br>
    </div>

    <div class="item-section">
        <h2>Pempe Mentah Besar (Rp 17.000/pcs)</h2>
        Kapal Selam: <input type="number" name="kapal_selam" value="0" min="0"><br>
        Lenjer Besar: <input type="number" name="lenjer_besar" value="0" min="0"><br>
    </div>

    <div class="item-section">
        <h2>Pempe Kecil Goreng (Rp 5.500/pcs)</h2>
        Lenjer Kecil: <input type="number" name="lenjer_kecil_goreng" value="0" min="0"><br>
        Adaan: <input type="number" name="adaan_goreng" value="0" min="0"><br>
        Kulit: <input type="number" name="kulit_goreng" value="0" min="0"><br>
        Keriting: <input type="number" name="keriting_goreng" value="0" min="0"><br>
        Telur: <input type="number" name="telur_goreng" value="0" min="0"><br>
    </div>

    <div class="item-section">
        <h2>Pempe Besar Goreng (Rp 18.000/pcs)</h2>
        Kapal Selam: <input type="number" name="kapal_selam_goreng" value="0" min="0"><br>
        Lenjer Besar: <input type="number" name="lenjer_besar_goreng" value="0" min="0"><br>
    </div>

    <input type="submit" name="hitung" value="Hitung Total Penjualan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Harga per item
    $harga_pempe_mentah_kecil = 5000;
    $harga_pempe_mentah_besar = 17000;
    $harga_pempe_kecil_goreng = 5500;
    $harga_pempe_besar_goreng = 18000;

    // Mengambil input jumlah dari form
    $lenjer_kecil = $_POST['lenjer_kecil'] ?? 0;
    $adaan = $_POST['adaan'] ?? 0;
    $kulit = $_POST['kulit'] ?? 0;
    $keriting = $_POST['keriting'] ?? 0;
    $telur = $_POST['telur'] ?? 0;

    $kapal_selam = $_POST['kapal_selam'] ?? 0;
    $lenjer_besar = $_POST['lenjer_besar'] ?? 0;

    $lenjer_kecil_goreng = $_POST['lenjer_kecil_goreng'] ?? 0;
    $adaan_goreng = $_POST['adaan_goreng'] ?? 0;
    $kulit_goreng = $_POST['kulit_goreng'] ?? 0;
    $keriting_goreng = $_POST['keriting_goreng'] ?? 0;
    $telur_goreng = $_POST['telur_goreng'] ?? 0;

    $kapal_selam_goreng = $_POST['kapal_selam_goreng'] ?? 0;
    $lenjer_besar_goreng = $_POST['lenjer_besar_goreng'] ?? 0;

    // Perhitungan subtotal
    $subtotal_mentah_kecil = ($lenjer_kecil + $adaan + $kulit + $keriting + $telur) * $harga_pempe_mentah_kecil;
    $subtotal_mentah_besar = ($kapal_selam + $lenjer_besar) * $harga_pempe_mentah_besar;
    $subtotal_kecil_goreng = ($lenjer_kecil_goreng + $adaan_goreng + $kulit_goreng + $keriting_goreng + $telur_goreng) * $harga_pempe_kecil_goreng;
    $subtotal_besar_goreng = ($kapal_selam_goreng + $lenjer_besar_goreng) * $harga_pempe_besar_goreng;

    // Total keseluruhan
    $total_penjualan = $subtotal_mentah_kecil + $subtotal_mentah_besar + $subtotal_kecil_goreng + $subtotal_besar_goreng;

    // Tampilkan hasil
    echo "<div class='results'>";
    echo "<h2>Hasil Penjualan</h2>";
    echo "Total Pempe Mentah Kecil: Rp. " . number_format($subtotal_mentah_kecil, 0, ',', '.') . "<br>";
    echo "Total Pempe Mentah Besar: Rp. " . number_format($subtotal_mentah_besar, 0, ',', '.') . "<br>";
    echo "Total Pempe Kecil Goreng: Rp. " . number_format($subtotal_kecil_goreng, 0, ',', '.') . "<br>";
    echo "Total Pempe Besar Goreng: Rp. " . number_format($subtotal_besar_goreng, 0, ',', '.') . "<br>";
    echo "<h3>Total Penjualan: Rp. " . number_format($total_penjualan, 0, ',', '.') . "</h3>";
    echo "</div>";
}
?>

<div class="payment-info">
    <h3>Informasi Pembayaran</h3>
    <p>Silakan lakukan pembayaran ke rekening BNI:</p>
    <p><strong>Nomor Rekening: 0983980433</strong></p>
    <p>An/DENI SAPUTRA</p>
    <p>Harap konfirmasi setelah melakukan pembayaran.</p>

    <!-- Tambahkan QRIS di sini -->
    <h3>Pembayaran via QRIS</h3>
    <p>Scan QRIS di bawah ini untuk pembayaran:</p>
    <img src="Qris.jpeg" alt="Silahkan Scan Qr Code" style="max-width: 300px; height: auto;">
</div>

</body>
</html>
