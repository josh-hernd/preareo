
<?php
if (isset($_REQUEST['email']) && isset($_REQUEST['submit']))
  {
   $name = $_REQUEST['first'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'] ; 
    $subject = "New Consultation" ;
    $addi = $_REQUEST['additional'] ;
    $submit = $_REQUEST['submit'];
     $body = "Name: $name\n Phone: $phone\n Additional Information:\n $addi";
    mail("info@preareo.com", "$subject", $body, "From: $email" );
    //echo "<script>alert('Sent!');</script>";
  }
  

//if "email" is not filled out, display the form
?>

<?php
// Handle Errors
    function pre_r( $array ) {
    echo '<pre>';
    print_r( $array );
    echo '</pre>';    
    }
    error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
?>