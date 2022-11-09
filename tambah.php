<DOCTYPE html>
<html lang="en">
<head>
    <title>APLIKASI PENDATAAN</title>
</head>
<body>
    <header>
        <h3>APLIKASI PENDATAAN</h3>
</header>
<form action="prosestambah.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama  :</label>
            <input type="text" name="nama"/>
        </p>
        <p>
            <label for="jenis">JENIS :</label>
            <select name="jenis">
            <option value =""></option>
                <option value ="laboratorium">Laboratorium</option>
                <option value ="kantin">Kantin</option>
                <option value ="ruang kelas">Ruang kelas</option>
                <option value ="mushola">Mushola</option>
                <option value ="aula">Aula</option>
        </select>
    </p>
    <p>
        <label for="kondisi">Kondisi :</label>
        <input type="text" name="kondisi"/>
</p>
    <P>
        <input type="submit" value="tambah" name="tambah" />
</p>
</fieldset>
</form>
</body>
</html>