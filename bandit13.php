<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit13.labs.overthewire.org');
if (!$ssh->login('bandit13','8ZjyCRiBWFYkneahHwxCv3wb2a1ORpYL')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit13 Pass Walkthough<p>
	++ ssh -i sshkey.private bandit14@178.79.134.250<br>
	++ cat /etc/bandit_pass/bandit14<p>";
	echo "wcYUJFw0k0XLShlDzztnTBHiqxU3b3e";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


