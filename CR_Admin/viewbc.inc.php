<?php


if(isset($_POST['view'])){
	session_start();
	//imporr database connection
	include_once 'conndb.php';
	//Import the PhpJasperLibrary
    include_once('../PhpJasperLibrary-master/PhpJasperLibrary/tcpdf/tcpdf.php');
    include_once("../PhpJasperLibrary-master/PhpJasperLibrary/PHPJasperXML.inc.php");

	$bcnum = $_POST['bcnum'];

	//query to get information from the database.
	$sql = "SELECT * FROM BIRTH_CERTIFICATE a, PARENTS b 
	WHERE a.BCNumber = '$bcnum' AND b.BNumber = '$bcnum' ";

	$select = mysqli_query($conn, $sql) or die("Could not get the data".mysqli_error($conn));

	$row = mysqli_fetch_assoc($select) or die('Could not fetch the values'.mysqli_error($conn)); 

	//defining the content of the xml file.
	$content = "<bc>\n\n

	<data>\n
	<region>".$_SESSION['region']."</region>\n
	<division>".$_SESSION['division']."</division>\n
	<subdiv>".$_SESSION['subdiv']."</subdiv>\n
	<registrar>".$row['Registrar_Name']."</registrar>\n
	<assistant>".$row['Assistant']."</assistant>\n
	<cert_id>".$row['BCID']."</cert_id>\n
	<cert_idate>".$row['IDate']."</cert_idate>\n
	<cname>".$row['CName']."</cname>\n
	<csex>".$row['CSex']."</csex>\n
	<cdob>".$row['CDOB']."</cdob>\n
	<cpob>".$row['CPOB']."</cpob>\n
	<fname>".$row['FName']."</fname>\n
	<fpob>".$row['FPOB']."</fpob>\n
	<fdob>".$row['FDOB']."</fdob>\n
	<focc>".$row['FOccupation']."</focc>\n
	<fress>".$row['FLocation']."</fress>\n
	<mname>".$row['MName']."</mname>\n
	<mpob>".$row['MPOB']."</mpob>\n
	<mdob>".$row['MDOB']."</mdob>\n
	<mocc>".$row['MOccupation']."</mocc>\n
	<mress>".$row['MLocation']."</mress>\n
	<dec_id>".$row['DecID']."</dec_id>\n
	<dec_center>".$row['DCenterID']."</dec_center>\n
	<declarer>".$row['DeclarerName']."</declarer>\n
	<dec_position>".$row['DeclarerPost']."</dec_position>\n
	<dec_date>".$row['DecDate']."</dec_date>\n\n

	</data>\n\n

	</bc>";

	//defining the name of the xml file.
	$filename = "data_source.xml";

	//opening or creating the xml file with write permission and editing its content.
	file_put_contents($filename, $content) or die("Could not edit the xml file:".mysqli_error($conn));


	$pchartfolder="../PhpJasperLibrary-master/PhpJasperLibrary/pchart2";
//display errors should be off in the php.ini file
ini_set('display_errors', 0);
//setting the path to the created jrxml file
$xml=  simplexml_load_file("../bc.jrxml");
$PHPJasperXML= newPHPJasperXML();
//$PHPJasperXML->debugsql=true;
//$PHPJasperXML->arrayParameter=array("parameter1"=>1);
$PHPJasperXML->xml_dismantle($xml);
$PHPJasperXML->transferDBtoArray($dbServer,$dbUsername,$dbPassword,$dbName);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
}

?>	