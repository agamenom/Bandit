<html>
<head><meta charset="utf-8"><title>Bandit</title></head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'c:\\wamp\\www\\bandit\\phpseclib');

include('phpseclib\\Net\\SSH2.php');

$ssh = new Net_SSH2('bandit12.labs.overthewire.org');
if (!$ssh->login('bandit12','5Te8Y4drgCRfCx8ugdwuEX8KFC6k2EUu')){
	exit('Login Failed');
}
	else{
		echo "<b>CONECTADO!</b> <p>";
	}


	echo "Bandit12 Pass Walkthough<p>
	++ mkdir /tmp/agamenom<br>
	++ cp data.txt /tmp/agamenom<br>
	++ xxd -r data.txt > data2<br>
	++ file data2 (Return: it's a gzip compressed data)<br>
	++ mv data2 data2.gz<br>
	++ gzip -d data2.gz (it's generate data2)<br>
	++ file data2 (Return: it's a bzip2 compressed data)<br>
	++ bzip2 -d data2 (it's generate data2.out)<br>
	++ file data2.out (Return: it's a gzip compressed data)<br>
	++ mv data2 data4.gz<br>
	++ gzip -d data4.gz<br>
	++ file data4 (Return: it's a POSIX tar archive)<br>
	++ tar xvf data4 (it's generate data5.bin)<br>
	++ file data5.bin (Return: it's POSIX tar archive)<br>
	++ tar xvf data5.bin (it's generate data6.bin)<br>
	++ file data6.bin (Return: it's bzip2 compressed data)<br>
	++ bzip2 -d data6.bin (It's generate data6.bin.out)<br>
	++ file data6.bin.out (Return: it's POSIX tar archive)<br>
	++ tar xvf data6.bin.out (it's generate data8.bin)<br>
	++ file data8.bin (Return: it's a gzip compressed data)<br>
	++ gzip -d data8.bin (it's generate data8)<br>
	++ file data8 (Return: it's an ASCII text)<br>
	++ cat data8 (And Voilà)<p>
	The password is 8ZjyCRiBWFYkneahHwxCv3wb2a1ORpYL";
	//echo $ssh->exec('cat data.txt | tr "[A-Za-z]" "[N-ZA-Mn-za-m]"');
	echo $ssh->exec('exit');

	
	
	?>
</body>
</html>


