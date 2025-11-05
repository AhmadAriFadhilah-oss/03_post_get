<html>
<head>
    <title>Baca input dari form</title>
</head>
<body>
<h1>Baca input dari form</h1>

<form action="script6-1proses.php" method="post">
    <table>
        <tr><td>Nama Anda</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
        <tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
        <tr><td>Jenis Kelamin</td><td>:</td><td>
            <input type="radio" name="sex" value="L">Laki-laki
            <input type="radio" name="sex" value="P">Perempuan
        </td></tr>