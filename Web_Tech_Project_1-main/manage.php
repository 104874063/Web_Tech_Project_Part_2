<?php
session_start();
if (!isset($_SESSION['username'])) { // if the user isn't logged in, page is redirected to the login page.
    header("Location: login.php"); // not able to siply type manage.php into browser address bar
    exit();
}

require_once("assets/database/settings.php");
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// ChatGPT Generative AI used to support this block of code, function was the idea of the generative AI
function showEOIs($conn, $condition = "1=1", $orderBy = "eoi_num") { // function created to assist code reuasability
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
    while($row = mysqli_fetch_assoc($result)) { // fetching each for of the result set
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
        <meta charset="UTF-8">
    <meta name="description" content="This page is used in order for the user to manage applicants">
    <meta name="keywords" content="manager, jobs">
    <meta name="author" content="DC">
    <!-- External CSS style -->
     <link rel="stylesheet" href="css/layout.css">
     <link rel="stylesheet" href="css/colour.css">
     <link rel="stylesheet" href="css/typographic.css">
    
    
    <style>
        h1, h2, h3, h4, p, li, a {
        font-family: 'Arial', sans-serif;
        }
        .error {color:red; margin:2px 0; font-size:0.9em;}
        input[type=text], input[type=email], input[type=number], input[type=date], select{border:1px solid}
        input.error-border {border:2px solid red; } 
    

    </style>
        <title>Manage EOIs</title>
    </head>
    <body>
         <section id="header">
            <header>
               <?php include 'header.inc'; ?>
            </header>
            <nav>
                <?php include 'nav.inc'; ?>
            </nav>
        </section>

    </header>

        <h2>Welcome, <?php echo($_SESSION['username']); ?>!</h2>
        <a href="logout.php">Logout</a>
        <hr>
        <header>
        <!--Navigation Bar-->

        
    <br>

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
            <input class="button" type="submit" name="list_all" value="List All">
        </form>

        <h3>List by Job Reference</h3>
        <form method="post">
            <input type="text" name="job_ref" placeholder="Enter Job Reference">
            <input class="button" type="submit" name="list_by_job" value="Search">
        </form>

        <h3>List by Applicant Name</h3>
        <form method="post">
            <input type="text" name="first_name" placeholder="First Name">
            <input type="text" name="last_name" placeholder="Last Name">
            <input class="button" type="submit" name="list_by_name" value="Search">
        </form>

        <h3>Delete EOIs by Job Reference</h3>
        <form method="post">
            <input type="text" name="delete_job_ref" placeholder="Enter Job Reference" required>
            <input class="button" type="submit" name="delete_by_job" value="Delete">
        </form>

        <h3>Change EOI status</h3>
        <form method="post">
            <input type="number" name="eoi_id" placeholder="Enter EOI Number" required>
            <select name="new_status" required>
                <option value="New">New</option>
                <option value="Current">Current</option>
                <option value="Final">Final</option>
            </select>
            <input class="button" type="submit" name="update_status" value="Update">
        </form>

        <footer>
        <?php include 'footer.inc'; ?>
        </footer>

        <hr>

<?php
// List all eois
if (isset($_POST['list_all'])) {
    $orderBy = $_POST['sort_field'] ?? "eoi_id";
    showEOIs($conn, "1=1", $orderBy);
}

// List by job reference
// Chat GPT generative AI used to support against XSS attacks
// real escape string function removes special characters.
if (isset($_POST['list_by_job'])) {
    $job_ref = mysqli_real_escape_string($conn, $_POST['job_ref']);
    showEOIs($conn, "job_reference_number = '$job_ref'");
}

// list by applicant name
// ChatGPT generative AI assisted the development of this block of codecode.
if (isset($_POST['list_by_name'])) {
    $conditions = [];
    if (!empty($_POST['first_name'])) {
        $first = mysqli_real_escape_string($conn, $_POST['first_name']);
        $conditions[] = "first_name LIKE '%$first%'";
    }
    if (!empty($_POST['last_name'])) {
        $last = mysqli_real_escape_string($conn, $_POST['last_name']);
        $conditions[] = "last_name LIKE '%$last%'"; // "%" symbols are wildcard characters for partial matches
    }
// implode function is used to concatenate array elements.
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
    $query = "UPDATE eoi SET status = '$new_status' WHERE eoi_num = $eoi_id";
    if (mysqli_query($conn, $query)) {
        echo("Status for EOI ID <b>$eoi_id</b> updated to <b>$new_status</b>.</p>");
    } else {
        echo("<p>Error updating status: " . mysqli_error($conn) . "</p>");
    }
}

mysqli_close($conn);
?>
    </body>
</html>