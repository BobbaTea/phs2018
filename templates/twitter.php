
<?php 

$command = escapeshellcmd('/var/www/html/BackEnd/Classification.py @realDonaldTrump 1');
$output = shell_exec($command);
echo $output;

?>
