<html>
<head><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit3.labs.overthewire.org');
if (!$ssh->login('bandit3','UmHadQclWmgdLOKQ3YNgjWxGoRMb5luK')){
	exit('Login Failed');
}
	else{
		echo "CONECTADO! <p>";
	}


	echo "Bandit4 Pass Walkthrough<p>
	++ ls -la inhere (to see all files in inhere folder)<br>
	++ cat inhere/.hidden<p>";
	echo "<h1>".$ssh->exec('cat inhere\/.hidden')."</h1>";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


