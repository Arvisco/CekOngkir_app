<!DOCTYPE html>
<?php session_start(); include 'fungsi.php';
$pengirim = $_GET['pengirim'];
$barang=$_GET['barang']; $jasa=$_GET['jasa']; $berat=$_GET['berat']; $harga=$_GET['harga']; 
ob_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Cek Ongkir</title>
</head>
<body>
<div class="boxx rounded-5">

</div>
<div class="inti">
    <center>
        <h2>Nama Pengirim : <?=$pengirim ?></h2>
        <h2>Barang yang akan dikirim : <?=$barang ?></h2>
        <h2>Ekspedisi : <?=$jasa ?></h2>
        <h2>Berat Barang : <?=$berat ?> kg</h2>
        <h2>Harga Ongkir : Rp. <?=$harga ?></h2>
        <form action="" method="post">
        <Button class="btn btn-danger btn-lg">KEMBALI</Button>
        <Button name="kirim" type="submit" class="btn btn-success btn-lg">KIRIM</Button></form>
        <?php if(isset($_POST['kirim'])){
            mysqli_query($c, "INSERT INTO barang VALUES ('','$pengirim','$barang','$jasa','$berat','$harga','Masuk Ekspedisi')");
        } ?>

        <p>note : Berat barang = <?=$berat ?>kg + Basis Ongki Expedisi = Rp.<?= $_GET['expe']?> </p>

    </center>
    <!-- <a href="logout.php" class="btn btn-sm btn-danger">LOG OUT</a> -->
</div>





<style>
    h2{
        font-family: 'Arial';
            font-weight: 500; margin-bottom: 15px;
    }
        body {
            background-image: url('bgpackage.jpg');
            overflow: hidden;
        }

        .boxx {
            position: absolute;
            top: 5%;
            padding: 10%;
            background-color: black;
            opacity: 80%;
            left: 5%;
            color: black;
            height: 85%;
            width: 90%;
            z-index: -1;
            /* border-radius: 2%; */

        }

        .inti {
            margin-top: 12%;
            color: white;
          
            padding: 10;
        }

        input {
            border-radius: 2%;
            height: 30px;
            width: 25%;
            font-size: 20px;
        }
    </style>
    
<?php include 'footer.php'; ?>