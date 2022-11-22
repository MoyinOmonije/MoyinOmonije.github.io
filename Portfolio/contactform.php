<?php

$to = "moyinsibs@gmail.com";
$from = $_POST['email'];
$name = $_POST['name'];
$subject = "New contact request: " . $_POST["subject"];
$subject2 = "Copy of your form submission";
$message = $_POST['body'];
$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['body'];
$headers = "From:" . $name."<".$from.">\r\n";
$headers2 = "From" . $to;

mail($to, $subject, $message, $headers) or die("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirected Page</title>
    <!---CSS LINKS GO UNDER-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!---TEXT UNDER THIS-->
    <div class="container">
        <h1>Thanks for contacting me. I will get back to you shortly!</h1>
        <p class="back">Take me back to the <a href="index.html">homepage</a></p>
    </div>

    <!--SCROLL REVEALING TOOL FOR EASE IN EFFECT-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!---SCRIPT TAGS PRIOR TO CLOSING BODY AND HTML TAG UNDER THIS, LINKS TO OUR JS FOLDER-->
    <script type="text/javascript" src="js/script.js"></script>

    <!--SMTP JS FOR SENDING EMAILS-->
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>
</html>



';

?>

