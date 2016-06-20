<?php 
$title;
$path=$_SERVER['PHP_SELF'];
$page=basename($path);
switch("$page") 
{ 
case 'index.php': 
     $title = 'Ken Ijiwoye - Software Developer'; 
     break; 
case 'about.php': 
     $title = 'About'; 
     break;
case 'contact.php': 
     $title = 'Contact Me'; 
     break; 
} 
    echo $title; 
?>