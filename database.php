<?php
$dbh = new pdo('mysql:host=localhost;dbname=leave',
               'root',
               '',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>