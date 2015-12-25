<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit5.labs.overthewire.org');
if (!$ssh->login('bandit5','koReBOKuIDDepwhWk7jZC0RTdopnAYKh')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit6 Pass Walkthough<p>
	++ find -size 1033c<BR>
	++ cat inhere/maybehere07/.file2<p>";
	echo "<h1>".$ssh->exec('cat inhere\/maybehere07\/.file2')."</h1>";
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


