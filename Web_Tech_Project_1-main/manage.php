<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require_once("assets/database/settings.php");
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

function showEOIs($conn, $condition = "1=1", $orderBy = "eoi_num") {
    $query = "SELECT * FROM eoi WHERE $condition ORDER BY $orderBy";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo("<p>No EOIs found.</p>");
        return;
    }

    echo("<table border='1' cellpadding='5'>
        <tr>
            <th>EOI ID</th>
            <th>Job Reference Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Status</th>
        </tr>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>
                <td>{$row['eoi_num']}</td>
                <td>{$row['job_reference_number']}</td>
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
            <label>Sort by: </label>
            <select name="sort_field">
                <option value="eoi_num">EOI ID</option>
                <option value="job_reference_number">Job Reference Number</option>
                <option value="first_name">First Name</option>
                <option value="last_name">Last Name</option>
                <option value="status">Status</option>
            </select>
            <input type="submit" name="list_all" value="List All">
        </form>

        <h3>List by Job Reference</h3>
        <form method="post">
            <input type="text" name="job_ref" placeholder="Enter Job Reference">
            <input type="submit" name="list_by_job" value="Search">
        </form>

        <h3>List by Applicant Name</h3>
        <form method="post">
            <input type="text" name="first_name" placeholder="First Name">
            <input type="text" name="last_name" placeholder="Last Name">
            <input type="submit" name="list_by_name" value="Search">
        </form>

        <h3>Delete EOIs by Job Reference</h3>
        <form method="post">
            <input type="text" name="delete_job_ref" placeholder="Enter Job Reference" required>
            <input type="submit" name="delete_by_job" value="Delete">
        </form>

        <h3>Change EOI status</h3>
        <form method="post">
            <input type="number" name="eoi_id" placeholder="Enter EOI Number" required>
            <select name="new_status" required>
                <option value="New">New</option>
                <option value="In Progress">In Progress</option>
                <option value="Hired">Hired</option>
                <option value="Rejected">Rejected</option>
            </select>
            <input type="submit" name="update_status" value="Update">
        </form>

        <hr>

<?php
// List all eois
if (isset($_POST['list_all'])) {
    $orderBy = $_POST['sort_field'] ?? "eoi_id";
    showEOIs($conn, "1=1", $orderBy);
}

// List by job reference
if (isset($_POST['list_by_job'])) {
    $job_ref = mysqli_real_escape_string($conn, $_POST['job_ref']);
    showEOIs($conn, "job_reference_number = '$job_ref'");
}

// list by applicant name
if (isset($_POST['list_by_name'])) {
    $conditions = [];
    if (!empty($_POST['first_name'])) {
        $first = mysqli_real_escape_string($conn, $_POST['first_name']);
        $conditions[] = "first_name LIKE '%$first%'";
    }
    if (!empty($_POST['last_name'])) {
        $last = mysqli_real_escape_string($conn, $_POST['last_name']);
        $conditions[] = "last_name LIKE '%$last%'";
    }

    $condition = count($conditions) > 0 ? implode(" AND ", $conditions) : "1=0";
    showEOIs($conn, $condition);
}

// Delete eois by job reference
if (isset($_POST['delete_by_job'])) {
    $job_ref = mysqli_real_escape_string($conn, $_POST['delete_job_ref']);
    $query = "DELETE FROM eoi WHERE job_reference_number = '$job_ref'";
    if (mysqli_query($conn, $query)) {
        echo("<p>All EOIs for job reference <b>$job_ref</b> have been deleted</p>");
    } else {
        echo("<p>Error deleting EOIs: " . mysqli_error($conn) . "</p>");
    }
}

// Change eoi status
if (isset($_POST['update_status'])) {
    $eoi_id = (int)$_POST['eoi_id'];
    $new_status = mysqli_real_escape_string($conn, $_POST['new_status']);
    $query = "UPDATE eoi SET STATUS = '$new_status' WHERE eoi_num = $eoi_id";
    if (mysqli_query($conn, $query)) {
        echo("Status for EOI ID <b>$eoi_id</b> updated to <b>$newstatus</b>.</p>");
    } else {
        echo("<p>Error updating status: " . mysqli_error($conn) . "</p>");
    }
}

mysqli_close($conn);
?>
    </body>
</html>