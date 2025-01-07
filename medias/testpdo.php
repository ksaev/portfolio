<?php
define("DBHOST","127.0.0.1");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "ks_service"); 

$dsn= "mysql:dbname=".DBNAME.";dbhost=".DBHOST ;

try{
    $db= new PDO($dsn, DBPASS,DBUSER);
    echo ("connectée avec succès");
    $db->exec("SET NAME utf8");
}
catch(PDOException $e){
die("eror:".$e->getMessage("error 201"));
}
?>