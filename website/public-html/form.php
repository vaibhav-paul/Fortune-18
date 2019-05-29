<?php include('form_process.php'); ?>
 <head>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" type="text/css" href="fortune18.css">
    <link rel="stylesheet" href="form.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/assets_arrow_131622077723455294.ico">
    <title>Contact Us-Fortune'18</title>
  </head>
 <body>
 <nav class="about-us">
        <div class="row">
          <img src="img/fortune%20logo.png" alt="Fortune logo" class="logo">  
          <ul class="main-nav">
            <li><a href="home.html" class="home">Home</a></li>
            <div class="dropdown">
            <li><a href="#" class="dropbtn">About us</a></li>
            <div class="dropdown-content">
            <a href="about_us.html">About Society</a>
            <a href="FORTUNE.html" class="fortune">Fortune</a>
            </div>
             </div>
            <li><a href="TEAM.html">Our Team</a></li>
            <li><a href="form.php">Contact Us</a></li>
          </ul>
        </div>
            
        </nav>
        
<div class="container">  
  <form id="contact" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Contact Us</h3>
    <h4>Please fill in the form below and we will be in touch ASAP!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>"   autofocus>
     <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" name="email" value="<?= $email ?> ">
     <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" name="phone" value="<?= $phone ?>">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" name="message" value="<?= $message ?>"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
     <div class="success"><?= $success ?></div>
  </form>
 
  
</div>

</body>