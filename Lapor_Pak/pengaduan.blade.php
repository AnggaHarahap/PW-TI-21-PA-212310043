<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporpak</title>

    <style>
* {box-sizing: border-box}
.kotak {
  padding: 16px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.button {
  background-color: yellow;
  color: black ;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity:2;
}
a {
  color: dodgerblue;
}
.selesai {
  background-color: #f1f1f1;
  text-align: center;
}
    </style>
</head>
<body>
    <div style="width: 30%, margin-left: 35%, margin-top: 40px, margin-bottom: 40px">
        <form action="#">
        <div class="kotak">
            <h1> Formulir Pengaduan Masyarakat</h1>
            <p >Isi Form Dibawah Ini Untuk Membuat Laporan Pengaduan.</p>
            <hr>

            <label for="Nama"><b>Nama Anda</b></label>
            <input type="text" placeholder="Masukan Nama Anda" name="nama" id="nama" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Masukan Email Anda" name="email" id="email" required>

            <label for="daerah"><b>Daerah</b></label>
            <input type="text" placeholder="Masukan Daerah" name="daerah" id="daerah" required>
            
            <!-- <label for="Jenis Pengaduan"><b>Jenis Pengaduan</b></label> 
            <input type="text" placeholder="Jenis Pengaduan" name="Jenis Pengaduan" id="Jenis Pengaduan"> -->

            <label for="address">Laporan aduan</label><br>
            <textarea type="angga" rows="10" cols="30" placeholder="angga">
            </textarea><br>

            <button type="submit" class="button"><b>Kirim</b></button>

            <div class="kotak selesai"> 
            <p>Sudah Selesai? <a href="/home">Kembali Ke Menu Awal</a></p>
        </div>
        </form>
        </div>


</body>
</html>
