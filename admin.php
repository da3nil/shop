<?php

require_once "server/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eElectronics - HTML eCommerce Template</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="index.php">e<span>Electronics</span></a></h1>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="shopping-item ">
                    <div class="dropdown position-relative">
                        <a class=" dropdown-toggle " href="" role="button" id="dropdownMenuLink" data-display="static"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Вход
                        </a>

                        <div class="dropdown-menu  " style="left: -40px"  aria-labelledby="dropdownMenuLink">
                            <form action="server/Auth.php" class="text-center" method="post">
                                <p class="col-md-12"> <input type="text" name="login" placeholder="login"></p>
                                <p> <input type="password" name="password" placeholder="password"></p>
                                <button  type="submit">вход</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="shopping-item">
                    <a href="cart.php">Корзина - <span class="cart-amunt"><?php echo $_SESSION['total'] ?> Руб.</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo  (count($_SESSION['cart']))?></span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar navbar-expand-lg">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="shop.php">Каталог</a></li>
                    <li><a href="cart.php">Корзина</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <h2>Заказы:</h2>


</div><!-- End mainmenu area -->











<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- jQuery sticky menu -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="js/main.js"></script>
</body>
</html>
