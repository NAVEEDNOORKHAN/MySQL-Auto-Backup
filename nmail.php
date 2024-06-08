<?php
// Sender and recipient email addresses
$sender_email = "from@website.com";
$recipient_email = "email@website.com";

// Subject of the email
$subject = "Database Backup";

// Message body of the email
$message = "This email contains ZIP attachments.";

// Directory containing zip files
$directory = "vidikhan/";

// Get all zip files in the directory
$zip_files = glob($directory . "*.zip");

// Create a boundary string
$boundary = md5(uniqid(time()));

// Headers for the email
$headers = "From: $sender_email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// Message body
$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$body .= "$message\r\n";

// Attach each zip file and delete it after successful email send
foreach ($zip_files as $zip_file_path) {
    // Base64 encode the ZIP file
    $zip_file_base64 = base64_encode(file_get_contents($zip_file_path));

    // Attachment
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: application/zip; name=\"" . basename($zip_file_path) . "\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment\r\n\r\n";
    $body .= chunk_split($zip_file_base64) . "\r\n";

    // Send the email
    if (mail($recipient_email, $subject, $body, $headers)) {
        // Delete the zip file
        unlink($zip_file_path);
        echo "Email sent successfully and zip file deleted.";
    } else {
        echo "Failed to send email.";
    }
}

// Closing boundary
$body .= "--$boundary--\r\n";

?>
