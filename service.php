<?php require_once('includes/authorise.php'); ?>
<?php
    $id = (int) $_GET['id'];
    $service = getService($id);

    $errors = [];
    if(isset($_POST['activity'])) {
        $email = getLoggedInUser()['email'];

        $errors = recordActivity($email, $id, $_POST);
    }
?>
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
        <div class="mb-5">
        <h3>
                <?php echo $service['name']; ?>   </h3>
                <img src="<?php echo $service['image_path']; ?>" width="380" height="600" class="service ml-5" />
             
        </div>

        <?php if($id === 1) { ?>
            <p>Select from our yoga classes below and start stiling your mind!</p>

            <?php // The form below is displayed if type has not been submitted. ?>
            <?php if(!isset($_POST['type'])) { ?>
                <?php $serviceInstructions = getServiceInstructions($id); ?>

                <form method="post">
                    <div class="form-group">
                        <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                            <?php $t = $serviceInstruction['service_type']; ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                <label class="form-check-label" for="<?php echo $t; ?>"><?php echo $t; ?></label>
                            </div>
                        <?php }   ?>
                        <?php if(isset($_POST['service'])) { ?>
                            <div class='text-danger'>You must select a yoga type.</div>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary mr-5" name="service">Go</button>
                    <a href="services.php" class="btn btn-outline-dark">Back to myServices</a>
                </form>
            <?php } else { ?>
                <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>
<
                <h3><?php echo $serviceInstruction['service_type']; ?></h3>
                <video class="serviceVideo" height="400" width="800" controls>
                    <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                </video>

                <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                    <form method="post">
                        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="duration" for="duration">Duration (minutes)</label>
                                <input type="text" class="form-control d-inline-block" id="duration" name="duration"
                                    <?php displayValue($_POST, 'duration'); ?> />
                                <?php displayError($errors, 'duration'); ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-5" name="activity">Record Activity</button>
                        <a href="" class="btn btn-outline-dark">Cancel</a>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-success">
                        You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                        <strong><?php echo $_POST['type']; ?> Yoga</strong>.
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-dark mr-5">More <?php echo $service['name']; ?></a>
                        <a href="services.php" class="btn btn-outline-dark">Back to myServices</a>
                    </div>
                <?php } ?>
            <?php } ?>

        <?php } else if($id === 2){ ?>
            <p>Select from our Meditation classes below and start stiling your mind!</p>

            <?php // The form below is displayed if type has not been submitted. ?>
            <?php if(!isset($_POST['type'])) { ?>
                <?php $serviceInstructions = getServiceInstructions($id); ?>

                <form method="post">
                    <div class="form-group">
                        <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                            <?php $t = $serviceInstruction['service_type']; ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                <label class="form-check-label" for="<?php echo $t; ?>"><?php echo $t; ?></label>
                            </div>
                        <?php } ?>
                        <?php if(isset($_POST['service'])) { ?>
                            <div class='text-danger'>You must select a Meditation Option.</div>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary mr-5" name="service">Go</button>
                    <a href="services.php" class="btn btn-outline-dark">Back to Services</a>
                </form>
            <?php } else { ?>
                <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>

                <h3><?php echo $serviceInstruction['service_type']; ?></h3>
                <video class="serviceVideo" height="400" width="800" controls>
                    <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                </video>

                <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                    <form method="post">
                        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="duration" for="duration">Duration (minutes)</label>
                                <input type="text" class="form-control d-inline-block" id="duration" name="duration"
                                    <?php displayValue($_POST, 'duration'); ?> />
                                <?php displayError($errors, 'duration'); ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-5" name="activity">Record Activity</button>
                        <a href="" class="btn btn-outline-dark">Cancel</a>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-success">
                        You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                        <strong><?php echo $_POST['type']; ?> Meditation</strong>.
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-dark mr-5">More <?php echo $service['name']; ?></a>
                        <a href="services.php" class="btn btn-outline-dark">Back to Services</a>
                    </div>
                <?php } ?>
            <?php } ?>

        <?php } else if($id === 3){ ?>
            <p>Select from our Stretching classes below and start stiling your mind!</p>

            <?php // The form below is displayed if type has not been submitted. ?>
            <?php if(!isset($_POST['type'])) { ?>
                <?php $serviceInstructions = getServiceInstructions($id); ?>

                <form method="post">
                    <div class="form-group">
                        <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                            <?php $t = $serviceInstruction['service_type']; ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                <label class="form-check-label" for="<?php echo $t; ?>"><?php echo $t; ?></label>
                            </div>
                        <?php } ?>
                        <?php if(isset($_POST['service'])) { ?>
                            <div class='text-danger'>You must select a Stetching type.</div>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary mr-5" name="service">Go</button>
                    <a href="services.php" class="btn btn-outline-dark">Back to Services</a>
                </form>
            <?php } else { ?>
                <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>

                <h3><?php echo $serviceInstruction['service_type']; ?></h3>
                <video class="serviceVideo" height="400" width="800" controls>
                    <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                </video>

                <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                    <form method="post">
                        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="duration" for="duration">Duration (minutes)</label>
                                <input type="text" class="form-control d-inline-block" id="duration" name="duration"
                                    <?php displayValue($_POST, 'duration'); ?> />
                                <?php displayError($errors, 'duration'); ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-5" name="activity">Record Activity</button>
                        <a href="" class="btn btn-outline-dark">Cancel</a>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-success">
                        You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                        <strong><?php echo $_POST['type']; ?> Stretching </strong>.
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-dark mr-5">More <?php echo $service['name']; ?></a>
                        <a href="services.php" class="btn btn-outline-dark">Back to Services</a>
                    </div>
                <?php } ?>
            <?php } ?>

        <?php } 
        else if($id === 4){
            // redirecting to the meal planner page
        redirect('planner.php');
        }
?>
       
    </div>
    </div>

<?php require_once('includes/footer.php'); ?>
</div>
</body>
</html>
<!-- The above code for the services was based on the activity 2 of lab 10 and week 09 lectorial-->