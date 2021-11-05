<?php
    include './koneksiphp2.php';
    $id_buku = $_GET["id_buku"];

    $sql = "SELECT * FROM buku WHERE id=".$id_buku;
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
?>

<form action="ubahphp2.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo $result['nis']?>"></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa" value="<?php echo $result['nama_siswa']?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $result['jenis_kelamin']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" value="<?php echo $result['alamat']?>"></textarea></td>
        </tr>
        <tr>
            <td>ID Jurusan</td>
            <td>:</td>
            <td><input type="text" name="id_jurusan" value="<?php echo $result['id_jurusan']?>"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="UBAH">
</form>