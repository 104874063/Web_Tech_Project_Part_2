<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="description" content="This page is used in order for the user to sign up">
    <meta name="keywords" content="signup, account">
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
        <title>Welcome to the Swinburne Government Association</title>
        
    </head>
    <body>
        <h1>Welcome to the Swinburne Government Association</h1>
        <h2>Create an Account</h2>
        <form method="post" action="signup_process.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="sumit">Sign Up</button>
        </form>
    </body>
</html>
