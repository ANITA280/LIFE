<?php require_once('includes/functions.php'); ?>
 <!DOCTYPE html>
<html>
<head>
    <!-- links for the styling and the plugins -->
  <link rel="stylesheet" href="styles/life.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
        #slick-div {
            width: 1000px;
            margin: 4% auto;
        }

        #slick-div img {
            width: 1000px;
  height: 1000px;
  object-fit: cover;
}
           
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        // Initialise slick on the element.
        $(document).ready(function () {
            $("#slick-div").slick({
                autoplay: true,
                dots: true
            });
        });
    </script>
</head>

<body>

 
<!--GRID LAYOUT-->

<div class="grid-container">
  <!-- HEADER-->
 <!-- Call header here. -->
	<?php require_once('includes/header.php'); ?>
	

  <!--Navigation Bar-->
 	<!-- Call navbar here. -->
   <?php $page = 'home'; require_once('includes/navbar.php'); ?>
  
  <!--Main Content-->
  <div class="item3">
    <div class="servicesVideo">
        <!-- code for including the carousel in the main body -->
  <div id="slick-div">
        <div><img src="images/Yoga1.png" alt="Dog" /></div>
        <div><img src="images/Stretching2.jpg" alt="Dog" /></div>
        <div><img src="images/HealthyHabits2.jpg" alt="Dog" /></div>
        <div><img src="images/meditation.jpg" alt="Dog" /></div>
    </div>
     <p style="width: 700px; text-align: center;margin-left: 420px; font-size:24px">Live life with our online services for Yoga, Meditation, Stretching and Healthy Habits</p>
 


  </div>
  </div>
  <!--FOOTER-->
  <?php require_once('includes/footer.php'); ?>
</div>
</body>
</html>

<!--
  Based on the example shown on lectorial 6 week06 example5 and  week07 lab Activity 02 example-->
