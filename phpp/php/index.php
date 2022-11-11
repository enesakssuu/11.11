<?php
error_reporting(0);

define('güvenlik', true);

include 'veritabaniayar.php';





include 'head.php';

$sayfa = $_GET['sayfa'];

switch ($sayfa) {

	case 'anasayfa':
		include 'main.php';
		break;
	case 'about';
		include 'about.php';
		break;
	case 'gallery';
		include 'gallery.php';
		break;
	case 'typo';
		include 'typo.php';
		break;
	case 'contact';
		include 'contact.php';
		break;
	case 'single';
		include 'single.php';
		break;
	default;
		include 'main.php';
		break;
}




include 'foot.php';
