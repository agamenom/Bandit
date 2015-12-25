<html>
<head><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit.labs.overthewire.org');
if (!$ssh->login('bandit0','bandit0')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b><p>";
	}


	echo "Bandit1 Pass Walkthrough<p>
	++ cat readme<p>";
	echo "<h1>".$ssh->exec('cat readme')."</h1>";
	echo $ssh->exec('exit');
	
	?>
</body>
</html>


