<?php
// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses data formulir di sini

    // Setelah proses selesai, arahkan ke halaman lain
    header("Location: barang-data.php");
    exit(); // Pastikan untuk menghentikan eksekusi skrip setelah melakukan redirect
}
?>


<form action="" method="post">
    <h1> Halaman Input Barang </h1>
    <div class="margin">
        <table>
            <tr>
                <td width="130"> Kode Barang </td>
                <td><input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" pattern="^([1-9])[0-9]{4}$" required /></td>
            </tr>
            <tr>
                <td> Nama Barang </td>
                <td><input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" required /></td>
            </tr>
            <tr>
                <td> Harga Barang </td>
                <td><input type="text" name="harga_barang" placeholder="Masukkan Harga Barang" required /></td>
            </tr>
            <tr>
                <td> Tanggal </td>
                <td><input type="date" name="tanggal" placeholder="Masukkan Tanggal" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="proses"></td>
            </tr>
        </table>
    </div>
    <p>Untuk Kode Barang wajib diisi dengan angka sebanyak 5 digit</p>
</form>

<?php
include "koneksi.php";
if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "insert into barang set
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]',
    tanggal = '$_POST[tanggal]'");

    echo '<script>
    alert("Input berhasil!");
    </script>';
}
?>