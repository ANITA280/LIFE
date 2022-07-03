<?php require_once('includes/functions.php'); ?>
<!DOCTYPE html>
<html>

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
  <!-- HEADER-->
 <!-- Call header here. -->
	<?php require_once('includes/header.php'); ?>
	

  <!--Navigation Bar-->
 	<!-- Call navbar here. -->
   <?php $page='sitemap'; require_once('includes/navbar.php'); ?>
  
    <!--Main content-->
    <div class="item3">

      <!--The content for sitemap-->
      <div class="servicesVideo">
        <h4>LIFE Site Map</h4>

        <div class="mapSite">
          <h6> Who we are
          </h6>
          <p> Learn about us </p>
          <a href="index.php">Home</a>
          <a href="aboutus.php">About Us</a>
          <a href="contactus.php">Contact Us</a>
          <a href="registration.php">Be a member</a>
        </div>

        <div class="mapSite">
          <h6>Services</h6>
          <p> Learn about our services</p>
          <a href="services.php">Services</a>
          <a href="yoga.php">Yoga</a>
          <a href="meditation.php"> Meditation</a>
          <a href="stretching.php">Stretching</a>
          <a href="healthyhabits.php">Healthy Habits</a>
        </div>

        <div class="mapSite">
          <h6>Our Support</h6>
          <p>Take our support</p>
          <a href="privacypolicy.html">Privacy Policy</a>
          <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">Covid-19 Resources</a>
          <a
            href="https://app.powerbi.com/view?r=eyJrIjoiZTY4NTI1NzQtYTBhYy00ZTY4LTk3NmQtYjBjNzdiOGMzZjM3IiwidCI6ImI0NmMxOTA4LTAzMzQtNDIzNi1iOTc4LTU4NWVlODhlNDE5OSJ9">Australian
            Capital Territory Resources</a></li>
          <a href="https://www.nsw.gov.au/covid-19/find-the-facts-about-covid-19">New South Wales Resources</a>
          <a href="https://coronavirus.nt.gov.au/current-status">Northern Territory Resources</a>
          <a
            href="https://www.qld.gov.au/health/conditions/health-alerts/coronavirus-covid-19/current-status/statistics">Queensland
            Resources</a>
        </div>

        <div class="mapSite">
          <h6>Our Support</h6>
          <p>Take our support</p>
          <a href="https://www.covid-19.sa.gov.au/home/dashboard">South Australia Covid-19 Resources</a>
          <a href="https://www.coronavirus.tas.gov.au/facts/tasmanian-statistics">Tasmania Covid-19 Resources</a>
          <a href="https://www.coronavirus.vic.gov.au/victorian-coronavirus-covid-19-data">Victoria Covid-19
            Resources</a>
          <a href="https://experience.arcgis.com/experience/359bca83a1264e3fb8d3b6f0a028d768">Western Australia Covid-19
            Resources</a>
        </div>
      </div><!-- the sitemap ends-->
    </div>
    <!--footer-->
    <?php require_once('includes/footer.php'); ?>
</div>

</body>

</html>