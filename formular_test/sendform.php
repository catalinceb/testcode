<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

    $to = "catalinceban123@gmail.com"; // Adresa de Gmail a companiei
    $subject = "Formular de contact";
    $message = "Nume: " . $nume . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Mesaj: " . $mesaj . "\n";

    // Setarea antetului pentru e-mail
    $headers = "From: " . $email . "\r\n";

    // Trimiterea e-mailului
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail trimis cu succes!";
    } else {
        echo "Eroare la trimiterea e-mailului.";
    }
}
?>


