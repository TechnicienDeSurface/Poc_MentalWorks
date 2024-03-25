<?php 

// initialisation de la ssession curl  
$ch = curl_init();

// récupération du fichier JSON pour extraction
curl_setopt($ch, CURLOPT_URL, "http://51.91.108.32/newsletters");

$newsletter = json_decode('newsletters.json');

// execution de la fonction
curl_exec($ch);

