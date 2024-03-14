<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $quantity = $_POST['quantity'];
    $mtype = $_POST['mtype'];
    $recipientEmail = $_POST['mname'];
    $plan = $_POST['plan'];
    $cityName = $_POST['cityName'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Specify the SMTP settings
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'tiffinwala04@gmail.com'; // SMTP username
        $mail->Password = 'fbbvnqacansdhluc'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Set email details
        $mail->setFrom('sbinayake004@gmail.com', "Tiffinwala");
        $mail->addAddress('yashparakh004@gmail.com');
        $mail->addAddress($email);
        $mail->Subject = 'Order details ';
        $mail->Body = "New order received with the following details:\n\nName: $name\nNumber: $number\nAddress: $address\nPlan: $plan \nQuantity: $quantity\nMeal Type: $mtype";
        
        // Send the email
          $mail->send();
        echo "Order placed";
    } catch (Exception $e) {
        echo "Email sending failed. Error: " . $mail->ErrorInfo;

    }

     if($cityName == "chandwad") {
              include 'con.php';
          
            extract($_POST);
            $insert = mysqli_query($connect,"insert into tbl_chandwad (name,number,email,address,mname,plan,quantity,mtype) values( '$name' , '$number',  '$email' ,  '$address'  , '$mname' , '$plan' , '$quantity' , '$mtype')") or die(mysql_error($connect));
            if($insert)
              {
                echo "Data inserted";
              }
            else
            {
              echo "Data insert failed";
            }
          }
          elseif($cityName == "nashik") {
              include 'con.php';
          
            extract($_POST);
            $insert = mysqli_query($connect,"insert into tbl_nashik (name,number,email,address,mname,plan,quantity,mtype) values( '$name' , '$number',  '$email' ,  '$address'  , '$mname' , '$plan' , '$quantity' , '$mtype')") or die(mysql_error($connect));
            if($insert)
              {
                echo "Data inserted";
              }
            else
            {
              echo "Data insert failed";
            }
          }
          elseif($cityName == "pune") {
              include 'con.php';
          
            extract($_POST);
            $insert = mysqli_query($connect,"insert into tbl_pune (name,number,email,address,mname,plan,quantity,mtype) values( '$name' , '$number',  '$email' ,  '$address'  , '$mname' , '$plan' , '$quantity' , '$mtype')") or die(mysql_error($connect));
            if($insert)
              {
                echo "Data inserted";
              }
            else
            {
              echo "Data insert failed";
            }
          }
          else{
            echo "Not a city $cityName";
          }
        
}
?>
<?php

?>