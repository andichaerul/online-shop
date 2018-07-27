<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap4.css">
<div class="wrapper">
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Order ID</th><!--No Order--->
                  <th>Profil Pemesan</th><!--Nama,Email,No Telp--->
                  <th>Pengiriman</th><!--Alamat, Kota, Kabupaten--->
                  <th>Produk</th><!--Nama Product, QTY, --->
                  <th>Status</th><!--Option : Proses, Cancel, Telas Tiba, Telah dikirim --->
                  <th>Pembayaran</th><!--Harga total qty, Ongkir, Paket yg digunakan--->    
                </tr>
                </thead>
                <tbody>

                <?php foreach($daftar_pemesanan as $row): ?>
                <?php $forcolor = $row->Status; ?>  
                <tr
                <?php if($forcolor=="Diterima") echo 'style="background: #cafb93;color: #5b8a6a;"'; ?>
                <?php if($forcolor=="Menunggu") echo 'style="background: #F44336;color: #ffffff;"'; ?>
                <?php if($forcolor=="Dikirim") echo 'style="background: #03a9f4d6;color: #ffffff;"'; ?>
                <?php if($forcolor=="Proses") echo 'style="background: #ffeb3b;color: #1b1b1a;"'; ?>
                >
                    <td>
                    <?php echo $row->Order_Number ?><br>
                    <?php echo $row->Date ?>
                    </td>
                    <td>
                    <?php echo $row->Customer_Name ?><br>
                    <?php echo $row->Phone_Number ?><br>
                    <?php echo $row->Email ?>    
                    </td>
                    <td>
                    <?php echo $row->Shipping_Address ?>  
                    </td>
                    <td>
                    <?php echo $row->ProductName ?>  
                    </td>
                    <td>
                      <?php 
                      $options = $row->Status; 
                      $Diterima = 'Diterima';
                      ?>
                      <select id="status<?php echo $row->Order_Number ?>">
                        <option value="Menunggu" <?php if($options=="Menunggu") echo 'selected="selected"'; ?>>Menunggu</option>
                        <option value="Proses" <?php if($options=="Proses") echo 'selected="selected"'; ?>>Proses</option>
                        <option value="Dikirim" <?php if($options=="Dikirim") echo 'selected="selected"'; ?>>Dikirim</option>
                        <option value="Diterima" <?php if($options=="Diterima") echo 'selected="selected"'; ?>>Diterima</option>
                      </select>
                    </td>
                    <td>
                    <?php echo $row->Amount_Product ?><br>
                    <?php echo $row->Shipping_Cost ?>  
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Order ID</th><!--No Order, tanggal--->
                  <th>Profil Pemesan</th><!--Nama,Email,No Telp--->
                  <th>Pengiriman</th><!--Alamat, Kota, Kabupaten--->
                  <th>Produk</th><!--Nama Product, QTY, --->
                  <th>Status</th><!--Option : Menunggu,Proses, Cancel, Telas Tiba, Telah dikirim --->
                  <th>Pembayaran</th><!--Harga total qty, Ongkir, Paket yg digunakan--->    
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
<?php foreach($daftar_pemesanan as $row): ?>
<script>
var lastValue<?php echo $row->Order_Number ?>;
$("#status<?php echo $row->Order_Number ?>").bind("click", function(e){
    lastValue<?php echo $row->Order_Number ?> = $(this).val();


}).bind("change", function(e){
    changeConfirmation = confirm("Yakin Ingin Merubah Status, Setiap perubahan status akan di infokan ke Customer melalui Email secara otomatis?");
    if (changeConfirmation) {
        // Proceed as planned
        $.get("<?php echo base_url('home/daftar_pemesanan_update') ?>",
        {
          order_number: "<?php echo $row->Order_Number ?>",
          status: $(this).val()
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
            window.location.replace("<?php echo base_url('home/daftar_pemesanan') ?>");
        });
    } else {
        $(this).val(lastValue<?php echo $row->Order_Number ?>);
    }
});
</script>
<?php endforeach; ?>

<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>