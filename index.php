<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Arron Ollington Handcrafted Projects</title>
    <link rel="shortcut icon" href="images/aohp-favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
    <div class='container'>
        <div class='box'>
            <p class='const-text'>website under construction&hellip;</p>
        </div>
        <div class='mobile-view'>
            <img class='small-logo' src="images/aohp-250x250.png" width="200" height="200" />
        </div>
        <div class='bounding-box'>
            <img class='logo' src="images/aohp-75x75.png" />
            <span class='arronollington'>arron ollington</span>
            <br />
            <span class='handcraftedprojects'>handcrafted projects</span>
        </div>
        <div class="left-block">
            <p>+61 405 781 559</p>
        </div>
        <div class="right-block">
            <a href="mailto:info@arronollington.com.au">info@arronollington.com.au</a>
        </div>
        <a class='contact-link' href='#'>Contact me <span>&#x25BC;</span></a>
        <div class='contact-form'>
            <form name='contact-form' method='POST' action='contact.php'>
                <div>
                    <label for='name'>Name: </label>
                    <input type='text' name='name' />
                </div>
                <div>
                    <label for='email'>Email: </label>
                    <input type='text' name='email' />
                </div>
                <div>
                    <label for='message'>Message: </label>
                    <textarea name='message' rows='4' cols='16'></textarea>
                </div>
                <div>
                    <input type='submit' value="Send" class='submit' />
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>website by <a href='mailto:geoff@geoffrey.net.au'>geoffrey</a></p>
    </footer>



    <!-- begin script tags -->
    <!-- jQuery min 1.11.0 -->
    <script
        type="text/javascript"
        src="js/jquery-1.11.0.js">
    </script>
    <!-- backstretch jQuery plugin -->
    <script
        type="text/javascript"
        src="js/backstretch.js">
    </script>
    <script>
        $.backstretch("images/chalkboard-bg-med.jpg");

        $(document).ready(function(){
            var form = $(".contact-form");
            $(form).hide();

            $(".contact-link").click(function() {
                if (form.is(":hidden")) {
                    form.slideDown("200");
                    $(this).children('span').html('&#x25B2;');
                } else {
                    form.slideUp('200');
                    $(this).children('span').html('&#x25BC;');
                }
            });
        });

    </script>
    <!-- end script tags -->
</body>
</html>