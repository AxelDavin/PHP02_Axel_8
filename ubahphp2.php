<?php
    include './koneksiphp2.php';
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $id_jurusan = $_POST['id_jurusan'];


    $sql = "UPDATE buku SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_jurusan='$id_jurusan' WHERE id='$id'";
    if($conn->query($sql) === TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href= 'tampilphp2.php'> Kembali </a><br>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>