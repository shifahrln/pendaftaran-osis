<?php
include "boot.php";
include "koneksi.php";
$cari = $_POST['search'];
$tampil = $konek->query("SELECT  * FROM siswa WHERE nama like '%$cari%' or jurusan like '%$cari%'");
?>
<table class="table table-bordered border-success">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Jurusan</th>
    <th scope="col">no hp</th>
    <th scope="col">periode</th>
    <th scope="col">Waktu</th>
    <th scope="col">Aksi</th>
  </tr>


  <?php
  while ($s = $tampil->fetch_array()) {
    @$no++;
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$s[nama]</td>";
    echo "<td>$s[jurusan]</td>";
    echo "<td>$s[no_hp]</td>";
    echo "<td>$s[periode]</td>";
    echo "<td>$s[waktu]</td>";
  ?>
    <td>
      <button class='btn btn-danger' onclick="document.location.href='delete.php?id=<?= $s['no'] ?>'"><i class='bi bi-trash'></i></button>
      <button class='btn btn-warning' onclick="document.location.href='update.php?id=<?= $s['no'] ?>'"><i class='bi bi-pencil-square'></i></button>
    </td>

  <?php
    echo "</tr>";
  }
  ?>
</table>