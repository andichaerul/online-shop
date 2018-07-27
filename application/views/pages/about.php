
 <?php 
    foreach ($tentang_kami as $row) {
        $image = $row->image;
        $alamat = $row->alamat;
        $email = $row->email;
        $text = $row->text;
        $no_telp = $row->no_telp;
    }
   ?>
   <!-- about-us-area-start -->
    <div class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-left">
                        <img src="<?php echo base_url('img/banner/about.jpg') ?>" alt="">
                    </div>
                    <div class="about-left">
                        <?php echo "".$alamat."" ?>
                        <?php echo "".$no_telp."" ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-right">
                        <?php echo "".$text."" ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-us-area-end -->