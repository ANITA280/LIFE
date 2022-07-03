<?php
     require_once('includes/functions.php');

   
    $users = getUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Register, Login & Logout with Database Example</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</head>
<body>

<!-- bootstrap layout -->
    <div class="container">


        <div class="container p-3 my-3 border bg-info text-white">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <img src="./images/Healthemind.png" class="rounded-circle img-fluid " bdwidth="300" height="300">
            </div>
            <div class="col-md-6 col-lg-9 col-xl-9">
            <h1 class="display-1 my-4 text-center"> LIFE  </h1> <p class='display-4 text-center'> (Admin) </p>
      <h4 class="text-center"> Living It Fully Everyday </h4>
            </div>
            <?php require_once('api.php'); ?>
            </div>

</div>

<div class="container p-3  my-3 bg-info text-white">
  <h1>Welcome to Life's Dashboard </h1>
  <p>You can view the admin view of the website through this portal</p>
</div>

<div class="container p-3 my-3  bg-info text-white">
  <h1>The Admins can view the list of registered users</h1>
  <p>Enjoy the admin view.</p>
</div>
        <hr />

  
    

        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Click here to see the list of registered users
  </button>

 <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

  <?php foreach($users as $user) { ?>
    <button class="dropdown-item" onclick="$('.progress').removeClass('d-none progress')"><?php echo $user['first_name']?> </button>
  <?php  } ?>
  </div>
</div>
        </div>
    </div>

    <?php require_once('includes/head.php'); ?>
    <script>
        // Send AJAX request to the server and update the page.
        function searchServices() {
            const services = $("#service").val();
            $.get("search.php", { services }).done(function (data) {
                // Update the document with the returned HTML.
                $("#users").html(data);
            }); 
        }

        $(document).ready(function () {
            // Load the initial page data.
            searchServices();

            // Perform AJAX request and update the page when the form is submitted.
            $("#search").submit(function (e) {
                // Prevent the form from submitting.
                e.preventDefault();

                // Send AJAX request.
                searchServices();
            });
        });
    </script>

<!-- 
keeping the services hidden unless the name is clicked from the dropdown list -->
    <div class="container d-none progress bg-info my-3">
        <h1>Services</h1>

        <form id="search">
            <div class="form-group row">
                <div class="col-md-4 col-lg-3 p-3">
                    <label for="service" class="control-label">Service Name</label>
                    <input id="service" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Search" />
            </div>
        </form>

        <div id="users"></div>
    </div>

    </div>
    <div class="container">
    <footer class="f">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2020</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" class="text-dark">Terms of Use</a>
                    <span class="text-muted mx-2">|</span>
                    <a href="#" class="text-dark">Privacy Policy</a>
                </div>
            </div>
        </footer>
</body>
</html>
<!-- The above code  for the layout was based on the activity 6 of lab 07 and week 05 lectorial-->
