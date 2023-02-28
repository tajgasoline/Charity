 
  <?php 
  
  // session_start();
  $role2 =  $_SESSION['role'];
  
  
  ?> 
  <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu">
                    <li><a href="Home.php"><i class="ti-bar-chart"></i><span>Home</span></i></span></a></li>
                  
                     <?php 
                        if($role2 == 'Field Officer'){
                            echo '  <li><a href="FieldOfficer2.php"><i class="ti-bar-chart"></i><span>Field Officer </span></i></span></a></li>';
                        } else if($role2 == 'Panel'){
                            echo '  <li><a href="Panel.php"><i class="ti-bar-chart"></i><span>Panel </span></i></span></a></li>';
                        } else if($role2 == 'Finance'){
                            echo '  <li><a href="Finance.php"><i class="ti-bar-chart"></i><span>Finance </span></i></span></a></li>';
                        }else if($role2 == 'Individual Authority'){
                            echo '  <li><a href="IndividualAuthority.php"><i class="ti-bar-chart"></i><span>Individual Authority</span></i></span></a></li>';
                        }

                        ?>
                             <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Reports</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                              
                    <li><a href="AllCases.php"><i class="ti-bar-chart"></i><span>All Cases</span></i></span></a></li> 
                    <li><a href="NewCases.php"><i class="ti-bar-chart"></i><span>New Cases</span></i></span></a></li> 
                    <li><a href="PendingCases.php"><i class="ti-bar-chart"></i><span>Pending Cases</span></i></span></a></li> 
                    <li><a href="ApprovedCases.php"><i class="ti-bar-chart"></i><span>Approved Cases</span></i></span></a></li>
                    <li><a href="RejectedCases.php"><i class="ti-bar-chart"></i><span>Rejected Cases</span></i></span></a></li>
                    <li><a href="ClosedCases.php"><i class="ti-bar-chart"></i><span>Closed Cases</span></i></span></a></li>  
                             
                        </ul>
                       
                    </li>


                  
              <!--        <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Charity Finance</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>


                       
                        
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/InvEntry/InventoryDashboard.php"><i class="ti-control-record"></i>Dashbaord</a></li>
                        </ul>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Staff/Staff.php"><i class="ti-control-record"></i>Staff</a></li>
                        </ul>
                         <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Site/InvSite.php"><i class="ti-control-record"></i>Site</a></li>
                        </ul>
                         <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Product/InvProduct.php"><i class="ti-control-record"></i>Product</a></li>
                        </ul>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/InvEntry/Inventory.php"><i class="ti-control-record"></i>Inventory</a></li>
                        </ul>

                    </li> -->
                     <!--    <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>not final Roles Rights</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                             <li class="nav-item"><a class="nav-link" href="Modules.php"><i class="ti-control-record"></i>Modules</a></li>
                            <li class="nav-item"><a class="nav-link" href="Roles.php"><i class="ti-control-record"></i>Roles</a></li>
                             <li class="nav-item"><a class="nav-link" href="Rights.php"><i class="ti-control-record"></i>Rights</a></li>
                             
                        </ul>
                       
                    </li> -->
                
 
                   
                  
                   

                  
                </ul>
            </div>