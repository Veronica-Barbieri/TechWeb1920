<?php
//Funzione per la costruzione query in base ai filtri nomecarta e colori
function card_name_color_query($infoarray)
{
  $aux_get = array();
  if(!empty($infoarray["nomecarta"])/* && $infoarray["nomecarta"]!=""*/) $aux_get["Nome"] = $infoarray["nomecarta"];
  if(isset($infoarray["bianco"])) $aux_get["bianco"] = "Bianco";
  if(isset($infoarray["blu"])) $aux_get["blu"] =  "Blu";
  if(isset($infoarray["nero"])) $aux_get["nero"] = "Nero";
  if(isset($infoarray["rosso"])) $aux_get["rosso"] = "Rosso";
  if(isset($infoarray["verde"])) $aux_get["verde"] = "Verde";

  if (!empty($aux_get) && isset($aux_get)) $par_query .= " WHERE ";
  if ($aux_get["Nome"]) {
    $par_query .= 'Nome="'.$aux_get["Nome"].'"';
    foreach ($aux_get as $key => $value) {
      if($key != "Nome") {
        $par_query .= ' OR Colore="'.$value.'"';
      }
    }
  } else {
    foreach ($aux_get as $value) {
      if($value != end($aux_get)) {
        $par_query .= 'Colore="'.$value.'" OR ';
      } else {
        $par_query .= 'Colore="'.$value.'"';
      }
    }
  }
  return $par_query;
}

//costruzione della query parziale di ricerca per i mazzi
function deck_name_color_query($infoarray)
{
  $aux_info = array();
  $aux_color = array();
  if($infoarray["nomemazzo"] && $infoarray["nomemazzo"]!="") $aux_info["Nome"] = $infoarray["nomemazzo"];
  if($infoarray["nomeautore"] && $infoarray["nomeautore"]!="") $aux_info["Autore"] = $infoarray["nomeautore"];
  if($infoarray["bianco"]) $aux_color["Colore_bianco"] = 1;
  if($infoarray["blu"]) $aux_color["Colore_blu"] =  1;
  if($infoarray["nero"]) $aux_color["Colore_nero"] = 1;
  if($infoarray["rosso"]) $aux_color["Colore_rosso"] = 1;
  if($infoarray["verde"]) $aux_color["Colore_verde"] = 1;

  if((isset($aux_info) && !empty($aux_info)) || (isset($aux_color) && !empty($aux_color)))
    $par_query .= " WHERE ";
  if(isset($aux_info) && !empty($aux_info)) {
    foreach ($aux_info as $key => $value) {
      $par_query .= $key.'="'.$value.'"';
      if ($value != end($aux_info)) $par_query .= " AND ";
    }
    if (!empty($aux_color)) {
      $par_query .= " AND ";
      debug_output($aux_color);
      echo "<br>";
    }
  }

  if (isset($aux_color)) {
    $count = count($aux_color);
    foreach ($aux_color as $key => $value) {
      $par_query .= $key.'='.$value;
      if (--$count <=0 ) break;
      $par_query .= " AND ";
    }
  }
  return $par_query;
}


// conteggio del numero di elementi e calcolo del numero di pagine in base al numero totale di elementi($tot) e al numero di elementi per pagina($in_page)
function calc_num_pages($result_array, $in_page)
{
  $tot = count($result_array);
  return ($tot % $in_page)? intdiv($tot, $in_page)+1 : intdiv($tot, $in_page);
}
 ?>
