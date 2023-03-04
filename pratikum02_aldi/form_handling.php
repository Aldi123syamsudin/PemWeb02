<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
   <form action="belajar_post.php" method="POST">
        <!-- tipe teks     -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><p></p>
        <!-- tipe Radio -->
        <label for="">Jenis Kelamin :</label><br>
        <input value="Laki-Laki" type="radio" name="jenis_kelamin">
            <label for="">Laki-Laki</label>
        <input value="Perempuan" type="radio" name="jenis_kelamin">
            <label for="">Perempuan</label><br>
        <!-- tipe chackbox -->
        <label for="">Hobi</label><br>
        <input value="Futsal" type="checkbox" name="hobi">
            <label for="">Futsal</label><br>
        <input value="Renang" type="checkbox" name="hobi">
            <label for="">Renang</label><br>
        <input value="Tinju" type="checkbox" name="hobi">
            <label for="">Tinju</label><p>
        <!-- tipe number -->
        <label for="">NIM</label><br>
        <input type="number" name="nim"><p></p>
        <!-- select -->
        <label for="">prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem informasi">Sistem Informasi</option>
            <option value="Bisnin Digital">Bisnis Digital</option>
        </select><p></p>
        <!-- button -->
        <button type="submit">Kirim !</button>
        <button type="reset">reset</button>
   </form> 
</body>
</html>