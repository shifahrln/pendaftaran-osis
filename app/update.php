<?php
include "koneksi.php";
$id = $_GET['id'];
$ubah = $konek->query("select*from siswa where no='$id'");
$a = $ubah->fetch_array();
?>
<?php
include "boot.php";
?>
<div class="container col-5">
    <form class="form form-control" action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $a['nama'] ?>" required>


            <label for="exampleInputEmail1" class="form-label">Jurusan : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jurusan" value="<?= $a['jurusan'] ?>" required>

            <label for="exampleInputEmail1" class="form-label">no_hp : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_hp" value="<?= $a['no_hp'] ?>" required>

            <label for="exampleInputEmail1" class="form-label">periode : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="periode" value="<?= $a['periode'] ?>" required>



            <div class="text-end">
                <button type="submit" class="btn btn-primary mt-3" name="ganti">Simpan</button>
            </div>

    </form>
</div>

<?php
if (!isset($_POST['ganti'])) {
    echo "silahkan ubah";
} else {
    $edit = $konek->query("update siswa set nama='$_POST[nama]',jurusan='$_POST[jurusan]' , no_hp='$_POST[no_hp]', periode='$_POST[periode]' where no='$id'");
    echo "data berhasil diubah <a href=data.php>kembali</a>";
    echo "<script>
        alert('Data berhasil di edit');
        </script>";
}
?>