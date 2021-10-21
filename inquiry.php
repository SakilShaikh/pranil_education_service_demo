<?php
require_once 'Mailer/PHPMailerAutoload.php';

if (isset($_POST['submit'])) {
    // error_reporting(0);
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $contact = $_POST['contact'];
    // $services = $_POST['services'];
    // $msg = $_POST['msg'];

    // /* date_default_timezone_set('Asia/Kolkata');
    //     $currentTime = date( 'd-m-Y h:i:s A', time () );*/

    // $to = "info@pranileducation.com";
    // $subject = "Pranil Education Enquiry Detail";

    // $message .= "<h4>Name : $name</h4>";
    // $message .= "<h4>Email : $email </h4>";
    // $message .= "<h4>Contact : $contact </h4>";
    // $message .= "<h4>Dental services : $services </h4>";
    // $message .= "<h4>MSG : $msg </h4>";

    // $header = "From:$email \r\n";
    // /*$header .= "Cc:inddigmedia@gmail.com\r\n";*/
    // $header .= "MIME-Version: 1.0\r\n";
    // $header .= "Content-type: text/html\r\n";

    // $retval = mail($to, $subject, $message, $header);
    // if ($retval == true) {
    //     echo ("<script LANGUAGE='JavaScript'>window.location.href='thanks.php';</script>");
    //     /*echo "email send sucessfully";*/
    // }


    extract($_POST);

    #############################################################################
    $mail = new PHPMailer;
    // $mail->debug = 0;
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'dreamcode.techsolutions@gmail.com';          // SMTP username
    $mail->Password = 'bshwxfdazbibxoke';
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to
    $mail->setFrom('noreply@dreamcode.com', '');
    // $mail->FromName = "Pranil Education";
    $mail->FromName = 'Inquiry '.$services;
    $mail->addAddress('razinshaikh8732@gmail.com');   // Add a recipient

    $mail->isHTML(true);

    $bodyContent = '
      <b>Name:</b> ' . $name . '<br/>
      <b>Email:</b> ' . $email . '<br/>
      <b>Contact:</b> ' . $contact . '<br/>
      <b>Inquiry Subject:</b> ' . $services . '<br/>
      <b>Message:</b> ' . $message . '<br/>
 ';
    // echo $bodyContent;
    // $mail->Subject = 'Inquiry from pranileducation.com';
    $mail->Subject = 'Inquiry from '.$name;
    $mail->Body    = $bodyContent;
    // echo $bodyContent;
    // exit;

    $mail_status = $mail->send();

    if ($mail_status == 1) {
        // echo "sucess";
        echo json_encode(array('status' => 'success'));
        header('HTTP/1.1 200 Success');
        exit;
    } else {
        echo json_encode(array('status' => 'error'));
        exit;
        // $error_message = "Email not Exists";
    }
}
