<?php
error_reporting(E_ALL);
include "../Functions/DBconnection.php";

session_start();

$target_dir = "C:/Users/verof/Documents/GitHub/TechWeb1920/Resources/";
/*$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."Resources/";*/
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//prendo l'ultimo id tra le carte nel database per dare il nome al nuovo upload
$last_ins = mysqli_fetch_assoc(Query("SELECT Max(Id) AS Max FROM carta"));
$last_ins["Max"] = $last_ins["Max"] +1;
$new_image_name = "carta".$last_ins["Max"].".".$imageFileType;
$target_file = $target_dir . $new_image_name;
$image_path = "Resources/".$new_image_name;

$conn = OpenCon();

//Prendo le altre informazioni dal form facendo l'escpe dei caratteri speciali
// e controllando i valori numerici o nulli
$Filename=mysqli_real_escape_string($conn,basename( $_FILES['fileToUpload']['name']));
$Nome= mysqli_real_escape_string($conn,$_POST['card_name']);
$Tipo= mysqli_real_escape_string($conn,$_POST['card_type']);
$Exp= mysqli_real_escape_string($conn,$_POST['card_exp']);
$Rarita= mysqli_real_escape_string($conn,$_POST['card_rar']);
$Artista= mysqli_real_escape_string($conn,$_POST['card_art']);
$Def= empty($_POST['card_def']) ? "NULL" : intval($_POST['card_def']);
$Atk= empty($_POST['card_atk']) ? "NULL" : intval($_POST['card_atk']);
$Colore= mysqli_real_escape_string($conn,$_POST['card_color']);
$Bianco= empty($_POST['bianco']) ? 0 : intval($_POST['bianco']);
$Blu= empty($_POST['blu']) ? 0 : intval($_POST['blu']);
$Nero= empty($_POST['nero']) ? 0 : intval($_POST['nero']);
$Rosso= empty($_POST['rosso']) ? 0 : intval($_POST['rosso']);
$Verde= empty($_POST['verde']) ? 0 : intval($_POST['verde']);
$Nocolor= empty($_POST['nocolor']) ? 0 : intval($_POST['nocolor']);
$Desc= empty($_POST['card_desc']) ? "NULL" : mysqli_real_escape_string($conn,$_POST['card_desc']);
$Fltext= empty($_POST['card_fltext']) ? "NULL" : mysqli_real_escape_string($conn,$_POST['card_fltext']);

// Costruzione della query per l'inserimento della carta
$qupload = "INSERT INTO carta
		(Nome,Colore,Costo_verde,Costo_rosso,Costo_blu,
		Costo_bianco,Costo_nero,Costo_Nocolor,Tipo,Descrizione,
		Flavour_text,Espansione,Rarita,Artista,DEF,ATK,Img_path)
		VALUES ('".$Nome."','".$Colore."','".$Verde."','".$Rosso."','".$Blu."',
			'".$Bianco."','".$Nero."','".$Nocolor."','".$Tipo."','".$Desc."','".$Fltext."',
			'".$Exp."','".$Rarita."','".$Artista."','".$Def."','".$Atk."','".$image_path."') ";

// Controllo se l'immagine è sana
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
		$uploadOk = 0;
		$_GET["error"] = "001";
	  //header("Location: ../admin_page.php?error=".$_GET["error"]);
    //echo "File is not an image.";
  }
}

// Controllo se il file esiste già
if (file_exists($target_file)) {
	$uploadOk = 0;
	$_GET["error"] = "002";
	//header("Location: ../admin_page.php?error=".$_GET["error"]);
}

// Controllo la dimensione massima del file
if ($_FILES["fileToUpload"]["size"] > 500000) {
	$uploadOk = 0;
	$_GET["error"] = "003";
	//header("Location: ../admin_page.php?error=".$_GET["error"]);
}

// Controllo il formato del file è adeguato
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
	$uploadOk = 0;
	$_GET["error"] = "001";
	//header("Location: ../admin_page.php?error=".$_GET["error"]);
  //echo "Sorry, only JPG, JPEG, PNG files are allowed.";
}

// Controllo se il flag $uploadOk è tato settato a 0 da uno degli errori precedenti
if ($uploadOk == 0) {
	header("Location: ../admin_page.php?error=".$_GET["error"]);
} else { // Se non ci sono stati errori provo a fare l'upload
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$qres = UpInDel_Query($qupload, "Insert"); //se l'upload ha successo provo ad eseguire la query
			if($qres == "true"){ //se la query ha successo carico in get il messaggio di successo
				$_GET["success"] = "100";
				header("Location: ../admin_page.php?success=".$_GET["success"]);
			}else{//se la query non ha successo, elimino il file caricato sul server
				 		// e carico in get il messaggio di errore
				unlink($target_file);
				$_GET["error"] = "005";
				header("Location: ../admin_page.php?error=".$_GET["error"]);
			}
  } else { //se l'upload non ha successo carico in get il messaggio di errore
		$_GET["error"] = "004";
		header("Location: ../admin_page.php?error=".$_GET["error"]);
  }
}
?>
