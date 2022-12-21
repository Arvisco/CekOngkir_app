<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <title>Cek Ongkir App</title>
</head>

<body>
    <!-- <div class="box">

    </div> -->
    <!-- <div class="inti">
        <center>
            <h1>Masukkan Data</h1>
            <input type="text" name="pengirim" placeholder="Nama Pengirim">
            <input type="text" name="barang" placeholder="Barang">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Jasa Ekspedisi</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <?php
                    $take = tampil('ekspedisi');
                    foreach ($take as $t) :
                    ?>
                        <option value="<?= $t['nama'] ?>"><?= $t['nama'] ?></option>
                    <?php endforeach; ?></select>

            </div>

        </center>
    </div> -->
    <style>
        body {
            background-image: url('bgpackage.jpg');
            overflow: hidden;
        }

        .box {
            position: absolute;
            top: 5%;
            padding: 10%;
            background-color: black;
            opacity: 80%;
            left: 5%;
            color: black;
            height: 50%;
            width: 70%;
            z-index: -1;
            border-radius: 2%;

        }

        .inti {
            margin-top: 5%;
            color: white;
            font-family: 'Arial';
            font-weight: 900;
        }

        input {
            border-radius: 2%;
            height: 30px;
            width: 25%;
            font-size: 20px;
        }
    </style>
</body>

</html>