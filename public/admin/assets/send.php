<?php
/*
 * This calls sends an email to one recipient.
 * */
require 'vendor/autoload.php';
use \Mailjet\Resources;

$to = "service@devandco.ca";
$mj = new \Mailjet\Client(
    'b129787e9562663eee52560ffb31ec2a',
    '43b551974b6a15d1b90ad0abfdc03e78',
                  true,
    ['version' => 'v3.1']
);

$statut="";
$message="";

if (isset($_POST['submit1'])) {
    $first_name = $_POST['first_name']; // required
		$last_name = $_POST['last_name']; // required
		$email_from = $_POST['email']; // required
		$telephone = $_POST['telephone']; // not required
		$comments = $_POST['comments']; // required
		$preferedContact = $_POST['prefered'];
    $body = ['Messages' => [[
			'From' => ['Email' => "service@devandco.ca", 'Name' => $first_name . ' ' . $last_name],
			'To' => [['Email' => $to, 'Name' => "DevandCo Web Form"]],
			'Subject' => $first_name . ' ' . $last_name,
			'TextPart' => "(".$email_from.") ". $comments,
			'HTMLPart' => "(".$email_from.") ". $comments]]
		];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    //$response->success() && var_dump($response->getData());
    //echo var_dump($response->getData());
		if ($response->success())
		{
				$statut = "succes";
				$message = "Votre message a été envoyé";
		}
		else
		{
				$statut = "echec";
				$message = "Votre message n'a pas été envoyé";
		}

} else {
	$statut = "echec";
	$message = "Aucun message à envoyer";
}

$data = array (
		"statut" => $statut,
		"message" => $message
	);
	echo json_encode($data);

?>
