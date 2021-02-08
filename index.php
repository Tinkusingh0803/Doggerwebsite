 <?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>js form validation.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="stylesignup5.css">

</head>
<body>
    <div class="container1">
        <div class="header1">
            <h2>REGISTRATION FORM </h2>

        </div>
        <form id="myform"   action="" method="POST" class="form1">
            <div class="form_field  ">
                <label for="">Username</label>
                <input type="text" id="username" name="nametext" id="name" class="user" placeholder="Enter Fullname" autocomplete="off" required>
                  <div class="name"></div>
            </div>
            <div class="form_field ">
                <label for="">Email</label>
                <input type="email" id="email" class="usersub" name="emailtext" id="subject" placeholder="Enter Email" autocomplete="off" required>
                  <div class="email"></div>
            </div>
             <div class="form_field  ">
                <label for="">Phone Number</label>
                <input type="number" id="Phone" class="userphone" name="phonenumber" id="phone" placeholder="Enter phone number"  autocomplete="off" required>
                  <div class="Phone"></div>
            </div> 
            <div class="form_field  ">
                <label for="">Password</label>
                <input type="password" id="password" class="pass" name="passwordid" id="email" placeholder="Enter password"  autocomplete="off" required>
                  <div class="password"></div>

            </div> 
            <div class="form_field  ">
                <label for="">Confirm password</label>
                <input type="password" id="cpassword" class="cpassword" name="conpassid" id="password" placeholder="Enter confirm password"  autocomplete="off" required>
                  <div class="conpass"></div>
            </div>

            <div class="account">
         <a href="loginpage.php"> you have a already account</a>
        </div>

            <input type="submit" value="submit" onclick="return submitfun()" name="submit" id="submit" class="btn"> 
        </form>
    </div>

     
    <script>
     function submitfun(){
           
           var ready=0;
        var username=document.getElementById('username').value;
        var email=document.getElementById('email').value;
        var Phone=document.getElementById('Phone').value;
        var password =document.getElementById('password').value;
        var cpassword=document.getElementById('cpassword').value;
if(username===null || username===""){
$(".name").css('color', 'red').html("name is required");
$(".user").css('border', '2px solid red');
 ready=0;
}
else
{
  $(".name").css('color', 'green').html( "");
$(".user").css('border', '2px solid green');
ready=1;
}
if(email===null || email===""){
$(".email").css('color', 'red').html("Email is required");
$(".usersub").css('border', '2px solid red');
ready=0;
}
else
{
$(".email").css('color', 'green').html("");
$(".usersub").css('border', '2px solid green');
ready=1;
}
if(Phone===null || Phone===""){
$(".Phone").css('color', 'red').html("phone is required");
$(".userphone").css('border', '2px solid red');
ready=0;
}
else
{
$(".Phone").css('color', 'green').html("");
$(".userphone").css('border', '2px solid green');
ready=1;
}  
if(password===null || password===""){
$(".password").css('color', 'red').html("password is required");
$(".pass").css('border', '2px solid red');
ready=0;
}
else
{
$(".password").css('color', 'green').html("");
$(".pass").css('border', '2px solid green');
ready=1;
}
if(cpassword===null || cpassword===""){
    
$(".conpass").css('color', 'red').html("confirm password is required");
 $(".cpassword").css('border', '2px solid red');
ready=0;
}
else
{
    
$(".conpass").css('color', 'red').html("");
 $(".cpassword").css('border', '2px solid green');
ready=1;
}

if(password != cpassword){ 
    $(".conpass").css('color', 'red').html("confirm password is not match");
    return false;
}
return true;

}

    </script>
</body>
</html>



<?php
     include 'connection.php';
            

if(isset($_POST['submit'])){
    $name = $_POST['nametext'];
    $emailtext = $_POST['emailtext'];
    $phonenumber = $_POST['phonenumber'];
    $passwordid = $_POST['passwordid'];
    $conpassid = $_POST['conpassid']; 

    $sql = "select * from forminformation_table  WHERE email_id = '$emailtext'";
$select = mysqli_query($con, $sql);
$row = mysqli_num_rows($select);
if ($row > 0) {
    ?>
    <script>
    alert( "The email already exists.");
    </script> <?php
}
else{
    $query ="INSERT INTO `forminformation_table`(`user_name`, `email_id`, `phone_number`, `password`, `confirm_password`) 
    VALUES ('$name','$emailtext','$phonenumber','$passwordid','$conpassid')";
     
    $result=mysqli_query($con,$query);

    if($result){
        ?>
        <script>
        alert("data inserted properly");
        </script>
        <?php

    }else {
        ?>
        <script>
        alert("data not inserted ");
        </script>
        <?php
    }
}
}
?>