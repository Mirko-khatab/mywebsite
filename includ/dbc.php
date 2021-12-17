<?php
define('host','localhost');
define('user','root');
define('pass','');
define('dbname','myweeb');
 
try {
    $dbh = new PDO("mysql:host=".host.";dbname=".dbname,user,pass);
} catch (PDOExsepstion $e) {
   exit("Error : " .$e->getMessage());
}


?>
