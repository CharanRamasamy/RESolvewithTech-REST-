<?php
// Check for empty fields
var_dump($_POST['name'], $_POST['password']);
exit;
if(empty($_POST['name'])      ||
   empty($_POST['password'])  
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
	return false;
   }else{

return true;
   }         
?>
