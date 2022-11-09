<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php");
}
$kode=$_GET['id'];
$sql="SELECT * FROM ida_9nov where id=$kode";
$query=mysqli_query($db,$sql);
$ida_9nov=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data Tidak Ditemukan");
}
?>

<html>
<head>
</head>
<body>
    <h1>Pendataan Ruang SMKN 1 SAYUNG</h1>
    <form action="prosesedit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $ida_9nov['id'] ?>"/>
            <p>
                <label for="name">Nama : </label>
                <input type="text" name="nama" value="<?php echo $ida_9nov['nama'] ?>"/>
            </p>

    <p>
    <label for="jenis">Jenis : </label>
    <select name="jenis" value="<?php echo $ida_9nov['jenis'] ?>">
      <option value="laboratorium"> laboratorium </option>
      <option value="kantin"> kantin </option>
      <option value="ruang kelas"> ruang kelas </option>
      <option value="mushola"> mushola </option>
      <option value="aula"> aula </option>
    </select>

      <p>
         <label for="kondisi">Kondisi :</label>
        <input type="text" name="kondisi" value="<?php echo $ida_9nov['kondisi'] ?>"/>

     </p>

    <p>
    <input type="submit" name="tambah" value="tambah" />
   </p>
</fieldset>
</form>
</body>
</html>



    