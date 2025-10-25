<!DOCTYPE html>
<html>
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
        <title>Login</title>
    </head>
        <body>
            <h2 style="color: blue">Managers Login</h2>
            <form method="post" action="login_process.php">
                <label>Username:</label>
                <input type="text" name="username" required><br><br>
                <label>Password:</label>
                <input type="password" name="password" required><br><br>
                <input class="button" type="submit" value="Login">
            </form>
        </body>
</html>
