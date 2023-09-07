<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    // Process the form data (you can add your own logic here)
    // For example, you might want to save this data to a database or send it via email.

    // Assuming the form data is processed successfully
    $message_submitted = true;
?>

<?php if ($message_submitted) : ?>
    <h1>Message Submitted</h1>
<?php else : ?>
    <h1>Error Submitting Message</h1>
<?php endif; ?>

</body>
</html>
