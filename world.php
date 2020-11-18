<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
$sql = "SELECT * FROM countries WHERE name LIKE '%$country%'";
?>
<?php filter_var($_GET['country'], FILTER_SANITIZE_STRING);?>


<!-- <ul> -->
<!-- <?php foreach ($results as $row): ?> -->
  <!-- <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li> -->
<!-- <?php endforeach; ?> -->
<!-- </ul> -->

<?php foreach ($results as $row): ?> 
  <?php if($_GET['country'] == $row['name']):?>
    <?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?>
  <?php endif;?>
<?php endforeach; ?>

