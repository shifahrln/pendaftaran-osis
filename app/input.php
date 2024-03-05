<?php
include "boot.php";
?>
<div class="container col-5">
  <form class="form form-control bg-info" action="" method="POST">
    <div class=text-center col-150>
      <p>Input Data Calon Anggota Osis</p>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama : </label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>

      <br>
      <select class="form-select" aria-label="Default select example" name="jurusan" required>
        <option selected value="" required>jurusan</option>
        <option>X RPL 1</option>
        <option>X RPL 2</option>
        <option>X RPL 3</option>
        <option>X RPL 4</option>
      </select>


      <label for="exampleInputEmail1" class="form-label">no hp : </label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_hp" required>

      <label for="exampleInputEmail1" class="form-label">periode: </label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="periode" required>


      <div class="text-end">
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
      </div>

  </form>
</div>

<?php
include "koneksi.php";
@$nama = $_POST['nama'];
@$jurusan = $_POST['jurusan'];
@$no_hp = $_POST['no_hp'];
@$periode = $_POST['periode'];




if ($nama == "") {
  echo "maaf nama wajib diisi";
} else {

  echo "<script>
  alert('Data Sudah Tersimpan, Terimakasih');
  </script>";

  $simpan = $konek->query("insert into siswa (nama,jurusan,no_hp,periode) values ('$nama','$jurusan','$no_hp', '$periode')");
}
?>