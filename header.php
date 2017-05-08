<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Fusemachines - AI solutions for inside sales</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fusemachines Style -->
    <link rel="stylesheet" href="css/fusemachines.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php 
    $url = $_SERVER['SERVER_NAME'];
   ?>
  <body class="<?=basename($_SERVER['PHP_SELF'],'.php')?>">

    <!-- ==============  Main Header ============== -->
    <header role="main-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-9">
            <!-- Fuse Logo -->
            <div class="fuse-logo">
              <a href="#"><img src="img/fuse-logo.svg" alt="Fusemachines Logo"></a>
            </div>
            <!-- End Fuse Logo -->
          </div>
          <div class="col-md-9 col-sm-9 col-xs-3">
            <!-- Hamburger Icon -->
            <div class="hamburger-icon">
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
            <!-- End Hamburger Icon -->
            <nav role="main-menu">
              <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Customer</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a class="login" href="#">login</a></li>
                <li><a class="contact-num" href="#">1-800-506-FUSE</a></li>
                <li><a class="req-btn" href="#">Request Demo</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ==============  End Main Header ============== -->