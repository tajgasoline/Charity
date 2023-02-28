<div id="page8" style="display: none;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">                                            
            <div class="card cust-card" style="padding: 2rem;">
               <div class="card-body" style="height: 40rem !important;">
                   <div class="row">
                       <label for="example-text-input" class="col-lg-10 col-form-label  C-Modal-Data-title text-center">Panel Remarks</label>
                       <div class="col-md-12">
                        <form class="form-horizontal auth-form my-4" action="index.html">
                            <div class="row">
                               <div class="col-md-6">
                                 <div class="form-group row">
                                    <label for="appliedamount" class="col-sm-4 col-form-label text-align-left">Amount Applied For</label>
                                    <div class="col-sm-8 ">
                                       <div class="input-group ">
                                           <input type="text" class="form-control numbersOnly" id="AmountApplied2" placeholder="Enter Amount" disabled>
                                       </div> 
                                       <span class="help-block custom-block-hide" id="44v"><small ></small></span>
                                   </div>
                               </div><!--end form-group--> 

                                                 <div class="form-group row" style="margin-bottom:0rem !important ;">
                                <label for="officeramount" class="col-sm-4 col-form-label text-align-left">FO Suggested Amount</label>
                                <div class="col-sm-8 ">
                                   <div class="input-group ">
                                       <input type="text" class="form-control numbersOnly" id="FOAmount2" placeholder="Enter Amount" disabled>
                                   </div> 
                                   <span class="help-block custom-block-hide" id="45v"><small ></small></span>
                               </div>
                           </div><!--end form-group--> 

                
                     
                        </div>
                        <div class="col-md-6">


                                  <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-align-left">FO Remarks</label>
                            <div class="col-sm-8 ">
                             <div class="input-group ">
                                <textarea type="text" class="form-control" id="FORemarks2" disabled  placeholder="Enter Field Officer Remarks"></textarea>
                            </div>  <span class="help-block custom-block-hide" id="100v">
                            </div><span class="help-block custom-block-hide" id="46v">
                            </div><!--end form-group--> 

                         

                    </div>
                </form><!--end form-->                                                                                                                     
            </div> 
            <div>
                    <div class="col-md-12" style="padding: 0.2rem 0rem;">
 

                <div class="form-group row" style="margin-bottom:0rem !important ;">
                       <h5>Authority Member Remarks</h5>
                </div><!--end form-group--> 

                 <table  class="table table-bordered nowrap" style="width: 100%;">
                                  
                    <thead>
                        <th>Name</th>
                        <th>Remarks</th>
                        <th>Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="AuthorityRemarks">
                       <tr><td>Loading Data</td></tr>
                    </tbody>
                </table>

            </div>

            <div class="col-md-12">
                
                         <div class="form-group row">
                            <label for="officeramount" class="col-sm-2 col-form-label text-align-left">Panel Approved Amount</label>
                            <div class="col-sm-4 ">
                               <div class="input-group ">
                                   <input type="text" class="form-control numbersOnly"  id="POAmount" placeholder="Enter Amount">
                               </div> 
                               <span class="help-block custom-block-hide" id="45v"><small ></small></span>
                           </div>

                             <label for="email" class="col-sm-2 col-form-label text-align-left">Panel Remarks</label>
                        <div class="col-sm-4 ">
                         <div class="input-group ">
                            <textarea type="text" class="form-control" id="PORemarks2"  placeholder="Enter Panel Remarks"></textarea>
                        </div>  <span class="help-block custom-block-hide" id="100v">
                        </div><span class="help-block custom-block-hide" id="46v">


                       </div><!--end form-group--> 
                   
            </div>
                
            </div>
        </div>         
    </div><!--end card-body-->
</div><!--end col-->
<div class="row login-logo">
    <div class="col-md-3"></div>
    <div class="col-md-3 cust-card-left-button">
        <button class="btn btn-primary  btn-block waves-effect waves-light" value="page7" onclick="switching(this.value);" type="button"  >Preview</button>
    </div>
    <div class="col-md-3 cust-card-left-button">
        <button class="btn btn-primary  btn-block waves-effect waves-light"   onclick="Updateremarks(this.value);" value="Approved" type="button">Approve</button>
    </div>
    <div class="col-md-3 cust-card-right-button">
        <button class="btn btn-primary  btn-block waves-effect waves-light"   onclick="Updateremarks(this.value);" value="Rejected" type="button">Reject</button>
    </div>
    <div class="col-md-3"></div>
</div>
</div><!--end card-->
<div class="col-md-1"></div>
</div><!--end row-->   
</div><!--end Field Officer Remarks detail-->
</div>