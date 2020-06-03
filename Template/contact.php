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
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
    
    <nav class="header">
        <a href="index.php" class="logo"><img src="images/AITHME_red_and_black_on_transparent_Impact.png" alt="Ace In The Hole Logo"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="eventPacket.php">Event Information</a></li>
            <li><a href="registration.php">Registration</a></li>
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
            </article>
            <article>
            <!-- Pic Gallery or Form Goes Here -->
                <div id="contact-form">
                <h1>Get in Touch</h1>
                <h2>Use the contact form below to reach us.</h2>
                <p id="failure">Oops.. something went wrong.</p>
                <p id="success">Thank you, your message was sent successfully.</p>
                <form method="post" action="">
                        <label for="name">Name: <span class="required">*</span></label>
                        <input type="text" id="name" name="name" value="" placeholder="Your name" required="required" autofocus="autofocus" />

                        <label for="email">Email Address: <span class="required">*</span></label>  
                        <input type="email" id="email" name="email" value="" placeholder="your@email.com" required="required" />

                        <label for="subject">Please select if you are an: </label>  
                        <select id="subject" name="subject">   
                            <option value="hello">Athlete</option>
                            <option value="quote">Volunteer</option>  
                            <option value="general">Interested Party</option>   
                        </select>

                        <label for="message">Question or Comment: <span class="required">*</span></label>  
                        <textarea id="message" name="message" placeholder="Write your message here, please." required="required"></textarea>

                        <input type="submit" value="Send away!" id="submit" />
                </form>
                </div>
            </article>
        </main>
        <aside class="col span_4_of_12">
         <!-- Weather and Social Media go here -->
            <div id="weather">
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-days="5" data-theme="gray" >PORTLAND WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script> 
            </div>
            <div id="social_media">
                <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="" data-height="315" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a></blockquote>
                </div>
                <a class="twitter-timeline" data-height="200" data-theme="dark" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        <p class="copyright">Designed by Russell Callison Designs,&copy 2020</p>
    </footer>
    
<?php

include_once "includes/footer.php";

?>