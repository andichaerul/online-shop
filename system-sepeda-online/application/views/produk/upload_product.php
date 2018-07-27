  <script type="text/javascript">
$(document).ready(function (e) {
  $("#uploadForm1").on('change',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "upload_img",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
        {
      $("#target1").html(data);
      $("#photo1").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
  $("#uploadForm2").on('change',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "upload_img",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
        {
      $("#target2").html(data);
      $("#photo2").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
  $("#uploadForm3").on('change',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "upload_img",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
        {
      $("#target3").html(data);
      $("#photo3").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
  $("#uploadForm4").on('change',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "upload_img",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
        {
      $("#target4").html(data);
      $("#photo4").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
  $("#uploadForm5").on('change',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "upload_img",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
        {
      $("#target5").html(data);
      $("#photo5").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
});
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo "".$title."" ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!--
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>-->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo "".$title."" ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                  <form id="uploadForm1" action="" method="post">
                    <div id="target1">No Image</div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                  </div>
                  <div class="col-md-2">
                  <form id="uploadForm2" action="" method="post">
                    <div id="target2">No Image</div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                <div class="col-md-2">
                  <form id="uploadForm3" action="" method="post">
                    <div id="target3">No Image</div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                <div class="col-md-2">
                  <form id="uploadForm4" action="" method="post">
                    <div id="target4">No Image</div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                <div class="col-md-2">
                  <form id="uploadForm5" action="" method="post">
                    <div id="target5">No Image</div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                </div>
              </div>
             <?php echo form_open_multipart('home/add_product');?>
             <div style="display: none;">
             <div id="photo1">No Image</div>
             <div id="photo2">No Image</div>
             <div id="photo3">No Image</div>
             <div id="photo4">No Image</div>
             <div id="photo5">No Image</div>
            </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaproduk">Nama Product</label>
                    <input type="" class="form-control" id="namaproduk" name="namaproduk" required>
                  </div>


                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">-</option>
                        <?php foreach ($category as $row) {
                          echo "<option value='".$row->CategoryID."'>".$row->CategoryName."</option>";
                        } ?>
                    </select>
                  </div>
                  <!--
                  <div class="form-group">
                    <label for="gambar">Upload Gambar</label><br>
                    <input type="file" name="pic" accept="image/*" id="gambar" class="form-control" required>
                    <input type="file" name="pic1" accept="image/*" id="gambar" class="form-control" required>
                    <input type="file" name="pic2" accept="image/*" id="gambar" class="form-control" required>
                    <input type="file" name="pic3" accept="image/*" id="gambar" class="form-control" required>
                    <input type="file" name="pic4" accept="image/*" id="gambar" class="form-control" required>
                  </div>-->

                  <div class="form-group">
                    <label for="berat">Berat Satuan Gram</label>
                    <input type="" name="berat" id="berat" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="" name="harga" id="harga" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="Stock">Stock</label>
                    <input type="" name="Stock" id="Stock" class="form-control" required>
                  </div>



                  <div class="form-group">
                    <label for="ckedtor">Nama Product</label>
                    <textarea class="ckeditor" id="ckedtor" name="description" required></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->