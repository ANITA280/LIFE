<?php require_once('includes/functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>

   
     <link rel="stylesheet" href="styles/life.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="grid-container">
<?php require_once('includes/header.php'); ?>
    <?php require_once('includes/navbar.php'); ?>

    <div class="container">
        <h1 class="mb-3">Register</h1>
        <div class="row">
            <div class="col-md-6">
            <div class="servicesVideo">
Welcome <?getLoggedInUser()['first_name']; ?><br>
<?php
echo "You have successfully registered to our site" ?>
<?php header("refresh:8; url= services.php");
    exit(); 
    ?>
</div>
</div>
</div>
<?php require_once('includes/footer.php'); ?>
</div>
</body>
</html>