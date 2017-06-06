<?php

if
    (isset($_GET['filename']))

        {
        $title = basename($_GET['filename'],'.txt');
        $txt = file_get_contents('posts/'.$_GET['filename']);
        }

?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>

    <form action="create-file.php" method="POST">
        <input type="text" name="title" value="<?php echo $title; ?>">
        <textarea name="contents"><?php echo $txt; ?></textarea>
        <button>submit</button>


    </form>




</body>

</html>