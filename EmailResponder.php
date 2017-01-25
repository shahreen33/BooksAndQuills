<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailResponder
 *
 * @author ASUS
 */
include_once 'UserFactory.php';
require 'PHPMailerAutoload.php';
require 'db.php';
abstract class Observer{
    protected $subject;
    public $message;
    public $buyer_id;
    public $buyer_email;
    public $book_id;
    abstract function update();
}

class EmailResponder extends Observer {
    //put your code here
    
    function __construct($subject){
        $this->subject = $subject;
        $this->subject->attach($this);
    }
    
    
    function update() {
        $current_state = $this->subject->getState();
        if($current_state == 0)
            return;
        else if($current_state == 1)
        {
            global $con;
            $hash = md5( rand(0,1000) );
            $id = $this->subject->getID();
            $email = $this->subject->getEmail();
           $query =  "UPDATE users SET hash='$hash' WHERE UserID = '$id'";
           $result = mysqli_query($con,$query);
           if($result)
           {
              


                    $mail = new PHPMailer;

                    $mail->isSMTP();                                   // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                            // Enable SMTP authentication
                    $mail->Username = 'booksandquills13333@gmail.com';          // SMTP username
                    $mail->Password = 'book13333'; // SMTP password
                    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                 // TCP port to connect to

                    
                    $mail->setFrom('noreply@booksandquills.com', 'Books And Quills');
                    $mail->addReplyTo('noreply@booksandquills.com', 'Books And Quills');
                    $mail->addAddress($email);   // Add a recipient
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                   $mail->isHTML(true);  // Set email format to HTML

                    $message = "<h2>Hi ". $id." !</h2>
                       Thanks for signing up!<br>
                       Your account has been created, you can login after you have activated your account by pressing the url below.<br>
                       Please click this link to activate your account:<br>
                       http://localhost/BooksAndQuills/verify.php?email=$email&hash=$hash<br>
                       To our never-ending journey of book-loving!<br>
                       <h3>Books And Quills Team.<h3>

                       ";
                        
                        

                    $mail->Subject = 'Sign up | Verification';
                    $mail->Body    = $message;

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                       
                    }

           }
           else
           {
               echo "Unexpected error occured";
           }
        }
        else if($current_state==2)
        {
            /// password recovery
            global $con;
            $hash = md5( rand(0,10) );
            $hash1 = sha1($hash);
            $id = $this->subject->getID();
            $email = $this->subject->getEmail();
           $query =  "UPDATE users SET Password='$hash1' WHERE UserID = '$id'";
           $result = mysqli_query($con,$query);
           if($result)
           {
              


                    $mail = new PHPMailer;

                    $mail->isSMTP();                                   // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                            // Enable SMTP authentication
                    $mail->Username = 'booksandquills13333@gmail.com';          // SMTP username
                    $mail->Password = 'book13333'; // SMTP password
                    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                 // TCP port to connect to

                    
                    $mail->setFrom('noreply@booksandquills.com', 'Books And Quills');
                    $mail->addReplyTo('noreply@booksandquills.com', 'Books And Quills');
                    $mail->addAddress($email);   // Add a recipient
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                   $mail->isHTML(true);  // Set email format to HTML

                    $message = "<h2>Hi ". $id." !</h2>
                       It seems like you forgot your password and requested a password recovery<br>
                       We have changed your password and your new password is: $hash<br>
                       Don't worry, you can change this later.
                      
                       To our never-ending journey of book-loving!<br>
                       <h3>Books And Quills Team.<h3>

                       ";
                        
                        

                    $mail->Subject = 'Password recovery';
                    $mail->Body    = $message;

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        
                    }

           }
           else
           {
               echo "Unexpected error occured";
           }
        }
        
        else
        {
             global $con;
            
            $id = $this->subject->getID();
            $email = $this->subject->getEmail();
            $this->book_id = $this->subject->book_id;
            $this->buyer_email = $this->subject->buyer_email;
            $this->buyer_id = $this->subject->buyer_id;
            $this->message = $this->subject->message;
           echo $this->buyer_email;
              


                    $mail = new PHPMailer;

                    $mail->isSMTP();                                   // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                            // Enable SMTP authentication
                    $mail->Username = 'booksandquills13333@gmail.com';          // SMTP username
                    $mail->Password = 'book13333'; // SMTP password
                    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                 // TCP port to connect to

                    
                    $mail->setFrom('noreply@booksandquills.com', 'Books And Quills');
                    $mail->addReplyTo('noreply@booksandquills.com', 'Books And Quills');
                    $mail->addAddress($email);   // Add a recipient
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                   $mail->isHTML(true);  // Set email format to HTML

                    $msg = "<h2>Hi ". $id." !</h2>
                       This message was sent to you by user : $this->buyer_id. He/she requested to buy your book: $this->book_id, and sent this message: <br>
                       <br>'$this->message'<br>
                       You can contact with him/her through his/her email: $this->buyer_email.<br>
                       To our never-ending journey of book-loving!<br>
                       <h3>Books And Quills Team.<h3>
                       ";
                        
                        

                    $mail->Subject = 'Someone is interested to buy your book!';
                    $mail->Body    = $msg;

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        
                    }

           
         
            
        }
    }
    
}
