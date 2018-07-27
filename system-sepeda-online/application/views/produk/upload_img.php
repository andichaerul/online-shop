<?php
if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
		$sourcePath = $_FILES['userImage']['tmp_name'];
		$targetPath = "../img/product/".$_FILES['userImage']['name'];
		$display = "".$url_multi."img/product/".$_FILES['userImage']['name'];
		if(move_uploaded_file($sourcePath,$targetPath)) {
?>
			<img src="<?php echo $display; ?>" width="150px" height="150px" />
			<input type="hidden" id="photosend" name="foto[]" value="<?php echo $_FILES['userImage']['name'] ?>">
<?php
		}
	}
}
?>