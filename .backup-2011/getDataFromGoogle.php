<?php

/**
 * Restituisce i dati dal foglio Google
 * 
 * url gsheet: https://docs.google.com/spreadsheets/d/1ctA1m3wFOyFlzxuQyOEw5ayMGFSULlBLW8J5KWUNYnQ/edit#gid=183090327
 * url gform (edit): https://docs.google.com/forms/d/14hBel4XYSntLI8IzzTOKMoh8n7AqswH47RJlmOCwL8Q/edit
 * url gForm (public): https://docs.google.com/forms/d/e/1FAIpQLSdkXVvlZ0ZgiOzBWnQK4R-0F18NXR_iVZbGJg7VrsSlowfJfw/viewform 
 * 
 */

// variabile globale
$feed = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vR78Ce9Q06YT_Ja0Kd9X_0x092URhtV2wNUx6Vdk9u7qv31YPnMWy62mC4FScRYLrQYoIQBBOxMlo2s/pub?gid=183090327&single=true&output=csv';

/**
 * Converto il csv in array
 */
function csvToArray($file, $delimiter)
{
    if (($handle = fopen($file, 'r')) !== false) {
        $i = 0;
        while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== false) {
            for ($j = 0; $j < count($lineArray); $j++) {
                $arr[$i][$j] = $lineArray[$j];
            }
            $i++;
        }
        fclose($handle);
    }
    return $arr;
}

/**
 * Estraggo i dati del feed
 */
function get_archivio()
{
    global $feed;
    $keys = array();
    $newArray = array();

    // eseguo la funzione
    $data = csvToArray($feed, ',');

    // conto il numero degli elementi (meno 1 perchè eliminiamo la prima riga)
    $count = count($data) - 1;

    // uso la prima riga per i nomi
    $labels = array_shift($data);

    // sostituisco gli spazi con underscore
    foreach ($labels as $label) {
        $keys[] = str_replace(' ', '_', strtolower($label));
    }

    // aggiungo l'id
    $keys[] = 'id';

    for ($i = 0; $i < $count; $i++) {
        $data[$i][] = $i;
    }

    // metto tutto insieme
    for ($j = 0; $j < $count; $j++) {
        $d = array_combine($keys, $data[$j]);
        $newArray[$j] = $d;
    }
    return $newArray;

}

/**
 * Pulisco il feed, eliminando il primo elemento che abbiamo impostato come fisso
 */
function get_all_news(){
    
    $array = get_archivio();
    unset($array[0]); unset($array[1]); unset($array[2]); unset($array[3]);
    return array_reverse($array);
}

/**
 * Get della singola news
 * 
 * @param string $uuid
 */
function getNews($uuid)
{
    $array = get_archivio();
    $id = array_search($uuid, array_column($array, 'uuid'));
    
    
    return $array[$id];
}


