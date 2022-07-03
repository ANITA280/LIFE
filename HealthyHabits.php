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
   <?php $page=='services'; require_once('includes/navbar.php'); ?>
    <!--main content -->
    <div class="item3">
      <!-- The main content of the healthy habits services-->
      <div class="servicesVideo">
        <h3 style="margin-bottom:2%;font-size: 74px;text-align: center;">Our Healthy Habits Services</h3>
        <h6 class="otherservices"> The services :
          <a href="yoga.html">Yoga</a>
          <a href="meditation.html"> Meditation</a>
          <a href="stretching.html">Stretching</a>
          <a class="current" href="healthyhabits.html">Healthy Habits</a>
        </h6>
        <div class="Planner">
          <p>A healthy diet is good for your overall health. It also can help you reach a healthy weight and stay there.
            To improve your eating habits, it's best to make small lifestyle changes that you can keep doing over time.
            So create a personalised meal planner using our meal planner generator:
        </div>
        <div class="Meal"><a href="MealPlanner.html">
            <h2>Meal Planner</h2>
          </a></p>
        </div>
        <div style="clear:both;"></div>

        <!--Videos for stretching-->
        <h4 style="text-align: center; margin:2% 0%" ;>Learn Healthy Habits with videos</h4>
        <p style="margin-left:150px;margin-top:2%;min-height: 400px" ;>
          <video class="YogaVideos" width="400" height="400" controls loop>
            <source src="images/HealthyHabits1.mp4" type="video/mp4">

            Your browser does not support the video tag.
          </video>
          "Motivation is what gets you started. Habit is what keeps you going."-
          Jim Ryun. So build healthy habits with us and keep going smoothly.
        </p>
        <div style="clear:both;"></div>



        <p style="margin-left:150px;margin-top:2%;min-height: 400px" ;><video class="YogaVideos" width="400"
            height="400" controls>
            <source src="images/HealthyHabits2.mp4" type="video/mp4">

            Your browser does not support the video tag.
          </video> "Take care of your body. It's the only place you have to live."
          -Jim Rohn. Building healthy habits will be the fisrt step towards self care, nurture your body, practise the
          habits.
        </p>
        <div style="clear:both;"></div>

        <p style="margin-left:150px;margin-top:2%;min-height: 400px" ;> <video class="YogaVideos" width="400"
            height="400" controls>
            <source src="images/HealthyHabits3.mp4" type="video/mp4">

            Your browser does not support the video tag.
          </video>
          Feeling sorry for yourself, and your present condition is not only a waste of energy but the worst habit you
          could possibly have. -Dale Carnegie
          We don't want you to be involved in the worst habit, we want to help you change them with the healhty habits.
        </p>
        <div style="clear:both;"></div>
        <!-- audio section for healthy habits-->
        <h4 style="text-align: center;">Learn Healthy Habits with our audios</h4>

        <p style="margin-top: 2%;">
        <div class="music">
          <div class="box">
            <h6>Peaceful Minds Studio.</h6>
            <img src="images/HealthyHabits1.jpg" alt="">
          </div>
          <audio class="YogaAudios" controls autoplay muted>

            <source src="images/HealthyHabits1.m4a" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>Success is the sum of small efforts repeated day in and day out. -Robert Collier
        We see your small efforts, we want you to see you everyday repeating them, we are here to
        support your healthy habits.
        </p>
        <div style="clear:both;"></div>
        <p style="margin-top: 2%;">
        <div class="music">
          <div class="box">
            <h6>The external and internal purifier!</h6>
            <img src="images/HealthyHabits2.jpg" alt="">
          </div>
          <audio class="YogaAudios" controls autoplay muted>

            <source src="images/HealthyHabits2.m4a" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div> We are our own potters; for our habits make us, and we make our habits. -Frederick Langbridge
        Be your potter, we will help you to make the better version of you because we assit you to make good habits.</p>
        <div style="clear:both;"></div>
        <p style="margin-top: 2%;">
        <div class="music">
          <div class="box">
            <h6>The Morning Rise.</h6>
            <img src="images/HealthyHabits3.jpg" alt="">
          </div>
          <audio class="YogaAudios" controls autoplay muted>

            <source src="images/HealthyHabits3.m4a" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div> You’ll never change your life until you change something you do daily. The secret of your success is
        found in your daily routine. -John C. Maxwell
        Join us in bring good changes in your habits everyday. </p>
        <div style="clear:both;"></div>


      </div>
      <!--end of servicesVideo seciton-->

    </div>
    <!--FOOTER-->
    <?php require_once('includes/footer.php'); ?>
</div>
</body>

</html>