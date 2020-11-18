<?php
$host = getenv('IP');
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// filter_var($_GET['country'], FILTER_SANITIZE_STRING);
$country= $_GET['country'];
//Get country to search for

if(isset($country) == true)
{
    $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
  
    
    echo '<ul>';
    foreach ($results as $row) {
      echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';
}
else
{
    echo 'batty ';
}
?>
