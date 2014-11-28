<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:image" content="<?php echo $pg_img  ?>"/>
    <meta name="og:title" content="<?php echo isset($pg_title) ? $pg_title : 'Bangalore IT Event' ?>"/>
    <meta name="og:description" content="<?php echo isset($description) ? $description : '' ?>"/>
    <title><?php echo isset($pg_title) ? $pg_title : 'Bangalore IT Event' ?></title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    
    <style type="text/css">
      .bs-example{
        margin: 20px;
        margin-top: 100px;
      }
</style>
  </head>
  <body>
  <?php if ( isset($_GET['status'])   &&  $_GET['status'] == 1 ) {   ?>
    <div class="bs-example">
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> Your mail was Success sent. We will get back to you shortly.
    </div>
  <?php } ?>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navigation-header">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" id="logo" ><img src="img/logo.png" alt="IT Events Logo" style="width: 100px; height: 70px; padding-bottom: 5%;" />&nbsp;&nbsp;Bangalore IT Events</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right"  id="toogle-icon">
         <li><a href="index.php#whoweare">Who we are</a></li>
         <li><a href="#" data-toggle="modal" data-target="#askus">Contact Us</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
    </nav>

    <div class="modal fade" id="askus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Contact Us</h4>
            </div>
          <div class="modal-body">
            <form id="contact-form" method="POST" action="contact.php" style="padding-left: 30px;">
        <div class="text-fields">
          <div class="float-input col-md-10">
            <input name="name" id="name" type="text" placeholder="Your Name" required>
            <span><i class="glyphicon glyphicon-user"></i></span>
          </div>
          <div class="float-input col-md-10">
            <input name="mail" id="mail" type="email" placeholder="Your e-mail" required>
            <span><i class="glyphicon glyphicon-envelope"></i></span>
          </div>
          <div class="float-input col-md-10">
            <input name="oname" id="oname" type="text" placeholder="Organization" required>
            <span><i class="glyphicon glyphicon-briefcase"></i></span>
          </div>
        </div>
        <div  class="col-md-10">
        <textarea name="comment" id="desc" placeholder="Message to us" ></textarea>
        </div>
        <span style="padding-left: 40%;" id="submit-button"><input class="btn btn-primary" type="Submit" id="submit" name="submit" value="SUBMIT" style="width: 100px; font-weight: bold;" onclick="mysubmit()"/></span>
        </form>
        </div>
        </div>
        </div>
      </div>

    
</div>
    <!-- main content start --> 
