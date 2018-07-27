 <!-- contact-us-area-start -->
    <div class="contact-us-area">
        <div class="container">
            <div class="row">
                <!--<div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="contact-us-left">
                        <h2 class="contact-title">Hubungi Kami</h2>
                        <ul>
                            <li>
                                <span>1234. Park Street Avenue</span>
                                <span>Newyork City</span>
                            </li>
                            <li>
                                <span>+01-23456789</span>
                                <span>+09-87654321</span>
                            </li>
                            <li>
                                <span>info@companyname@.com</span>
                                <span>support@companyname.com</span>
                            </li>
                        </ul>
                    </div>
                </div>-->
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="contact-us-right">
                        <h2 class="contact-title">Form Layanan</h2>
                        <div class="contact-form">
                            <form action="<?php echo base_url('home/insert_retur') ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" placeholder="Nama" name="nama" required="">
                                        <input type="text" placeholder="No Order" name="noorder" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <textarea name="catatan" placeholder="Catatan kepada kami"></textarea>
                                        <button id="submit" name="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-us-area-end -->