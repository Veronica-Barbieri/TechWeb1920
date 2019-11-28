<?php

//funzione per chiudere la connessione con il database
function OpenCon() {
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "techweb";

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed:- %s/n"). $conn -> error;

  return $conn;
}


//funzione per chiudere la connessione con il database
function CloseCon($conn){
  $conn -> close();
}

 //funzione che si occupa di aprire la connessione con il database e effettuare
 //una query per la ricerca di dati nel database
function Query($query_string){
  $conn = OpenCon() or die ("Conncetion Failed: " . mysqli_connect_error());
  $response = mysqli_query($conn, $query_string);
  CloseCon($conn);
  return $response;
}

//funzione che si occupa di aprire la connessione con il database e effettuare
//la modifica di dati presenti all'interno del database
function Update_Query($query_string){
  $conn = OpenCon() or die ("Conncetion Failed: " . mysqli_connect_error());
  if(mysqli_query($conn, $query_string)){
      $updated = "Record updated successfully";
  } else {
      $updated = "Error updating record: " . mysqli_error($conn);
  }
  CloseCon($conn);
  return $updated;
}


// funzione utile per la stampa di una variabile su browser (da usare quando non sapete cosa contiene una variabile)
function Debug_output($debug_var){
  echo "Inizio output di variabile \n \n";
  echo "<pre>";
  var_dump($debug_var);
  echo "</pre>";
}

?>
