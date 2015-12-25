<html>
<head><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit2.labs.overthewire.org');
if (!$ssh->login('bandit2','CV1DtqXWVFXTvM2F0k09SHz0YwRINYA9')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit3 Pass Walkthrough<p>
	++ cat spaces\ in\ this\ filename\<br>
	(or cat \"spaces in this filename\")<p>";
	echo "<h1>".$ssh->exec('cat spaces\\ in\\ this\\ filename\\')."</h1>";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


