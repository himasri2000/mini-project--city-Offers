<?php
$dbh = new pdo('mysql:host=localhost;dbname=cityoffers',
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>