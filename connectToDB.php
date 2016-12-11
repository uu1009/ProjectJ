
<?php
//Connect DataBase
class ConnDB{	
$dbms='mysql';
$dbName='jr';
$user='root';
$pwd='root1234';
$host='localhost';
$dsn="$dbms:host=$host;dbname=$dbName";
function GetCon($){
	try{
	$pdo=new PDO($dsn,$user,$pwd);
	return $pdo;
	
}catch(Exception $e){
	die("Error!:".$e->getMessage()."<br/>");
}
}
}
//Manage DataBase
class AdminDB{
	function ExecSQL($sqlstr,$conn){
	$sqltype=strtolower(substr(trim($sqlstr),0,6));
    $rs=$conn->prepare($sqlstr);
	$rs->execute();
    if($sqltype=="select"){
		$array=$rs->fetchAll(PDO::FETCH_ASSOC);
		if(count($array==0)||$rs==false) return false;
		else return $array;
	}
    elseif($sqltype=="update"||$sqltype=="insert"||$sqltype=="delete"){
		if($rs) return true;
		else return false;
	}	
}
}
?>
