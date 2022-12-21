<?php include 'menu.php';
$data = tampil('barang');

?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nama Pengirim</th>
                    <th>Barang</th>
                    <th>Jasa EKspedisi</th>
                    <th>Berat Barang</th>
                    <th>Harga Ongkir</th>
                    <th>Status</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $d['pengirim'] ?></td>
                        <td><?= $d['barang'] ?></td>
                        <td><?= $d['jasa'] ?></td>
                        <td><?= $d['berat'] ?> Kg</td>
                        <td>Rp. <?= $d['harga'] ?></td>
                        <td><?= $d['status'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="updater.php?id=<?=$d['id'] ?>&&kode=status">Kirim</a>
                            <a class="btn btn-sm btn-danger" href="deleter.php?id=<?=$d['id'] ?>&&kode=p">Hapus</a>
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