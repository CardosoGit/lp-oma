<!DOCTYPE html>
<html >
   <head>
      <title>Resgate seu presente | Formatação de Notebook na OMA Informática</title>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
      <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">      
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/style.css">

      <link href='https://plus.google.com/+omainformáticaIjuí/' rel='publisher'/>       
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >       
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/favicon.ico" > 

      <meta property="og:title" content="Formatação Notebook por R$50,00" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="http://www.oma.inf.br/promo/" />
      <meta property="og:image" content="http://www.oma.inf.br/promo/img/img-face.jpg" /> 
      <meta property="og:site_name" content="OMA Informática" />
      <meta property="og:description" content="Que tal deixar o seu Notebook como novo para o inicio da aulas?" />
      <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function() {
             $(window).scroll(function () {
                  set = $(document).scrollTop()
                  if (set >= 461) {
                     set = 461
                  }
                 set = set +"px";
                 jQuery('#float-banner').animate(
                     {top:set},
                     {duration:1000, queue:false}
                 );
             });
         });
      </script>
   </head>
   <body>
      <html>
         <body>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=957531277632091";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


            <?php if(isset($_GET["Erro"])): ?>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12" >
                        <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Atenção!</strong> Por favor preencha todos os campos e use um e-mail válido.
                        </div>
                     </div>
                  </div>
               </div>
            <?php endif ?>
            <div class="topo" style="background:#E6E6FA">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <img height="30px" style="margin-top:15px" src="img/logo.png">
                     </div>
                  </div>
               </div>
            </div>
            <div >
               <div class="container content">
                  <div class="row">
                     <div class="col-md-8 descri">
                        <h2 style="text-transform:uppercase;font-family: cursive; line-height: 56px; margin-top: -50px;">Que tal Formatar o seu Notebook e deixá-lo novo para a volta as aulas? E por <br>apenas <span>R$ 49,90</span></h2>
                        <div class="col-md-6">
                           <div>
                              <img class="img-responsive" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/device-laptop-icon.png" alt="" />
                           </div>
                        </div>
                        <div class="col-md-6" style=" margin-top: 45px;">
                           <h3><i class="fa fa-magic"></i> Seu Notebook como Novo</h3>
                           <ul>
                              <li>Reinstalação do Windows ou Linux</li>
                              <li>Programas básicos 
                              <li>Configuração para melhor desempenho</li>
                              <li>Você pode escolher o antivírus</li>
                              <li>Busca e entrega em horários escolhidos</li>
                              <li>Prazo máximo de entrega 4 horas úteis*</li>
                           </ul>
                        </div>
                     </div>
                     <div id="float-banner" class="col-md-4 form float-banner">
                        <h2>Preencha com seus dados para contato</h2>
                        <form action="requests.php" method="post">
                           <div class="form-group">
                              <label for="">Nome:</label>
                              <input name="nome" class="form-control" type="text" />
                           </div>
                           <div class="form-group">
                              <label for="">Telefone:</label>
                              <input name="telefone" class="form-control" type="text" />
                           </div>
                           <div class="form-group">
                              <label for="">Email:</label>
                              <input name="email" class="form-control" type="text" />
                           </div>
                           <div class="form-group">
                              <button name="action" value="request-test-suport" class="btn btn-success btn-block btn-lg"><i class="fa fa-gift"></i> Solicitar Agora!</button>
                           </div>
                           <div style="margin-top: 5px; text-align: center; color: gray;">
                              Nós também odiamos SPAM
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div style="background:oldlace">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 saiba-mais">
                        <h3><i class="fa fa-exclamation-circle"></i> Importante saber:</h3>
                        <ul>
                           <li>Os dados como: fotos, músicas, documentos etc... não serão salvos.</li>
                           <li>Se o HD estiver com setores defeituosos o tempo de entrega pode aumentar em até 24 horas.</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div style="margin-top: 80px;">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h2>Deixe aqui o seu comentário</h2>
                        <div data-width="100%" class="fb-comments" data-href="http://oma.inf.br/promo/" data-numposts="10"></div>
                     </div>
                  </div>
               </div>
            </div>
         </body>
      </html>
   </body>
</html>