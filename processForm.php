<?php
// turn on output buffering
ob_start();
// Check if the 'name' post data is populated
if (isset($_POST['name'])) {
        // Set the recipient address
        $to = 'info@arronollington.com.au';

        // set the subject line
        $subject = 'email from arronollington.com.au';

        // take the post data and sanitise
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // add headers to the email
        $headers = "From: info@arronollington.com.au\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // start email message
        $body = "<html><body>";
        $body .= "<p>Hi Arron</p>";
        $body .= "<p>The below message was received from your website<br /></p>";
        $body .= "<p><strong>From: </strong><br />" . $name . "</p>";
        $body .= "<p><strong>Contact email: </strong><br /><a href='mailto:" . $email . "'>" . $email . "</a><p>";
        $body .= "<p><strong>Message: </strong><br />" . $message . "</p>";
        $body .= "<p><em>note: if you reply to this email, it will be sent to '<strong>" . $email . "</strong>'</em></p>";
        $body .= "</body></html>";

        // transmit email - use error detection
        if (@mail($to, $subject, $body, $headers)) {
                // PHP mail function output no errors - go to success message
                header ("Location: success.php");
        } else {
                // PHP mail function output errors - go to error message
                header ("Location: error.php");
        }

};
