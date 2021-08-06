<?php 
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="frontpage.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<!-- Top Background Image Wrapper -->
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
            </ul>
          </nav>
	
	<div class="container mt-4">
        <h3>Please Sign up for your meal plan here:</h3>
        <hr>
        <form action="" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Username" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password"required>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name ="email" id="email" placeholder="abc@xyz.com" required>
        </div>
          <div class="form-group">
            <label for="inputAddress2">Address</label>
            <input type="text" class="form-control"  name="address" placeholder="Apartment,Floor,Street,Area" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" name="city" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control" name="state" required>
                <option selected>Choose...</option>
                <option value="Sindh">Sindh</option>
                <option value="Punjab">Punjab</option>
                <option value="Balochistan">Balochistan</option>
                <option value="KPK">KPK</option>
                <option value="Gilgit Baltistan">Gilgit Baltistan</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="meal">Meal</label>
              <select id="meal" class="form-control" name="meal" required>
                <option selected>Choose your meal plan</option>
                <option value="Normal">Normal</option>
                <option value="Vegan">Vegan</option>
                <option value="Pescetarian">Pescetarian</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="mealno">Number of Meals</label>
              <select id="mealno" class="form-control" name="mealno" required>
                <option selected>Choose the number of meals per week</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>


            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="zip" required>
            </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required>
              <label class="form-check-label" for="gridCheck">
                I agree to the <a href=terms.php>Terms and Conditions</a>.
              </label>
            </div>
          </div>
          <button type="submit" name='submit' class="btn btn-primary">Sign up</button>
        </form>
        </div>
        </body>
</html>        


<?php
                if(isset($_POST["submit"])){
                     $username=$_POST["username"];
                     $password=$_POST["password"];
                     $email=$_POST["email"];
                     $address=$_POST["address"];
                     $city=$_POST["city"];
                     $state=$_POST["state"];
                     $meal=$_POST["meal"];
                     $mealno=$_POST["mealno"];
                     $zip=$_POST["zip"];

                     $q=$db->prepare("INSERT INTO users (username, password, email, address, city, meal, state, mealno, zip) VALUES (:username , :password , :email, :address, :city, :meal, :state, :mealno, :zip )");
                     $q-> bindValue('username', $username);
                     $q-> bindValue('password', $password);
                     $q-> bindValue('email', $email);
                     $q-> bindValue('address', $address);
                     $q-> bindValue('city', $city);
                     $q-> bindValue('meal', $meal);
                     $q-> bindValue('state', $state);
                     $q-> bindValue('mealno', $mealno);
                     $q-> bindValue('zip', $zip);
                     if($q->execute()){
                
                        echo "<script>
                        alert('Your Meal Plan order has been recieved. Thank you!')
                        </script>";
                    }
                    else{
                        echo "<script>
                        alert('User Register Unsuccessfull')
                        </script>";
                    }    
                }
                ?>
