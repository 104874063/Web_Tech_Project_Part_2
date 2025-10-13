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
            <div class="logotitle">
                <a href="#homepage"><img id="logo" src="/Web_Tech_Project_1/images/Logo.png" alt="Logo of the company, Swinburne Government Association" class="logo"></a>
                <h2>Swinburne Government Association</h2>
            </div>
        </header>
        <nav>
            <ul>
                <li id="id1"><a id="careeropportunities" href="/Web_Tech_Project_1/jobs.php">Career Opportunities</a></li>
                <li id="id2"><a id="applications" href="/Web_Tech_Project_1/apply.php">Applications</a></li>
                <li id="id3"><a id="aboutourteam" href="/Web_Tech_Project_1/index.php">Index</a></li>
            </ul>
        </nav>
    </section>
        
    <main>
        <section id="group-members">
            <div>
                <h1>Learn about The Team</h1>
                <img src="/Web_Tech_Project_1/images/group_photo_web.jpg" id="group-photo" alt="">
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
        <section id="joshua" class="profile-section">
            <div class="profile-container">
                <div class="split" id="joshua-picture">
                    <img src="/Web_Tech_Project_1/images/joshua.jpg" class="profile-picture" alt="">
                </div>
                
                <div class="split" id="profile-text-1">
                    <h2>I'm Joshua! Pleasure to Meet You</h2>
                    <h3>I am currently a professional software tester and am looking to become a developer</h3>
                    <dl>
                        <dt>Details</dt>
                            <dd>Age: 22</dd>
                            <dd>Date of Birth: 11 October 2002</dd>
                            <dd>First Language: English</dd>
                            <dd>Nationality: Australian</dd>
                            <dd>Current Course: Bachelor of Computer Science</dd>
                            <dd>Year of Study: Year 2 - Semester 1</dd>
                        <dt>Contribution:</dt>
                            <dd>Responsible for developing the apply.html page</dt>
                            <dd>Helped the group by setting up the GitHub Repository</dd>
                            <dd>Did researched on responsive design practices</dd>
                            <dd>Assisted in Jira with Bryan</dd>
                    </dl>
                </div>
            </div>
        </section>

        <section id="daniel" class="profile-section">
            <div class="profile-container">
                <div class="split" id="daniel-picture">
                    <img src="/Web_Tech_Project_1/images/daniel.jpg" class="profile-picture" alt="">
                </div>
                
                <div class="split" id="profile-text-2">
                    <h2>Hey there, I'm Daniel</h2>
                    <h3>
                        I am currently an undergraduate computer science student majoring in data science
                    </h3>
                    <dl>
                        <dt>Details</dt>
                            <dd>Age: 20</dd>
                            <dd>Date of Birth: 10 November 2004</dd>
                            <dd>First Language: Engddsh</dd>
                            <dd>Nationaddty: Austraddan</dd>
                            <dd>Current Course: Bachelor of Computer Science</dd>
                            <dd>Year of Study: Year 1 - Semester 1</dd>
                        <dt>Contribution</dt>
                            <dd>Responsible for developing the index.html page</dd>
                            <dd>Did researched on best practice for accessibility</dd>
                            <dd>Developed the website navigation bar</dd>
                    </dl>
                </div>
            </div>
        </section>

        <section id="bryan" class="profile-section">
            <div class="profile-container">
                <div class="split" id="bryan-picture">
                    <img src="/Web_Tech_Project_1/images/bryan.jpg" class="profile-picture" alt="">
                </div>

                <div class="split" id="profile-text-3">
                    <h2>Nice to meet you, I'm Bryan</h2>
                    <h3>
                        I am currently a student at Swinburne University doing my Bachelors
                    </h3>
                    <dl>
                        <dt>Details</dt>
                            <dd>Age: 26</dd>
                            <dd>Date of Birth: 11 June 1999</dd>
                            <dd>First Language: Engddsh</dd>
                            <dd>Nationaddty: Malaysian</dd>
                            <dd>Current Course: Bachelor of Computer Science</dd>
                            <dd>Year of Study: Year 1 - Semester 1</dd>
                        <dt>Contribution:</dt>
                            <dd>Responsible for developing the jobs.html page</dd>
                            <dd>Responsible for developing the about.html page</dd>
                            <dd>Assisted in Jira with Joshua</dd>
                            <dd>Developed the website Footer</dd>
                    </dl>
                </div>
            </div>
            
        </section>

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

        </section>
    </main>

    <hr>
    <!-- Footer design inspired from https://www.youtube.com/watch?v=nkZz9DOBzBI -->
    <footer>
        <div id="footer-container">
            <p>Our Socials</p>
            
            <div id="footer-navigation" aria-label="Footer Link for this website">
                <ul>
                    <li><a href="https://wtp-project.atlassian.net/jira/software/projects/SCRUM/boards/1">Jira</a></li>
                    <li><a href="https://github.com/104874063/Web_Tech_Project_1">GitHub</a></li>
                    <li><a href="info@companyname.com">Email</a></li>
                </ul>
            </div>
        </div>

        <hr>
        <p>&copy; 2025 Swinburne Government Association. All rights reserved.</p>
    </footer>
</body>
</html>