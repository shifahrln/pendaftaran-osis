<head>

</head>

<?php
include "boot.php";
?>
<?php
include "koneksi.php";
$tampil = $konek->query("select*from siswa");
?>
<table class="table table-bordered border-success">
  <tr>
    <th scope="col">no</th>
    <th scope="col">nama</th>
    <th scope="col">jurusan</th>
    <th scope="col">No_Hp</th>
    <th scope="col">periode</th>
    <th scope="col">waktu</th>
    <th scope="col">aksi</th>
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

      <a class='btn btn-danger' onclick="return confirm('apakah anda yakin menghapus')" href='delete.php?id=<?= $s['no'] ?>'><i class='bi bi-trash'></i></i></a>



      <a class='btn btn-warning' onclick="return confirm('apakah anda ingin mengedit')" href='update.php?id=<?= $s['no'] ?>'><i class='bi bi-pencil-square'></i></i></a>
    </td>


  <?php
    // echo "</tr>";

    // echo"<script>
    //   alert('Data Sudah Tersimpan Terimakasih');
    //   </script>";

  }
  ?>

</table>
</body>

</html>