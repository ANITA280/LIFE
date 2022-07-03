<?php require_once('includes/functions.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <!-- the links for jquery plugins and css  -->
  <link rel="stylesheet" href="styles/life.css">
  <link rel="stylesheet" type="text/css" href="styles/contactUS.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- include the plugin -->
  <script src="plugins/jquery.validate.js"></script>
  <!-- write the JS code to play with the plugin -->
  <script src="scripts/form-validation.js"></script>
</head>

<body>
  <!-- Grid layout-->
  <div class="grid-container">
  <!-- HEADER-->
 <!-- Call header here. -->
 
	<?php require_once('includes/header.php'); ?>
	

  <!--Navigation Bar-->
 	<!-- Call navbar here. -->
   <?php $page='contactus'; require_once('includes/navbar.php'); ?>

    <!--Main Content Area-->
    <div class="item3">
      <div class="servicesVideo">
        <h4>We would love to hear from you.
          Call us at 04-153-457 or for any enquiry please fill up the following form and submit it</h4>
        <div id="container">
          <div id="content">
            <h2> Enquiry form</h2>
            <!--contact us form-->
            <!--Based on: The lectorial week 03 example7 and practical class week 04.-->
            <form id="enquiryform" name="registration" action="" method="post"
              >
              <div><span class="label"> First Name </span>
                <input type="text" name="firstname" id="Name1" value="" >
              </div>
              <!-- for each input field there a label section is added -->
              <div><span class="label"> Last Name </span>
                <input type="text" name="lastname" id="Name2" value="" >
              </div>
              <div><span class="label">Contact Number </span>
                <!-- Number validation using HTML5 validation-->
                <input type="text" name="contact" id="Contact" value=""
                  pattern="^(\+61)\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}$" >
                <p style="display:none;">Enter the phone number in the format +61 XXX XXX XXX </p>
              </div>
              <div><span class="label">Email Address </span>
                <input type="text" name="email" id="email address" value="" >
              </div>
              <!--textarea-->
              <div><span class="label">Enquiry details </span>
                <textarea id="Enquiry details" name="enquiry" rows=10 cols=50 value=""></textarea>
              </div>
              <!--dropdownBox-->
              <div><span class="label">Found us By</span>
                <select name="Found Us" id="Found" name="found">
                  <option selected="selected">Choose your option please</option>
                  <option>Facebook</option>
                  <option>Friends</option>
                  <option>ads </option>
                </select>
              </div>
              <!-- <div><input id="registration_submit" type="submit" value="Submit">
                <input id="registration_reset" type="reset" value="Reset">
              </div> -->
              <button id="registration_submit"  type="submit">Submit</button>
              <button id="registration_reset" type="reset">Reset</button>
            </form>
          </div>
          <!--close content-->
        </div>
        <!--close container-->
        <!-- the adress and contact details of the website-->
        <address>
          Email address: <a href="mailto:webmaster@example.com">LIFE</a>.<br><br>
          Visit us at:
          Life.com<br><br>
          Corporate Address:
          8 station Street,<br> Caulfield North,
          Victoria 3161<br><br>
          Phone Number:0415753457
        </address>
      </div>
      <!--Closing the services videos which contains the content ,container and address div-->
    </div>

    <!--FOOTER-->
    <?php require_once('includes/footer.php'); ?>
</div>

</html>

 <!--Based on: The lectorial week 08 activity 1 and lectorial material of week 07.-->