<?php 
$random =rand(1,8);
?>
<style type="text/css">
    .top-banner-area {
    background: rgba(0, 0, 0, 0) url("<?php echo base_url('img/banner/'.$random.'.jpg') ?>") repeat scroll center bottom;
    padding: 153px 0 123px;
}
</style>
<div class="top-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="top-banner-content">
                        <h2><?php echo "".$title."" ?></h2>
                    </div>
                </div>
            </div>
        </div>
</div>