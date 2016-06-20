<?php 
$title;
$path=$_SERVER['PHP_SELF'];
$page=basename($path);
switch("$page") 
{ 
case 'gamefly.php': 
     $title = 'Gamefly Redesign Concept'; 
     break; 
case 'totalfit.php': 
     $title = 'Totalfit'; 
     break;
case 'rbp.php': 
     $title = 'RetroBrickPhones'; 
     break;
case 'chitter.php': 
     $title = 'Chitter'; 
     break;
case 'taskkeeper.php': 
     $title = 'TaskKeeper'; 
     break;
case 'wmc.php': 
     $title = 'We Made Clouds'; 
     break;
case 'mak.php': 
     $title = 'Mikey AK'; 
     break;
case 'batman.php': 
     $title = 'Batman Fan Site Concept'; 
     break;
} 
    echo  $title; 
?>