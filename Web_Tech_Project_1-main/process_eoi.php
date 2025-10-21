<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("assets/database/settings.php");
session_start();
//This function connects to the database
$conn = mysqli_connect ($host,$user,$pwd,$sql_db);

if(!$conn)
{
    die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
}

if(isset($_SESSION['form_data'])) {
    $data = $_SESSION['form_data'];

    $skills = isset($data['skill']) && is_array($data['skill']) ? implode(", ", $data['skill']) : '';

    $sql = "INSERT INTO eoi (job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone, skills, other_skills)
    VALUES ( '{$data['job_ref_number']}', '{$data['firstname']}', '{$data['lastname']}', '{$data['dob']}', '{$data['gender']}', '{$data['streetaddress']}', '{$data['suburb_town']}', '{$data['state']}', '{$data['postcode']}', '{$data['user_email']}', '{$data['phonenumber']}', '$skills', '{$data['additionalskills']}' )";

    if(mysqli_query($conn, $sql))
    {
        echo "<h2>Application Submitted!</h2>";
        foreach ($data as $key => $value) 
        {
            if(is_array($value)) $value = implode(", ", $value);
            echo "<p><strong>$key:</strong> " . htmlspecialchars($value) . "</p>";
        }
     } else {
        echo "<p> style='color:red;'>Database error: " . mysqli_error($conn) . "</p>";

        }
        unset($_SESSION['form_data']);
    } else {
        echo "<p>No data found. Please return to the form.</p>";
    }
    mysqli_close($conn);
    


?>