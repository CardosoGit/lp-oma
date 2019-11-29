<!DOCTYPE html>
<?php 
	header ('Content-type: text/html; charset=UTF-8');
	require_once("src/Mailchimp.php");
	define('MAILCHIMP_API_KEY',  '6fcfc846856d870c6e9192ed2663efcd-us11'); // Sua chave da API
	define('MAILCHIMP_LIST_ID',  '08964ace02'); // O ID da sua lista
	define('MAILCHIMP_CITY_TAG_NOME', 'NAME'); // A tag do campo personalizado que usaremos
	define('MAILCHIMP_CITY_TAG_TELEFONE', 'TEL');
	define('MAILCHIMP_CITY_TAG_CIDADE', 'CITY');
	define('MAILCHIMP_CITY_TAG_BAIRRO', 'BAIRRO');
	define('MAILCHIMP_CITY_TAG_IDADE', 'IDADE');
	if (isset($_POST["action"])) {
		switch ($_POST["action"]) {
			case 'request-test-suport':
				RequisitaSuporte();
				break;
			
			default:
				# code...
				break;
		}
	}

	function RequisitaSuporte(){
		$form = $_POST;
		try{
			$mailchimp = new Mailchimp(MAILCHIMP_API_KEY, array('ssl_verifypeer' => false));
			$lists = new Mailchimp_Lists($mailchimp);
			$email = [
			   'email' => $form['email']
			 ];
			$merge = [
			   MAILCHIMP_CITY_TAG_NOME => $form['nome'],
			   MAILCHIMP_CITY_TAG_TELEFONE => $form['telefone'],
			   MAILCHIMP_CITY_TAG_IDADE => $form['idade'],
			   MAILCHIMP_CITY_TAG_BAIRRO => $form['bairro'],
			   MAILCHIMP_CITY_TAG_CIDADE=> $form['cidade']
			 ];
			$lists->subscribe(
			   MAILCHIMP_LIST_ID, // ID da lista
			   $email,            // O e-mail do assinante
			   $merge,            // Campos personalizados
			   'html',            // Tipo de e-mail recebido
			   false              // Confirmar assinatura por e-mail (opt-in duplo)?
			 );	
			 header("Location: obrigado.html");	
			
		// }catch (Mailchimp_List_AlreadySubscribed $e) {
		//     echo 'Você já assinou a newsletter.';
		// } catch (Mailchimp_Email_AlreadySubscribed $e) {
		// 	echo 'Você já assinou a newsletter.';
		} catch (Mailchimp_Email_NotExists $e) {
		    echo 'O e-mail informado não existe.';
		} catch (Mailchimp_Invalid_Email $e) {
		    echo 'O e-mail informado é inválido.';
		} catch (Mailchimp_List_InvalidImport $e) {
		   echo 'Dados inválidos, provavelmente seu e-mail.';
		} catch (Exception $e) {
		   header("Location: index.php?Erro=true");
		}

		

   }

	
 ?>