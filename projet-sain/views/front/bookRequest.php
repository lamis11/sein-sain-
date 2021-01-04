<?php
  include "../../entities/disease.php";
  include "../../core/diseaseC.php";
  include "../../entities/patient.php";
  include "../../core/patientC.php";
$patient=$_GET['id'];
$pathology=$_POST['pathology'];
$notes=$_POST['notes'];
$doctor="N.A"; 
$department="N.A"; 
$facility="N.A"; 
$diagnosis="N.A"; 
$state="Demande passée"; 

$disease = new disease(0, $patient, $doctor, $department, $facility, $pathology, $diagnosis, NULL, NULL, $state, $notes);
$disease1C = new diseaseC();
$disease1C->addDisease($disease);

$patient1C= new patientC();
$patient=$patient1C->retrievePatientById($patient);
$row= $patient->fetch();



//Mail code
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'Riadhkh00@gmail.com';                     // SMTP username
    $mail->Password   = 'riadh123456789';                               // SMTP password
     $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
   

    //Recipients
    $mail->setFrom('Riadhkh00@gmail.com', 'Sein Sain');
    $mail->addAddress('Riadhkh00@gmail.com');     // Add a recipient
                



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Demande de rendez-vous';
    $mail->Body    = "Nouvelle demande de rendez-vous passée par ";
    $mail->Body .= $row['civility'].' '.$row['name'].' '.$row['surname'];
    $mail->Body    .= ".\n sein Sain ";
    $mail->send();
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//End of mail

header('Location: mes-consultations.php?id='.$_GET['id']);


?>
