<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//Resumes the session
session_start();


//declare the values array variable
$values = [];
//The function Santises the data
 function santise_form($formdata) {
        $formdata = trim($formdata); //Removes uneeded white space
        $formdata = stripslashes($formdata); //Removes escape slashes eg; backslash; it also removes quotation marks and double quotation marks eg; ' " 
    
        $formdata = htmlspecialchars($formdata); // converts special characters into html entities

        return $formdata;
 }
//If a Post request was made to the server the following will be run
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    


 //We put the fields of the form into this variable array
 $fields = [
    'job_ref_number', 'firstname', 'lastname', 'dob', 'gender', 'streetaddress', 'suburb_town', 'state', 'postcode', 'user_email', 'phonenumber', 'skill', 'additionalskills'
 ];
//This will go through the values of each field and santise the data. Please note it will first check if the user posted with a value in the field.
 foreach($fields as $f) $values[$f] = isset($_POST[$f]) ? santise_form($_POST[$f]) : '';
 //If the value is not a letter or number or is not exactly 5 alphanumeric numbers long a error will appear
 if (!preg_match("/^[A-Za-z0-9]{5}$/", $values['job_ref_number'])) $errors['job_ref_number']= "Job reference number must be 5 alphanumeric characters";
    

        if ($values['firstname'] === '')
    

            $errors['firstname'] = "First Name is required";
        
        elseif (!preg_match("/^[A-Za-z]{1,20}$/", $values['firstname'])) 
            
            $errors['firstname'] = "First Name must be only letters";
        
        
        //strlen was inspired by https://www.php.net/manual/en/function.strlen.php
        
        if ($values['lastname'] === '')
    

            $errors['lastname'] = "Last Name is required";
        
        elseif (!preg_match("/^[A-Za-z]{1,20}$/", $values['lastname'])) 
            
            $errors['lastname'] = "Last Name must be only letters";

    

        if ($values ['dob'] === '') 
            $errors['dob'] = "Date Of Birth is required";
        

        if(empty($_POST['gender'])) {
            $errors['gender'] = "Please select a gender";
        }
        else {
            $values['gender'] = $_POST['gender'];
        }

        

        if ($values['streetaddress'] === '')
    

            $errors['streetaddress'] = "street address is required";
        
        elseif (!preg_match("/^[A-Za-z0-9\s]{1,40}$/", $values['streetaddress'])) 
            
            $errors['streetaddress'] = "street address must be only letters and can not be empty or more then 40 characters";


        if ($values['suburb_town'] === '')
    

            $errors['suburb_town'] = "suburb/town is required";
        
        elseif (!preg_match("/^[A-Za-z\s]{1,40}$/", $values['suburb_town'])) 
            
            $errors['suburb_town'] = "suburb  must be only letters and can not be empty or more then 40 characters";


        $validated_states = ["vic", "nsw", "qld", "nt", "wa", "sa", "tas", "act"];
        //if the state field value is not equal to one of the values in validate_states a error will appear
        //strtolower will make the string a lowercase
        if (!in_array(strtolower($values ['state']), $validated_states)) {
            $errors['state'] = "Please select a valid state";
        }

        if (!preg_match("/^[0-9]{4}$/", $values['postcode']))
        {
            $errors['postcode'] = "Post code must be exactly 4 digits long with no letters";
        }


        if(!filter_var($values ['user_email'], FILTER_VALIDATE_EMAIL)) 
        {
            $errors['user_email'] = "Invalid email";
        }

        if(!preg_match("/^[0-9]{8,12}$/", $values['phonenumber']))
        {
            $errors['phonenumber'] = "Phone number needs to be 8-12 digits long.";
        }
        //If there are no errors the values variable will be passed to $_SESSION['form_data'] and the user will be redirected to process_eoi.php which will put the values into the database table
        if(empty($errors))
    {
        $_SESSION['form_data'] = $values;
        header("Location: process_eoi.php");
        exit;
    }

    

}


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page is a form for a job application at Swinburne Government Association">
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
        .error {color:red; margin:2px 0; font-size:0.9em;}
        input[type=text], input[type=email], input[type=number], input[type=date], select{border:1px solid}
        input.error-border {border:2px solid red; } 
    

    </style>

    <title>Job Application Form</title>
</head>


