<?php
    include './koneksiphp2.php';

    $id = $_GET['id_buku'];

    $sql = "DELETE FROM BUKU WHERE id='$id'";

    if($conn->query($sql) === TRUE){
        echo "data berhasil dihapus <br>";
        echo "<a href= 'tampilphp2.php'> Kembali </a><br>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();