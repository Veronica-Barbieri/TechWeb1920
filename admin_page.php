<?php
/*CONTROLLER*/
  $pagein = array(
    'Namepage' => 'Il tuo account',
    'Controller' => 'admin_page.php'
  );

  $errors = array(
    '001' => "Il file caricato non è un'immagine, caricare un file \".png\", \".jpg\" o \".jpeg\"",
    '002' => "Il file caricato esiste già, caricarne uno diverso o cambiarne il nome",
    '003' => "Il file caricato è troppo pesante",
    '004' => "Sorry, there was an error uploading your file.",
    '005' => "Si e' presentato un errore nell'aggiunta della carta",
    '100' => "Carta aggiunta correttamente",
    '101' => "Info modificate con successo"
  );
  session_start();
  if(!isset($_SESSION["Username"])){
    header("HTTP/1.1 401 Unauthorized");
    exit;
  }

  //error_reporting (E_ALL);
  require_once ("Views/header.php");
  require_once ("Models/admin_page.php");
  require_once ("Views/admin_page.php");
  require_once ("Views/footer.php");

?>
