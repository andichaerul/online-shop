<?php foreach ($daftar_product_edit as $row) {
  $ProductName[] = $row->ProductName;
  $weight[] = $row->weight;
  $price[] = $row->Price;
  $Stock[] = $row->Stock;
  $Description[] = $row->Description;
  $Category[] = $row->Category;
  $CategoryName[] = $row->CategoryName;
  $ImageHTML[] = json_decode($row->ImageHTML);
}
 ?>
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
              <?php
// Turn off error reporting
              error_reporting(0); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                  <form id="uploadForm1" action="" method="post">
                    <div id="target1">
                      <img src="../../img/product/<?php echo "".$ImageHTML[0][0]."" ?>" width="150px" height="150px">
                    </div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                  </div>
                  <div class="col-md-2">
                  <form id="uploadForm2" action="" method="post">
                    <div id="target2"><img src="../../img/product/<?php echo "".$ImageHTML[0][1]."" ?>" width="150px" height="150px"></div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                <div class="col-md-2">
                  <form id="uploadForm3" action="" method="post">
                    <div id="target3"><img src="../../img/product/<?php echo "".$ImageHTML[0][2]."" ?>" width="150px" height="150px"></div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                <div class="col-md-2">
                  <form id="uploadForm4" action="" method="post">
                    <div id="target4"><img src="../../img/product/<?php echo "".$ImageHTML[0][3]."" ?>" width="150px" height="150px"></div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                <div class="col-md-2">
                  <form id="uploadForm5" action="" method="post">
                    <div id="target5"><img src="../../img/product/<?php echo "".$ImageHTML[0][4]."" ?>" width="150px" height="150px"></div>
                    <div id="uploadFormContent">
                      <label>Upload Gambar Product:</label><br/>
                      <input name="userImage" type="file" class="form-control" />
                    </div>
                  </form>
                </div>
                </div>
              </div>
             <?php echo form_open_multipart('home/daftar_product_update');?>
             <div style="display: none;">
              <?php
// Turn off error reporting
              error_reporting(0); ?>
             <div id="photo1"><input type="" name="foto[]" value="<?php echo "".$ImageHTML[0][0]."" ?>"></div>
             <div id="photo2"><input type="" name="foto[]" value="<?php echo "".$ImageHTML[0][1]."" ?>"></div>
             <div id="photo3"><input type="" name="foto[]" value="<?php echo "".$ImageHTML[0][2]."" ?>"></div>
             <div id="photo4"><input type="" name="foto[]" value="<?php echo "".$ImageHTML[0][3]."" ?>"></div>
             <div id="photo5"><input type="" name="foto[]" value="<?php echo "".$ImageHTML[0][4]."" ?>"></div>
            </div>
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo "".$_GET['id'].""  ?>">
                    <label for="namaproduk">Nama Product</label>
                    <input type="" class="form-control" id="namaproduk" name="namaproduk" required value="<?php echo "$ProductName[0]" ?>">
                  </div>

                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" class="form-control" required>
                      <option selected value="<?php echo "".$Category[0].""; ?>"><?php echo "".$CategoryName[0].""; ?></option>>
                        <?php foreach ($category as $row) {
                          echo "<option value='".$row->CategoryID."'>".$row->CategoryName."</option>";
                        } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="berat">Berat Satuan Gram</label>
                    <input type="" name="berat" id="berat" class="form-control" required value="<?php echo "$weight[0]" ?>">
                  </div>

                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="" name="harga" id="harga" class="form-control" required value="<?php echo "$price[0]" ?>">
                  </div>

                  <div class="form-group">
                    <label for="Stock">Stock</label>
                    <input type="" name="Stock" id="Stock" class="form-control" required value="<?php echo "$Stock[0]" ?>">
                  </div>



                  <div class="form-group">
                    <label for="ckedtor">Deskripsi</label>
                    <textarea class="ckeditor" id="ckedtor" name="description" required>
                      <?php echo "$Description[0]" ?>
                    </textarea>
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
