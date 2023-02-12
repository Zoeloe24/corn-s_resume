<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['contactName'];
  $email = $_POST['contactEmail'];
  $subject = $_POST['contactSubject'];
  $message = $_POST['contactMessage'];
  
  // Validate form data
  if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
    // Send email
    mail('bitzscript@gmail.com', 'Inquiry from ' . $name, $message, 'From: ' . $email);
    
    // Show success message
    echo 'Thank you for your inquiry! We will get back to you as soon as possible.';
  } else {
    // Show error message
    echo 'Please fill out all fields.';
  }
}
?>
