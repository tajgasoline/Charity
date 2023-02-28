<?php


if(isset($_POST['check'])  )
{



	session_start();
	$userid = $_SESSION['userid'];
	$newCases='-';
	$ApprovedCases='-';
	$SubmittedCases='-';
	$ClosedCases='-';
	$totalCases='-';
	$AssignedCases='-';
	$RejectedCases='-';






	$result = array();


	include('../connect.php');


	$stmt = $connect -> prepare( "SELECT count(caseid) as newCases FROM `tblmainform` where status='New';"); 

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($newCases);
	while ($stmt->fetch()) {
		$newCases = $newCases ;

	}


	$stmt = $connect -> prepare( "SELECT count(caseid) as ApprovedCases FROM `tblmainform` where status='Approved';"); 

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($ApprovedCases);
	while ($stmt->fetch()) {
		$ApprovedCases = $ApprovedCases ;

	}


	$stmt = $connect -> prepare( "SELECT count(caseid) as RejectedCases FROM `tblmainform` where status='Rejected';"); 

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($RejectedCases);
	while ($stmt->fetch()) {
		$RejectedCases = $RejectedCases ;

	}



	if($_SESSION['role'] == 'Individual Authority' ){
		$stmt = $connect -> prepare( "SELECT count(caseid) as SubmittedCases FROM `tblmainform` m WHERE 
			Exists (Select * from remarks r where m.caseid=r.caseid and r.staffid = ".$userid.") and m.STATUS ='Submitted';"); 

   //Executing the statement
		$stmt->execute();

   //Binding variables to resultset
		$stmt->bind_result($SubmittedCases);
		while ($stmt->fetch()) {
			$SubmittedCases = $SubmittedCases ;

		}

	} else  if($_SESSION['role'] == 'Panel' || $_SESSION['role'] == 'Field Officer' || $_SESSION['role'] == 'Finance'){
		$stmt = $connect -> prepare( "SELECT count(caseid) as SubmittedCases FROM `tblmainform` m WHERE 
			m.STATUS ='Submitted';"); 

   //Executing the statement
		$stmt->execute();

   //Binding variables to resultset
		$stmt->bind_result($SubmittedCases);
		while ($stmt->fetch()) {
			$SubmittedCases = $SubmittedCases ;

		}

	}
	 




	$stmt = $connect -> prepare( "SELECT count(caseid) as ClosedCases FROM `tblmainform` where status='Reimbursed';"); 

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($ClosedCases);
	while ($stmt->fetch()) {
		$ClosedCases = $ClosedCases ;

	}

	

	
	if($_SESSION['role'] == 'Individual Authority'){

		$stmt = $connect -> prepare( "SELECT count(m.`caseid`) as AssignedCases from tblmainform m  WHERE 
			NOT Exists (Select * from remarks r where m.caseid=r.caseid and r.staffid = ".$userid.") and m.STATUS ='Submitted';"); 

   //Executing the statement
		$stmt->execute();

   //Binding variables to resultset
		$stmt->bind_result($AssignedCases);
		while ($stmt->fetch()) {
			$AssignedCases = $AssignedCases ;

		}


	}
	else if($_SESSION['role'] == 'Field Officer'){



		$stmt = $connect -> prepare( "SELECT count(m.`caseid`) as AssignedCases from tblmainform m  WHERE 
			m.STATUS ='New';"); 

   //Executing the statement
		$stmt->execute();

   //Binding variables to resultset
		$stmt->bind_result($AssignedCases);
		while ($stmt->fetch()) {
			$AssignedCases = $AssignedCases ;

		}

	}
	else if($_SESSION['role'] == 'Panel'){



		$stmt = $connect -> prepare( "SELECT count(m.`caseid`) as AssignedCases from tblmainform m  WHERE 
			m.STATUS ='Panel';"); 

   //Executing the statement
		$stmt->execute();

   //Binding variables to resultset
		$stmt->bind_result($AssignedCases);
		while ($stmt->fetch()) {
			$AssignedCases = $AssignedCases ;

		}

	}else if($_SESSION['role'] == 'Finance'){



		$stmt = $connect -> prepare( "SELECT count(m.`caseid`) as AssignedCases from tblmainform m  WHERE 
			m.STATUS ='Approved';"); 

   //Executing the statement
		$stmt->execute();

   //Binding variables to resultset
		$stmt->bind_result($AssignedCases);
		while ($stmt->fetch()) {
			$AssignedCases = $AssignedCases ;

		}

	}

	

	$stmt = $connect -> prepare( "SELECT count(caseid) as totalCases FROM `tblmainform` "); 

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($totalCases);
	while ($stmt->fetch()) {
		$totalCases = $totalCases ;

	}




	mysqli_close($connect);

	$data["newCases"] = $newCases; 
	$data["ApprovedCases"] = $ApprovedCases; 
	$data["RejectedCases"] = $RejectedCases; 
	$data["SubmittedCases"] = $SubmittedCases; 
	$data["ClosedCases"] = $ClosedCases;
	$data["totalCases"] = $totalCases;
	$data["AssignedCases"] = $AssignedCases;




	echo json_encode($data);


}

?>
