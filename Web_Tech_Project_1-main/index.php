<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Title of page</title>
       <meta charset="UTF-8">
       <meta name="description" content="government index page">
       <meta name="keywords" content="">
       <meta name="author" content="Daniel Cornehls">
       <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- rendering the website at its actual width, not zooming out on phone widths-->
       <link rel="stylesheet" href="css/layout.css">
       <link rel="stylesheet" href="css/colour.css">
       <link rel="stylesheet" href="css/typographic.css">

        <!-- Embedded CSS style -->
    <style>
        h1, h2, h3, h4, p, li, a {
        font-family: 'Arial', sans-serif;
    }
    </style>

    </head>
    <body>
        <!--This <section> contains all content relavent to the header of the home page-->
        <section id="header">
            <header>
                <?php include 'assets/logo.inc'; ?>
            </header>
            <nav>
                <?php include 'assets/header.inc'; ?>
            </nav>
        </section>
        <!--This <section> contains all content relevent to the main body of the home page-->
        <section id="main">
            <div id="headerintro">
                <h2 id="entry">Welcome to the Swinburne Government Association's IT Department</h2>
                <div id="introduction">
                    <p>At the Swinburne Government Association, we are dedicated to advancing the future
                    of public service through innovation, technology, and digital transformation. Our mission
                    is to enhance government services by embracing modern IT solutions that create smarter, faster,
                    and more accessible systems for the community.
                    We value transparency, reliability, and innovation, ensuring that the services we provide are
                    both efficient and secure.With a strong passion for IT development and digital services, we 
                    are committed to designing solutions that make a meaningful difference in the lives of citizens.
                    Together, we are shaping a government that is more connected, more responsive, and more prepared
                    for the challenges of the digital age.</p>
                </div>

                
            </div>
            
            <div id="about">
                <fieldset id="slogan">
                    <h3>Watching coders</h3>
                    <div id="indeximgage">
                        <img src="images/index_photo.jpg" id="index-photo" alt="">
                    </div>
                </fieldset>

                <fieldset id="intro">
                    <h3>Our Role</h3>
                    <div id="ourrole">
                        <p>The Swinburne Government Association plays a vital 
                        role in bridging government services with modern technology. 
                        We focus on strengthening digital infrastructure, improving 
                        accessibility, and supporting innovation in public IT systems. 
                        By collaborating with experts, students, and the community, we ensure 
                        that digital services remain reliable, secure, and adaptable to future needs. 
                        Our role is not only to maintain essential systems but also to actively drive 
                        forward new opportunities for digital growth and smarter solutions.</p>
                    </div>
                </fieldset>
                <fieldset id="govit">
                    <h3>Government IT Branch</h3>
                    <div id="itbranch">
                        <p>The Government IT Branch is the driving force behind our commitment to digital 
                        excellence. We aim to transform the way government interacts with citizens by introducing 
                        smarter platforms, streamlined processes, and innovative tools that enhance everyday services.
                        Our focus is on creating technology that not only solves today’s challenges but also prepares for 
                        tomorrow’s opportunities. By championing forward-thinking solutions, we strive to build a more 
                        connected, efficient, and digitally empowered government.</p>
                    </div>
                </fieldset>
                <fieldset id="extrainfo">
                    <h3>Driving digital progress for a smarter future</h3>
                    <div id="digitalprogress">
                        <p>We are committed to shaping a future where technology empowers every aspect of government and 
                        community life. By embracing creativity, research, and forward-looking strategies, we aim to deliver 
                        digital solutions that set new standards of efficiency and accessibility. 
                        Our ambition is to build lasting progress—developing systems that evolve with the needs of society 
                        and pave the way for a smarter, more connected tomorrow.</p>
                    </ul>
                </fieldset>
            </div>
        </section>

        <footer>
            <?php include 'assets/footer.inc' ?>
        </footer>
    </body>
</html>