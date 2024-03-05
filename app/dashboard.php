<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JUMLAH DATA WARGA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    #dashboard-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin: 20px;
    }

    .widget {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 10px;
      flex: 1;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <header>
    <h2>DATA ANGGOTA OSIS</h2>
  </header>

  <div id="dashboard-container">
    <div class="widget">
      <h4>Seluruh data calon osis</h4>
      <?php
      include "boot.php";
      include "koneksi.php";

      // Query untuk menghitung jumlah total warga
      $query = $konek->query("SELECT COUNT(*) as total_osis FROM siswa");
      $row = $query->fetch_assoc();
      $total_osis = $row['total_osis'];
      ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>

    
    <div class="widget">
    <?php 
include "boot.php";
?>
<?php
include "koneksi.php";
$tampil=$konek ->query("select*from siswa");
?>
<table class="table table-bordered border-success">
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">jurusan</th>
      <th scope="col">No_Hp</th>
      <th scope="col">periode</th>
      <th scope="col">waktu</th>
    </tr>

   
    <?php
while($s=$tampil->fetch_array()){
  @$no++;
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$s[nama]</td>";
    echo "<td>$s[jurusan]</td>";
    echo "<td>$s[no_hp]</td>";
    echo "<td>$s[periode]</td>";
    echo "<td>$s[waktu]</td>";
     ?>
    

    <?php
    echo "</tr>";
 
}
?>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

  </div>

  <footer>
    <p>&copy;shifaherlina</p>
  </footer>

  <script>
    // Tambahkan skrip JavaScript untuk interaksi lebih lanjut jika diperlukan
  </script>
</body>

</html>