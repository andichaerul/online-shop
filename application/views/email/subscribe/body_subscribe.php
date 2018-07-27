<?php foreach ($tentang_kami as $row) {
	# code...
} ?>
<div class="container">
	<div class="row">
		<div class="col-md-12" style="
    text-align: center;
">
			<h3 style="text-align: center;margin-top: 30px;"><?php echo "".$row->Nama."" ?></h3>
			<p style="
    text-align: left;
    margin-bottom: 30px;
    margin-top: 30px;
">Terima kasih, anda telah ingin berlangganan info menarik dari kami<br>Untuk konfirmasi silahkan klik tombol di bawah.</p>
			<a href="<?php echo base_url('home/subscribe_add?email='.$_POST['email'].'') ?>" style="
    padding: 15px;
    position: initial;
    display: block;
    font-size: 15px;
    background: #272727;
    color: white;
    margin: auto;
    width: 30%;
    border-radius: 10px;
">Konfirmasi</a>
		</div>
	</div>
</div>