<html>
<head><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit1.labs.overthewire.org');
if (!$ssh->login('bandit1','boJ9jbbUNNfktd78OOpsqOltutMc3MY1')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit2 Pass Walkthrough<p>
	++ ls -la (to see all files)<br>
	++ cat ./- (special character filename)<p>";
	echo "<h1>".$ssh->exec('cat ./-')."</h1>";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


