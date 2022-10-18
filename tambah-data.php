<h2>Tambah Data Pegawai</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="100">NIK</td>
            <td><input type="text" name="no_induk"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" size="30"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td><select name="id_jab">
                <option>---</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM jabatan") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_jab]> $data[nama_jab] </option>";
                }
                ?>
                </select>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php

if(isset($_POST['proses'])){

    mysqli_query($koneksi,"insert into karyawan set
    no_induk = '$_POST[no_induk]',
    nama = '$_POST[nama]',
    id_jab = '$_POST[id_jab]'") or die(mysqli_error($koneksi));
    
    echo "<script>alert('Data telah tersimpan')</script>";
	echo "<meta http-equiv=refresh content=1;URL='data-karyawan-final.php'>";
}
 
?>