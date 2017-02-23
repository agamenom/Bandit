<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit14.labs.overthewire.org');
if (!$ssh->login('bandit14','4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit14 Pass Walkthough<p>
	++ cat /etc/bandit_pass/bandit14 | netcat localhost 30000<p>";
	echo $ssh->exec('cat /etc/bandit_pass/bandit14 | netcat localhost 30000');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


