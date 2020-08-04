<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images/favicon.png">
<title>Login &amp; Register Page</title>

<!-- Bootstrap core CSS -->
<link href="<?=base_url("assets/css/bootstrap.css")?>" rel="stylesheet">
<link href="<?=base_url("assets/css/bootstrap-social.css")?>" rel="stylesheet">
<link href="<?=base_url("assets/css/font-awesome.css")?>" rel="stylesheet">
<link href="<?=base_url("assets/css/themify-icons.css")?>" rel="stylesheet">
<link href="<?=base_url("assets/css/template.css")?>" rel="stylesheet">
<link href="<?=base_url("assets/css/smart-forms.css")?>" rel="stylesheet">
<link href="<?=base_url("assets/css/responsive.css")?>" rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="assets/js/ie/ie-emulation-modes-warning.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie/ie10-viewport-bug-workaround.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="header">
  <section class="top-bar">
    <section class="container">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ser-pro">Are You A Service Provider? Sign Up for FREE – <a href="#">Click Here</a></div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="lang-part"><a href="#" class="active" title="English"><img src="<?php echo base_url('assets/images/en-flag.png');?>"/></a> <a href="#" title="German"><img src="<?php echo base_url('assets/images/gr-flag.png');?>"/></a></div>
        <div class="country-select" title="Change Country"> <a href="#"><img src="<?php echo base_url('assets/images/gb.png'); ?>" /> <span>United Kingdom</span></a> </div>
      </div>
    </section>
  </section>
  <nav class="navbar navbar-default wow fadeInUp" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="navbar-brand navbar-brand-centered"><a href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>"/></a></div>
      </div>
      <div class="collapse navbar-collapse" id="navbar-brand-centered">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="#" data-toggle="modal" data-target=".signin_popup"><i class="fa fa-sign-in"></i> Login</a></li>
          <li><a href="#" data-toggle="modal" data-target=".signup_popup"><i class="fa fa-lock"></i> Sign Up</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="add_a_service"><i class="fa ti-plus" style="color:#a0a0a0;"></i> <span style="border-bottom:1px solid #c6eaf6;">Add a Service</span></a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#c07519;"><span style="border-bottom:1px solid #f3e7cc;">Find Services</span> <b class="caret" style="color:#a0a0a0;"></b></a>
            <ul class="dropdown-menu">
              <li><a href="find-services.html">Hairdresser</a></li>
              <li><a href="find-services.html">Spa &amp; Beauty</a></li>
              <li><a href="find-services.html">Auto-Mobile</a></li>
              <li><a href="find-services.html">Cleaning</a></li>
              <li><a href="find-services.html">Tour &amp; Travel</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<script type="text/javascript">
$(function(){
  $(".dropdown").hover(            
  function() {
    $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
    $(this).toggleClass('open');          
  },
  function() {
    $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
    $(this).toggleClass('open');              
  });
 });
</script> 


