
<?php require_once('includes/authorise.php'); ?>
<?php
$email = getLoggedInUser()['email']; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once('includes/head.php'); ?>
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
     <?php $page = 'services'; require_once('includes/navbar.php'); ?>
     <div class="item3">
    <!-- Main Content area-->
  <div class="servicesVideo">
    <!-- <div class="container"> -->
      
            <?php // The form below is displayed if type has not been submitted. ?>
            <?php if(!isset($_POST['type'])) { ?>

                <?php $meals = getMeals(); ?>
              
                <form method="post">
                <div class="form-check">
                                <input class="form-check-input" type="radio"
                                     name="type" value="Vegan">
                                <label class="form-check-label" for="Vegan"> Vegan</label>
                                <input class="form-check-input" type="radio" name="type" value="Non-Vegan">
                                <label class="form-check-label" for="Non-Vegan"> Non-Vegan</label>

                            </div>
                            
                        <?php if(isset($_POST['mealType'])) { ?>
                            <div class='text-danger'>You must select a meal type.</div>
                        <?php } ?>
                    
                        <div class="form-content">

                    <button type="submit" class="btn btn-primary mr-5" name="mealType">Go</button>
                    <a href="services.php" class="btn btn-outline-dark">Back to myServices</a>
                </form>
                </div>
            
                    
 <?php } else { ?>
    <!-- the meal plan generated when Non Vegan Option is chosen -->
<?php if(($_POST['type'])=="Non-Vegan") { ?>
                
                <?php $mealplan = getMeal($_POST['type']); ?>
             
               </h1> <?php echo( $_POST['type']) ?></h1>
              
                   <?php  $breakCalorie=500; ?>
            
                <?php  $breakCalorie= 1500/3; ?>

<h2> Breakfast</h2>
            <?php for($i= array_rand($mealplan); $breakCalorie>=0; $i=array_rand($mealplan)){
               $specificMeal= $mealplan[$i]; ?>
                    <?php if ($breakCalorie + 70 >= $specificMeal['kilojoules']) {?>

                <img class="serviceVideo" height="400" width="400" src= "<?php echo $specificMeal['image_path'];?>">
                    <div> <h3> <?php echo $specificMeal['name']; ?> </h3> 
                    <h5><?php echo "Calories:". $specificMeal['kilojoules'] . " Servings:" . 1; ?></h5>
            <?php $breakCalorie=$breakCalorie- (int) $specificMeal['kilojoules']; ?>
            <?php $meals=[
            'email' => $email,
            'meal_id' => $specificMeal['meal_id'],
            'servings' =>  (double) 1,
            ]; ?>
            <?php insertMeal($meals); ?>
               <?php } ?>
               <?php } ?>
              
               <?php  $lunchCalorie= 1500/3; ?>
               <h2> Lunch</h2>
            <?php for($i= array_rand($mealplan); $lunchCalorie>=0; $i=array_rand($mealplan)){
               $specificMeal= $mealplan[$i]; ?>
                    <?php if ($lunchCalorie + 70 >= $specificMeal['kilojoules']) {?>


                <img class="serviceVideo" height="400" width="400" src= "<?php echo $specificMeal['image_path'];?>">
                    <div> <h3> <?php echo $specificMeal['name']; ?> </h3> 
                    <h5><?php echo "Calories:". $specificMeal['kilojoules'] . " Servings:" . 1; ?></h5>
            <?php $lunchCalorie=$lunchCalorie- (int) $specificMeal['kilojoules']; ?>
            <!-- storing the meal in the database user_meal table -->
            <?php $meals=[
            'email' => $email,
            'meal_id' => $specificMeal['meal_id'],
            'servings' =>  (double) 1,
            ]; ?>
            <?php insertMeal($meals); ?>
               <?php } ?>
               <?php } ?>


               <?php  $DinnerCalorie= 1500/3; ?>
               <h2> Dinner</h2>
            <?php for($i= array_rand($mealplan); $DinnerCalorie>=0; $i=array_rand($mealplan)){
               $specificMeal= $mealplan[$i]; ?>
                    <?php if ($DinnerCalorie+ 70 >= $specificMeal['kilojoules']) {?>

                <img class="serviceVideo" height="400" width="400" src= "<?php echo $specificMeal['image_path'];?>">
                    <div> <h3> <?php echo $specificMeal['name']; ?> </h3> 
                    <h5><?php echo "Calories:". $specificMeal['kilojoules'] . " Servings:" . 1; ?></h5>
            <?php $DinnerCalorie=$DinnerCalorie- (int) $specificMeal['kilojoules']; ?>
            <?php $meals=[
            'email' => $email,
            'meal_id' => $specificMeal['meal_id'],
            'servings' =>  (double) 1,
            ]; ?>
            <?php insertMeal($meals); ?>
            </div>
               <?php } ?>

               <?php } ?>

               <?php
               } 

            //    <!-- the meal plan generated when Non Vegan Option is chosen -->
               else if(($_POST['type'])=="Vegan") {?>
              
                 </h1> <?php echo( $_POST['type']) ?></h1>
              
                <?php $mealplan = getMeal($_POST['type']); ?>

                <?php  $breakCalorie= 1500/3; ?>
                <h2> Breakfast</h2>
            <?php for($i= array_rand($mealplan); $breakCalorie>=0; $i=array_rand($mealplan)){
               $specificMeal= $mealplan[$i]; ?>
                    <?php if ($breakCalorie + 70 >= $specificMeal['kilojoules']) {?>


                <img class="serviceVideo" height="400" width="400" src= "<?php echo $specificMeal['image_path'];?>">
                    <div> <h3> <?php echo $specificMeal['name']; ?> </h3> 
                    <h5><?php echo "Calories:". $specificMeal['kilojoules']; ?></h5>
            <?php $breakCalorie=$breakCalorie- (int) $specificMeal['kilojoules']; ?>
            <?php $meals=[
            'email' => $email,
            'meal_id' => $specificMeal['meal_id'],
            'servings' =>  (double) 1,
            ]; ?>
               <?php } ?>
               <?php } ?>
               <?php echo $_POST['email'] ?>
               <h2> Lunch</h2>
               <?php  $lunchCalorie= 1500/3; ?>
            <?php for($i= array_rand($mealplan); $lunchCalorie>=0; $i=array_rand($mealplan)){
               $specificMeal= $mealplan[$i]; ?>
                    <?php if ($lunchCalorie + 70 >= $specificMeal['kilojoules']) {?>


                <img class="serviceVideo" height="400" width="400" src= "<?php echo $specificMeal['image_path'];?>">
                    <div> <h3> <?php echo $specificMeal['name']; ?> </h3> 
                    <h5><?php echo "Calories:". $specificMeal['kilojoules']; ?></h5>
            <?php $lunchCalorie=$lunchCalorie- (int) $specificMeal['kilojoules']; ?>
            <?php $meals=[
            'email' => $email,
            'meal_id' => $specificMeal['meal_id'],
            'servings' =>  (double) 1,
            ]; ?>
               <?php } ?>
               <?php } ?>
               <h2> Dinner</h2>
               <?php  $DinnerCalorie= 1500/3; ?>
            <?php for($i= array_rand($mealplan); $DinnerCalorie>=0; $i=array_rand($mealplan)){
               $specificMeal= $mealplan[$i]; ?>
                    <?php if ($DinnerCalorie+ 70 >= $specificMeal['kilojoules']) {?>


                <img class="serviceVideo" height="400" width="400" src= "<?php echo $specificMeal['image_path'];?>">
                    <div> <h3> <?php echo $specificMeal['name']; ?> </h3> 
                    <h5><?php echo "Calories:". $specificMeal['kilojoules']; ?></h5>
            <?php $DinnerCalorie=$DinnerCalorie- (int) $specificMeal['kilojoules']; ?>
            <?php $meals=[
            'email' => $email,
            'meal_id' => $specificMeal['meal_id'],
            'servings' =>  (double) 1,
            ]; ?>
           
               <?php } ?>
               <?php } ?>

               <?php }  ?>
               
                    <?php  } ?>     
                  
                    </div>
                </div>
                
<?php require_once('includes/footer.php'); ?>
                 </div>
</body>
</html>
<!-- The above code for the meal planner was based on the activity 2 of lab 10 and week 09 lectorial-->



