<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

session_start();
$userid = $_SESSION['userid'];
    $query = mysqli_query($connect,"SELECT m.`caseid`, m.`employment`,  m.`noofmales`, m.`nooffemales`, m.`noofdependents`, m.`noofpersonearning`, m.`familyincome`, m.`monthlyration`, m.`monthlyhealthcare`, m.`monthlyeducation`, m.`otherexpenses`, m.`totalexpenses`, m.`monthlysirplusdeficit`, m.`cashbank`, m.`goldsilver`, m.`provisionalfund`, m.`paidcommittee`, m.`securitydeposit`, m.`loangiven`, m.`othercurrency`, m.`tradeassets`, m.`unnecessaryflats`, m.`extramobilephones`, m.`extravehicles`, m.`extralivestocks`, m.`totalcountableassets`, m.`rentpayable`, m.`securitydepositpayable`, m.`payableamountcommittee`, m.`utilitybillspayable`, m.`loanpayable`, m.`ttldductliabilities`, m.`totaldeductableliabiliities`, m.`netcoutableassets`, m.`currentzakatevaluation`, m.`muslim`, m.`syed`, m.`agakani`, m.`zakatevaluation`, m.`amountapplied`, m.`foamount`, m.`foremarks2`, m.`executiverelationship`, m.`referencename`, m.`refferedby`, m.`intension`, m.`experience`, m.`capability`, m.`training`, m.`otherremarks`, m.`doc`, m.`casetype`, m.`casedescription`, m.`name`, m.`fathersname`, m.`cnic`, m.`contact`, m.`email`, m.`status`, m.`panelremarks`, m.`panelamount`, m.`netsalary`, m.`address`, m.`formid`, m.`foremarks`, m.`nob`, m.`nobdesc`, m.`city`, m.`otp`,m.`FOAmount`,m.`FORemarks2` FROM `tblmainform` m WHERE 
       m.STATUS ='Reimbursed'; ");

    if (!$query
  )  {


      $result  = "error";
      $message = "query error";
    }
    else
    {
      $result  = "success";
      $message = "query success";
      $empty="";
      while ($row = mysqli_fetch_array($query))
      {
     



      $Action='<td>
      <a  
      id="'.$row["caseid"].'" 
        data-caseid="'.$row["caseid"].'"
         data-casetype="'.$row["casetype"].'"
      data-casedesc="'.$row["casedescription"].'"
      data-name="'.$row["name"].'"
      data-fathersname="'.$row["fathersname"].'"
      data-employment="'.$row["employment"].'"
      data-cnic="'.$row["cnic"].'"
      data-contact="'.$row["contact"].'"
      data-email="'.$row["email"].'"
      data-netsalary="'.$row["netsalary"].'"
      data-address="'.$row["address"].'"
      data-nob="'.$row["nob"].'"
      data-nobdesc="'.$row["nobdesc"].'"
      data-city="'.$row["city"].'" 
      data-noofmales="'.$row["noofmales"].'"
      data-nooffemales="'.$row["nooffemales"].'"
      data-noofdependents="'.$row["noofdependents"].'"
      data-noofpersonearning="'.$row["noofpersonearning"].'"
      data-familyincome="'.$row["familyincome"].'"
      data-monthlyration="'.$row["monthlyration"].'"
      data-monthlyhealthcare="'.$row["monthlyhealthcare"].'"
      data-monthlyeducation="'.$row["monthlyeducation"].'"
      data-otherexpenses="'.$row["otherexpenses"].'"
      data-totalexpenses="'.$row["totalexpenses"].'"
      data-monthlysirplusdeficit="'.$row["monthlysirplusdeficit"].'"
       data-cashbank="'.$row["cashbank"].'"
      data-goldsilver="'.$row["goldsilver"].'"
      data-provisionalfund="'.$row["provisionalfund"].'"
      data-paidcommittee="'.$row["paidcommittee"].'"
      data-securitydeposit="'.$row["securitydeposit"].'"
      data-loangiven="'.$row["loangiven"].'"
      data-othercurrency="'.$row["othercurrency"].'"
      data-tradeassets="'.$row["tradeassets"].'"
      data-unnecessaryflats="'.$row["unnecessaryflats"].'"
      data-extramobilephones="'.$row["extramobilephones"].'"
      data-extravehicles="'.$row["extravehicles"].'"
      data-extralivestocks="'.$row["extralivestocks"].'"
       data-totalcountableassets="'.$row["totalcountableassets"].'"
       
      data-rentpayable="'.$row["rentpayable"].'"
      data-securitydepositpayable="'.$row["securitydepositpayable"].'"
      data-payableamountcommittee="'.$row["payableamountcommittee"].'"
      data-utilitybillspayable="'.$row["utilitybillspayable"].'"
      data-loanpayable="'.$row["loanpayable"].'"
      data-ttldductliabilities="'.$row["ttldductliabilities"].'"
      data-totaldeductableliabiliities="'.$row["totaldeductableliabiliities"].'"
      data-netcoutableassets="'.$row["netcoutableassets"].'"
      data-currentzakatevaluation="'.$row["currentzakatevaluation"].'"
      data-muslim="'.$row["muslim"].'"
      data-syed="'.$row["syed"].'"
       data-agakani="'.$row["agakani"].'"
      data-zakatevaluation="'.$row["zakatevaluation"].'"
      data-amountapplied="'.$row["amountapplied"].'"
      data-foamount="'.$row["foamount"].'"
      data-foremarks2="'.$row["foremarks2"].'"
      data-executiverelationship="'.$row["executiverelationship"].'"
      data-referencename="'.$row["referencename"].'"
      data-refferedby="'.$row["refferedby"].'"
      data-intension="'.$row["intension"].'"
      data-experience="'.$row["experience"].'"
      data-capability="'.$row["capability"].'"
      data-training="'.$row["training"].'"
       data-otherremarks="'.$row["otherremarks"].'"
      data-doc="'.$row["doc"].'"
     
      data-status="'.$row["status"].'"
      data-panelremarks="'.$row["panelremarks"].'"
      data-panelamount="'.$row["panelamount"].'"
    
      data-formid="'.$row["formid"].'"
      data-foremarks2="'.$row["foremarks2"].'"
      data-foamount="'.$row["FOAmount"].'"
     
      
  
   
      class="mr-2 edit-modal" data-toggle="modal" data-animation="bounce" data-target=".edit-modal1" ><i class="fas fa-edit text-info font-16"></i></a></br></td>';

$Action2='';
if($row["status"]=='Reimbursed'){
  $Action2='<td>
      <a  
      id="'.$row["caseid"].'" 
      data-contact="'.$row["contact"].'"  
      data-email="'.$row["email"].'" 
      class="mr-2 payment-modal" data-toggle="modal" data-animation="bounce" data-target=".payment-modal1" ><i class="fas fa-edit text-info font-16"></i></a></br></td>';
}
 

      
 

          // $Action = '';
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "Empty2"     => $Action2, 
          "CaseID" => $row["caseid"],
          "DOC" => $row["doc"],
          "casetype" => $row["casetype"],
          "caseDescription" => $row["casedescription"],
          "Name" => $row["name"],
          "Fathersname" => $row["fathersname"],
          "cnic" => $row["cnic"],
          "contact" => $row["contact"],
          "email" => $row["email"],
          "status" => $row["status"]
          
        );
      }
    }
  // Close database connection
  mysqli_close($connect);
}
// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);
// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
?>