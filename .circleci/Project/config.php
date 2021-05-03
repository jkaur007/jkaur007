<?php 
$host = 'localhost';
$db   = 'freelancer';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$data = $pdo->query("SELECT * FROM menu WHERE menu_id=1")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    $name= $row['menu_title'];
}
$menu_title = "LOCALHOST";
$id= 1;
/* $menu_title="services";
$menu_link="#services";
$menu_taget="_blank";

 INSERT INTO A DATABASE 


$sql = "INSERT INTO  menu (`menu_title`, `menu_link`, `menu_target`) VALUES (?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$menu_title, $menu_link, $menu_taget]); */
/*

UPDATE  A DATABASE 
$sql = "UPDATE menu SET menu_title=? WHERE menu_id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$menu_title, $id]);  */
$id = 7;
$sql = "DELETE FROM menu WHERE menu_id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$id]);


?>