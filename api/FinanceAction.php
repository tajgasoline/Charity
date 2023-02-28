<?php
if( isset($_POST["id"]) && isset($_POST["CNumber"]) && isset($_POST["CAmount"])
	&& isset($_POST["CRName"]) && isset($_POST["CRCnic"])  && isset($_POST["bankname"]) 
	&& isset($_POST["CashAmount"])  && isset($_POST["PaymentType"])   )
{   
	$id = htmlentities($_POST["id"]);  
	$CNumber = htmlentities($_POST["CNumber"]);
	$CAmount = htmlentities($_POST["CAmount"]); 
	$CRName = htmlentities($_POST["CRName"]); 
	$CRCnic = htmlentities($_POST["CRCnic"]);
	$bankname = htmlentities($_POST["bankname"]);
	$CashAmount = htmlentities($_POST["CashAmount"]);
	$PaymentType = htmlentities($_POST["PaymentType"]);



	$Staffid='1'; 
	$result="";
	$duplicatefinance='';
	include("../connect.php");
	if(!$connect){
		$result = "Server Connection Error";
	}
	else{


//Duplicate checking
    $stmt = $connect -> prepare( "Select id from  tblfinance where caseid = ?");
    $stmt->bind_param('i', $id); 


   //Executing the statement
   $stmt->execute();

   //Binding variables to resultset
   $stmt->bind_result($duplicatefinance);
 

   while ($stmt->fetch()) {
    $duplicatefinance = $duplicatefinance;
   }

 

$stmt = $connect->prepare("INSERT INTO `tblfinance`( `ChequeNumber`, `ChequeAmount`, `ChequeRecName`, `ChequeRecCnic`, `CaseId`, `StaffID`, `DisbursedDate`, `BankName`, `CashAmount`, `PaymentType`) VALUES  (?,?,?,?,?,?,Now(),?,?,?)");
	 $stmt->bind_param('sssssssss', $CNumber,$CAmount,$CRName,$CRCnic,$id,$Staffid,$bankname,$CashAmount,$PaymentType); 
	 $stmt->execute();
	 if ($stmt == true) 
	 {
		 $plot_approving=" UPDATE `tblmainform` SET  `status`='Reimbursed' WHERE `CaseID`='".$id."'";
		 $run_querry=mysqli_query($connect,$plot_approving);
		 mysqli_close($connect);
		 if( $run_querry == "True"){
			$result="Inserted";

$FOemail='';

  include("../connect.php");
//Emailing to Field Officer about status.
    $stmt = $connect -> prepare( "SELECT  `email` FROM `tblstaff` WHERE role  ='Field Officer'");

   //Executing the statement
   $stmt->execute();

   //Binding variables to resultset
   $stmt->bind_result($FOemail);
 

   while ($stmt->fetch()) {
    $FOemail = $FOemail;
   }



    // include('EmailCharityFinance.php');
    // $text = 'Your Application has been Reimbursed. Please contact Finance department';

    //  email($FOemail,'Taj Charity Finance Program', 'Status of Application :'.$id, $text);
 



		}
		else
		{
			$result="Not Inserted";
		}  
	}
	else{
		$result="Not Inserted";
	}


 

	 
}
$data ["result"] = $result;
echo json_encode($data);
}
?>