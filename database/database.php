<?php 
    $dsn = 'mysql:host=localhost;dbname=music_shop';
    $username = "D00245954";
    $password = '7jvcYgBE';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>