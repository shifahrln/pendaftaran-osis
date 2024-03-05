<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1"></i></button>
<div id="div1">
    <!-- yang di print -->
    <?php
    include "boot.php";
    ?>
    <?php
    include "koneksi.php";
    $tampil = $konek->query("select*from siswa");
    ?>
    <table class="table table-bordered border-success">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">no_hp</th>
            <th scope="col">periode</th>
            <th scope="col">Waktu</th>
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

        <?php
            echo "</tr>";
        }
        ?>
    </table>

    <!-- tutup halaman print -->
    <script>
        function printDiv(el) {
            var a = document.body.innerHTML;
            var b = document.getElementById(el).innerHTML;
            document.body.innerHTML = b;
            window.print();
            document.body.innerHTML = b;
            window.print();
            document.body.innerHTML = a;

        }
    </script>