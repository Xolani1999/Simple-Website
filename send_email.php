<?php
if (isset($_POST['submit'])) {
    $to = "xolanizwanemac.com"; 
    $subject = "Skill Development Booking";
    
    // Get form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $skill_interest = $_POST['skill_interest'];
    $comments = $_POST['comments'];
    
    // Compose email message
    $message = "Name: $full_name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Gender: $gender\n";
    $message .= "Date: $date\n";
    $message .= "Skill Interest: $skill_interest\n";
    $message .= "Comments: $comments\n";
    
    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your booking. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
