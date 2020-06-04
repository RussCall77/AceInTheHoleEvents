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
                <h1>Registration</h1>
                <p>
                    <strong>Long Course</strong>
                    <br>
                    $240
                    <br>
                    <strong>Olympic</strong>
                    <br>
                    $110
                    <br>
                    <strong>10K</strong>
                    <br>
                    $50
                    <br>
                    <strong>Half Marathon</strong>
                    <br>
                    $75
                    <br>
                    <strong>Sprint</strong><strong>Sprint</strong>
                    <br>
                    $90
                    <br>
                    <strong>Try-a-Tri</strong>
                    <br>
                    $65
                </p>
                <p>Cost Includes</p>
                <p>
                    Food &amp; Beer
                    <br>
                    Access to the weekend's live entertainment &amp; Fitness Expo
                    <br>
                    Commemorative Finisher medal
                    <br>
                    Accurate Chip Timing for competitive races
                    <br>
                    Ace in the Hole Multisport Weekend Tech Shirt
                    <br>
                    Post-event party &amp; entertainment
                </p>
                <p>
                    NOTE: Tech shirts guaranteed to pre-registered participants only.
                </p>
            </article>
            <article>
            <!-- Form Goes Here -->
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
                <p>Only adults can be an athlete or volunteer. Children can spectate</p>
                <h2>What to Bring</h2>
                <p>
                    Watch the weather closely. The show goes on no matter what the weather is doing.
                </p>
                <p>
                    You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.
                </p>
                <p>
                    <strong>Swim:</strong>
                     Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.
                </p>
                <p>
                    <strong>Bike:</strong>
                     A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.
                </p>
                <p>
                    <strong>Run:</strong>
                     You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.
                </p>
                <p>
                    Remember to bring a change of clothing so you can enjoy the post-event festivities.
                </p>
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
    
<?php

    include_once "includes/footer.php";

?>