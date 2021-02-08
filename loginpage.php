<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="stylesignup5.css">
</head>
 
<body>

<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    $emailtext = $_POST['emailtext'];
    $passwordid = $_POST['passwordid'];
    $email_search = "SELECT * FROM `forminformation_table` WHERE `email_id`='$emailtext' && `password`='$passwordid'";
    $query = mysqli_query($con,  $email_search);
    $total = mysqli_num_rows($query);

    if($total == 1){
                $_SESSION['id'] = $pwd;
               header('location:Dogger.php');
            
             }
        else{
        ?>
        <script>
        alert("please check your email and password ");
        </script>
    <?php
    }
}

?>

    <div  class="container1">
<div class="header1">
            <h2> login FORM </h2>

        </div>
    <form id="myform" method="POST" action="" class="form1">
    <div class="form_field ">
                <label for="">Email</label>
                <input type="email" id="email" class="usersub" name="emailtext" id="subject" placeholder="Enter Email" autocomplete="off" required>
                  <div class="email"></div>
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
            <span>you dont have an account</span>
            <a href="index.php"> signup now</a>
 <input type="submit" value="login" onclick="return submitfun()" name="submit" id="submit" class="btn"> 
     
</form>
    </div>
<script>
    function submitfun(){
    ready=0;
    var email = document.getElementById('email').value;
   var password = document.getElementById('password').value;
   var cpassword = document.getElementById('cpassword').value;
   
    if(email===null || email===""){
        $('.email').css('color', 'red').html('please Enter the Email');
        $(".usersub").css('border', '2px solid red');
        ready=0;
    }
    else
    {
        $('.email').css('color', 'green').html('');
         $(".usersub").css('border', '2px solid green');
        ready=1;
    }

    if(password===null || password===""){
        $('.password').css('color', 'red').html('please Enter the password');
        $(".pass").css('border', '2px solid red');
        ready=0;
    }
    else
    {      
        $('.password').css('color', 'green').html('');
        $(".pass").css('border', '2px solid green');
        ready=1;
    }

    if(cpassword===null || cpassword===""){
        $('.conpass').css('color', 'red').html('please Enter the password');
        $(".cpassword").css('border', '2px solid red');
        ready=0;
    }
    else
    {      
        $('.conpass').css('color', 'green').html('');
        $(".cpassword").css('border', '2px solid green');
        ready=1;
    }
    if(password != cpassword){
        $('.conpass').css('color', 'red').html('confirm password are not match');
        return false;
        }
            return true;

}
</script>

</body>
</html>

