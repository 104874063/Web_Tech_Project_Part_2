<?php
error_reporting(E_ALL); //This will dispaly all errors and is good for finding issues when developing
ini_set('display_errors', 1); //This line will also display all errors on screen to help find issues when devloping
//calls the settings.php
require_once("assets/database/settings.php"); 


//Needed to resume the session
session_start();

//This function connects to the database
$conn = mysqli_connect ($host,$user,$pwd,$sql_db);

//If there is no connection then the script stops and the below error will pop up on screen
if(!$conn)
{
    die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
}


$create_table_sql = "
CREATE TABLE IF NOT EXISTS eoi (
eoi_id INT AUTO_INCREMENT PRIMARY KEY,
job_reference_number VARCHAR(5) NOT NULL,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(20) NOT NULL,
date_of_birth DATE NOT NULL,
gender VARCHAR(10) NOT NULL,
street_address VARCHAR(40) NOT NULL,
suburb_town VARCHAR(40) NOT NULL,
state VARCHAR(10) NOT NULL,
postcode CHAR(4) NOT NULL,
email VARCHAR(100) NOT NULL,
phone VARCHAR(15) NOT NULL,
skills VARCHAR(255),
other_skills TEXT,
application_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
";

if(!mysqli_query($conn, $create_table_sql))
{
    die("<p>Error creating table: " . mysqli_error($conn) . "</p>");
}


//If it has form_data from the $_SESSION ['form_data'] = $values; then it will give the SESSION form_data to the variable data
if(isset($_SESSION['form_data'])) {
    $data = $_SESSION['form_data'];

    $skills = isset($data['skill']) && is_array($data['skill']) ? implode(", ", $data['skill']) : '';
    
    //We want to insert the data into the fields in the database table
    $sql = "INSERT INTO eoi (job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone, skills, other_skills)
    VALUES ( '{$data['job_ref_number']}', '{$data['firstname']}', '{$data['lastname']}', '{$data['dob']}', '{$data['gender']}', '{$data['streetaddress']}', '{$data['suburb_town']}', '{$data['state']}', '{$data['postcode']}', '{$data['user_email']}', '{$data['phonenumber']}', '$skills', '{$data['additionalskills']}' )";

    //If the mysqli query was successfuly it will display the data inputted
   //mysqli_query inspired by https://www.w3schools.com/php/func_mysqli_query.asp
    if(mysqli_query($conn, $sql))
    {
        //Will display the header Application Submitted
        echo "<h2>Application Submitted!</h2>";
        foreach ($data as $key => $value) 
        {

            if(is_array($value)) $value = implode(", ", $value);
            //Will display the field name and the data the user inputted into the table 
            echo "<p><strong>$key:</strong> " . htmlspecialchars($value) . "</p>";
        }
     } else {
        //If the query fails it will display why it failed
        echo "<p> style='color:red;'>Database error: " . mysqli_error($conn) . "</p>";

        }
        //After the code above has run and hopefully the data was inserted into the table the following will delete the form data from the session
        unset($_SESSION['form_data']); 
    } else {
        //If the user does not have form data to pass it will redirect the user to the index page
        header("Location: index.php");
    }
    //It is best practice to clsose the SQL connection after you are done using it
    mysqli_close($conn);
    


?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page displays the details the applicant submitted">
    <meta name="keywords" content="jobs, tech">
    <meta name="author" content="JM">
    <!-- External CSS style -->
     <link rel="stylesheet" href="css/layout.css">
     <link rel="stylesheet" href="css/colour.css">
     <link rel="stylesheet" href="css/typographic.css">
    
    
    <style>
        h1, h2, h3, h4, p, li, a {
        font-family: 'Arial', sans-serif;
        }

          </style>
          <title>Process page</title>
</head>

<body>
    <a href="index.php" class="button">index page</a>
    </body>
    </html>