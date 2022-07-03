<?php
   

    // API Location: https://www.weatherapi.com/
    // API Documentation: https://www.weatherapi.com/docs/
   
    const API_KEY = 'ac7f611506c240d29fd52822211210';

    $symbol = "Melbourne";
   
    $url= "http://api.weatherapi.com/v1/current.json?key=".API_KEY."&q=$symbol";
    
    // Send GET request.
    $json = file_get_contents($url);

    // Decode returned JSON string to array for processing.
    $data = json_decode($json, true);
    // Check form has been submitted.
    if(isset($_POST['alphavantage'])) {
        // Build up URL for the request.
        $symbol = $_POST['symbol'];
      
        $url= "http://api.weatherapi.com/v1/current.json?key=".API_KEY."&q=$symbol";
        
        // Send GET request.
        $json = file_get_contents($url);

        // Decode returned JSON string to array for processing.
        $data = json_decode($json, true);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Add jQuery and Bootstrap JS necessary CDNs -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <!-- Include fontaweswome to use custom icons within sitemap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
            integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
            crossorigin="anonymous" />

    <!-- Using jsTree plugin: https://www.jstree.com/ -->
    <link rel="stylesheet" href="dist/themes/default/style.min.css" />
    <script src="dist/jstree.min.js"></script>

    <!-- Include code to activate plugin -->
    <script src="js/use-jstree.js"></script>

    <title>Melbourne weather</title>
</head>
<body>

	<div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4">
                <form method="post">
                    <div class="form-group">
                        <label for="symbol">
                            Location: <small> Provide the name of the city of your choice:</small>
                        </label>
                        <input type="text" class="form-control" id="symbol" name="symbol"
                            value="<?php echo isset($_POST['symbol']) ? $_POST['symbol'] : ''; ?>"
                            placeholder="e.g., Melbourne" />
                    </div>

                    <button type="submit" class="btn btn-primary" name="alphavantage" value="alphavantage">Go</button>
                </form>
            </div>
        </div>

        <?php if(isset($data)) { ?>
            <div class="mt-3">
                <?php if(isset($data['error'])) { ?>
                    <p class="alert alert-danger"><?php echo $data['error']; ?></p>
                <?php } else { ?>
                    <?php
                      // Extract the elements from the associative array.
                        $location= $data['location'];
                        $symbol = strtoupper($location['name']);
                        $current= $data['current'];
                        $condition=$current['condition'];
                        $state=$condition['text'];

                        $region=$location['region'];
                    ?>
                    <h1>
                   
                    <?php echo "Welcome,The current weather condition is : $state"; ?>
                    </h1>
                    <h3>

                        <?php echo " Weather details of $symbol,$region"; ?>
                    </h3>
                    <dl class="row">
                        <dt class="col-md-3">Local Timezone</dt>
    
                        <dd class="col-md-3"><?php echo $location['localtime']; ?></dd>
                        
                        <dt class="col-md-3"><p>Temperature in Celsius:<p></dt>
                        <dd class="col-md-3"><?php echo $current['temp_c']?></dd>
                        <dt class="col-md-3">Temperature in Fahrenheit:</dt>
                        <dd class="col-md-3"><?php echo $current['temp_f']; ?></dd>
                        <dt class="col-md-3">Condition:</dt>
                        <dd class="col-md-3"><?php echo $condition['text']; ?></dd>
                        <dt class="col-md-3">Icon:</dt>
                        <dd class="col-md-3"><img src='<?php echo $condition['icon']; ?>' alt="Weather data by WeatherAPI.com" width="100" height="100"></dd>
                        <dt class="col-md-3">Feels Like:</dt>
                        <dd class="col-md-3"><?php  echo $current['feelslike_c'] ." Celsius"?></dd>
                        <dt class="col-md-3">Feels Like:</dt>
                        <dd class="col-md-3"><?php  echo $current['feelslike_f']." Fahrenheit" ?></dd>
                        <dt class="col-md-3">UV Index:</dt>
                        <dd class="col-md-3"> <?php  echo $current['uv'] ?></dd>

                    <dl>
                <?php } ?>
            </div>
        <?php } ?>

        <hr />
		
    </div>
</body>
</html>
 <!--Based on: The lectorial week 10  and Lab 11 activity 1.2.-->