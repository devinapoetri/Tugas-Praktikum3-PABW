<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>

    <form action="/simpan" method="POST">
    @csrf
    <label>Nama : </label> <br>
    <input type="text" name="nama"><br><br>

    <label>NIM : </label><br>
    <input type="text" name="nim">

    <label>Jurusan : </label><br>
    <input type="text" name="jurusan" id="">

    <button type="submit">Simpan</button>
    </form>
    
</body>
</html>