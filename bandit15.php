<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit15.labs.overthewire.org');
if (!$ssh->login('bandit15','BfMYroe26WYalil77FoDi9qh59eK5xNr')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit15 Pass Walkthough<p>
	++ cat /etc/bandit_pass/bandit15 | openssl s_client -connect localhost:30001 -ign_eof | tail -n 3<p>";
	echo $ssh->exec('cat /etc/bandit_pass/bandit15 | openssl s_client -connect localhost:30001 -ign_eof | tail -n 3');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


