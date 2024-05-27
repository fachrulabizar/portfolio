<?php
// Proses formulir hanya jika metode POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Ambil nilai dari formulir
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Alamat email penerima
    $to = "fachrulabizar@fachrulabizar.id";

    // Header email
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Pesan email
    $email_message = "
    <html>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
    </body>
    </html>
    ";

    // Kirim email
    if (mail($to, $subject, $email_message, $headers))
    {
        echo "Message sent successfully.";
    }
    else
    {
        echo "Failed to send message. Please try again later.";
    }
}
?>