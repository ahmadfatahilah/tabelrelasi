<h2>Data Karyawan</h2>

<table border="1" style="border-collapse:collapse">
<tr bgcolor="#eee">
    <th width="50">No</th>
    <th width="100">No.Induk</th>
    <th width="150">Nama Karyawan</th>
    <th width="100">ID Jabatan</th>

</tr>

<?php
include "koneksi.php";

$no=1;
$ambildata = mysqli_query($koneksi,"SELECT * FROM karyawan") or die (mysqli_error($koneksi));

while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[no_induk]</td>
            <td>$tampil[nama]</td>
            <td align='center'>$tampil[id_jab]</td>
        <tr>";
        $no++;
    }
    ?>
</table>





