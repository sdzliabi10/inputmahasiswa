<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
    <style>
        .wrap {
            width: 90%;
            margin: 10px auto;
            padding: 15px;
        }
        .card {
            background-color: white; 
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        h5 {
            font-size: 25px;
            text-align: center;
            text-decoration-color: purple;
        }
        table {
            width: 100%;
        }
        button[type="submit"],
        button[type="reset"] {
            margin-top: 10px;
            margin-right: 10px;
        }
        button[type="submit"] {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
         button[type="submit"]:hover {
            background-color: darkgreen;
        }
        button[type="reset"] {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
          button[type="reset"]:hover {
            background-color: darkred;
        }
         @media (max-width: 768px) {
        .wrap {
            width: 90%;
            padding: 10px;
        }
        .card {
            padding: 10px;
        }
        .card td {
            padding: 5px;
            font-size: 16px;
        }
        textarea[name="alamat"] {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
        }
        input[name="hobby[]"] {
            display: inline-block;
            margin-right: 10px;
            width: 50%; 
            box-sizing: border-box;
        }
        select[name="tanggal_lahir"],
        select[name="bulan_lahir"],
        select[name="tahun_lahir"] {
            display: inline-block;
            width: 100%;
        }
    </style>
</head>
<body class="wrap" style="background-color: white;">
<div class="card">
<FORM ACTION="proses-22205024.php" METHOD="POST" NAME="input" enctype="multipart/form-data">
  <h5 id="text" class="text-center"></h5>
  <table width="750" cellpadding="8">
    <h3 style="background-color: rgba(128, 128, 128, 0.6); color: rgba(0, 0, 0, 0.8);" align="center">FORM BIODATA</h3>
    <tr>
    <td>No.Identitas <td>:</td></td>
    <td><input type="text" name="No_Identitas"></td>
    </tr>
    <tr>
        <td>Nama <td>:</td></td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Tempat Lahir <td>:</td></td>
        <td><input type="text" name="tempat"></td>
    </tr>
    <tr>
    <td>Tanggal Lahir <td>:</td></td>
    <td>
        <select name="tanggal_lahir">
            <option value="">Tanggal</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="bulan_lahir">
            <option value="">Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
        <select name="tahun_lahir">
            <option value="">Tahun</option>
            <?php
            $tahun_sekarang = date("Y");
            for ($tahun = $tahun_sekarang; $tahun >= 1999; $tahun--) {
                echo "<option value='$tahun'>$tahun</option>";
            }
            ?>
        </select>
    </td>
</tr>

    <tr>
        <td>Jenis Kelamin <td>:</td></td>
        <td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
    </tr>
    <tr>
    <td>Hobby <td>:</td></td>
    <td><input type="checkbox" name="hobby[]" value="Sepak Bola">Sepak Bola
        <input type="checkbox" name="hobby[]" value="Menggambar">Menggambar
        <input type="checkbox" name="hobby[]" value="Volly">Volly
        <input type="checkbox" name="hobby[]" value="Mancing">Mancing
        <input type="checkbox" name="hobby[]" value="Membuat puisi">Basket</td>
    </tr>
    <tr>
        <td>Alamat <td>:</td></td>
        <td><textarea name="alamat" cols="25" rows="4"></textarea></td>
    </tr>
    <tr>
        <td>Username <td>:</td></td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password <td>:</td></td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
    <td>Pas Foto <td>:</td></td>
    <td><input type="file" name="pas_foto"></td>
    </tr>
    </table>
  <button type="submit" class="btn btn-primary">Kirim</button>
  <button type="reset" class="btn btn-primary">Reset</button>
</FORM>
</div>
<script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
<script>
    new TypeIt("#text", {
        strings: "Welcome To My Project : <br>Membuat Form Biodata.",
        speed: 60,
        waitUntilVisible: true,
    }).go();
</script>
</body>
</html>