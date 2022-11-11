<?php
error_reporting(0);
session_start();
ob_start();

include 'veritabaniayar.php';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 'yes') {
	include 'signin.php';
} else {
	define('güvenlik', true);


	include 'head.php';

	$sayfa = $_GET['sayfa'];

	switch ($sayfa) {

		case 'anasayfa':
			include 'main.php';
			break;
		case 'button';
			include 'button.php';
			break;
		case 'calender';
			include 'calender.php';
			break;
		case 'charts';
			include 'charts.php';
			break;
		case 'gallery';
			include 'gallery.php';
			break;
		case 'faq';
			include 'faq.php';
			break;
		case 'grid';
			include 'grid.php';
			break;
		case 'icons';
			include 'icons.php';
			break;
		case 'inbox';
			include 'inbox.php';
			break;
		case 'inout';
			include 'input.php';
			break;
		case 'maps';
			include 'maps.php';
			break;
		case 'tables';
			include 'tables.php';
			break;
		case 'typographt';
			include 'typographt.php';
			break;
		case 'signin';
			include 'signin.php';
			break;
		case 'signup';
			include 'signup.php';
			break;
		case 'calendar';
			include 'calendar.php';
			break;
		case 'validation';
			include 'validation.php';
			break;
		case 'cikis';
			session_destroy();
?>
			<script>
				alert('başarıyla çıkış yaptınız')
				window.location.href = 'index.php'
			</script>
<?php
			break;
		default;
			include 'main.php';
			break;
	}





	include 'foot.php';
}
