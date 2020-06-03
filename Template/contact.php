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
                <h1>Contact Info and FAQs</h1>
                <h2>FAQs</h2>
                <p>
                    <strong>What are the Rules?</strong>
                     We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.
                </p>
                <p>
                    <strong>Can I use a personal music device while cycling?</strong>
                     Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.
                </p>
                <p>
                    <strong>Can I use a personal music device while running?</strong>
                     During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.
                </p>
                <ul>
                    <li>
                        If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.
                    </li>
                    <li>
                        If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.
                    </li>
                    <li>
                        We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.
                    </li>
                </ul>
                <p>
                    <strong>Do I need to wear a wetsuit?</strong>
                     No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.
                </p>
                <p>
                    <strong>Do I have to use a road or racing bike?</strong>
                     No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.
                </p>
            </article>
            <article>
            <!-- Form Goes Here -->
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