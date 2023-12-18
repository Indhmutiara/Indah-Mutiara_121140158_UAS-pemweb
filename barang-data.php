<h1> Data Barang </h1></br>
<div class="margin">
    <table border="1">
        <tr>
            <th width="50">No</th>
            <th width="120">Kode Barang</th>
            <th width="350">Nama Barang</th>
            <th width="150">Harga</th>
            <th width="150">Tanggal</th>

        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $ambildata = mysqli_query($koneksi, "select * from barang");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            $warna = ($no % 2 == 1) ? "grey" : "black";
            echo "
        <tr bgcolor='$warna'>
        <td align='center'>$no</td>
        <td align='center'>$tampil[kode_barang]</td>
        <td>$tampil[nama_barang]</td>
        <td>$tampil[harga_barang]</td>
        <td>$tampil[tanggal]</td>
        </tr>";
            $no++;
        }
        ?>
    </table>
</div>

<style>
    table {
        border-collapse: collapse;
        font-size: 10pt;
        border: 1px solid #cccccc;
    }

    td {
        padding: 3px;
        height: 25px;
    }

    th {
        background-color: steelblue;
        color: white;
        height: 30px;
    }
</style>