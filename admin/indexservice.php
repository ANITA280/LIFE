<?php require_once('includes/functions.php'); ?>
<!-- <!DOCTYPE html>
<html lang="en"> -->
<head>
    <?php require_once('includes/head.php'); ?>
    <script>
        // Send AJAX request to the server and update the page.
        function searchServices() {
            const services = $("#service").val();
            $.get("search.php", { services }).done(function (data) {
                // Update the document with the returned HTML.
                $("#users").html(data);
            });
        }

        $(document).ready(function () {
            // Load the initial page data.
            searchServices();

            // Perform AJAX request and update the page when the form is submitted.
            $("#search").submit(function (e) {
                // Prevent the form from submitting.
                e.preventDefault();

                // Send AJAX request.
                searchServices();
            });
        });
    </script>
</head>
<!-- <body> -->
    <?php require_once('includes/navbar.php'); ?>

    <div class="container">
        <h1>Users</h1>

        <form id="search">
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="service" class="control-label">Service Name</label>
                    <input id="service" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Search" />
            </div>
        </form>

        <div id="users"></div>
    </div>
    
    <!-- <?php require_once('includes/footer.php'); ?> -->
<!-- </body>
</html> -->
