<?php

$title = $_POST['title'];

if(!is_dir('posts')){
    mkdir('posts');
}

$create = fopen('posts/' . $title . '.txt', "w+");



$txt = $_POST['contents'];
fwrite($create,$txt);

fclose($create);
echo '<p> /!\ Un fichier a été créé /!\<p>';

?>