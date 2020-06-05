<?php
include_once 'conndb.php';

//arrar to keep date and time values
$date_array = getdate();

//assigning the value of the current year to $ynow.
$ynow = $date_array['year'];

$ylast = $ynow - 1;

$sub= $_SESSION['subdiv'];

//  count the total number of birth certificates.
	//selecting all rows information from the table
$sql = "SELECT * FROM BIRTH_CERTIFICATE ";
$get = mysqli_query($conn, $sql) ;

//Counting the number of rows in the table and assigning it to $num
$birth = mysqli_num_rows($get) ;




// to count the number of boys

	//selecting rows from the table
$sql = "SELECT * FROM BIRTH_CERTIFICATE WHERE CSex = 'Male' ";
$get = mysqli_query($conn, $sql) or die("Could not get the BC_DATA2:".mysqli_error($conn));

$boy = mysqli_num_rows($get);



// to count the number of girls

$sql = "SELECT * FROM BIRTH_CERTIFICATE WHERE CSex = 'Female' ";
$get = mysqli_query($conn, $sql) or die("Could not get the BC_DATA3:".mysqli_error($conn));

$girl = mysqli_num_rows($get) ;




//to calculate the percentage increase of births for this year.



$sql = "SELECT * FROM BIRTH_STATS WHERE Year = '$ylast' ";
$get = mysqli_query($conn, $sql) or die("Could not get the BC_DATA4:".mysqli_error($conn));
$row2 = mysqli_fetch_assoc($get) or die("Could not fetch the BC_DATA:".mysqli_error($conn));



$numlast = $row2['BirthCount'];
//calculating the percentage increase in births.
$bper = (($birth - $numlast)/$numlast) * 100;
$bper_int = round($bper);



//to count the number of marriages this year.

$sql ="SELECT * FROM Marriage_Certificate";
$get = mysqli_query($conn, $sql) or die("Could not get MC_DATA:".mysqli_error($conn));
$marriage = mysqli_num_rows($get);


//to count the number of monogamous marriages this year.

$sql ="SELECT * FROM Marriage_Certificate WHERE Mar_type = 'Monogamy' ";
$get = mysqli_query($conn, $sql) or die("Could not get MC_DATA2:".mysqli_error($conn));
$mono = mysqli_num_rows($get);


//to count the number of polygamous marriages this year.

$sql ="SELECT * FROM Marriage_Certificate WHERE Mar_type = 'Polygamy' ";
$get = mysqli_query($conn, $sql) or die("Could not get MC_DATA3:".mysqli_error($conn));
$poly = mysqli_num_rows($get);


//to calculate the percentage increase in marriages for this year.


$sql = "SELECT * FROM MARRIAGE_STATS WHERE Year = '$ylast' ";
$get = mysqli_query($conn, $sql) or die("Could not get the MC_DATA5:".mysqli_error($conn));
$row2 = mysqli_fetch_assoc($get) or die("Could not fetch the MC_DATA1:".mysqli_error($conn));


$numlast = $row2['MarriageCount'];
//calculating the percentage increase in marriages.
$mper = (($marriage - $numlast)/$numlast) * 100;
$mper_int=round($mper);


   
	


//Editing the birthstat table.

$sql = "SELECT * FROM BIRTH_STATS WHERE Year = '$ynow' ";
$get = mysqli_query($conn, $sql);
//counting the number of rows
$num = mysqli_num_rows($get);

if($num < 1){

	//Inserting values for this year in the table
	$sql = "INSERT INTO BIRTH_STATS VALUES('$ynow','$birth','$boy', '$girl','$bper') ";
	$insert = mysqli_query($conn, $sql) or die("Could not insert the values1:".mysqli_error($conn));
}else{

	//updating the values for this year in the table
	$sql = "UPDATE BIRTH_STATS
	        SET BIRTH_STATS.BirthCount = '$birth', BIRTH_STATS.Boys = '$boy', BIRTH_STATS.Girls = '$girl', BIRTH_STATS.PercentageIncrease = '$bper'
	        WHERE BIRTH_STATS.Year = '$ynow' ";
	$update = mysqli_query($conn, $sql) or die("Could not update the values1:".mysqli_error($conn));

}

//Editing the marriagestat table.

$sql = "SELECT * FROM MARRIAGE_STATS WHERE Year = '$ynow' ";
$get = mysqli_query($conn, $sql) or die("Could not get the MC_DATA6:".mysqli_error($conn));
//counting the number of rows
$num = mysqli_num_rows($get) ;

if($num < 1 ){

	//Inserting values for this year in the table
	$sql = "INSERT INTO MARRIAGE_STATS VALUES('$ynow','$marriage','$mono', '$poly','$mper') ";
	$insert = mysqli_query($conn, $sql) or die("Could not insert the values2:".mysqli_error($conn));
}else{

	//updating the values for this year in the table
	$sql = "UPDATE MARRIAGE_STATS
	        SET MARRIAGE_STATS.MarriageCount = '$marriage', MARRIAGE_STATS.Monogamy = '$mono', MARRIAGE_STATS.Polygamy = '$poly', MARRIAGE_STATS.PercentageIncrease = '$mper'
	        WHERE MARRIAGE_STATS.Year = '$ynow' ";
	$update = mysqli_query($conn, $sql) or die("Could not update the values2:".mysqli_error($conn));

}



?>