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
foreach ($contenu_dossier as $file){
    if(is_file('posts/' . $file)) {
        echo '<li> <h2>'. basename($file,'.txt').'</h2></li>';
        $txt = file_get_contents('posts/'.$file);
        echo '<p>'.$txt.'</p> ';
        echo '<form method="GET" action="delete.php">
            <input type="hidden" name="filename" value="'.$file.'">
            <input type = "submit" value="Delete">
            </form>';

        echo '<form method="GET" action="create.php">
             <input type="hidden" name="filename" value="'.$file.'">
             <input type = "submit" value="Edit">
             </form>';

    }
}



?>
   </ul>
</body>
</html>



