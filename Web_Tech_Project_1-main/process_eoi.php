<?php
error_reporting(E_ALL);
ini_set('display_error', 1);
require_once("assets/database/settings.php");

//This function connects to the database
$conn = mysqli_connect ($host,$user,$pwd,$sql_db);

if(!$conn)
{
    echo "<p> Database Connection failed: ".mysqli_connect_error()."</p>";
}
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $job_ref_number = sanitise_data($_POST["job_ref_number"]);
        $firstname = sanitise_data($_POST["firstname"]);
        $lastname = sanitise_data($_POST["lastname"]);
        $dob = sanitise_data($_POST["dob"]);

        $gender = isset($_POST['gender']) ? sanitise_data($_POST["gender"]) : '';
        $streetaddress = sanitise_data($_POST["streetaddress"]);
        $suburb_town = sanitise_data($_POST["suburb_town"]);
        $state = sanitise_data($_POST["state"]);
        $postcode = sanitise_data($_POST["postcode"]);
        $user_email = sanitise_data($_POST["user_email"]);
        $phonenumber = sanitise_data($_POST["phonenumber"]);
        $skill = isset($_POST["skill"]) ? $_POST["skill"] : [];
        $skill_got = is_array($skill) ? implode(" , ", $skill) : $skill;
        $additionalskills = sanitise_data($_POST["additionalskills"]);

        $validated_states = ["vic", "nsw", "qld", "nt", "wa", "sa", "tas", "act"];

  
        //strlen was inspired by https://www.php.net/manual/en/function.strlen.php
        

        

        

        if(!empty($errors)) 
            {
                foreach($errors as $error) {
                    echo "<p> style='color:red;'>" . htmlspecialchars($error) . "</p>";
                }
                echo "<p><strong>Please go back and fix the errors.</strong></p>";

        }
        else {
            $sql = "INSERT INTO eoi (job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone, skills, other_skills)
            VALUES('$job_ref_number', '$firstname', '$lastname', '$dob', '$gender', '$streetaddress', '$suburb_town', '$state', '$postcode', '$user_email', '$phonenumber', '$skill', '$additionalskills')";

            if (mysqli_query($conn, $sql)) 
                {
                    echo "<h2>Submitted:</h2>";
                    echo "<p><strong>Job Reference Number:</strong> " . htmlspecialchars($job_ref_number) . "</p>";
                    echo "<p><strong>First Name:</strong> " . htmlspecialchars($firstname) . "</p>";
                    echo "<p><strong>Last Name:</strong> " . htmlspecialchars($lastname) . "</p>";
                    echo "<p><strong>Date Of Birth:</strong> " . htmlspecialchars($dob) . "</p>";

                    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
                   
                    echo "<p><strong>Street Address:</strong> " . htmlspecialchars($streetaddress) . "</p>";
                   
                    echo "<p><strong>Suburb-Town:</strong> " . htmlspecialchars($suburb_town) . "</p>";
                   
                    echo "<p><strong>State:</strong> " . htmlspecialchars($state) . "</p>";
                   
                    echo "<p><strong>PostCode:</strong> " . htmlspecialchars($postcode) . "</p>";
                   
                    echo "<p><strong>Email:</strong> " . htmlspecialchars($user_email) . "</p>";
                   
                    echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($phonenumber) . "</p>";
                   
                    echo "<p><strong>Skills:</strong> " . htmlspecialchars($skill_got) . "</p>";
                   
                    echo "<p><strong>Additional Skills:</strong> " . htmlspecialchars($additionalskills) . "</p>";
                }
                else {
                    echo "<p style='color:red;'> Error: ".mysqli_error($conn)."</p>";
                }
        }
        mysqli_close($conn);
    }

    function sanitise_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }


?>