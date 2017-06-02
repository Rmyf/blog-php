<?php

$delfile = $_GET['filename'];
  if(isset($_GET['filename']))
 { 
unlink('posts/'.$delfile);
 }


?>