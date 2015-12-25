<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit7.labs.overthewire.org');
if (!$ssh->login('bandit7','HKBPTKQnIay4Fw76bEy8PVxKEDQRKTzs')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit7 Pass Walkthough<p>
	++ cat \"data.txt\" | grep \"millionth\"<BR>";
	echo "<h1>".$ssh->exec('cat "data.txt" | grep "millionth"')."</h1>";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


