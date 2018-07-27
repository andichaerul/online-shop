   <!-- footer-start -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="address-info">
                            <?php foreach ($tentang_kami as $row): ?>
                            <a class="footer-logo" href="#"><img src="" alt="LOGO HERE"></a>
                            <p></p>
                            <ul class="address-list">
                                <li class="address"><?php echo "".$row->alamat."" ?></li>
                                <li class="phone"><?php echo "".$row->no_telp."" ?></li>
                                <li class="email"><?php echo "".$row->email."" ?></li>
                            </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-12">
                        <div class="link-list">
                            <h4 class="link-list-title">Untuk anda</h4>
                            <ul>
                                <li><a href="<?php echo base_url('home/retur_produk') ?>">Retur Produck</a></li>
                                <li><a href="<?php echo base_url('home/index_shopping_cart') ?>">Keranjang belanja</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="link-list">
                            <h4 class="link-list-title">Layanan</h4>
                            <ul>
                                <li><a href="#">Site map</a></li>
                                <li><a href="<?php echo base_url('home/syarat_dan_ketentuan') ?>">Syarat dan ketentuan</a></li>
                                <li><a href="<?php echo base_url('home/kebijakan_privasi') ?>">Kebijakan privasi</a></li>
                                <li><a href="<?php echo base_url('home/about') ?>">Tentang kami</a></li>
                                <li><a href="<?php echo base_url('home/hubungi_kami') ?>">Hubungi kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        <div class="link-time">
                            <ul class="social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                            </ul>
                            <div class="opening-table">
                                <h4>Jam Operasional</h4>
                                <ul>
                                    <li><span>Senin-Jumat</span> <span>00:00 A.M - 12.00 P.M</span></li>
                                    <li><span>Sabtu</span> <span>00:00 A.M - 12.00 P.M</span></li>
                                    <li><span>Minggu</span> <span>00:00 A.M - 12.00 P.M</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright">
                            <p>Copyright © 2017 MAYFAIR all rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="payment">
                            <img src="<?php echo base_url('img/payment/visa_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/mastercard_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/JCB_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/CIMB_Niaga_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/BCA_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/Mandiri_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/BRI_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/BNI_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/ATM_bersama_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/prima_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/alto_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/alfamart_logo.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/doku_wallet.png') ?>" alt="">
                            <img src="<?php echo base_url('img/payment/mandiri_clickpay_logo.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->
    
    <!-- Scripts -->
    
    
    <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/countdown.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollUp.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.meanmenu.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nivo.slider.pack.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/scrollreveal.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js') ?>"></script>
</body>

</html>











