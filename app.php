<!DOCTYPE html>
<html lang="en">
<?php session_start(); include 'fungsi.php'; ob_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Cek Ongkir App</title>
</head>

<body>
    <div class="boxx rounded-5">

    </div>
    <div class="inti">
        <center>
            <h1>Masukkan Data</h1>
            <form action="" method="post">
            <div class="col m-5">
                <input type="text" name="pengirim" placeholder="Nama Pengirim">
            </div>
            <div class="col m-5"> <input type="text" name="barang" placeholder="Barang ">
            </div>
            <div class="col offset-md-5">
                <div class="input-group mb-2">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    <select id="inputGroupSelect01" name="jasa">
                        <?php
                        $take = tampil('ekspedisi');
                        foreach ($take as $t) :
                        ?>
                            <option value="<?= $t['nama'] ?>"><?= $t['nama'] ?></option>
                            
                        <?php $finalharga = $t['harga']; endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col m-5"> <input type="number" name="berat" placeholder="Berat Barang dalam Kilogram">
            </div>
            <!-- <div class="col m-5"> <input type="text" name="harga" placeholder="Harga Barang">
            </div> -->
            <button type="submit" name="check" class="btn btn-lg btn-primary">Check</button>
            <?php
            if(isset($_POST['check'])){
                $pengirim = $_POST['pengirim']; $barang = $_POST['barang']; $jasa=$_POST['jasa']; $berat=$_POST['berat'];
               
                if($berat < 1){
                    $harga = 15000;
                }
                elseif($berat > 1 && $berat < 3){
                    $harga = 40000;
                }
                elseif($berat > 3 && $berat < 5){
                    $harga = 60000;
                }
                elseif($berat > 5 && $berat < 7){
                    $harga = 80000;
                }
                elseif($berat > 7 && $berat < 9){
                    $harga = 90000;
                }
                elseif($berat > 10 ){
                    $harga = 1000000;
                }
                

               $xharga = $harga+$finalharga;

                header('Location:checked.php?pengirim='.$pengirim.'&&barang='.$barang.'&&jasa='.$jasa.'&&berat='.$berat.'&&harga='.$xharga.'&&expe='.$finalharga);

                
            }
            ?>
            </form>

        </center>

    </div>
<?php include 'footer.php'; ?>
    <style>
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
          
        }

        .inti {
            margin-top: 5%;
            color: white;
            font-family: 'Arial';
            font-weight: 900;
            padding: 10;
        }

        input {
            border-radius: 2%;
            height: 30px;
            width: 25%;
            font-size: 20px;
        }
    </style>
