
 <?php
session_start(); 
// if($_SESSION["id"] == true){
// echo $_SESSION["id"];
// }
// else{
//     header('location:index.php');
// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<link rel="stylesheet" href="Dogger.css">
    <title>www.Dogger.com</title>
</head>
<body>
    <!-- <div id="main"> -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu">
                        <nav class="navbar navbar-expand-lg ">
                            <a class="navbar-brand logo" href="Dogger.php">Dogger</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                              <div class="navbar-nav menu1">
                                <a class="nav-item nav-link active" href="Dogger.php" > <span class="home"> Home </span><span class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link" href="About.php">About</a>
                                <a class="nav-item nav-link" href="Trainer.php">Trainers</a>
                                <a class="nav-item nav-link" href="service.php">Services</a>
                                <a class="nav-item nav-link" href="contact.php">Contact</a>
                                <a class="nav-item nav-link" href="blog.php">Blog</a>
                                <a class="nav-item nav-link" href="logout.php">Logout</a>
                                
                              </div>
                            </div>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
