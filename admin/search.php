<?php
     require_once('includes/functions.php');

    // Extract and trim the services variable from the URL.
    $services = trim(isset($_GET['services']) ? $_GET['services'] : '');
 
    // If services is empty then all users are returned.
    $services = getServicebyName($services);

?>

<?php if(count($services) === 0) { ?>
    <p class="alert alert-info">No name matches the search <strong>'<?php echo $services; ?>'</strong>.</p>
<?php } else { ?>
    
      
        <div class="container">
        <div class="row">
        
            <?php foreach($services as $service) { ?>
              
                <div class="col-md-6 col-lg-6 p-3">
                    <h1><?php echo $service['name']; ?></h1>
              
                    <img class=".img-fluid" src="<?php echo $service['image_path']; ?>" class="service" width="380" height="600"/></div>


               
               
            <?php } ?>
</div>
</div>
       
    
<?php } ?>
 <!--Based on: Lecture 11, example 1: AJAX search from database.-->