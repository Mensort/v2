<?php

$pdo = new PDO('mysql:host=V2;dbname=personal-website;charset=utf8', 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
