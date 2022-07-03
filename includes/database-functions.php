<?php

// Constants.
const SERVER_NAME = 'rmit.australiaeast.cloudapp.azure.com';
const DB_NAME = 's3893109_a2';
const USERNAME ='s3893109_a2';
const PASSWORD = 'abc123';

const DNS = 'mysql:host=' . SERVER_NAME . ';dbname=' . DB_NAME;

// function createConnection() {
//     return new PDO(DNS, USERNAME, PASSWORD);
// }
// --- Utils ----------------------------------------------------------------------------------
function createConnection() {
    return new PDO(DNS, USERNAME, PASSWORD);
}

function prepareAndExecute($query, $params = null) {
    $pdo = createConnection();
    $statement = $pdo->prepare($query);
    $statement->execute($params);

    return $statement;
}

function prepareExecuteAndFetchAll($query, $params = null) {
    $statement = prepareAndExecute($query, $params);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function prepareExecuteAndFetch($query, $params = null) {
    $statement = prepareAndExecute($query, $params);

    return $statement->fetch(PDO::FETCH_ASSOC);
}
function getUsers() {
    return prepareExecuteAndFetchAll('select * from user');
}

function getUser($email) {
    return prepareExecuteAndFetch('select * from user where email = :email', ['email' => $email]);
}

function insertUser($user) {
    return prepareAndExecute(
        'insert into user
        (email, password, first_name, last_name, phone, age, is_student, is_employed) values
        (:email, :password, :firstname, :lastname, :phone, :age, :student_status, :employment_status)', $user);
}

function insertMeal($meals) {
    return prepareAndExecute(
        'insert into user_meal
        (email, meal_id,servings) values
        (:email, :meal_id,:servings)', $meals);
}



// --- Services -------------------------------------------------------------------------------
function getServices() {
    return prepareExecuteAndFetchAll('select * from service');
}

function getService($id) {
    return prepareExecuteAndFetch('select * from service where service_id = :id', ['id' => $id]);
}


function getServiceInstructions($id) {
    return prepareExecuteAndFetchAll('select * from service_instruction where service_id = :id', ['id' => $id]);
}

function getServiceInstruction($id, $type) {
    return prepareExecuteAndFetch(
        'select * from service_instruction where service_id = :id and service_type = :type',
        ['id' => $id, 'type' => $type]);
}

function insertActivity($activity) {
    return prepareAndExecute(
        'insert into user_service
        (email, service_id, service_type, date_performed, duration_minutes) values
        (:email, :service_id, :service_type, now(), :duration_minutes)', $activity);
}

//meals
function getMeals(){
    return prepareExecuteAndFetchAll('select * from meal');
}

function getMeal($type) {
    return prepareExecuteAndFetchAll('select * from meal where type = :type', ['type' => $type]);
}


function getServicebyName($services = null) {
    if(empty($services))
        return prepareExecuteAndFetchAll('select * from service');

    return prepareExecuteAndFetchAll(
        'select * from service where name like concat(\'%\', :service, \'%\')', ['service' => $services]);
} 
