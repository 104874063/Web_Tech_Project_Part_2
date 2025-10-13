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
    
    
    <title>Jobs</title>
</head>

<!-- At least 1 embedded CSS example
At least 1 inline CSS example
Clear commenting & wide range of selectors (element, ID, class, grouped, contextual, pseudo)
Responsive layout
Accessibility best practices -->

<!-- jobs.html: <aside> styled at 25% width, floated right, with border, margin, padding. -->


    <!-- i was here -->
<body>
    <header>
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
                    <li id="id1"><a id="careeropportunities" href="/Web_Tech_Project_1/index.php">Index</a></li>
                    <li id="id2"><a id="applications" href="/Web_Tech_Project_1/apply.php">Applications</a></li>
                    <li id="id3"><a id="aboutourteam" href="/Web_Tech_Project_1/about.php">About our team</a></li>
                </ul>
            </nav>
        </section>
        
    </header>

    <main>
        <!-- Job title section, giving the users a brief introductory of what the page is all about -->
        <section id="job-titles-grid">

            <!-- Quick links to go to the main content of the page -->
            <!-- Inline CSS style -->
            <aside style="width: 25%; float: right; border: 2px solid black; 
            margin: 10px; padding: 10px; min-width: 175px; max-width: 380px; background-color: rgb(194, 194, 194);">
            <!-- Skip to Main Content -->
                <h3>Skip to Content</h3>
                <ul id="quick-links" aria-label="Links to sections of the job page">
                    <li><a href="#career-opportunities" class="link">Career Opportunities</a></li>
                    <li><a href="#who-we-are-looking-for" class="link">Who we are looking For</a></li>
                    <li><a href="#available-positions" class="link">Available Positions</a></li>
                    <li><a href="#perks-and-benefits" class="link">Perks and Benefits</a></li>
                </ul>
            </aside>
            
            <div id="job-titles-text" class = "section-header">
                <h1>Careers at Swinburne Government Association</h1>
                <!-- Grammar improved and summarized using ChatGPT -->
                <p>
                    Swinburne will open many different doors for you within the IT industry whether it be Software Development, Cloud or Networking and Switching.
                    No matter your pick we will help you grow with the business as long as you have the drive to back it up.

            
                </p>
            </div>
        </section>

        <!-- Career Opportunities section, providing the users insight of the benefits working with the company -->
        <section id="career-opportunities">
            <div id="career-opportunities-text" class = "section-header">
                <h2>Career Opportunities</h2>
                <!-- Grammar improved and summarized using ChatGPT -->
                <p>
                    The career opportunities and growth for your career and you as a individual at Swinburne Government Association are endless. 
                    We will throw you into a fast paced working environment with a large team.
                    This will allow you to learn large amounts of technical and soft skills.
                </p>
            </div>

            <div>
                <!-- Image from https://www.freepik.com/free-vector/hand-drawn-working-environment-template_111676760.htm#fromView=search&page=1&position=7&uuid=9ef247b9-3f33-46f2-95e1-ccdd397018f4&query=Office+collaboration+illustration -->
                <img src="/Web_Tech_Project_1/images/office-collaboration.png" alt="A illustration of 4 people working together in a office environment">
            </div>
        </section>

        <!-- Who we are looking for section, providing the user insight of what traits we are finding -->
        <section id ="who-we-are-looking-for">
            <div id="who-we-are-looking-for-text" class = "section-header">
                <h2>Who we are looking for</h2>
                <!-- Grammar improved and summarized using ChatGPT -->
                <p>
                    We want people who are commited to there work and driven to create exponential change within the IT industry.
                    If you are inspired to be the change then Swinburne Government Association is the place for you
                </p>
            </div>
            
            <!-- Row 1 -->
            <div class="cards-container">
                <div class="card">
                    <!-- Image from https://www.flaticon.com/free-icon/reward_3400745?term=motivation&page=1&position=8&origin=search&related_id=3400745 -->
                    <img src="/Web_Tech_Project_1/images/reward.png" alt="A icon of a person going up to the top to reach a goal" class="icon">

                    <div class="container">
                        <h3>Motivation & Drive</h3>
                        <p>We seek individuals who are motivated, driven, and eager to learn and grow.</p>
                    </div>

                </div>

                <div class="card">
                    <!-- Image from https://www.flaticon.com/free-icon/hand-shake_493808?term=handshake&page=1&position=1&origin=search&related_id=493808 -->
                    <img src="/Web_Tech_Project_1/images/hand-shake.png" alt="A icon of a handshakes" class="icon">

                    <div class="container">
                        <h3>Teamwork</h3>
                        <p>We value individuals who can work well in a team and contribute to a positive work environment.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="card">
                    <!-- Image from https://www.flaticon.com/free-icon/communication_1264685?term=communication&page=1&position=9&origin=search&related_id=1264685 -->
                    <img src="/Web_Tech_Project_1/images/communication.png" alt="A icon on a group communicating with one another" class="icon">

                    <div class="container">
                        <h3>Communication</h3>
                        <p>We seek individuals with excellent communication skills to effectively collaborate with teams and clients.</p>
                    </div>

                </div>

                <div class="card">
                    <!-- Image from https://www.flaticon.com/free-icon/problem-solving-skills_13441816?term=problem+solving&related_id=13441816 -->
                    <img src="/Web_Tech_Project_1/images/problem-solving-skills.png" alt="A icon of a puzzle lightbulb and a hand holding the last piece" class="icon">

                    <div class="container">
                        <h3>Problem-Solving Skills</h3>
                        <p>We value individuals with strong problem-solving skills and a proactive mindset.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Available positions section, providing the users with the current job openings -->
        <section id="available-positions">
            <div id="available-positions-text" class = "section-header">
                <h2>Available Positions</h2>
                <!-- Grammar improved and summarized using ChatGPT -->
                <p>
                    We have the following IT positions open. If you have the skill set and the drive then 
                    please select apply and complete the form
                    
                </p>
            </div>

            <!-- Card structure used from https://www.w3schools.com/howto/howto_css_cards.asp -->
            <!-- Row 1 -->
            <div class="cards-container">
                <div class="card" id="job-card-1">
                    <div class="container">
                        <!-- Job Title -->
                        <h3>Data Analyst - Ref No:SG123</h3>
                        <!-- Job Description -->
                        <h4>Job Description</h4>
                        <!-- Grammar improved and summarized using ChatGPT -->
                        <p>
                            As a Data Analyst you will be responsible for collecting data that is incomplete or corrupt and using it to fix the problem
                            at its source. As a data analyst you will also be responsible for using the data to find bottle necks in the system and using that data to resolve 
                            bottle necks. Within your role you will be required to be able to communicate between both the technical team as well as the business team
                            
                        </p>
                        <!-- Reporting Line -->
                        <h4>Reporting Line</h4>
                        <ul>
                            <li>Data Analytics Manager</li>
                            <li>Data Science Manager</li>
                            <li>Chief Data Officer (CDO)</li>
                        </ul>
                        <!-- Location -->
                        <h4>Location</h4>
                        <p>Hawthorne, Victoria</p>
                        <!-- Key Responsibility -->
                        <h4>Key Responsibility</h4>
                            <ol>
                                <li>Collecting and cleaning data to ensure accuracy and consistency.</li>
                                <li>Analyze large amount of datasets to identify trends, patterns and anomalies to improve business decisions.</li>
                                <li>Develop and maintain reports and dashboards to keep track of business metrics.</li>
                                <li>Ensure data quality by identifying and addressing any issues from the datasets.</li>
                            </ol>
                        <!-- Qualification -->
                        <h4>Qualification</h4>
                        <ul>
                            <li>Bachelor's degree in Data Science, Statistics, Computer Science or a related field.</li>
                            <li>Basic understanding of statistical and data modeling.</li>
                            <li>Strong analytic skills to interpret complex data and provide meaningful insights.</li>
                        </ul>
                        
                        <!-- Software Experience -->
                        <h4>Software Experience</h4>
                        <ul>
                            <li>Experience with SQL and database management systems.</li>
                            <li>Experience with data visualization tools such as Excel, SAS Studio, Tableau, PowerBI.</li>
                            <li>Experience with data analytic tools such as R Studio, Python.</li>
                        </ul>
                        <!-- Salary -->
                        <h4>Salary</h4>
                        <p>$90,000 - $100,000</p>

                        <!-- Button -->
                        <a href="/Web_Tech_Project_1/apply.html" class="button" aria-label="Apply for Data Analyst Job Button">
                            Apply Now
                        </a>
                        
                    </div>
                </div>

                <div class="card" id="job-card-2">
                    <div class="container">
                        <!-- Job Title -->
                        <h3>Software Engineer - Ref No:SG777</h3>
                        <!-- Job Description -->
                        <h4>Job Description</h4>
                        <!-- Grammar improved and summarized using ChatGPT -->
                        <p>
                            As a Software Engineer you will be required to develop solutions using existing architecture. You should also be able to develop and design new systems and architecture.
                            You must be able to test your system and narrow down where bugs are occuring and be able to resolve bugs. You will also be required to create technical documentation for the 
                            technical team as well as be able to create design documentation which should be understandable by the business side of the team.
                            
                
                        </p>
                        <!-- Reporting Line -->
                        <h4>Reporting Line</h4>
                        <ul>
                            <li>Engineering Manager</li>
                            <li>Team Lead</li>
                            <li>Chief Technology Officer (CTO)</li>
                        </ul>
                        <!-- Location -->
                        <h4>Location</h4>
                        <p>Hawthorne, Victoria</p>
                        
                        <!-- Key Responsibility -->
                        <h4>Key Responsibility</h4>
                        <ol>
                            <li>Design, develop and maintain the company software applications.</li>
                            <li>Build and optimize data pipelines to ensure seamless flow of data between systems.</li>
                            <li>Collaborate with other teams to implement technical solutions that enable better business decisions.</li>
                            <li>Troubleshoot and resolve any issues related to software performance, bugs and data integration.</li>
                        </ol>
                        <!-- Qualification -->
                        <h4>Qualification</h4>
                        <ul>
                            <li>Bachelor's/Master's Degree in Computer Science, Software Engineering, or a related field.</li>
                            <li>Strong understanding of algorithms and data structures.</li>
                            <li>Knowledge of software development methodologies, such as Agile, Scrum, or Waterfall.</li>
                        </ul>
                        
                        <!-- Software Experience -->
                        <h4>Software Experience</h4>
                        <ul>
                            <!-- Assisted with ChatGPT -->
                            <li><strong>Application Development:</strong> Experience in building and maintaining applications for both desktop and web platforms.</li>
                            <li><strong>Frontend Development:</strong> Proficient in HTML, CSS, JavaScript, and modern front-end frameworks like React, Angular, or Vue.js.</li>
                            <li><strong>Backend Development:</strong> Experience with server-side programming languages like Node.js, Python, Ruby, or Java, and frameworks like Django or Express.</li>
                        </ul>

                        <!-- Salary -->
                        <h4>Salary</h4>
                        <p>$90,000 - $100,000</p>

                        <!-- Button -->
                        <a href="/Web_Tech_Project_1/apply.html" class="button" aria-label="Apply for Software Engineer Job Button">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Perks and benefits section, providing the users with the benefits of working with the company -->
        <section id ="perks-and-benefits">
            <div id ="perks-and-benefits-text" class = "section-header">
                <h2>Perks and Benefits</h2>
                <p>We believe great work starts with a supportive environment. That's why we offer competitive compensation</p>    
            </div>

            <!-- Card structure used from https://www.w3schools.com/howto/howto_css_cards.asp -->
            <!-- Row 1 -->
            <div class="cards-container">
                <div class="card">
                    <!-- Image from https://www.flaticon.com/free-icon/working-at-home_2800485?related_id=2800485 -->
                    <img src="/Web_Tech_Project_1/images/hybrid-work.png" alt="A icon of a home and office building" class="icon">

                    <div class="container">
                        <h3>Hybrid Work</h3>
                        <p>Enjoy the flexibility of working both remotely and in-office to suit your lifestyle.</p>
                    </div>

                </div>

                <div class="card">
                    <!-- https://www.flaticon.com/free-icon/healthcare_2966334?term=health+insurance&page=1&position=2&origin=search&related_id=2966334 -->
                    <img src="/Web_Tech_Project_1/images/healthcare.png" alt="A icon of a hand holding a heart with a positive sign" class="icon">

                    <div class="container">
                        <h3>Health Insurance</h3>
                        <p>Comprehensive health plans to keep you and your family healthy and secure.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="card">
                    <!-- Image from https://www.flaticon.com/free-icon/vacation_6016407?term=paid+leave&page=1&position=2&origin=search&related_id=6016407 -->
                    <img src="/Web_Tech_Project_1/images/paid-leave.png" alt="A icon with a huge money bag on a beach chair with an umbrella" class="icon">

                    <div class="container">
                        <h3>Paid Leave</h3>
                        <p>Generous paid leave policies to help you recharge and spend time with loved ones.</p>
                    </div>

                </div>

                <div class="card">
                    <!-- Image from https://www.flaticon.com/free-icon/customer_18808893?term=employee+discount&page=1&position=1&origin=search&related_id=18808893 -->
                    <img src="/Web_Tech_Project_1/images/employee.png" alt="A icon of a person with a discount sign" class="icon">

                    <div class="container">
                        <h3>Employee Discount</h3>
                        <p>Exclusive discounts on products and services for our employees.</p>
                    </div>
                </div>
            </div>
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