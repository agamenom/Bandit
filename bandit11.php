<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit11.labs.overthewire.org');
if (!$ssh->login('bandit11','IFukwKGsFW8MOq3IRFqrxE1hxTNEbUPR')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit11 Pass Walkthough<p>
	++ cat data.txt | tr [A-Za-z] [A-MN-Za-mn-z]<p>";
	echo $ssh->exec('cat data.txt | tr "[A-Za-z]" "[N-ZA-Mn-za-m]"');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


