<?php
require 'functions.php';

// Убираем слэши в начале и конце строки, чтобы сопоставить маршруты
// $a = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// $routes = [
//     '/draft' => 'controllers/index.php',
//     '/draft/index' => 'controllers/index.php',
//     '/draft/about' => 'controllers/about.php',
//     '/draft/contact' => 'controllers/contact.php'
// ];


// if (array_key_exists($a, $routes)) {
//     require $routes[$a];
// } else {
//    http_response_code(404);
//    require 'views/404.php';
//    die();
// }

// $servername = "localhost";
// $username = "administrator";
// $password = "";
// $dbname = "php";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Fetch values from the form
// $firstName = $_POST['first_name'];
// $lastName = $_POST['last_name'];
// $gender = isset($_POST['gender']) ? $_POST['gender'] : ''; // assuming it's optional
// $address = $_POST['address'];
// $email = $_POST['email'];

// // Insert data into the customers table
// $sql = "INSERT INTO customers (first_name, last_name, gender, address, email) VALUES ('$firstName', '$lastName', '$gender', '$address', '$email')";

// if ($conn->query($sql) === TRUE) {
//     echo "Record inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // Close connection
// $conn->close();

$dsn = "mysql:host=localhost;port=3306;dbname=php;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);
$statment = $pdo->prepare("select * from users");
$statment->execute();
$posts = $statment->fetchAll(PDO::FETCH_ASSOC);


#dd($posts);

foreach ($posts as $p){
    echo "<li>" . htmlspecialchars($p['title']) . "</li>";
}

#var_dump($posts);
#exit;