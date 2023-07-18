<?php
session_start();

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['mail'];
    $telephone = $_POST['phone'];
    $pays = $_POST['pays'];
    $fonction = $_POST['fonction'];
    $ecole = $_POST['ecole'];
    $type_ecole = $_POST['type_ecole'];
    $message = $_POST['message'];
    // var_dump($prenom, $email, $telephone, $pays, $fonction, $ecole, $type_ecole, $message);

    if(empty($prenom) || empty($nom) || empty($email) || empty($telephone) || empty($fonction) || empty($ecole) || empty($type_ecole) || empty($message)){

        header("Location: index.php");

        echo "le champs est obligatoire";
    }else{
        // Envoyer l'e-mail de confirmation ici
        
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;

        $mail->isSMTP();

        $mail->Host = 'tdshosting.bj';

        $mail->SMTPAuth = true;

        $mail->Username = 'contact@tdshosting.bj';

        $mail->Password = "!5j11Iv1p";

        $mail->SMTPSecure = "TLS";

        $mail->Port = 25;

        $mail->From = "contact@tdshosting.bj";

        $mail->FromName = "TechnoData Solutions";

        $mail->addAddress("lmonsia@technodatasolutions.bj", "lmonsia@technodatasolutions.bj");

        $mail->isHTML(true);

        $mail->Subject = "INSCRIPTION ";

        $mail->AltBody = "Content-type: text/html; charset= utf-8\n";

        $mail->Body = 
        "
            <html>
                <body class='info' style='font-size: 14px;'>
                    <h3 style='text-align: center;'>Information de l'etudiant(e) inscrit(e)</h3>
                    <p>
                    <b>Nom: </b> $prenom $nom
                    <br>
                    <b>Email: </b> $email
                    <br>
                    <b>Tél: </b> $telephone
                    <br>
                    <b>Fonction: </b> $fonction
                    <br>
                    <b>Ecole: </b> $ecole
                    <br>
                    <b>Type d'école: </b> $type_ecole
                    <br>
                    <b>Message: </b> $message
                    <br>
                 
                </body>
            </html>
        ";

        $mail->MsgHTML( $mail->Body );

        $mail->CharSet="UTF-8";

        $send = $mail->send();
        // Redirection vers une page de succès
        if($send){
            $_SESSION['send'] = 'success';
            header("Location: index.php");    
        }   
    }  

}

if(isset($_POST['btn_back'])){
    unset($_SESSION['send']);
    header("Location: index.php");
}
?>