<?php

require 'model/model.php';

//Récupérer dans une vraiable $messages tous les messages en base de données
if(isset($_GET['pseudo']) && isset($_GET['content']) && $_GET['pseudo'] != '' && $_GET['content'] != ''){
    create($_GET);
}

 $messages=findAll();
 //var_dump($messages);
 //die;
// inclure la vue souhaitée
require 'view/default.php';
