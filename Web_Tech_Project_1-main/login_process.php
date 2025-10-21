<?php
// session_start() is used to start a session.
// used to keep the user logged in by saving their username in the session.
session_start();
require_once('assets/database/settings.php');

// Connects to the MySQL database. "$conn" holds the connection object.
// If the database connection fails, "mysqli_connect()" returns false.
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

// If the database connection fails, the user recieves a database 
// connection error.
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// These lines essentially retrieve data sent from a form with the 
// method="POST". This data comes from the user and is untrusted.
$username = $_POST['username'];
$password = $_POST['password'];

// "?" is a placeholder for a prepared statement. Protects against SQL injection.
// The query retrieves the stored hashed password for the entered username.
$sql = "SELECT password_hash FROM users WHERE username = ?";

// Preparing the SQL query for execution. "$stmt" is a statement object ready to have 
// parameteres bound.
$stmt = mysqli_prepare($conn, $sql);


mysqli_stmt_bind_param($stmt, "s", $username);

mysqli_stmt_execute($stmt);

// Prepares a variable called "$stored_hash" to recieve the result from the query.
// When we fetch the row, "stored_hash" will hold the password hash from the database.
mysqli_stmt_bind_result($stmt, $stored_hash);

// This line fetches the first row of the result set. Fetch will result "true" if a row 
// exists (user found) and will result "false" otherwise.
if (mysqli_stmt_fetch($stmt)) {

    // Verify checks if the plaintext password matches the hashed password in the database.
    // Hashing is typically done when registering a user.
    if (password_verify($password, $stored_hash)) {

        // If the login is successful, the username is stored in the session and the user is redirected 
        // to manage.php. "exit()" ensures no further code runs after the redirect.
        $_SESSION['username'] = $username;
        header("Location: manage.php");
        exit();
    } else {
        echo("Invalid password.");
    }
} else {
    echo("User not found.");
}

// Statements and connections are closed to free up resources.
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
