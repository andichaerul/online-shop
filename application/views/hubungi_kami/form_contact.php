 <!-- contact-us-area-start -->
    <div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="contact-us-left">
                        <h2 class="contact-title">Hubungi Kami</h2>
                        <ul>
                        <?php foreach ($tentang_kami as $row): ?>    
                            <li>
                                <span><?php echo "".$row->alamat."" ?></span>
                            </li>
                            <li>
                                <span><?php echo "".$row->no_telp."" ?></span>
                            </li>
                            <li>
                                <span><?php echo "".$row->email."" ?></span>
                            </li>
                        <?php endforeach; ?>    
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="contact-us-right">
                        <h2 class="contact-title">Form Layanan</h2>
                        <div class="contact-form">
                            <div class="cf-msg"></div> 
                            <form action="<?php echo base_url('home/hubungi_kami_action') ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" placeholder="Nama" name="fname" required="">
                                        <input type="text" placeholder="E-mail" name="email" required="">
                                        <input type="text" placeholder="Judul" name="subject" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <textarea placeholder="Pesan anda" name="msg" required=""></textarea>
                                        <button id="submit" name="submit">Send Your Message</button>

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