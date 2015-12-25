<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit6.labs.overthewire.org');
if (!$ssh->login('bandit6','DXjZPULLxYr17uwoI01bNLQbtFemEgo7')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit6 Pass Walkthough<p>
	++ find -size 33c | grep \"bandit7\"<BR>
	++ cat /var/lib/dpkg/info/bandit7.password<p>";
	echo "<h1>".$ssh->exec('cat \/var\/lib\/dpkg\/info\/bandit7.password')."</h1>";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


