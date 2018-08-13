<?php
  // Load PHPMailer
  require_once "../vendor/autoload.php";

  // Load .env file for sensitive configs
  $dotenv = new Dotenv\Dotenv(__DIR__);
  $dotenv->load();

  $email_send = getenv("SENDER_EMAIL");
  $email_pass = getenv("SENDER_EMAIL_PASS");

  if(isset($_POST)){

    // Form validation
    $formok = true;
    $error_fields = array();

    // Form Submission Data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $datetime = date('d/m/Y H:i:s');

    // Store all form data in associative arrays
    // This includes $_POST content and valididty

    $name = array(
      'content' => $_POST['name'],
      'valid' => true
    );

    $email = array(
      'content' => $_POST['email'],
      'valid' => true
    );

    $message = array(
      'content' => $_POST['message'],
      'valid' => true
    );

    //////////////////////
    //   VALIDATION    //
    ////////////////////

    // Check if name field isn't empty
    if(empty($name['content'])){
      $formok = false;
      $name['valid'] = false;
    }

    // Validate email address
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(empty($email['content'])){
      $formok = false;
      $email['valid'] = false;
    }elseif(!preg_match($email_exp, $email['content'])){
      $formok = false;
      $email['valid'] = false;
    }


    // Validate Message
    if(empty($message['content'])){
      $formok = false;
      $message['valid'] = false;
    }elseif(strlen($message['content']) < 20){
      $formok = false;
      $message['valid'] = false;
    }

    //////////////////////
    //   SEND EMAIL    //
    ////////////////////

    // Verify that form is okay to send
    if($formok){
      // Construct Message
      $emailbody = "<p>New Message! Details Below.</p>
                  <p><strong>Name: </strong> {$name['content']} </p>
                  <p><strong>Email Address: </strong> {$email['content']} </p>
                  <p><strong>Message: </strong> {$message['content']} </p>
                  <p>This message was sent from the IP Address: {$ipaddress} at {$datetime}</p>";

      // Initialize PHPMailer object
      $mailer = new PHPMailer\PHPMailer\PHPMailer;

      $mailer->isSMTP();
      $mailer->Host = 'smtp.gmail.com';
      $mailer->SMTPAuth = true;
      // Get Super Secret Values from Environment Variable
      $mailer->Username = $email_send;
      $mailer->Password = $email_pass;
      $mailer->SMTPSecure = 'tls';
      $mailer->Port = 587;

      $mailer->setFrom($email_send, "Message From Website");
      $mailer->addAddress(getenv("RECIPIENT_EMAIL"));

      $mailer->isHTML(true);

      $mailer->Subject = 'Message From Website';
      $mailer->Body = $emailbody;

      $mailer->send();
    }

    // What needs returning to form
    $returndata = array(
      'posted_form_data' => array(
        'name' => $name,
        'email' => $email,
        'message' => $message
      ),
      'form_ok' => $formok
    );

    //set session variables
    session_start();
    $_SESSION['cf_returndata'] = $returndata;

    //redirect back to form
    header('location: ' . $_SERVER['HTTP_REFERER']);
  }
 ?>
