<?php

//step --1-- del SERVER, leggere contenuto del file todo.json
// file_get_contents LEGGE IL CONTENUTO DI UN FILE E CE LO RESTUTISCE COME STRINGA!!!!=======
$todo_string = file_get_contents('./todo.json');

//step --2-- Impostiamo header Content-Type di questo file server.php
//in questo modo con il server leggeremo i dati del json e gli stamperemo proprio come JSON
header('Content-Type: application/json');

//vedi cosa stai stampando
echo $todo_string; //VAI SU - localhost/php-todo-list-json/server.php - PER VEDERE COSA SUCCEDE

//DOPO AVER MODIFICATO L'HEADER IN APPLICATION/JSON,
//POSSIAMO PASSARE AD USARE =AXIOS= PER FARE LA CHIAMATA (vai su app.js per usare Axios)