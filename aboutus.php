<?php require_once('includes/functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<div class="grid-container">
  <!-- HEADER-->
 <!-- Call header here. -->
	<?php require_once('includes/header.php'); ?>
	

  <!--Navigation Bar-->
 	<!-- Call navbar here. -->
   <?php $page='aboutus'; require_once('includes/navbar.php'); ?>
  <div class="item3">
      
    <div class="servicesVideo">
        <h2>To let you know about us</h2>
    <div id="container">
        
    <div class="about">
        <H4> The present Pandemic</h4>
            <p>The COVID-19 pandemic has made a massive impact on our lives. 
                Many of us are reeling through emotional aftermath of the lockdowns and challenges posed by the pandemic. 
                Public health actions, such as social distancing, are necessary
                 to reduce the spread of COVID-19, but they can make us feel isolated and lonely and can increase stress and anxiety. </p></div>
                
                 <div class="about"> <h4>Our aim for digital wellness </h4>
              <div class="about"> <p>  According to a report published by Australian Institite of Health and Welfare (Australian government)-stress, confusion and anger are commonplace as a result of the pandemic and, while many people may not experience any long-term concerns, COVID-19 has the potential to contribute to or exacerbate long-term mental challangesincluding anxietyand depression.According to research done by a local council in Melbourne, wellness industry has grown rapidly during the pandemic. 
                People are looking for ways to decompress, relax, and focus on mental wellbeing.
                 In view of that the local council would like to commence a digital wellness website.
                  And hence this is the website.
                 We have named it
                 as LIFE (Living It Fully Everyday).</p></div>
                 <div class="about"> <h4>Our services</h4>
                 <p>The program on the website will manage stress, 
                 and lead the userdown the path of becoming a more mindful and productive individual.
                 LIFE will include ONLINE servicesas:
                 •Yoga||  Meditation|| Stretching|| Healthy habits</p></div>

            
                    </div>
    </div>
</div>
  </div>
  <div class="item5">

  <?php require_once('includes/footer.php'); ?>
</div>


</body>
</html>

