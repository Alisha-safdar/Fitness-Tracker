<?php
require_once("connection.php");

function signup($conn, $data)
{
    $name = $data['name'];
    $email = $data['email'];
    $password =$data['password'];

    $sql = "INSERT INTO `users` (`name`, `email` ,`password`) VALUES (?,?,?)";

    $signup = $conn->prepare($sql);
    $signup->bind_param("sss", $name, $email, $password);
    $signup->execute();

    if ($signup->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}
function login($conn, $data)
{
    $email = $data['email'];

    $sql = "SELECT `id`, `email`, `password` FROM `users` WHERE `email` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if ($row['password']) {
            return $row; // Return user data
        } else {
            return false; // Invalid password
        }
    } else {
        return false; // Email not found
    }
}


