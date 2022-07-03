<?php require_once('includes/functions.php'); ?>
<?php
    $errors = [];
    if(isset($_POST['login'])) {
        $errors = loginUser($_POST);

        if(count($errors) === 0)
            redirect('services.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
</script>
        <link rel="stylesheet" href="styles/registration.css">
        
  <link rel="stylesheet" href="styles/life.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <!-- <?php require_once('includes/head.php'); ?> -->
</head>
<body>
<div class="grid-container">
 <!-- HEADER-->
 <!-- Call header here. -->
 <?php require_once('includes/header.php'); ?>
	

    <!--Navigation Bar-->
       <!-- Call navbar here. -->
    <?php $page='login'; require_once('includes/navbar.php'); ?>
     <!--MAIN CONTENT-->
  <div class="item3">

<div class="servicesVideo">
  <div id="container">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label for="lastname">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            <?php displayValue($_POST, 'email'); ?> />
                        <?php displayError($errors, 'email'); ?>
                    </div>

                    <div class="form-group">
                        <label for="phone">Password</label>
                        <input type="password" class="form-control" id="password" name="password" />
                        <?php displayError($errors, 'password'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <?php require_once('includes/footer.php'); ?>
    </div>
</body>
</html>
