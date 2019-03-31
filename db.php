<?php

//　データベース接続

try{
	$user = "root";
	$pass = "root";
	$dsn = 'mysql:host=localhost;dbname=looser;charset=utf8';
	$pdo = new PDO($dsn,$user,$pass,
	    [
		    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    ]);

} catch (PDOException $e) {

    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage()); 
}
header('Content-Type: text/html; charset=utf-8');

?>
