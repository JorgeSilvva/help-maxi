<?php
#Chama a biblioteca
require_once('../webroot/mailer/PHPMailer.php');
require_once('../webroot/mailer/SMTP.php');
require_once('../webroot/mailer/Exception.php');

use PHPmailer\PHPMailer\PHPMailer;
use PHPmailer\PHPMailer\SMTP;
use PHPmailer\PHPMailer\Exception;

#Função para enviar e-mail
function enviarEmail($nome, $email, $acao){

	$mail = new PHPMailer(true);

	try {
		#Dados do remetente
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'adv.connect.contato@gmail.com';
		$mail->Password = 'tdtclvbosqlzkxmn';
		$mail->Port = 587;

		#Dados do destinatário
		$mail->setFrom('adv.connect.contato@gmail.com');
		$mail->addAddress($email);
		$mail->isHTML(true);
		$mail->Subject = 'Help-Maxi: Aviso!';
		$mail->Body = 'Olá, <strong>' .$nome. '</strong>!<br><br> Sua solicitaçao de <strong>' .$acao. '</strong> foi realizada com sucesso!';

		#envia o e-mail
		if($mail->send()) {
			echo 'Email enviado com sucesso.';
		} else {
			echo 'Falha no envio do e-mail.';
		}
	} catch (Exception $e) {
		echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
	}
}
?>
