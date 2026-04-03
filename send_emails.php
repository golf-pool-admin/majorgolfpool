#!/usr/bin/env php
<?php
// This script runs in the background and processes email queue files

// Set execution time to unlimited for processing multiple emails
set_time_limit(0);

// Directory where email queue files are stored
$queueDir = '/tmp/';

// Process any existing queue files first
$files = glob($queueDir . 'email_queue_*.json');
foreach ($files as $file) {
    processEmailFile($file);
}

// Function to process a single email file
function processEmailFile($filepath) {
    // Read and decode the email data
    $data = json_decode(file_get_contents($filepath), true);
    
    if (!$data) {
        error_log("Failed to decode email data from $filepath");
        unlink($filepath);
        return;
    }
    
    // Extract data
    $to = $data['to'];
    $name = $data['name'];
    $teamname = $data['teamname'];
    $wscore = $data['wscore'];
    $holes = $data['holes'];
    
    // Create message
    $subject = 'Your 2025 Masters Pool Entry!';
    $message = "Thank you, $name, for entering the pool!\n\n" .
        "Team Name: $teamname\nWinning Score: $wscore\n\n" .
        (isset($holes) && is_array($holes) ? implode("\n", array_values($holes)) : '') . "\n\n" .
        "Follow all the action at: http://www.majorgolfpools.ca";
    
    // Set email headers
    $headers = "From: info@majorgolfpools.ca\r\n" .
            "Reply-To: info@majorgolfpools.ca\r\n" .
            "Bcc: golf.pool.admin@gmail.com\r\n" .
            "X-Mailer: PHP/" . phpversion();
    
    // Send the email
    $success = mail($to, $subject, $message, $headers);
    
    // Log result and delete the file
    if ($success) {
        error_log("Email sent successfully to $to");
    } else {
        error_log("Failed to send email to $to");
    }
    
    // Remove the processed file
    unlink($filepath);
}

// In your send_emails.php, add more detailed logging
$logFile = dirname(__FILE__) . '/email_sending.log';

// Function to log messages
function logMessage($message) {
    global $logFile;
    file_put_contents($logFile, date('[Y-m-d H:i:s] ') . $message . "\n", FILE_APPEND);
}

// Then in your email sending code
if ($success) {
    logMessage("Email sent successfully to $to");
} else {
    logMessage("Failed to send email to $to. Error info: " . error_get_last()['message']);
}
?>