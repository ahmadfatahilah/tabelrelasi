<h2>Data Jabatan</h2>

<table border="1" style="border-collapse:collapse">
<tr bgcolor="#eee">
    <th width="50">No</th>
    <th width="100">ID Jabatan</th>
    <th width="150">Nama Jabatan</th>
    <th width="100">Gaji Pokok</th>
    <th width="100">Tunjangan</th>
</tr>

<?php
include "koneksi.php";

$no=1;
$ambildata = mysqli_query($koneksi,"SELECT * FROM  jabatan") or die (mysqli_error($koneksi));

while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[id_jab]</td>
            <td>$tampil[nama_jab]</td>
            <td align='center'>$tampil[gaji_pokok]</td>
            <td align='center'>$tampil[tunjangan]</td>
        <tr>";
        $no++;
    }
    ?>
</table>





