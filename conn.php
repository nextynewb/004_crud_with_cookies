<?php

$username = "root";
$password = "";
$database_name = "example_4_db";
$server = "127.0.0.1";

$conn = new mysqli($server, $username, $password, $database_name);

function login($username, $password) {
    global $conn;
    $sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function register($name, $email, $phone, $username, $password) {
    global $conn;
    // Generate next ID since schema does not use AUTO_INCREMENT
    $nextIdResult = $conn->query("SELECT IFNULL(MAX(id), 0) + 1 AS next_id FROM customer");
    $row = $nextIdResult ? $nextIdResult->fetch_assoc() : null;
    $nextId = $row ? $row['next_id'] : 1;

    $sql = "INSERT INTO customer (id, name, email, phone, username, password) VALUES ('$nextId', '$name', '$email', '$phone', '$username', '$password')";
    $conn->query($sql);
    return $nextId;
}

function getAllUsers() {
    global $conn;
    $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getUserById($id) {
    global $conn;
    $sql = "SELECT * FROM customer WHERE id = '$id'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function updateUser($id, $name, $email, $phone, $username, $password) {
    global $conn;
    $sql = "UPDATE customer SET name = '$name', email = '$email', phone = '$phone', username = '$username', password = '$password' WHERE id = '$id'";
    $conn->query($sql);
}

function deleteUser($id) {
    global $conn;
    $sql = "DELETE FROM customer WHERE id = '$id'";
    $conn->query($sql);
}




?>