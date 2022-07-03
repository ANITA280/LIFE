<?php
require_once('database-functions.php');
header('Content-Type: application/json');
$meals= getMeals();
echo json_encode($meals);

