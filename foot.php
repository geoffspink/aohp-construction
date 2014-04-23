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
        <!-- Google Analytics Tracking Code -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-50294747-1', 'arronollington.com.au');
            ga('send', 'pageview');

        </script>
        <!-- end script tags -->
    </body>
</html>