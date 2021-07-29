<?php

define('EMAIL_FOR_REPORTS', 'kbps.10240@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out this form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/Blasteoroid-biz-red.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Blasteoroid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/Blasteoroid-biz-red.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="Blasteoroid-biz-red" style="background-color:#1A2223;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#ECECEC;max-width:720px;min-width:150px" method="post"><div class="title"><h2>PASS VAULT FEEDBACK FORM</h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>" title="Enter your name here."><label class="title"><span class="required">*</span></label><span class="nameFirst"><input placeholder="Name First" type="text" size="8" name="name[first]" required="required"/></span><span class="nameLast"><input placeholder="Name Last" type="text" size="14" name="name[last]" required="required"/></span></div>
	<div class="element-email<?php frmd_add_class("email"); ?>" title="Enter your valid email id here."><label class="title"><span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required" placeholder="Email"/></div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>" title="Enter your proper contact no with country code."><label class="title"></label><input class="medium" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Phone" value=""/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><input class="medium" type="text" name="input1" required="required" placeholder="Nationality"/></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"><span class="required">*</span></label><input class="large" type="text" name="input" required="required" placeholder="Title of your feedback"/></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>"><label class="title">Are a project participant?<span class="required">*</span></label>		<div class="column column1"><label><input type="radio" name="radio" value="Developer/DEV channel partner" required="required"/><span>Developer/DEV channel partner</span></label><label><input type="radio" name="radio" value="Built test user/Preview Channel partner" required="required"/><span>Built test user/Preview Channel partner</span></label><label><input type="radio" name="radio" value="Only a regular user of stable releases" required="required"/><span>Only a regular user of stable releases</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-textarea<?php frmd_add_class("textarea1"); ?>"><label class="title"><span class="required">*</span></label><textarea class="small" name="textarea1" cols="20" rows="5" required="required" placeholder="Features you like the most"></textarea></div>
	<div class="element-textarea<?php frmd_add_class("textarea2"); ?>"><label class="title"><span class="required">*</span></label><textarea class="small" name="textarea2" cols="20" rows="5" required="required" placeholder="Features you think that needs improvement"></textarea></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"><span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="Your feedback about Pass Vault"></textarea></div>
	<div class="element-rating<?php frmd_add_class("rating"); ?>"><label class="title">Rate Pass Vault<span class="required">*</span></label><div class="rating"><input type="radio" class="rating-input" id="rating-10" name="rating" value="10" /><label for="rating-10" class="rating-star"></label><input type="radio" class="rating-input" id="rating-9" name="rating" value="9" /><label for="rating-9" class="rating-star"></label><input type="radio" class="rating-input" id="rating-8" name="rating" value="8" /><label for="rating-8" class="rating-star"></label><input type="radio" class="rating-input" id="rating-7" name="rating" value="7" /><label for="rating-7" class="rating-star"></label><input type="radio" class="rating-input" id="rating-6" name="rating" value="6" /><label for="rating-6" class="rating-star"></label><input type="radio" class="rating-input" id="rating-5" name="rating" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="rating" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="rating" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="rating" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="rating" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/Blasteoroid-biz-red.js"></script>

<!-- Stop Blasteoroid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>