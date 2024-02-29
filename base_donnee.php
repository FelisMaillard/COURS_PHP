<!-- balise php dans la page ou tu l'utilise (selon les bonnes pratiques (je crois)) -->
<?php

    //script de connexion
    $host = '127.0.0.1';
    $db = 'site_actualite';
    $user = 'root';
    $pass = '';
    $port = '3306';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    $pdo = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $pdo->exec("SET CHARACTER SET utf8mb4");
