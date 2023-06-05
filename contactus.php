<?php
 if (isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  $to = "himashanethminism@gmail.com";
  $subject = $message;

  $message = "Email: Phone: {$phone} " . $message;

  
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: bravecoderofficial@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome Iocns cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>

<header class="header">
        <div class="header-logo">
            <img src="img/logo.png" alt="">
            <div class ="h1">
            <h1>KDM HOSPITAL</h1>
            </div>
        </div>
        
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="services.php">Services & Facilities</a>
            <a href="doctor.php">Doctor</a>
            <a href="contactus.php">Contact Us</a>
            <a href="login.php">Login</a>
            <a href="signup.php" class="btn">Sign Up</a>
        </nav>
    </header>

    <body class="contact">
        <div class="contact-container">
            <div class="contact-content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"> </i>
                        <div class="topic">Address</div>
                        <div class="text-one">Colombo, Srilanka</div>
                        <div class="div text-two">colombo 4</div>
                     </div>
                     <div class="phone details">
                        <i class="fas faphone-alt"> </i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+94 11 5558 50</div>
                        <div class="div text-two">+94 11 5558 50</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope-alt"> </i>
                        <div class="topic">Email</div>
                        <div class="text-one">kdm@gmail.com</div>
                        <div class="div text-two">kdmhospital@gmail.com</div>
                    </div>
                </div>
                <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>

        <form action="" method="post" autocomplete="off">
        <div class="input-box">
          <input type="text"  name="name" placeholder="Enter your name">
        
        </div>
        <div class="input-box">
          <input type="text"  name="email" placeholder="Enter your email">
          
        </div>
        <div class="input-box">
          <input type="text" name="phone" placeholder="Enter your phone">
         
        </div>
        <div class="input-box message-box">
        <input type="text"  name="message" placeholder="Enter your message">
       
        </div>
        <div class="button">
        <input type="submit" name="submit" value="Send" class="btn" />
        </div>
      </form>
    </div>
    </div>
  </div>
 
</body>
</html>