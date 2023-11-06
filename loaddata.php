<?php
require 'C:\Users\nitro5\Documents\GitHub\Records-App_Lota-Mirasol\scripts\data_init\vendor\autoload.php';

$faker = Faker\Factory::create('en_PH');
$host = 'localhost';
$username = 'root'; 
$password = 'root'; 
$database = 'appdev_test'; 
$conn = mysqli_connect($host,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

for ($i = 1; $i <= 200; $i++) {
    $lastname = $faker->lastName;
    $firstname = $faker->firstName;
    $office_id = $faker->numberBetween(1, 50); // Random office ID
    $address = $faker->address;

    // Insert the data into the Employee table using your database connection
    // Example using mysqli extension
    $sql = "INSERT INTO employee (lastname, firstname, office_id, address_a)
            VALUES ('$lastname', '$firstname', '$office_id', '$address')";
    $result = mysqli_query($conn, $sql);
    // Check for errors and handle them accordingly;  
}
for ($i = 1; $i <= 50; $i++) {
    $name = $faker->company;
    $contactnum = $faker->phoneNumber;
    $email = $faker->email;
    $address = $faker->address;
    $city = $faker->city;
    $country = $faker->country;
    $postal = $faker->postcode;

    // Insert the data into the Office table
    // Example using mysqli extension
    $sql = "INSERT INTO office (id, name, contactnum, email, address, city, country, postal)
            VALUES ('$i', '$name', '$contactnum', '$email', '$address', '$city', '$country', '$postal')";
    $result = mysqli_query($conn, $sql);
    // Check for errors and handle them accordingly
}

for ($i = 1; $i <= 500; $i++) {
    $employee_id = $faker->numberBetween(1, 200); // Random employee ID
    $office_id = $faker->numberBetween(1, 50); // Random office ID
    $datelog = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'); // Random date within the last year
    $action = $faker->randomElement(['Login', 'Logout', 'Update']); // Random action
    $remarks = $faker->text;
    $documentcode = $faker->word;

    // Insert the data into the Transaction table
    // Example using mysqli extension
    $sql = "INSERT INTO transaction (id, employee_id, office_id, datelog, a_action, remarks, documentcode)
            VALUES ('$i', '$employee_id', '$office_id', '$datelog', '$action', '$remarks', '$documentcode')";
    $result = mysqli_query($conn, $sql);
    // Check for errors and handle them accordingly
}