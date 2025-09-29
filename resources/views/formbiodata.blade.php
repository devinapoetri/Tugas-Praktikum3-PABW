<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <h2>Input Biodata</h2>
    <form action="/data" method="post">
        @csrf
        <label>Nama : </label>
        <input type="text" name="nama"><br><br>

        <label>NIM : </label>
        <input type="number" name="nim"><br><br>

        <label>Jurusan : </label>
        <textarea name="jurusan"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
    
</body>
</html>