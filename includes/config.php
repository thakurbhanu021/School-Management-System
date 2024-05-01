<?php 

// $dsn = 'mysql:host=localhost;dbname=smp';
// $dbusername = 'root';
// $dbpassword = '';

// try {
//     $pdo = new PDO($dsn, $dbusername , $dbpassword);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
// } catch (PDOException $e) {
//     echo 'Connection Failed:' . $e->getMessage();
// }
// if($pdo){
//     echo 'connection succeful';
// } else {
//     echo 'connection failed';
// }
// exit;

$db_conn = mysqli_connect('localhost',  'root','', 'smp');


?>