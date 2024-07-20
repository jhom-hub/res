<?php

    session_start();

    require_once('initialize.php');
    require_once('conn.php');

    $db = new DBConnection;
    $conn = $db->conn;

?>