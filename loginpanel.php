<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="frontpage.css" rel="stylesheet" type="text/css" media="all">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="bgded overlay" style="background-image:url('try.jpg');"> 
      <div class="wrapper row1">
        <header id="header" class="hoc clear"> 
          <div id="logo" class="fl_left">
            <h1>HEALTHCHECK</a></h1>
          </div>
          
          <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li class="active"><a href="frontpage.php">Home</a></li>
              <li><a class="drop" href="#">Diet</a>
                <ul>
                  <li><a href="page1.php">Weight Loss</a></li>
                  <li><a href="page2.php">Weight Gain</a></li> 
                </ul>
              </li>
              <li><a href="bmi.php">BMI Calculator</a></li>        
              <li><a href="meal.php">Meal Plans</a></li>
              <li><a href="signin.php">Sign Up</a></li>
              <li><a href="loginpanel.php">Admin</a></li>
            </ul>
          </nav>
        
        </header>
      </div>
      <section id="pageintro" class="hoc clear">
        <div> 
          <h2 class="heading">HEALTCHECK</h2>
          <p> Your ALL in ONE health and fitness partner.</p>
        </div>
      </section>
    </div>
        <?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>



<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
                <div class="col-md-6 login-form-2">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $ademailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $adpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>