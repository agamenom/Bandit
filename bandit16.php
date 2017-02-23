<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit16.labs.overthewire.org');
if (!$ssh->login('bandit16','cluFn7wTiGryunymYOu4RcffSxQluehd')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit16 Pass Walkthough<p>
	++ nmap -A -p31000-32000 localhost (Only port 31790 have SSL response)<br>
	++ cat /etc/bandit_pass/bandit16 | openssl s_client -connect localhost:31790 -ign_eof (Then copy the RSA PRIVATE KEY)<br>
	++ mkdir /tmp/agamenom16 <br>
	++ vim /tmp/agamenom16/sshkey.private (And past the copied text)<br>
	++ cd /tmp/agamenom16 <br>
	++ chmod 400 sshkey.private (Without whis, ssh return \"Permissions 0664 for './sshkey.private' are too open.\")<br>
	++ ssh -i sshkey.private bandit17@localhost<br>
	++ cat /etc/bandit_pass/bandit17<p>";
	$ssh2->login('bandit17','xLYVMN9WE5zQ5vHacb0sZEVqbrp7nBTn');
	echo $ssh2->exec('cat /etc/bandit_pass/bandit17');
	echo $ssh2->exec('exit');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


