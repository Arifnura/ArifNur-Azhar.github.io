<?php 
$nama_lengkap = "Arif Nur Azhar"; 
$ttl= "Cilacap, 2 Mei 2004"; 
$alamat = "Jl. Rau, Cilacap"; 
$agama = "Islam"; 
$pekerjaan = "Mahasiswa"; 
$status = "Perjaka" ; 
// echo "Nama Lengkap : " . $nama_lengkap . "<br>"; 
// echo "Tempat/Tanggal Lahir :" . $ttl . "<br>"; 
// echo "Alamat: " . $alamat . "<br>"; 
// echo "Agama : " . $agama . "<br>";
// echo "Pekerjaan : " . $pekerjaan . "<br>";
// echo "Status: " . $status . "<br>";
 
echo "<h2>" . "BIODATA SAYA ADALAH SEBAGAI BERIKUT". "</h2>";

?>

<table border=0>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>
            <?php
                echo"$nama_lengkap";
            ?>
        </td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td>
            <?php
             echo"$ttl";
            ?>
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
            <?php
             echo"$alamat";
            ?>
        </td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td>
            <?php
              echo"$agama";
            ?>
        </td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>
            <?php
              echo"$pekerjaan";
            ?>
        </td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td>
            <?php
              echo"$status";
            ?>
        </td>
    </tr>
</table>