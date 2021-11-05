<?php
    include './koneksiphp2.php';
    echo "<a href='formulirphp2.php'>Tambah data</a><br>";

    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "NIS : " . $baris[1] . "<br>";
        echo "Nama : " . $baris[2] . "<br>";
        echo "Jenis Kelamin : " . $baris[3] . "<br>";
        echo "Alamat : " . $baris[4] . "<br>";
        echo "ID Jurusan : " . $baris[5] . "<br>";
        echo "<a href='ubah_dataphp2.php?id_buku=$baris[0]'>Ubah</a>";
        echo "<a href='hapus.php?id_buku=$baris[0]'>Hapus</a>";
        $a++;
    }
    $conn->close();
?>
