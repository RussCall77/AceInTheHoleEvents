<?php
    include_once "includes/html_top.php";
?>
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Ace in the Hole Multisport Event</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    
    <nav class="header">
        <a href="index.php" class="logo"><img src="images/AITHME_red_and_black_on_transparent_Impact.png" alt="Ace In The Hole Logo"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#">Event Information</a></li>
            <li><a href="#">Registration</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    
    <header>
        <!-- Hero Image Goes Here -->
    </header>
    <section id="grid" class="section group">
        <main class="col span_8_of_12">
            <article>
            <!-- Main Text Goes Here -->
                <h1>Leopard</h1>
                <h2>American shorthair singapura persian scottish fold</h2>
            </article>
            <article>
            <!-- Pic Gallery or Form Goes Here -->
                <div id="contact-form">
                <h1>Registration</h1>
                <h2>Use the form below to register for the event.</h2>
                <p id="failure">Oops.. something went wrong.</p>
                <p id="success">Thank you, your registration was sent successfully.</p>
                <form method="post" action="">
                        <label for="name">Name: <span class="required">*</span></label>
                        <input type="text" id="name" name="name" value="" placeholder="Your name" required="required" autofocus="autofocus" />
                    
                        <label for="age">Age: <span class="required">*</span></label>
                        <input type="text" id="age" name="age" value="" placeholder="Your age" required="required" autofocus="autofocus" />

                        <label for="email">Email Address: <span class="required">*</span></label>  
                        <input type="email" id="email" name="email" value="" placeholder="your@email.com" required="required" />

                        <label for="role">Role: </label>  
                        <select id="role" name="role">   
                            <option value="hello">Athlete</option>
                            <option value="quote">Volunteer</option>    
                        </select>
                    
                        <label for="emerg_contact">Emergency Contact: <span class="required">*</span></label>
                        <input type="text" id="emerg_contact" name="emerg_contact" value="" placeholder="Contact name" required="required" autofocus="autofocus" />
                    
                        <label for="emerg_contact_ph">Emergency Contact Phone #: <span class="required">*</span></label>
                        <input type="text" id="emerg_contact_ph" name="emerg_contact_ph" value="" placeholder="Contact number" required="required" autofocus="autofocus" />
                    
                        <label for="gender">Gender: </label>  
                        <select id="gender" name="gender">   
                            <option value="hello">Female</option>
                            <option value="quote">Male</option>
                            <option value="quote">Non-binary/Other</option> 
                        </select>

                        <label for="saturday_events">Saturday event registering for: <span class="required">*</span></label>  
                        <select id="saturday_events" name="saturday_events">   
                            <option value="Long Course Triathlon">Long Course Triathlon</option>
                            <option value="Olympic Triathlon">Olympic Triathlon</option>  
                            <option value="10K">10K</option>
                            <option value="Half Marathon">Half Marathon</option> 
                        </select>
                    
                        <label for="sunday_events">Sunday event registering for: <span class="required">*</span></label>  
                        <select id="sunday_events" name="sunday_events">   
                            <option value="Sprint Triathlon">Sprint Triathlon</option>
                            <option value="Try-a-Tri">Try-a-Tri</option>  
                            <option value="Splash n Dash">Splash n Dash</option>   
                        </select>
                    
                        <label for="special_accom">Any special accommodations needed: <span class="required">*</span></label>  
                        <textarea id="special_accom" name="special_accom" placeholder="Write your message here, please." required="required"></textarea>

                        <input type="submit" value="Register" id="submit" />
                </form>
                </div>
            </article>
        </main>
        <aside class="col span_4_of_12">
         <!-- Weather and Social Media go here -->
            <div id="weather">
                <p>Weather app goes here.</p>
            </div>
            <div id="social media">
                <p>Social Media goes here.</p>
            </div>
            <div style="clear: both;"></div>
        </aside>
    </section>
    
    <footer>
        <section class="group section">
            <div class="col span_6_of_12">
                <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"><img src="images/facebook.svg" alt="Facebook Page"></a>
            </div>
            <div class="col span_6_of_12">
                <a href="https://twitter.com/pcccas222?lang=en"><img src="images/twitter.svg" alt="Twitter Page"></a>
            </div>
        </section>
        <p class="copyright">Designed by Russell Callison Designs,&copy 2020</p>
    </footer>
    
<?php

include_once "includes/footer.php";

?>