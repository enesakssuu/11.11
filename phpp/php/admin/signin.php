<?php


if (isset($_POST['girisformu'])) {
    $email = trim($_POST['email']);
    $sifre = trim($_POST['sifre']);
echo '$email, $sifre';
    if (!$email || !$sifre) {

?>
        <script>
            alert('Email ve sifre alanı doldurulması gerekiyor');
            window.location.href = "index.php";
        </script>
        <?php
    } else {
        $kntrl = $VT_baglan->prepare('SELECT * FROM kullanicilar WHERE email = :email and sifre = :sifre');
        $kntrl->execute(array(':email' => $email, ':sifre' => $sifre));
        $veri = $kntrl->fetch(PDO::FETCH_ASSOC);
        $sonuc = $kntrl->rowCount();
       


        if ($sonuc) {
            $_SESSION['id'] = $veri['id'];
            $_SESSION['admin'] = 'yes';
        ?>
            <script>
                alert('Başarılı Giriş');
                window.location.href = "index.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Email yada şifre hatalı');
                window.location.href = "index.php";
            </script>
<?php
        }
    }
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign In :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdUPvciAAAAAPUV_BlbHyQaEcqRa-J5HV5Aqpkn"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdUPvciAAAAAPUV_BlbHyQaEcqRa-J5HV5Aqpkn',{action:'girissayfasi'})
            .then(function (cevap) {
document.getElementById('recaptchaAlani').value = cevap;
            });
        });
    </script>
</head>

<body>
    <div class="main-wthree">
        <div class="container">
            <div class="sin-w3-agile">
                <h2> Yönetim Paneli</h2>
                <form action="#" method="post">
                    <div class="username">
                        <span class="username">Email Adres:</span>
                        <input type="text" name="email" class="name" placeholder="" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="password-agileits">
                        <span class="username">Şifre:</span>
                        <input type="password" name="sifre" class="password" placeholder="" required="">
                        <input type="hidden" name="recaptchakodu" id="recaptchaAlani">
                        <div class="clearfix"></div>
                    </div>
                    <div class="rem-for-agile">
                        <input type="checkbox" name="remember" class="remember">Remember me<br>
                        <a href="#">Forgot Password</a><br>
                    </div>
                    <div class="login-w3">
                        <input type="submit" name="girisformu" class="login" value="Giriş Yap">
                    </div>
                    <div class="clearfix"></div>
                </form>
                <div class="back">
                    <a href="../index.php">Siteye Git</a>
                </div>
                <div class="footer">
                    <p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>