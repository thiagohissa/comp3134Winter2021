<?php
ini_set('display_errors' ,1);
ini_set('display_startup_errors', 1 );
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';
print "<pre>";
if(!file_exists(basename($path))){
print "Sorry, file does not exist.";
return;
}
print_r(scandir(basename($path)));
print "</pre>";
?>

<?php
<h1>Weak Password</h1>
	<form method="post">
	<label>Password</label>
	<input type="password" name="password"><br/>
	<input type="submit"> 
</form >
?>