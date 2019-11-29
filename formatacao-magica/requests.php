<?php require_once "SmtpApi.php"; 

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$empresa = $_POST["empresa"];
$data_coleta = $_POST["data-coleta"];
$cod_promo = $_POST["cod-promo"];


$sPubKey = '
-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDJpWdHN2FfOI04/syFuQemp61M
nhK0gtKw6FpB81snJ70Z3PX6yAOYektdaQRMqVteex9r7JkgG5xc++3ABH1dAo8O
EyJMYt5KXbRuH0SV0Xkk4sbL6gpKt+3tdDsaoPrKbhIWJt1UzmxYo10u/LRaqV2y
PdiENV/vR1cfatCFpQIDAQAB
-----END PUBLIC KEY-----
';
 
$oApi = new SmtpApi($sPubKey);

$aEmail = array(
    'html' => "<h1>Nova solicitação do Formatação Mágica</h1>
			<ul>
				<li>$nome</li>
				<li>$email</li>
				<li>$telefone</li>
				<li>$cidade</li>
				<li>$empresa</li>
				<li>$data_coleta</li>
				<li>$cod_promo</li>
			</ul>",
    'text' => ' 	',
    'encoding' => 'UTF-8',
    'subject' => 'Nova Solicitação de Serviço',
    'from' => array(
        'name' => 'João Cardoso | OMA Informática',
        'email' => 'joao@oma.inf.br',
    ),
    'to' => array(
        array(
            'name' => 'joão',
            'email' => 'omatecbr@gmail.com'
        )
    )
);
$res = $oApi->send_email($aEmail);
if ($res['error']){ // check if operation succeeds
    echo('Error: ' . $res['text']);
} else {
    header("location:obrigado.html");
}


?>