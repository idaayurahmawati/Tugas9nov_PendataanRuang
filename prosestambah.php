<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$kondisi=$_POST['kondisi'];

$sql= "INSERT INTO ida_9nov (nama, jenis, kondisi) VALUES ('$nama','$jenis','$kondisi')";
$query=mysqli_query($db,$sql);
}
?>
                                                                                                                                                                                                                                                                                                                                                                                                                  