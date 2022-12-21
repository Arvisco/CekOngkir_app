<?php include 'menu.php';
$data = tampil('ekspedisi');
ob_start();
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" name="baru">Ekspedisi Baru</button>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ekspedisi Baru</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <input type="text" name="ekspedisi" placeholder="Nama Ekspedisi">
                            <input type="text" name="ongkir" placeholder="Ongkir">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Tambahkan</button>
                        </div>
                        <?php 
                        if (isset($_POST['tambah'])) {
                            $e = $_POST['ekspedisi'];
                            $h = $_POST['ongkir'];
                            $query = "('','$e','$h')";
                            tambah("ekspedisi", $query);
                            header('Location:dataekspedisi.php');
                        } ob_flush();?>
                    </form>
                </div>
            </div>
        </div>



        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nama Ekspedisi</th>
                    <th>Harga Jasa</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $d['nama'] ?></td>
                        <td><?= $d['harga'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="updater.php?id=<?= $d['id'] ?>&&kode=ex">Update</a>
                            <a class="btn btn-sm btn-danger" href="deleter.php?id=<?= $d['id'] ?>&&kode=ex">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>



    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 Fadel Hidayat.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>