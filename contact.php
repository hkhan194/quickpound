<?php 

    if(isset($_POST['submit'])){
        
            $to = ""; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
        
            $first_name = $_POST['name'];
            $mobile_phone = $_POST['phone'];
            $amount_borrow = $_POST['amount'];
        
            $subject = "Quick Pound Request Callback";
            $subject2 = "Copy of your Quick Pound request callback";
        
            $message = $first_name .  " wrote the following:" .  "\n\n"  ."Contact number: ". $_POST['phone']."\n\n". "Amount: ". $_POST['amount']. "\n\n"."Message: ".$_POST['message'];

           /* $message2 = "Here is a copy of your message " . $first_name . "\n\n" ."Contact number: ". $_POST['phone']."\n\n". "Amount: ". $_POST['amount']. "\n\n"."Message: ".$_POST['message'];*/

            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            /*mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender*/
        
            /*echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";*/
        
             header('Location: thankyou.html');
           
        
        }

?>