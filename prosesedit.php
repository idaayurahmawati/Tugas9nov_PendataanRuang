<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $kode= $_POST['id'];
    $nama= $_POST['nama'];
    $jenis= $_POST['jenis'];
    $kondisi= $_POST['kondisi'];

    $sql = "UPDATE ida_9nov SET  nama='$nama', jenis='$jenis', kondisi='$kondisi' WHERE id=$kode";
    $query= mysqli_query($db,$sql);

    if($query){
        header('Location:tampil.php');
    } else{
        die ("gagal mengedit");
    }
}
?>