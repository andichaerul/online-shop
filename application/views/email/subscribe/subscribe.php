
<?php
$data['tentang_kami'] = $this->connect->tentang_kami();
$data['email_user'] = $this->input->post('email');
$this->load->view('email/head_email');
$this->load->view('email/subscribe/body_subscribe',$data);
$this->load->view('index/service');
$this->load->view('footer',$data);
?>