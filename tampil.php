<?php
include("koneksi.php");
?>


<html>
<head>
</head>
<body>
    <h1> APLIKASI PENDATAAN RUANG SMK 1 SAYUNG</h1>

    <table border="1">
        <tr>
            <th>NAMA</th>
            <th>JENIS</th>
            <th>KONDISI</th>
</tr>

<?php
include("koneksi.php");
$sql="SELECT * FROM ida_9nov";
$query=mysqli_query($db, $sql);

while($pendataan=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$pendataan['nama']."</td>";
    echo "<td>".$pendataan['jenis']."</td>";
    echo "<td>".$pendataan['kondisi']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$pendataan['id']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$pendataan['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>