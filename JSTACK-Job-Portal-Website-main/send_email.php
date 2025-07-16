<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to =  "ommasal1311@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $name . "<" . $email . ">\r\n";
    $headers .= "content-type: text/plain;
     charset=utf-8\r\n";
     if(mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Email sent successfully!";
} else {
    http_response_code(500);
    echo "Opps something went wrong. ";
}
else{
    http_response_code(403){
        echo"Access denied!";
    }
}
?>