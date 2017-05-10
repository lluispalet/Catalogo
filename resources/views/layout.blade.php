<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <title>Catalogo</title>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/linea-icon.css" />
  <link rel="stylesheet" href="css/fancy-buttons.css" />
  
  <!--=== Google Fonts ===-->
  <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:600,400,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <!--=== Other CSS files ===-->
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/jquery.vegas.css" />
  <link rel="stylesheet" href="css/baraja.css" />
  <link rel="stylesheet" href="css/jquery.bxslider.css" />
  <link rel="stylesheet" href="css/propio.css" />
  
  <!--=== Main Stylesheets ===-->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link href="styles/ihover.css" rel="stylesheet">

  
  <!--=== Color Scheme, three colors are available red.css, orange.css and gray.css ===-->
  <link rel="stylesheet" id="scheme-source" href="css/schemes/gray.css" />
  
  <!--=== Internet explorer fix ===-->
  <!-- [if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif] -->
  
  
</head>
<body>
  <!--=== Preloader section starts ===-->
  <section id="preloader">
    <div class="loading-circle fa-spin"></div>
  </section>
  <!--=== Preloader section Ends ===-->
  
  <!--=== Header section Starts ===-->
  <div id="header" class="header-section">
    <!-- sticky-bar Starts-->
    <div class="sticky-bar-wrap">
      <div class="sticky-section">
        <div id="topbar-hold" class="nav-hold container">
          <nav class="navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <!--=== Site Name ===-->
              <a class="site-name navbar-brand" href="#">FADD</a>
            </div>
            
            <!-- Main Navigation menu Starts -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="current"><a href="carteras">Carteras</a></li>
                <li><a href="/chequeras">Chequeras</a></li>
                <li><a href="/monederos">Monederos</a></li>
                <li><a href="/cinturones">Cinturones</a></li>
                <li><a href="/billeteras">Billeteras</a></li>
                <li><a href="/promociones">Promociones</a></li>
                <li><a href="/contacto">Contacto</a></li>
              </ul>
            </div>
            <!-- Main Navigation menu ends-->
          </nav>
        </div>
      </div>
    </div>
    <div class="container"> 
      @yield("content")  
      
    </div>  
   
<!--==== Js files ====-->
<!--==== Essential files ====-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="js/jquery.baraja.js"></script>
<script type="text/javascript" src="js/jquery.vegas.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>