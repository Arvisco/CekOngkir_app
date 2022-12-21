<?php 
include '../fungsi.php';
// include 'menu.php';
$id = $_GET['id']; $kode=$_GET['kode'];
if($kode=='status'){
    update("barang","status = 'Dikirim' WHERE id LIKE '$id' ");
    header('Location:datapaket.php');
}
if($kode=='ex'){ 
    $command = "id LIKE '$id'";
    $step1 = cari('ekspedisi', $command);
    $step2 = $step1->fetch_assoc();
    
    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
function open(){
    document.getElementById('opener').click();}
</script>
<body onload="open()">
    

<button id="opener" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" name="baru">Edit Ekspedisi</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Ekspedisi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <input type="text" value="<?=$step2['nama'] ?>" name="ekspedisi" placeholder="Nama Ekspedisi">
                            <input type="text" value="<?=$step2['harga'] ?>" name="ongkir" placeholder="Ongkir">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Edit</button>
                        </div>
                        <?php 
                        if (isset($_POST['tambah'])) {
                            $e = $_POST['ekspedisi'];
                            $h = $_POST['ongkir'];
                            $query = "nama = '$e', harga ='$h' WHERE id LIKE '$id'";
                            update("ekspedisi", $query);
                            header('Location:dataekspedisi.php');
                        } ?>
                    </form>
                </div>
            </div>
        </div></body>
<?php }elseif($kode=='user'){ 

    $command = "id LIKE '$id'";
    $step1 = cari('user', $command);
    $step2 = $step1->fetch_assoc();
    
    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
function open(){
    document.getElementById('opener').click();}
</script>
<body onload="open()">
    

<button id="opener" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" name="baru">Edit Ekspedisi</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <input type="text" value="<?=$step2['nama'] ?>" name="ekspedisi" placeholder="Nama Ekspedisi">
                            <input type="text" value="<?=$step2['password'] ?>" name="ongkir" placeholder="Ongkir">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Edit</button>
                        </div>
                        <?php 
                        if (isset($_POST['tambah'])) {
                            $e = $_POST['ekspedisi'];
                            $h = $_POST['ongkir'];
                            $query = "nama = '$e', password ='$h' WHERE id LIKE '$id'";
                            update("user", $query);
                            header('Location:datauser.php');
                        } ?>
                    </form>
                </div>
            </div>
        </div></body>


    <?php } ?>