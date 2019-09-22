<?php
class ContactController extends Controller {
  public function index() {
    $array = array(
      'aviso' => ''
    );

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
      $nome = addslashes($_POST['nome']);
      $email = addslashes($_POST['email']);
      $mensagem = addslashes($_POST['mensagem']);

      $para = "gustaff.tech@gmail.com";
      $assunto = "Dúvida";
      
      $msg = "Nome: {$nome}<br>
              Email: {$email}<br>
              Mensagem: {$mensagem}";

      $cabecalho = "From: gustaff.tech@gmail.com" . "\r\n" .
                    "Reply-To: {$email}" . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();   
      
      mail($para, $assunto, $msg, $cabecalho);  
      $array['aviso'] = 'Email enviado com sucesso.';   
    }
    
    $this->loadTemplate('Contact', $array);
  }
}