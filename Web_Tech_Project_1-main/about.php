<?php
    require_once("./assets/function/about_card.php");
    require_once("./assets/database/settings.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Job page for Swinburne Government Association.">
    <meta name="keywords" content="jobs, careers, employment, job search">
    <meta name="author" content="Bryan Jun Hean Khor">
    <!-- External CSS style -->
     <link rel="stylesheet" href="css/layout.css">
     <link rel="stylesheet" href="css/colour.css">
     <link rel="stylesheet" href="css/typographic.css">
    
    <!-- Embedded CSS style -->
    <style>
        h1, h2, h3, h4, p, li, a {
        font-family: 'Arial', sans-serif;
    }
    </style>
    <title>About us</title>
</head>
<body>
    <!-- Navigation bar -->
    <section id="header">
        <header>
                <?php include 'assets/ui/header.inc'; ?>
        </header>
        <nav>
             <?php include 'assets/ui/nav.inc'; ?>
        </nav>
    </section>
        
    <main>
        <section id="group-members">
            <div>
                <h1>Learn about The Team</h1>
                <img src="images/group_photo_web.jpg" id="group-photo" alt="">
                <p>
                    <!--Grammar improved using ChatGPT -->
                     This page will give you information on the team
                </p>
            </div>
            <div id="quotes">
                <dl>
                    <dt>Group: Razeen-Wed-230-G01</dt>
                        <dd>Class Time: 2:30pm to 4:30pm</dd>
                    <dt>Personal Quotes From the Team</dt>
                        <dt class="member">Joshua:</dt>
                        <dd>Never stop coding</dd>
                        <dt class="member">Daniel:</dt>
                        <dd>Couldn't get ChatGPT to fill this field :(</dd>
                        <dt class="member">Bryan:</dt>
                        <dd>You never know the results if you don't try</dd>
                </dl>
            </div>
            
        </section>

        <!-- Split inspired from https://www.w3schools.com/howto/howto_css_split_screen.asp -->
        <?php 
        $conn = mysqli_connect ($host,$user,$pwd,$sql_db);
            if ($conn) {
                $query = "SELECT * FROM about";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        about_card(
                            $row['about_id'],
                            $row['name'],
                            $row['description'],
                            $row['age'],
                            $row['date_of_birth'],
                            $row['first_language'],
                            $row['nationality'],
                            $row['course'],
                            $row['year_of_study'],
                            $row['contribution_part_1'],
                            $row['contribution_part_2'],
                            $row['profile_picture']);
                    }
                }
            }
            mysqli_close($conn);
            ?>

        <section id="fun-facts">
            <h2>Quick Fun Facts About Us</h2>
            <!-- Table structure from https://www.w3schools.com/html/tryit.asp?filename=tryhtml_table3 -->
            <!-- Table styling from https://www.w3schools.com/howto/howto_css_table_center.asp -->
            <table id="facts-table">
                <tr>
                    <th>Joshua</th>
                    <th>Daniel</th>
                    <th>Bryan</th>
                </tr>
                <tr>
                    <td>Love Gaming</td>
                    <td>Love Rock Climbing</td>
                    <td>Love Gaming</td>
                </tr>
                <tr>
                    <td>Love Coding</td>
                    <td>Spending Time Outdoors</td>
                    <td>Love Sleeping</td>
                </tr>
                <tr>
                    <td>Love Outdoors</td>
                    <td>Programming and Maths</td>
                    <td>Love watching Youtube</td>
                </tr>
            </table>

            <?php 
                // if ($conn) {
                //     $query = "SELECT * FROM about";
                //     $result = mysqli_query($conn, $query);
                //     if (mysqli_num_rows($result) > 0) {
                //         echo "<table id='facts-table'>";
                //         while ($row = mysqli_fetch_assoc($result)) {
                //             $fun_facts = explode("|", $row['fun_facts']);
                //             echo "<tr>";
                //             echo "<th>" . $row['name'] . "</th>";
                //             echo "</tr>";
                //             echo "<tr>";
                //             foreach ($fun_facts as $fun) {
                //                 echo "<td>" . trim($fun) . "</td>";
                //             }
                //             echo "</tr>";
                //         }
                //         echo "</table>";
                //     }
                // }
            // mysqli_close($conn);
            ?>

        </section>
    </main>

    <hr>
    <footer>
        <?php include 'assets/ui/footer.inc'; ?>
    </footer>
</body>
</html>