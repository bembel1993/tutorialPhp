<html>
<body>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
 {
 //send email
 $email = $_REQUEST['email'] ;
 $subject = $_REQUEST['subject'] ;
 $message = $_REQUEST['message'] ;
 mail("someone@example.com", "Subject: $subject",
 $message, "From: $email" );
 echo "Thank you for using our mail form";
 }
else
//if "email" is not filled out, display the form
 {
 echo "<form method='post' action='mailform.php'>
 Email: <input name='email' type='text' /><br />
 Subject: <input name='subject' type='text' /><br />
 Message:<br />
 <textarea name='message' rows='15' cols='40'>
 </textarea><br />
 <input type='submit' />
 </form>";
 }
?>
</body>
</html>

/*
<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "xyz@somedomain.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
*/