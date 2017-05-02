<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
	<?=$title?> | <?=TITLE?>
</title>
<?php
	$this->load->view("template/head");
?>
</head>

<body>
<?php 
	$this->load->view($template);
	
	$this->load->view("template/js_under");
?>
</body>
</html>