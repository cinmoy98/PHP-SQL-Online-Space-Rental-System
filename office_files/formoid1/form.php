<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Posted Successfully !');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-light-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Training Room Post</h2></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Sekect Area"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="Select area">Select area</option>
		<option value="Dohar">Dohar</option>
		<option value="Keraniganj">Keraniganj</option>
		<option value="Dhamrai">Dhamrai</option>
		<option value="Nawabganj">Nawabganj</option>
		<option value="Savar">Savar</option>
		<option value="Ramna">Ramna</option>
		<option value="Pallabi">Pallabi</option>
		<option value="Mirpur">Mirpur</option>
		<option value="Demra">Demra</option>
		<option value="Uttara">Uttara</option>
		<option value="Khilgaon">Khilgaon</option>
		<option value="Tejgaon">Tejgaon</option>
		<option value="Jatrabari">Jatrabari</option>
		<option value="Rampura">Rampura</option>
		<option value="Sherebangla Nagar">Sherebangla Nagar</option>
		<option value="Shahjanpur">Shahjanpur</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Address"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="small" name="textarea" cols="20" rows="5" required="required" placeholder="Address"></textarea><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Space Size"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Space Size"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>" title="Pricing Method"><label class="title">Pricing Method   <span class="required">*</span></label>		<div class="column column3"><label><input type="radio" name="radio" value="Full Time" required="required"/><span>Full Time</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="radio" value="Part Time" required="required"/><span>Part Time</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="radio" value="Pay as you Go" required="required"/><span>Pay as you Go</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-number<?php frmd_add_class("number1"); ?>" title="Room Number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="10" name="number1" required="required" placeholder="Room Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio1"); ?>" title="Furnished ? "><label class="title">Furnished ? <span class="required">*</span></label>		<div class="column column1"><label><input type="radio" name="radio1" value="Furnished" required="required"/><span>Furnished</span></label><label><input type="radio" name="radio1" value="Non-Furnished" required="required"/><span>Non-Furnished</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-number<?php frmd_add_class("number"); ?>" title="Price /Rent"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="1000000" name="number" required="required" placeholder="Price/Rent" value=""/><span class="icon-place"></span></div></div>
	<div class="element-file<?php frmd_add_class("file"); ?>" title="Image"><label class="title"><span class="required">*</span></label><div class="item-cont"><label class="large" ><div class="button">Choose Image</div><input type="file" class="file_input" name="file" required="required"/><div class="file_text">No file selected</div><span class="icon-place"></span></label></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-light-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>