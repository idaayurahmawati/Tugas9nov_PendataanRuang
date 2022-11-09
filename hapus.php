<?php
include("koneksi.php");
isset($_GET['simpen']);
$kode=$_GET['id'];
$sql="DELETE FROM ida_9nov where id=$kode";
$query = mysqli_query($db,$sql);

if($query){
    header("Location:tampil.php?status=sukses");
} else{
    die("akses dilarang");
}
?>