<!DOCTYPE html>
<html lang="en">

<?php $titl = "PreAreo | Contact Us"; ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/_partials/head.php') ?>

<body>
 
<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail 
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  
  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
}
if (isset($_REQUEST['email']) && isset($_REQUEST['submit']))
  {//if "email" is filled out, proceed
  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "<script>alert('Invalid input');</script>";
    }
  else
    {//send email
   $name = $_REQUEST['first'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'] ; 
    $subject = "New Consultation";
    $addi = $_REQUEST['additional'] ;
    $submit = $_REQUEST['submit'];
     $body = "Name: $name\n Phone: $phone\n Additional Information:\n $addi";
    mail("info@preareo.com", "$subject", $body, "From: $email" );
    echo "<script>alert('Sent!');</script>";

    }
  }
  ?>
    <!-- Hold Header with Navigation Bar -->
    <?php require($_SERVER['DOCUMENT_ROOT'].'/_partials/navbar.php');?>
  
    <!-- Hold Main Content -->
    <section id="main" class="main">
            <div class="wrap_form">
                <h2>Contact Us</h2>
                <div style="text-align: center;">
                    <button class="phnBtn">Call Us</button>
                    <button id="emailBtn">E-Mail Us</button>
                    <a href="https://goo.gl/maps/H7hfVKKRWweSo5RA9" target="_blank"><button><span><img src="/images/icons/location.png"></span> Visit Us</button></a>
                </div>
            </div>

        <div class="content">
            <div class="wrap_form">
                <h2>Book your free 15 minute consultation</h2>
                <form method="POST" id="signup">
                
                    <div class="input-container">
                        <span><img src="/images/icons/person.png" width="30px"></span>
                        <p class="er"></p>
                        <input name="first" type="text" class="input-field" placeholder="Last, First">
                    </div>
                <!--<div class="input-container">-->
                <!--    <span><img src="/images/icons/person.png" width="50p"></span>-->
                <!--    <p class="er"></p>-->
                <!--    <input name="subject" type="text" class="input-field" placeholder="Short Sale"/>-->
                <!--</div>-->
                    <div class="input-container">
                        <span><img src="/images/icons/phone.png" width="30px"></span>
                        <p class="er"></p>
                        <input name="phone" type="number"  class="input-field" placeholder="Phone">
                    </div>

                    <div class="input-container">
                        <span><img src="/images/icons/email.png" width="30px"></span>
                        <p class="er"></p>
                        <input name="email" type="email" class="input-field" placeholder='Email'>
                    </div>
                   

                    <textarea name="additional" id="info" cols="30" rows="10"
                        placeholder="Additional Information"></textarea>
                    <input name="submit" type="submit" value="Send Message" style="border:none;">
                </form>
            </div>
        </div>

    </section>

    <!-- Hold Footer with Menu -->
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/_partials/footer.php'); ?>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/scripts/paths.php'); ?>
    <script src="/js/nav.js"></script>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/scripts/contact_event.php'); ?>
  <style>
        input[type="text"], input[type="number"], input[type="email"], input[type="password"] {border:none;padding-left: 50px;}
    </style>
</body>

</html>