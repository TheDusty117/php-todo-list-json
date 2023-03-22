<?php

//step --1-- del SERVER, leggere contenuto del file todo.json
// file_get_contents LEGGE IL CONTENUTO DI UN FILE E CE LO RESTUTISCE COME STRINGA!!!!=======
$todo_string = file_get_contents('./todo.json');

//step --2-- Impostiamo header Content-Type di questo file server.php
//in questo modo con il server leggeremo i dati del json e gli stamperemo proprio come JSON
header('Content-Type: application/json');

//il file JSON va decodificato per renderlo commestibile in php,vedi qui sotto-------------
// (V1) decodifico, passandogli la stringa con ilJSON INTERNO $todo_string
$todo_list = json_decode($todo_string,true);

// (V2) questa sara' la struttura che dovra' avere il mio oggetto Che poi RICODIFICHERO'
$response = [
  'results' => $todo_list,
];

//STAMPIAMO LA RESPONSE
// (V3) ricodifico, passandogli response (che e' ora un oggetto)
echo json_encode($response);




//DOPO AVER MODIFICATO L'HEADER IN APPLICATION/JSON, (STEP 2)
//POSSIAMO PASSARE AD USARE =AXIOS= PER FARE LA CHIAMATA (vai su app.js per usare Axios)