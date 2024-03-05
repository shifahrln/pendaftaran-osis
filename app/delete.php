<?php
$id = $_GET['id'];

include "koneksi.php";
$delete = $konek->query("delete from siswa where no='$id'");
?>
<script>
    document.location = 'data.php';
</script>