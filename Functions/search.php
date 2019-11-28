<?php
//Funzione per la costruzione query in base ai filtri nomecarta e colori
function card_name_color_query($infoarray)
{
  $aux_get = array();
  if(!empty($infoarray["nomecarta"])) $aux_get["Nome"] = $infoarray["nomecarta"];
  if(isset($infoarray["bianco"])) $aux_color["bianco"] = "Bianco";
  if(isset($infoarray["blu"])) $aux_color["blu"] =  "Blu";
  if(isset($infoarray["nero"])) $aux_color["nero"] = "Nero";
  if(isset($infoarray["rosso"])) $aux_color["rosso"] = "Rosso";
  if(isset($infoarray["verde"])) $aux_color["verde"] = "Verde";
  if(isset($infoarray["set"]) && $infoarray["set"] != "None")//aggiungere controllo se il valore passato appartiene a quelli permessi?
    $aux_get["exp"] = $infoarray["set"];
  if(isset($infoarray["tipo"]) && $infoarray["tipo"] != "None") {
    $aux_get["tipo"] = $infoarray["tipo"];
  }

  if ((!empty($aux_get) && isset($aux_get)) || (!empty($aux_color) && isset($aux_color)))
    $par_query .= " WHERE ";

  if ($aux_get["Nome"]) {
    $par_query .= 'Nome LIKE"'.$aux_get["Nome"].'%"';
    if ($aux_color) {
      $par_query .= " AND (";
        foreach ($aux_color as $value) {
          if($value != end($aux_color)) {
            $par_query .= 'Colore="'.$value.'" OR ';
          } else {
            $par_query .= 'Colore="'.$value.'"';
          }
        }
      $par_query .= ")";
    }
    if($aux_get["exp"]) $par_query .= ' AND Espansione="'.$aux_get["exp"].'"';
    if($aux_get["tipo"]) $par_query .= ' AND Tipo="'.$aux_get["tipo"].'"';
  } else {
    if ($aux_color) {
        $par_query .= " (";
      foreach ($aux_color as $value) {
        if($value != end($aux_color)) {
          $par_query .= 'Colore="'.$value.'" OR ';
        } else {
          $par_query .= 'Colore="'.$value.'"';
        }
      }
      $par_query .= ")";
      if($aux_get["exp"]) $par_query .= ' AND Espansione="'.$aux_get["exp"].'"';
      if($aux_get["tipo"]) $par_query .= ' AND Tipo="'.$aux_get["tipo"].'"';
    }else{
      if($aux_get["exp"]) {
        $par_query .= 'Espansione="'.$aux_get["exp"].'"';
        if($aux_get["tipo"]) $par_query .= ' AND Tipo="'.$aux_get["tipo"].'"';
      }else {
        if($aux_get["tipo"]) $par_query .= 'Tipo="'.$aux_get["tipo"].'"';
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
  $aux_order = array();
  if($infoarray["nomemazzo"] && $infoarray["nomemazzo"]!="") $aux_info["Nome"] = $infoarray["nomemazzo"];
  if($infoarray["nomeautore"] && $infoarray["nomeautore"]!="") $aux_info["Autore"] = $infoarray["nomeautore"];
  if($infoarray["bianco"]) $aux_color["Colore_bianco"] = 1;
  if($infoarray["blu"]) $aux_color["Colore_blu"] =  1;
  if($infoarray["nero"]) $aux_color["Colore_nero"] = 1;
  if($infoarray["rosso"]) $aux_color["Colore_rosso"] = 1;
  if($infoarray["verde"]) $aux_color["Colore_verde"] = 1;
  if(isset($infoarray["order"]) && $infoarray["order"] != "None")
    $aux_order["order"] = $infoarray["order"];

  if((isset($aux_info) && !empty($aux_info)) || (isset($aux_color) && !empty($aux_color)))
    $par_query .= " WHERE ";
  if(isset($aux_info) && !empty($aux_info)) {
    foreach ($aux_info as $key => $value) {
      $par_query .= $key.' LIKE "'.$value.'%"';
      if ($value != end($aux_info)) $par_query .= " AND ";
    }
    if (!empty($aux_color)) {
      $par_query .= " AND ";
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
  if(isset($aux_order["order"])) {
    $par_query .= " ORDER BY ".$aux_order["order"];
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
