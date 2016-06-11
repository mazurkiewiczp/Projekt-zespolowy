<?php
	session_save_path('/tmp');
	session_start();
	//$postdata = file_get_contents("php://input");
	//$postdata .= "\n";
	//file_put_contents('dane.txt', $postdata, FILE_APPEND | LOCK_EX);
	$data = '';
	$A = 0;
	$B = 0;
	$C = 0;
	$f = 15;
	foreach ($_POST as $name => $value) {
   	if ($value=="A") {$A+=1; $data.='A '; continue;}
	if ($value=="B") {$B+=1; $data.='B '; continue;}
	if ($value=="C") {$C+=1; $data.='C '; continue;}
	if ($value=="kobieta") {$data.="kobieta\n"; $f=10;}
	else $data.="mezczyzna\n";
	}
	
	$result = $A*$f + $B*5 - $C*5;
	$_SESSION['result'] = $result;

	file_put_contents('dane.txt', $data, FILE_APPEND | LOCK_EX);

	header("Location: end.php");
	
?>
