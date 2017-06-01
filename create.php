<?php

$titre = $_POST['titre'];

if(!is_dir('posts')){
    mkdir('posts');
}

$create = fopen('posts/' . $titre . '.txt', "w+");



$txt = $_POST['contents'];
fwrite($create,$txt);

fclose($create);

?>