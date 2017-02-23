<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit10.labs.overthewire.org');
if (!$ssh->login('bandit10','truKLdjsbJ5g7yyJ2X2R0o3a5HQJFuLk')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit10 Pass Walkthough<p>
	++ base64 -d data.txt<p>";
	echo $ssh->exec('base64 -d data.txt');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


