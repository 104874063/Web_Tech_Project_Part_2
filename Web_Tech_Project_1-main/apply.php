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
    <!--Hello world-->

    <style>
        h1, h2, h3, h4, p, li, a {
        font-family: 'Arial', sans-serif;
    }
    </style>

    <title>Job Application Form</title>
</head>


<body>
    <header>
        <!--Navigation Bar-->

        <section id="header">
            <header>
                <?php include 'assets/logo.inc'; ?>
            </header>
            <nav>
                <?php include 'assets/header.inc'; ?>
            </nav>
        </section>

    </header>

    
    <br>



    <form class="application-form" action="https://mercury.swin.edu.au/it000000/formtest.php" method="post">
        <fieldset>
            <legend>Your Details</legend>
            <label for="job_ref_number">Job Reference Number</label>
            <input type="text" id="job_ref_number" name="job_ref_number" pattern="\d{5}" title="Must input 5 digits" maxlength="5" required>
            <br>
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" pattern="[A-Za-z]+" maxlength="20" required>

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" pattern="[A-Za-z]+" maxlength="20" required>

            <label for="dob">Date Of Birth</label>
            <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy" pattern="^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/\d{4}$" required>



            <br>

        

        </fieldset>
        <br>
        <fieldset>
            <legend>Gender</legend>
            <label><input type="radio" name="gender" value="Male" required> Male </label>
            <label><input type="radio" name="gender" value="Female"> Female </label>

            <br>

        </fieldset>
        <br>
        <fieldset>
            <legend>Further details</legend>
             <label for="streetaddress">Street Address</label>
            <input type="text" id="streetaddress" name="streetaddress" pattern="[A-Za-z0-9\s]+" maxlength="40">
            
            <label for="suburb_town">Suburb/Town</label>
            <input type="text" id="suburb_town" name="suburb_town" pattern="[A-Za-z\s]+" maxlength="40" required>
            <br>
            <label for="state">State</label>
            <select name="state" id="state" required>
                <option value="">Please Select</option>
                <option value="vic">VIC</option>
                <option value="nsw">NSW</option>
                <option value="qld">QLD</option>
                <option value="nt">NT</option>
                <option value="wa">WA</option>
                <option value="sa">SA</option>
                <option value="tas">TAS</option>
                <option value="act">ACT</option>

            </select>
            <br>
            <label for="postcode">Postcode</label>
            <input type="number" id="postcode" name="postcode" pattern="[0-9]+" minlength="4" maxlength="4" required>
            <br>
            <label for="user_email">Email</label>
            <input type="email" id="user_email" name="user_email" required>

            <br>
            <label for="phonenumber">Phone Number</label>
            <input type="number" id="phonenumber" name="phonenumber" pattern="[0-9]+" minlength="8" maxlength="12" required>

            
            


            

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
        <?php include 'assets/footer.inc'; ?>
    </footer>
</body>
</html>