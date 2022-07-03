<div class="item2">
  <a class="<?php if($page=='home'){echo 'current';}?>" href="index.php">Home</a>
 
  <?php if(isUserLoggedIn()) { ?>
    <a class="<?php if($page=='services'){echo 'current';}?>" href="services.php"> Services </a>
                   
                <?php } ?>
  <a  class="<?php if($page=='contactus'){echo 'current';}?>" href="contactusForm.php">Contact us </a>
   <a class="<?php if($page=='aboutus'){echo 'current';}?>" href="aboutus.php"> About us </a>
    


  
   <!-- <a class="<?php if($page=='registration'){echo 'current';}?>" href="registration.php" style="float:right">Register</a> -->
   <?php if(isUserLoggedIn()) { ?>
                    <span class="nav-item nav-link text-light">
                        Welcome, <?= getLoggedInUser()['first_name']; ?>
                    </span>
                    <a href="logout.php" style="float:right;"class="<?php if($page=='logout'){echo 'current';}?>">Logout</a>
                <?php } else { ?>
                    <a href="registration.php" style="float:right" class="<?php if($page=='registration'){echo 'current';}?>">Register</a>
                    <a href="login.php" style="float:right;"class="<?php if($page=='login'){echo 'current';}?>">Login</a>
                <?php } ?>
                
   <a class="<?php if($page=='sitemap'){echo 'current';}?>" href="sitemap.php" style="float:right;"> Sitemap</a>
  </div>