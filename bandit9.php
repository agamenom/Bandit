<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit9.labs.overthewire.org');
if (!$ssh->login('bandit9','UsvVyFSfZZWbi6wgC7dAFyFuR6jQQUhR')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit9 Pass Walkthough<p>
	++ strings data.txt|grep \"==\"<p>";
	echo $ssh->exec('strings data.txt|grep "=="');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


