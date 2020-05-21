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
        <a href="#" class="logo"><img src="images/AITHME_red_and_black_on_transparent_Impact.png" alt="Ace In The Hole Logo"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#">Event Information</a></li>
            <li><a href="#">Registration</a></li>
            <li><a href="#">Contact Us</a></li>
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
                <p>Abyssinian egyptian mau but havana brown munchkin burmese. Siberian birman devonshire rex so malkin. Scottish fold. Birman puma. Singapura jaguar turkish angora ocicat for tiger lion, persian. Lion panther. Norwegian forest russian blue but tabby balinese . Sphynx malkin so bengal and ocicat, yet devonshire rex so cougar cheetah. Munchkin jaguar yet jaguar and kitten, turkish angora. Persian balinese for birman but bombay or cheetah but turkish angora malkin.</p>
            </article>
            <article>
            <!-- Pic Gallery or Form Goes Here -->
                <div id="contact-form">
            <h1>Get in Touch</h1>
            <h2>Use the contact form below to reach out to me.</h2>
            <p id="failure">Oops.. something went wrong.</p>
            <p id="success">Thank you, your message was sent successfully.</p>
            <form method="post" action="">
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="" placeholder="Your name" required="required" autofocus="autofocus" />
                
                <label for="email">Email Address: <span class="required">*</span></label>  
                <input type="email" id="email" name="email" value="" placeholder="your@email.com" required="required" />
                
                <label for="website">Website: </label>  
                <input type="web" id="webstie" name="website" value="" />
                
                <label for="subject">Subject: </label>  
                <select id="subject" name="subject">   
                    <option value="hello">I just want to say hello =]</option>
                    <option value="quote">Business Inquiry</option>  
                    <option value="general">General</option>   
                </select>
                
                <label for="message">Message: <span class="required">*</span></label>  
                <textarea id="message" name="message" placeholder="Write your message here, please." required="required"></textarea>
                
                <input type="submit" value="Send away!" id="submit" />
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