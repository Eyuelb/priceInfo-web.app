
<?php

  include_once('Database.php');
  include_once('msg.php');
  include_once('data.php');
  include_once('main.php');
  define('SS_DB_NAME', 'ware_house');
  define('SS_DB_USER', 'root');
  define('SS_DB_PASSWORD', '');
  define('SS_DB_HOST', 'localhost');
  $url="";
  $dsn  =   "mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
  $pdo  =   "";
  try {
    $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
  }catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  $db    =   new Database($pdo);
  $msg = new Msg();
  $d = new Data();
  $main = new Main();

  session_start();

?>