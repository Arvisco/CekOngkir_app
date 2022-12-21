<?php 
include '../fungsi.php';

$id=$_GET['id']; $kode=$_GET['kode'];

if($kode=='ex'){
    hapus("ekspedisi", $id);
    header('Location:dataekspedisi.php');
}
if($kode=='p'){
    hapus("barang", $id);
    header('Location:datapaket.php');
}
if($kode=='user'){
    hapus("user", $id);
    header('Location:datauser.php');
}


?>