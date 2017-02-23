<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit8.labs.overthewire.org');
if (!$ssh->login('bandit8','cvX2JJa4CFALtqS87jk27qwqGhBM9plV')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit8 Pass Walkthough<p>
	++ sort data.txt|uniq -c|sort|head -n1<p>";
	echo "<h1>1 UsvVyFSfZZWbi6wgC7dAFyFuR6jQQUhR</h1>";
	echo $ssh->exec('sort data.txt|uniq \-c|sort');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


