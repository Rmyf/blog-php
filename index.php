<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
</head>
<body>

<h1> BLOG TEST</h1>
   <ul> 
<?php

$dossier = 'posts';
$contenu_dossier = scandir($dossier);
foreach ($contenu_dossier as $key => $value){
 if(is_file('posts/' . $value))
     
    echo '<li>'. $value. '</li>';
    

}

?>
   </ul>
</body>
</html>



