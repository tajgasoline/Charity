<div id="page0">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card cust-card" style="padding: 2rem;">
                <div class="card-body" style="height: 42rem !important;">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal auth-form my-4" action="index.html">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="id"
                                                class="col-sm-4 col-form-label text-align-left">Case ID</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group ">
                                                    <input disabled type="text" class="form-control" id="id1"
                                                        placeholder="Enter CaseID">
                                                </div>
                                                <span class="help-block custom-block-hide"
                                                    id="1v"><small></small></span>
                                            </div>
                                        </div><!--end form-group-->
                                        <div class="form-group row">
                                            <label for="email"
                                                class="col-sm-4 col-form-label text-align-left">Applicant Status</label>
                                            <div class="col-sm-8 ">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" value="yes"
                                                        id="employmentc">
                                                </div>
                                                <select class="select2 form-control  custom-select "
                                                    style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true"
                                                    disabled id="employment">
                                                        <option value="Employed">Employed</option>
                            <option value="UnEmployed">UnEmployed</option>
                            <option value="Others">Others</option>

                                                </select>
                                                <span class="help-block custom-block-hide"
                                                    id="66v"><small></small></span>
                                            </div>
                                        </div><!--end form-group-->
                                           <div class="form-group row">
        <label for="muslim" class="col-sm-4 col-form-label text-align-left">Muslim</label>
        <div class="col-sm-8 "> 
           <div class="custom-checkbox">
            <input type="checkbox" class="form-check-input" value="yes" id="Muslimc"> 
        </div>
        <select disabled class="select2 form-control  custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" onchange="function6();" id="Muslim">
            <option value="null" selected disabled>Are You Muslim?</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
        <span class="help-block custom-block-hide" id="40v"><small ></small></span>
    </div>
</div><!--end form-group--> 
<div class="form-group row">
    <label for="syed" class="col-sm-4 col-form-label text-align-left">Syed</label>
    <div class="col-sm-8 "> 
       <div class="custom-checkbox">
        <input type="checkbox" class="form-check-input" value="yes" id="Syedc"> 
    </div>
    <select disabled class="select2 form-control  custom-select " onchange="function7();" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="Syed">
        <option value="null" selected disabled>Are You Syed?</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <span class="help-block custom-block-hide" id="41v"><small ></small></span>
</div>
</div><!--end form-group--> 
<div class="form-group row">
    <label for="aghakhani" class="col-sm-4 col-form-label text-align-left">AghaKhani</label>
    <div class="col-sm-8 "> 
       <div class="custom-checkbox">
        <input type="checkbox" class="form-check-input" value="yes" id="AgaKanic"> 
    </div>
    <select disabled class="select2 form-control  custom-select " style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="AgaKani">
        <option value="null" selected disabled>Are You Agha Khani?</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <span class="help-block custom-block-hide" id="42v"><small ></small></span>
</div>
</div><!--end form-group--> 
<div class="form-group row">
    <label for="zakateval" class="col-sm-4 col-form-label text-align-left">Zakat Evaluation</label>
    <div class="col-sm-8 ">
     <div class="input-group ">
      <div class="custom-checkbox">
        <input type="checkbox" class="form-check-input" value="yes" id="ZakatEvaluationc"> 
    </div>
    <input disabled type="text" class="form-control" id="ZakatEvaluation" disabled placeholder="Enter Zakat Evaluation">
</div>
<span class="help-block custom-block-hide" id="43v"><small ></small></span>
</div>
</div><!--end form-group--> 



                                      
                                    </div>
                                    <div class="col-md-6">
                                   
                                    
                                        <div class="form-group row">
                                            <label for="casetype"
                                                class="col-sm-4 col-form-label text-align-left">Applying For</label>
                                            <div class="col-sm-8 ">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" value="yes"
                                                        id="casetypec">
                                                </div>
                                                <select class="select2 form-control  custom-select "
                                                    style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true"
                                                    id="casetype" disabled onchange="business_change();">
                                                    <option value="null" selected disabled>Select Type</option>
                                                    <option value="Charity">Charity</option>
                                                    <option value="Zakat">Zakat</option>
                                                    <option value="Business">Business</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                        <div id="div_businesstype" style="">
                                            <div class="form-group row">
                                                <label for="casetype"
                                                    class="col-sm-4 col-form-label text-align-left">Nature of
                                                    Business</label>
                                                <div class="col-sm-8 ">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" value="yes"
                                                            id="natureofbusinessc">
                                                    </div>
                                                    <select class="select2 form-control  custom-select "
                                                        style="width: 100%; height:36px;" tabindex="-1"
                                                        aria-hidden="true" id="natureofbusiness" disabled
                                                        onchange="business_change2();">
                                                        <option value="null" selected disabled>Select here</option>
                                                        <option value="Business1">Nature of Business 1</option>
                                                        <option value="Business2">Nature of Business 2</option>
                                                        <option value="Business3">Nature of Business 3</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    <span class="help-block custom-block-hide"
                                                        id="63v"><small></small></span>
                                                </div>
                                            </div><!--end form-group-->
                                        </div>
                                        <div id="div_othernature" style="">
                                            <div class="form-group row">
                                                <label for="otherbusiness"
                                                    class="col-sm-4 col-form-label text-align-left">Other
                                                    Business</label>
                                                <div class="col-sm-8 ">
                                                    <div class="input-group ">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" class="form-check-input" value="yes"
                                                                id="otherbusinessc">
                                                        </div>
                                                        <textarea disabled class="form-control" id="otherbusiness"
                                                            placeholder="Enter Other Business Description"></textarea> >
                                                    </div>
                                                    <span class="help-block custom-block-hide"
                                                        id="64v"><small></small></span>
                                                </div>
                                            </div><!--end form-group-->
                                        </div>
                                        <div class="form-group row">
                                            <label for="casedesc" class="col-sm-4 col-form-label text-align-left">Case
                                                Description</label>
                                            <div class="col-sm-8 ">
                                                <div class="input-group ">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" value="yes"
                                                            id="casedescc">
                                                    </div>
                                                    <textarea disabled class="form-control" id="casedesc"
                                                        placeholder="Enter Case Description"></textarea> >
                                                </div>
                                                <span class="help-block custom-block-hide"
                                                    id="65v"><small></small></span>
                                            </div>
                                        </div><!--end form-group-->
                                    </div>
                                </div>
                            </form><!--end form-->
                        </div>
                    </div>
                </div><!--end card-body-->
                <div class="row login-logo">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 cust-card-left-button">
                        <button class="btn btn-primary  btn-block waves-effect waves-light" value="page1"
                            onclick="switching(this.value);" type="button" disabled>Preview</button>
                    </div>
                    <div class="col-md-3 cust-card-right-button">
                        <button class="btn btn-primary  btn-block waves-effect waves-light" value="page2"
                            onclick="switching(this.value);" id="page-two-button" type="button">Next</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-md-1"></div>
    </div><!--end row-->
</div><!--end general detail-->