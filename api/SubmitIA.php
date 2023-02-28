<?php
if( isset($_POST["caseid"]) && isset($_POST["YourRemarks"]) && isset($_POST["YourActions"]))
{   
	$caseid = htmlentities($_POST["caseid"]);  
	$YourRemarks = htmlentities($_POST["YourRemarks"]);
	$YourActions = htmlentities($_POST["YourActions"]);  
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username']; 
	$result="";
	$duplicatefinance='';
	$dbtotalapproved='';
	$totalapprover='';


	include("../connect.php");
	if(!$connect){
		$result = "Server Connection Error";
	}
	else{
		$stmt = $connect->prepare("INSERT INTO `remarks`( `caseid`, `staffid`, `username`, `date`, `action`, `remarks`) 
			VALUES  (?,?,?,Now(),?,?)");
		$stmt->bind_param('iisss', $caseid,$userid,$username,$YourActions,$YourRemarks); 
		$stmt->execute();
		if ($stmt == true) 
		{
			$result="Success"; 


//Duplicate checking
    $stmt = $connect -> prepare( "SELECT count(remarksid) as totalapproved FROM `remarks` where caseid = ?");
    $stmt->bind_param('i', $caseid); 


   //Executing the statement
   $stmt->execute();

   //Binding variables to resultset
   $stmt->bind_result($dbtotalapproved);
 

   while ($stmt->fetch()) {
    $dbtotalapproved = $dbtotalapproved;
   }


//Duplicate checking
    $stmt = $connect -> prepare( "SELECT count(staffid) as totalapprover FROM `tblstaff` WHERE Role='Individual Authority' and status='Active';"); 

   //Executing the statement
   $stmt->execute();

   //Binding variables to resultset
   $stmt->bind_result($totalapprover);
 

   while ($stmt->fetch()) {
    $totalapprover = $totalapprover;
   }


if($totalapprover== $dbtotalapproved){

   $stmt = $connect->prepare("UPDATE `tblmainform` SET STATUS='Panel' WHERE caseid=".$caseid."");
     $stmt->execute();


    $result ='Success';

}



		}
		else{
			$result="Error";
		}
	}

	
	$data ["dbtotalapproved"] = $dbtotalapproved;
	$data ["result"] = $result;
	echo json_encode($data);
}
?>