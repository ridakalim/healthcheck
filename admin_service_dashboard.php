<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
      <link href="page1.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <style>
        .innerright,label {
    color: rgb(16, 170, 16);
    font-weight:bold;
}
.container,
.row,
.imglogo {
    margin:auto;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 100px;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
    background-color: rgb(105, 221, 105);
}

.greenbtn {
    background-color: rgb(16, 170, 16);
    color: white;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.greenbtn,
a {
    text-decoration: none;
    color: white;
    font-size: large;
}

th{
    background-color: orange;
    color: black;
}
td{
    background-color: #fed8b1;
    color: black;
}
td, a{
    color:black;
}
    </style>
   
            
<body id="top">
        
    <?php

    include("data_class.php");
    ?>
    <div class="bgded overlay" style="background-image:url('try.jpg');"> 
      <div class="wrapper row1">
        <header id="header" class="hoc clear"> 
          <div id="logo" class="fl_left">
            <h1><a href="#">HealthCheck</a></h1>
          </div>
          <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li class="active"><a href="index.php">Home</a></li>
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
  <section id="breadcrumb" class="hoc clear"> 
    <h6 class="heading">Admin Panel</h6>
    
    </section>
    
</div>

<div class="container">
                <Button class="greenbtn"> ADMIN</Button>
                <a href="addmeal.php"><Button class="greenbtn"> Add Meal</Button> 
                <a href="signin.php"><Button class="greenbtn"> Add User</Button> 
                <a href="loginpanel.php"><Button class="greenbtn" > LOGOUT</Button></a>
</div>
            
</body>
</html>