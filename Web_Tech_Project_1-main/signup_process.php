<?php

require_once('assets/database/settings.php');

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

// Getting form data from the user.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password_hash) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
    if(mysqli_stmt_execute($stmt)) {
        echo("Signup Successful");
        echo("<a href='login.php'>Click here to login</a>");
    } else {
        echo("Error: " . mysqli_error($conn));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>