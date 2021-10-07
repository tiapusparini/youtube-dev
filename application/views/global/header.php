<!DOCTYPE HTML>
<html lang="en">
<head>
  
  <title>iTube</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  
  <!-- bootstrap -->
  <link href="<?php echo(base_url("asset/css/bootstrap.min.css")) ?>" rel='stylesheet' type='text/css' media="all" />
  <!-- //bootstrap -->
  <link href="<?php echo(base_url("asset/css/dashboard.css")) ?>" rel="stylesheet">
  <!-- Custom Theme files -->
  <link href="<?php echo(base_url("asset/css/style.css")) ?>" rel='stylesheet' type='text/css' media="all" />
  
  <script src="<?php echo(base_url("asset/js/jquery-1.11.1.min.js")) ?>"></script>
  <!--start-smoth-scrolling-->
  <!-- fonts -->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- //fonts -->
</head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #800000">
      <nav class="container">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo(base_url("Home/index")); ?>"><h1><img src="<?php echo(base_url("asset/images/logo2.png")) ?>" alt="" /></h1></a>
          </div>
              
          <div id="navbar" class="navbar-collapse collapse">
            <ul>
              <div class="top-search from-group col-md-7">
                <form class="navbar-form navbar-right" method="post" action="<?php echo base_url('Search') ?>">
                  <input type="text" class="form-control" placeholder="Search..." name="cari">
                  <input type="submit" value=" ">
                </form>
              </div>
              <div class="header-top-right">
                <div class="file">
                  <a href="<?php echo(base_url("Home/login")); ?>" style="background: #800000;color: #ffffff;"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </div>  
                <div class="signin">
                  <a href="<?php echo(base_url("Home/registrasi")); ?>" style="background: #800000;color: #ffffff;">Register</a>   
                </div>
            </ul>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </nav>
    </nav>