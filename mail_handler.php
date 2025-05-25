<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {

    // Sanitize input values
    $name  = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $msg   = htmlspecialchars(trim($_POST['msg']));

    // Email setup (Write Your Email Here)
    $to      = 'Your-email@example.com';
    $subject = 'New Feedback Submission';
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Message:\n$msg\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2 style='text-align:center; color:green;'>Thank you, $name! Your message has been sent successfully.</h2>";
    } else {
        echo "<h2 style='text-align:center; color:red;'>Oops! Something went wrong. Please try again later.</h2>";
    }
}
?>
