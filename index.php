<?php
include_once 'Mahasiswa.php';
$mahasiswa = new Mahasiswa();
?>
<form action="" method="post">
    <input type="text" name="nim" placeholder="NIM"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="kelas" placeholder="Kelas"><br>
    <input type="submit" name="submit" value="submit"><br>
</form>
<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $mahasiswa->$nim = $nim;
    $mahasiswa->$nama = $nama;
    $mahasiswa->$kelas = $kelas;

    $mahasiswa->insert();
}
?>
<table border="1">
    <tr>
        <td>NIM</td>
        <td>Nama</td>
        <td>Kelas</td>
    </tr>
    <?php foreach ($mahasiswa->selectAll() as $row) { ?>
    <tr>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['kelas']; ?></td>
    </tr>
    <?php } ?>
</table>
