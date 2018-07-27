<?php foreach ($tentang_kami as $row): ?>
<div class="container">
	<div class="row" style="
">
		<div class="col-md-12" style="
    font-size: 35px;
    text-align: center;
    margin-bottom: 30px;
    margin-top: 20px;
    font-weight: bold;
">
			<?php echo "".$row->Nama."" ?>
		</div>
		<div class="col-md-12" style="
    font-size: 20px;
">
			Terima kasih anda telah ingin berlangganan info menarik dari kami, silahkan konfirmasi dengan cara klik tombol di bawah.
		</div>
		<div class="col-md-12" style="
    text-align: center;
    margin-top: 30px;
">
			<a href="<?php echo base_url('subscribe_add_data?email='.$email_user.'') ?>" style="
    padding: 14px;
    background: #272727b3;
    color: white;
    font-size: 25px;
    border-radius: 10px;
">
				Konfirmasi
			</a>
		</div>
	</div>
</div>
<?php endforeach; ?>