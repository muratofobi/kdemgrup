<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birth = $_POST["birth"];
    $gender = $_POST["gender"];
    $days = $_POST["days"];
    $city = $_POST["city"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $xp = $_POST["xp"];

    $to = "kdemgrup@gmail.com";
    $subject = "$name $surname Tarafından Yeni Form Gönderildi";
    $headers = "From: $email\r\n";

    $email_content = "Gönderen: $name\r$surname\n";
    $email_content .= "E-posta: $email\n";
    $email_content .= "birth:$birth\n";
    $email_content .= "gender:$gender\n";
    $email_content .= "days:$days\n";
    $email_content .= "city:$city\n";
    $email_content .= "number:$number\n";
    $email_content .= "xp:$xp\n";

    // E-postayı gönderme
    mail($to, $subject, $email_content, $headers);

    echo "E-posta başarıyla gönderildi.";
}

?>