<body>
    <header>
        <!--Navigation Bar-->

        <section id="header">
            <header>
                <?php include 'assets/ui/header.inc'; ?>
            </header>
            <nav>
                <?php include 'assets/ui/nav.inc'; ?>
            </nav>
        </section>

    </header>

    
    <br>


    <!--If the user presses the apply button it will submit the form to itself and the script will run the following post code if ($_SERVER['REQUEST_METHOD'] === 'POST') { -->   
    <form class="application-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>
            <legend>Your Details</legend>
            <label for="job_ref_number">Job Reference Number</label>
            <br>
            <!--isset returns true or false -->
            <!--If there is a error it will return true and trigger the code class= and value= in order to display the error  -->
            <?php if(isset($errors['job_ref_number'])) echo "<p class='error'>{$errors['job_ref_number']}</p>"; ?> 
            <br>
            <!--If error is triger a error will be displayed for this field -->
            <input type="text" id="job_ref_number" name="job_ref_number" class="<?php echo isset($errors['job_ref_number'])?'error-border':'';?>" value="<?php echo $values['job_ref_number']??''; ?>">

            <br>
            <label for="firstname">First Name</label>
            <br>
             <!--If there is a error it will return true and trigger the code class= and value= in order to display the error  -->
            <?php if(isset($errors['firstname'])) echo "<p class='error'>{$errors['firstname']}</p>"; ?>

            <input type="text" id="firstname" name="firstname" class="<?php echo isset($errors['firstname'])?'error-border':'';?>" value="<?php echo $values['firstname']??''; ?>">

            <label for="lastname">Last Name</label>
            <br>
            <?php if(isset($errors['lastname'])) echo "<p class='error'>{$errors['lastname']}</p>"; ?>
            <input type="text" id="lastname" name="lastname" class="<?php echo isset($errors['lastname'])?'error-border':'';?>" value="<?php echo $values['lastname']??''; ?>">
            <br>


            <label for="dob">Date Of Birth</label>
            <br>

            <?php if(isset($errors['dob'])) echo "<p class='error'>{$errors['dob']}</p>"; ?>

            <input type="date" id="dob" name="dob" placeholder="dd/mm/yyyy" class="<?php echo isset ($errors['dob'])?'error-border':'';?>" value="<?php echo $values['dob']??''; ?>">
            <br>




            <br>

        

        </fieldset>
        <br>
        <fieldset>
            <legend>Gender</legend>
            <?php if(isset($errors['gender'])) echo "<p class='error'>{$errors['gender']}</p>"; ?>
            <label><input type="radio" name="gender" value="Male" <?php if(($values['gender']??'')=='Male') echo 'checked';?>> Male </label>
            <label><input type="radio" name="gender" value="Female" <?php if(($values['gender']??'')=='Female') echo 'checked';?>> Female </label>

            <br>

        </fieldset>
        <br>
        <fieldset>
            <legend>Further details</legend>
             <label for="streetaddress">Street Address</label>
              <?php if(isset($errors['streetaddress'])) echo "<p class='error'>{$errors['streetaddress']}</p>"; ?>

            <input type="text" id="streetaddress" name="streetaddress" class="<?php echo isset($errors['streetaddress'])?'error-border':'';?>" value="<?php echo $values['streetaddress']??''; ?>">
             
            
            <label for="suburb_town">Suburb/Town</label>
            <?php if(isset($errors['suburb_town'])) echo "<p class='error'>{$errors['suburb_town']}</p>"; ?>
            <input type="text" id="suburb_town" name="suburb_town" class="<?php echo isset($errors['suburb_town'])?'error-border':'';?>" value="<?php echo $values['suburb_town']??''; ?>">
             
            <br>
            <label for="state">State</label>
            <br>
            <?php if(isset($errors['state'])) echo "<p class='error'>{$errors['state']}</p>"; ?>

            <select name="state" id="state" class="<?php echo isset($errors['state'])?'error-border':'';?>">
                <option value="">Please Select</option>
                <?php 
                foreach(['VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT'] as $s) {
                    $sel = (strtolower($s)==($values['state']??'')) ? 'selected' : '';
                    echo "<option value='".strtolower($s)."' $sel>$s</option>";
                }
                ?>
             <!--      <option value="vic">VIC</option> -->
                <!--   <option value="nsw">NSW</option> -->
             <!--      <option value="qld">QLD</option> -->
             <!--      <option value="nt">NT</option> -->
            <!--       <option value="wa">WA</option> -->
           <!--        <option value="sa">SA</option> -->
            <!--       <option value="tas">TAS</option> -->
        <!--        <option value="act">ACT</option> -->

            </select>
            <br>
            <label for="postcode">Postcode</label>
            <?php if(isset($errors['postcode'])) echo "<p class='error'>{$errors['postcode']}</p>"; ?>
            <input type="number" id="postcode" name="postcode" class="<?php echo isset($errors['postcode'])?'error-border':'';?>" value="<?php echo $values['postcode']??''; ?>"> 

            <br>
            <label for="user_email">Email</label>
            <?php if(isset($errors['user_email'])) echo "<p class='error'>{$errors['user_email']}</p>"; ?>

            <input type="email" id="user_email" name="user_email" class="<?php echo isset($errors['user_email'])?'error-border':'';?>" value="<?php echo $values['user_email']??''; ?>">
        

            <br>
            <label for="phonenumber">Phone Number</label>
            <?php if(isset($errors['phonenumber'])) echo "<p class='error'>{$errors['phonenumber']}</p>"; ?>

            <input type="number" id="phonenumber" name="phonenumber" class="<?php echo isset($errors['phonenumber'])?'error-border':'';?>" value="<?php echo $values['phonenumber']??''; ?>">
            <br>
        


        </fieldset>
        <br>

        <fieldset>
            <legend>Skills</legend>
            <label><input type="checkbox" name="skill" value="Java"> Java</label>
            <label><input type="checkbox" name="skill" value="Python"> Python</label>
            <label><input type="checkbox" name="skill" value="HTML"> HTML</label>
            <label><input type="checkbox" name="skill" value="otherskills"> Other skills</label>

            <br>
            <textarea id="additionalskills" name="additionalskills" placeholder="Input what other skills you have here" rows="4" cols="50"></textarea>

        </fieldset>

        <br>

        
        <input class="button" type="submit" value="Apply">
        <input class="button" type="reset" value="Clear Form">

    </form>

    <footer>
        <?php include 'assets/ui/footer.inc'; ?>
    </footer>
</body>
</html>