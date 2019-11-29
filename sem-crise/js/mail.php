<?php
	$acao      		= $_POST['acao'];
	$emaildest = 'atendimento@oma.inf.br';
	switch ($acao) {
		case 'solic-suporte':
			$nome     		= $_POST['nome'];
			$endereco  		= $_POST['endereco'];
			$telefone  		= $_POST['telefone'];
			$horario   		= $_POST['horario'];
			$nivel_urgencia	= $_POST['nivel-urgencia'];
			$desc_problema	= $_POST['desc-problema'];

			$str_mensagem = "<html>
							<head>
							<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
							</head>
							<body>
							<p style='color:#333; font:12px Verdana,Arial,Helvetica,sans-serif; line-height:150%; text-align:left;'>
							<strong>Nome..............:</strong> $nome<br/>
							<strong>Endereço..........:</strong> $endereco<br/>
							<strong>Telefone..........:</strong> $telefone<br/>
							<strong>Melhor Horário....:</strong> $horario<br/>
							<strong>Nivel de Urgência.:</strong> $nivel_urgencia<br/>
							<strong>Descrição do Problema.....:</strong> $desc_problema<br/>
							</body></html>";
			break;
		case 'news':
			$email          = $_POST['email'];

			$str_mensagem = "<html>
							<head>
							<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
							</head>
							<body>
							<p style='color:#333; font:12px Verdana,Arial,Helvetica,sans-serif; line-height:150%; text-align:left;'>
							<strong>Email.......:</strong> $email<br/>
							
							</body></html>";
			break;
		case 'fale-conosco':
			$email          = "tes";

			$str_mensagem = "<html>
							<head>
							<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
							</head>
							<body>
							<p style='color:#333; font:12px Verdana,Arial,Helvetica,sans-serif; line-height:150%; text-align:left;'>
							<strong>Email.......:</strong> $email<br/>
							fale conosco
							</body></html>";
			break;
	}
					

    if (mail($emaildest,"OMA Informática",$str_mensagem,"Content-type:text/html;\nFrom: $nome<omatec>\n"))
	{
		?>
		<script type="text/javascript">
		
			alert('Sua mensagem foi enviada corretamente.');
			location.href = 'index.php';
		
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		<!--
			alert('Ocorreu um erro ao enviar o seu cadastro. Por favor, tente novamente mais tarde.');
			location.href = 'index.php';
		-->
		</script>
		<?php
	}
		
	
?>