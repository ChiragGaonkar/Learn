<?php

$server = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server, $user, $pass);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
} else {
    echo "<script>alert('Connection Established.')</script>";
    $sql = "CREATE DATABASE learn";
    $conn->query($sql);
    mysqli_select_db($conn, 'learn');
}