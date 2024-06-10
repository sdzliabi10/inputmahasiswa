<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NoIdentitas = $_POST['No_Identitas'];
    $nama = $_POST["nama"];
    $tempat_lahir = $_POST["tempat"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $bulan_lahir = $_POST["bulan_lahir"];
    $tahun_lahir = $_POST["tahun_lahir"];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST["alamat"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hobby = implode(", ", $_POST["hobby"]);

    $targetFolder = 'uploads/';

        $fileName = $_FILES['pas_foto']['name'];

        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $fileTmpName = $_FILES['pas_foto']['tmp_name'];

        $uniqueFileName = uniqid() . '.' . $fileExtension;

        $path = $targetFolder . $uniqueFileName;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
    <style>
        .wrap {
            width: 800px;
            margin: 10px auto;
            padding: 15px;
        }
        .card {
            background-color: white; 
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 50%;
            height: auto;
        }
        table {
            width: 100%;
        }
        .btn-primary {
           background: linear-gradient(45deg, pink, yellow);
           color: white;
           padding: 10px 20px;
           text-decoration: none;
           border: none;
           border-radius: 5px;
           transition: background 0.3s ease-in-out;
        }
         .btn-primary:hover {
             background: linear-gradient(45deg, yellow, pink);
        }
        @media (max-width: 768px) {
        .wrap {
            width: 90%;
            padding: 10px;
        }
        .card {
            padding: 10px;
        }
        textarea[name="alamat"] {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
        }
        input[name="hobby[]"] {
            display: inline-table;
            display: table-cell;
            margin-right: 10px;
        }
        select[name="tanggal_lahir"],
        select[name="bulan_lahir"],
        select[name="tahun_lahir"] {
            display: inline-block;
            width: 30%;
        }
    </style>
</head>
<body class="wrap" style="background-color: white;">
<div class="card">
<FORM ACTION="proses-22205024.php" METHOD="POST" NAME="input" enctype="multipart/form-data">
  <table width="750" cellpadding="8">
    <img src="stmik.jpeg" width="100" height="75" alt="STMIK Image">
    <h3 style="background-color: rgba(128, 128, 128, 0.6); color: rgba(0, 0, 0, 0.8);" align="center">ISI BIODATA</h3> 
    <tr>
    <td>No.Identitas <td>:</td></td>
     <td><?php echo $NoIdentitas; ?></td>
    </tr>
    <tr>
        <td>Nama <td>:</td></td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir <td>:</td></td>
        <td><?php echo $tempat_lahir; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir <td>:</td></td>
        <td><?php echo $tanggal_lahir; ?>
            <?php echo $bulan_lahir;?>
            <?php echo $tahun_lahir;?>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin <td>:</td></td>
        <td><?php echo $jenis_kelamin; ?></td>
    </tr>
    <tr>
    <td>Hobby <td>:</td></td>
    <td><?php echo $hobby; ?></td>
    </tr>
    <tr>
        <td>Alamat <td>:</td></td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Username <td>:</td></td>
        <td><?php echo $username; ?></td>
    </tr>
    <tr>
        <td>Password <td>:</td></td>
         <td><?php echo $password; ?></td>
    </tr>
    <td>Pas Foto <td>:</td></td>
    <td><?php
            if (move_uploaded_file($fileTmpName, $path)) { ?>
                <img src="uploads/<?php echo $uniqueFileName; ?>" style="width: 150px; height: 150px; vertical-align: middle; margin-left: 5px;">
            <?php } ?>
    </td>
    </tr>
</table>
  <tr>
      <a href="input-22205024.php" class="mt-5 btn btn-primary">Back</a>
  </tr>
</FORM>
</div>
</body>
</html>