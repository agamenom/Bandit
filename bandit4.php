<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit4.labs.overthewire.org');
if (!$ssh->login('bandit4','pIwrPrtPN36QITSp3EQaw936yaFoFgAB')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit5 Pass Walkthrough<p>
	++ file inhere/.-* (the file07 is the only ASCII file type)<br>
	++ cat inhere/.-file07<p>";
	echo "<h1>".$ssh->exec('cat inhere\/./-file07')."</h1>";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


