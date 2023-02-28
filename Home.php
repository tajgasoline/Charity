<?php
    session_start();
    // include('connect.php');
    // error_reporting(1);

    // if( !isset($_SESSION['userid']) ){
    //     header("location: Login.php");
    // }else{ 

    //     $userid = $_SESSION['userid'];

    // }

// $_SESSION['role'] = 'Test Role';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
 <title>Taj Gasoline</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

            <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <!-- Top Bar Start -->
   <?php include "navbar.php"; ?>
        <div class="page-wrapper">
           <?php include "leftbar.php"; ?>
            <!-- Left Sidenav -->
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Home</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Welcome <?php echo $_SESSION['username'];?> </h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>

                         <div class="row">


   <div class="col-xl-4 col-lg-6">
                <a href="AllCases.php">
                <div class="card l-bg-cust-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Total Cases</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   <span id="totalCases">-</span>
                                </h2>
                            </div>
                           
                        </div> 
                </div>
            </div>
            </a>
        </div>

 

<?php
if($_SESSION['role'] == 'Individual Authority'){

echo ' <div class="col-xl-4 col-lg-6">
                <a href="IndividualAuthority.php">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Assigned To Me</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   <span id="AssignedCases">-</span>
                                </h2>
                            </div>
                           
                        </div> 
                </div>
            </div>
            </a>
        </div>
';

} else if($_SESSION['role'] == 'Field Officer'){

echo ' <div class="col-xl-4 col-lg-6">
                <a href="FieldOfficer2.php">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Assigned To Me</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   <span id="AssignedCases">-</span>
                                </h2>
                            </div>
                           
                        </div> 
                </div>
            </div>
            </a>
        </div>
';

}

else if($_SESSION['role'] == 'Panel'){

echo ' <div class="col-xl-4 col-lg-6">
                <a href="Panel.php">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Assigned To Me</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   <span id="AssignedCases">-</span>
                                </h2>
                            </div>
                           
                        </div> 
                </div>
            </div>
            </a>
        </div>
';

}

else if($_SESSION['role'] == 'Finance'){

echo ' <div class="col-xl-4 col-lg-6">
                <a href="Finance.php">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Assigned To Me</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   <span id="AssignedCases">-</span>
                                </h2>
                            </div>
                           
                        </div> 
                </div>
            </div>
            </a>
        </div>
';

}

?>
         




            <div class="col-xl-4 col-lg-6">
                <a href="NewCases.php">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">New Cases</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   <span id="newCases">-</span>
                                </h2>
                            </div>
                           
                        </div> 
                </div>
            </div> </a>
        </div>


        <div class="col-xl-4 col-lg-6">
            <a href="PendingCases.php">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Pending Cases</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 nw">
                                <span id="SubmittedCases">-</span>
                      
                            </h2>
                        </div>
                      
                    </div>
                   
                </div>
            </div></a>
        </div>
        <div class="col-xl-4 col-lg-6">
            <a href="ApprovedCases.php">
            <div class="card l-bg-cust2-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Approved Cases</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <span id="ApprovedCases">-</span>
                            </h2>
                        </div>
                       
                    </div> 
                </div>
            </div></a>
        </div>


                <div class="col-xl-4 col-lg-6">
            <a href="RejectedCases.php">
            <div class="card l-bg-cust3-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Rejected Cases</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <span id="RejectedCases">-</span>
                            </h2>
                        </div>
                       
                    </div> 
                </div>
            </div></a>
        </div>


        <div class="col-xl-4 col-lg-6">
            <a href="ClosedCases.php">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users fa-5x"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Closed Cases</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                               <span id="ClosedCases">-</span>
                            </h2>
                        </div>
                        
                    </div>
                  
                </div>
            </div> </a>
        </div>

    </div>


                






                    
                </div><!-- container -->
               <?php include("footer.php");?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <!--Plugins-->
     
        <script src="assets/plugins/moment/moment.js"></script>
              <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
          <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>
       

          <script src="functions/Home.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
