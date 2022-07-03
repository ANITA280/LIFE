

<?php require_once('includes/functions.php'); ?>
<?php
    $errors = [];
    // when the register form is submitted the errors will be checked
    if(isset($_POST['register'])) {
        $errors = registerUser($_POST);
// if no errors are returned, the user will be get the welcome messgae
        if(count($errors) === 0)
        redirect('welcome.php');
            
    }
?>



<!DOCTYPE html>
<html>
<head>
<?php require_once('includes/head.php'); ?>
    <title> Reigistration Form</title>
    
    <script>
        $(document).ready(function () {
            const age = $("#age");
            const ageChange = function () {
                $("#age-display").text(age.val());
            }

            ageChange();
            age.mousemove(ageChange).change(ageChange);
        });

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

</head>
<body>




<div class="grid-container">
  <!-- HEADER-->
 <!-- Call header here. -->
	<?php require_once('includes/header.php'); ?>
	

  <!--Navigation Bar-->
 	<!-- Call navbar here. -->
   <?php $page='registration'; require_once('includes/navbar.php'); ?>
  
    <!--MAIN CONTENT-->
  <div class="item3">

  <div class="servicesVideo">
    <div id="container">
      <h5 style="padding-top:2%;">In future the full range of services will be available to registered members only. So fill up the form to be a member. </h5>
        <div id="content">
            <h2>Registration Form</h2>
	<!-- registration form -->
            <form method="post" >
            <div class="form-group">
                 <span class="label">First Name:</span>
                <input type="text" class="form-control" id="firstname" name="firstname"
                            <?php displayValue($_POST, 'firstname'); ?> />
                        <?php displayError($errors, 'firstname'); ?>
                </div>
                <div class="form-group">
                <span class="label">Last Name:</span>
                <input type="text" class="form-control" id="lastname" name="lastname"
                            <?php displayValue($_POST, 'lastname'); ?> />
                        <?php displayError($errors, 'lastname'); ?>
                    </div>

                  <div class="form-group">
                   <span class="label">Email Address:</span>
                   <input type="text" class="form-control" id="email" name="email"
                            <?php displayValue($_POST, 'email'); ?> />
                        <?php displayError($errors, 'email'); ?>
                    </div>

                    <div class="form-group">
                <span class="label">Confirm Email:</span>
          
                <input type="text" class="form-control" id="confirmemail" name="confirmemail"
                            <?php displayValue($_POST, 'confirmemail'); ?> />
                        <?php displayError($errors, 'confirmemail'); ?>
                    </div>
                    <div class="form-group">
                     <span class="label">Phone Number</span>
                     <input type="text" class="form-control" id="phone" name="phone"
                            <?php displayValue($_POST, 'phone'); ?> />
                        <?php displayError($errors, 'phone'); ?>
                    </div>
                    <div class="form-group">
                        <label for="phone">*Age <small class="text-muted">must be at least 16</small></label>
                        <div class="row">
                            <label class="col-sm-1 col-form-label">
                                <span id="age-display"></span>
                            </label>
                            <div class="col-sm-11">
                                <input type="range" class="form-control" id="age" name="age" min="1" max="120"
                                    <?php displayValue($_POST, 'age'); ?>
                                    <?php if(!isset($_POST['age'])) echo 'value="1"'; ?> />
                            </div>
                        </div>
                        <?php displayError($errors, 'age'); ?>
                    </div>

                <div class="form-group">
                <span class="label"> Student Status:</span>
          
                    <p>Are you a student currently?</p>
                    <div class="form-check">
                            <input class="form-check-input" type="radio"
                                id="student-status-yes" name="student-status" value="true"
                                <?php displayChecked($_POST, 'student-status', 'true'); ?> />
                            <label class="form-check-label" for="student-status-yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                id="student-status-no" name="student-status" value="false"
                                <?php displayChecked($_POST, 'student-status', 'false'); ?> />
                            <label class="form-check-label" for="student-status-no">No</label>
                        </div>
                        <?php displayError($errors, 'student-status'); ?>
                    </div>
                    
                    <div class="form-group"> <span class="label">Employment Status:</span>
                    <p>Are you employeed currently?:</p>
                    <div class="form-check">
                            <input class="form-check-input" type="radio"
                                id="employment-status-yes" name="employment-status" value="true"
                                <?php displayChecked($_POST, 'employment-status', 'true'); ?> />
                            <label class="form-check-label" for="employment-status-yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                id="employment-status-no" name="employment-status" value="false"
                                <?php displayChecked($_POST, 'employment-status', 'false'); ?> />
                            <label class="form-check-label" for="employment-status-no">No</label>
                        </div>
                        <?php displayError($errors, 'employment-status'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">*Password <small class="text-muted">must be at least 8 characters</small></label>
                        <input type="password" class="form-control" id="password" name="password" />
                        <?php displayError($errors, 'password'); ?>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">*Confirm password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" />
                        <?php displayError($errors, 'confirmPassword'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary mr-5" name="register" value="register">Register</button>
                    <a href="index.php" class="btn btn-outline-dark">Cancel</a>
               
             
            </form>
       
    </div>
  </div>
</div>
  </div>
  <!--FOOTER-->
  <?php require_once('includes/footer.php'); ?>
</div>

</body>
</html>
<!-- The above code for the form was based on the activity 3 of lab 09 and week 08 lectorial-->
