<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require_once("assets/database/settings.php");
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

function showEOIs($conn, $condition = "1=1", $orderBy = "eoi_id") {
    $query = "SELECT * FROM eoi WHERE $condition ORDER BY $orderBy";
    $result = mysqli_query($conn, $query);
    echo("<table border='1'><tr><th>EOI ID</th><th>Job Ref</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>
                <td>{$row['eoi_id']}</td>
                <td>{$row['job_reference']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['status']}</td>
              </tr>");
    }
    echo("</table>");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage EOIs</title>
    </head>
    <body>
        <h2>Welcome, <?php echo($_SESSION['username']); ?>!</h2>
        <a href="logout.php">Logout</a>
        <hr>

        <h3>List All EOIs</h3>
        <form method="post">
            <input type="submit" name="list_all" value="List All">
        </form>

        <h3>List by Job Reference</h3>
        <form method="post">
            <input type="text" name="job_ref" placeholder="Enter Job Reference">
            <input type="submit" name="list_by_job" value="Search">
        </form>

        <h3>List by Applicant Name</h3>
        <form method="post">
            <input type="text" name="appl_name" placeholder="Enter Applicant's Name">
            <input type="submit" name="list_by_appl_name" value="Search">
        </form>
        <hr>

        <?php
        if (isset($_POST['list_all'])) {
            showEOIs($conn);
        }

        mysqli_close($conn);












        ?>
    </body>
</html>