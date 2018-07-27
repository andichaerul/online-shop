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
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Stock</th>
                  <th>Berat</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $x=0;
                   foreach ($daftar_product as $row) {
                    $var[] = json_decode($row->ImageHTML);
                    echo "
                    <tr>
                    <td>".$row->ProductID."</td>
                    <td><img src='".$url_multi."img/product/".$var[$x]['0']."' alt='' class='img-list'>".$row->ProductName."</td>
                    <td>".$row->Stock."</td>
                    <td>".$row->weight."</td>
                    <td>".$row->CategoryName."</td>
                    <td>".$row->Price."</td>
                    <td>
                      <a href='".base_url('home/daftar_product_edit?id='.$row->ProductID.'')."'>
                        Edit
                      </a>
                      <br>
                      <a href='".base_url('home/daftar_product_delete?id='.$row->ProductID.'')."'>
                        Delete
                      </a>
                      <br>
                    </td>
                    </tr>
                    ";$x++;
                  };
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Stock</th>
                  <th>Berat</th>
                  <th>Kategori</th>
                  <th>Harga</th>
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
