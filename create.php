<?php
$titre = $_POST['titre'];

if(!is_dir('posts')){
    mkdir('posts');
}

$create = fopen('posts/' . $titre . '.txt', "w+");



fwrite($create,$titre);

$txt = $_POST['txtarea'];
fwrite($create,$txt);
fclose($create);


?>