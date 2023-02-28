jQuery('.numbersOnly').keyup(function () {
    this.value = this.value.replace(/[^0-9\.,]/g, '');
});
function BtnLoadingTrue() {
    $("#submitRecord").attr("disabled", true);
    $('#submitRecord').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Submitting...');
}
function BtnLoadingFalse() {
    $("#submitRecord").attr("disabled", false);
    $('#submitRecord').html('Submit');
}
function tblcases() {
    $("#datatable").DataTable({
        scrollY: 200,
        scrollX: true,
        "ajax": "api/TblNewCases.php",
        "columns": [
            { "data": "Empty" },
            { "data": "CaseID" },
            { "data": "DOC" },
            { "data": "casetype" },
            { "data": "caseDescription" },
            // { "data": "foremarks" },
            // { "data": "foamount" },
            { "data": "Name" },
            { "data": "Fathersname" },
            { "data": "cnic" },
            { "data": "contact" },
            { "data": "email" },
            { "data": "status" }
            ],
    });
}
$(document).ready(function () {
    tblcases();
    $(document).on("click", ".edit-modal", function () {
        var caseid = $(this).data("caseid");
        $("#id1").val($(this).attr("id"));
        $("#caseid").val($(this).data("caseid"));
        $("#employment").val($(this).data("employment"));
        $("#email").val($(this).data("email"));
        $("#fullname").val($(this).data("name"));
        $("#fathersname").val($(this).data("fathersname"));
        $("#contact").val($(this).data("contact"));
        $("#cnic").val($(this).data("cnic"));
        $("#casetype").val($(this).data("casetype")); 
        $("#casedesc").val($(this).data("casedesc"));
        $("#NetSalary").val($(this).data("netsalary"));
        $("#Address").val($(this).data("address"));
        $("#natureofbusiness").val($(this).data("nob"));
        $("#otherbusiness").val($(this).data("nobdesc"));
        $("#city").val($(this).data("city")); 
        $("#NoofMales").val($(this).data("noofmales")); 
        $("#NoofFemales").val($(this).data("nooffemales"));
        $("#NoofDependents").val($(this).data("noofdependents"));
        $("#NoofPersonEarning").val($(this).data("noofpersonearning"));
        $("#FamilyIncome").val($(this).data("familyincome"));
        $("#MonthlyRation").val($(this).data("monthlyration"));
        $("#MonthlyHealthCare").val($(this).data("monthlyhealthcare"));
        $("#MonthlyEducation").val($(this).data("monthlyeducation"));
        $("#OtherExpenses").val($(this).data("otherexpenses"));
        $("#TotalExpenses").val($(this).data("totalexpenses"));
        $("#MonthlySirplusdeficit").val($(this).data("monthlysirplusdeficit"));
        $("#CashBank").val($(this).data("cashbank")); 
        $("#GoldSilver").val($(this).data("goldsilver"));
        $("#ProvisionalFund").val($(this).data("provisionalfund"));
        $("#PaidCommittee").val($(this).data("paidcommittee"));
        $("#SecurityDeposit").val($(this).data("securitydeposit"));
        $("#LoanGiven").val($(this).data("loangiven"));
        $("#OtherCurrency").val($(this).data("othercurrency")); 
        $("#TradeAssets").val($(this).data("tradeassets"));
        $("#UnnecessaryFlats").val($(this).data("unnecessaryflats"));
        $("#ExtraMobilePhones").val($(this).data("extramobilephones"));
        $("#ExtraVehicles").val($(this).data("extravehicles"));
        $("#ExtraLivestocks").val($(this).data("extralivestocks"));
        $("#TotalCountableAssets").val($(this).data("totalcountableassets"));
        $("#TotalCountableAssets2").val($(this).data("totalcountableassets"));
        $("#RentPayable").val($(this).data("rentpayable"));
        $("#SecurityDepositPayable").val($(this).data("securitydepositpayable"));
        $("#PayableAmountCommittee").val($(this).data("payableamountcommittee"));
        $("#UtilityBillsPayable").val($(this).data("utilitybillspayable"));
        $("#LoanPayable").val($(this).data("loanpayable"));
        $("#TotalDeductableLiabilities").val($(this).data("ttldductliabilities")); 
        $("#TotalDeductableLiabiliities").val($(this).data("ttldductliabilities"));
        $("#NetCoutableAssets").val($(this).data("netcoutableassets"));
        $("#CurrentZakatEvaluation").val($(this).data("currentzakatevaluation"));
        $("#Muslim").val($(this).data("muslim"));
        $("#Syed").val($(this).data("syed"));
        $("#AgaKani").val($(this).data("agakani"));
        $("#ZakatEvaluation").val($(this).data("zakatevaluation")); 
        $("#ExecutiveRelationship").val($(this).data("executiverelationship"));
        $("#ReferenceName").val($(this).data("referencename"));
        $("#RefferedBy").val($(this).data("refferedby"));
        $("#Intension").val($(this).data("intension"));
        $("#Experience").val($(this).data("experience"));
        $("#Capability").val($(this).data("capability")); 
        $("#Training").val($(this).data("training"));
        $("#OtherRemarks").val($(this).data("otherremarks")); 
        $("#AmountApplied2").val($(this).data("amountapplied")); 
        $("#FOAmount2").val($(this).data("foamount"));
        $("#FORemarks2").val($(this).data("foremarks2")); 
        if ($(this).data("casetype") == 'Business') {
            $("#NOBtab").css("display", "block");
        } else {
            $("#NOBtab").css("display", "none");
        }
        $.ajax({
            url: "api/ValidationIA.php",
            method: "POST",
            data: {
                caseid: caseid
            },
            dataType: "JSON",
            success: function (data) {
                var result = data; 
                var IARemarks = data.IARemarks; 
                var arrayrecord = data.arrayrecord; 
                if(result.email == "Yes"){$("#emailc").prop("checked", true);}
                if(result.name == "Yes"){$("#fullnamec").prop("checked", true);}
                if(result.fathersname == "Yes"){$("#fathersnamec").prop("checked", true);}
                if(result.contact == "Yes"){$("#contactc").prop("checked", true);}
                if(result.city == "Yes"){$("#cityc").prop("checked", true);}
                if(result.netsalary == "Yes"){$("#NetSalaryc").prop("checked", true);}
                if(result.cnic == "Yes"){$("#cnicc").prop("checked", true);}
                if(result.address == "Yes"){$("#Addressc").prop("checked", true);}
                if(result.casetype == "Yes"){$("#casetypec").prop("checked", true);}
                if(result.nob == "Yes"){$("#natureofbusinessc").prop("checked", true);}
                if(result.nobdesc == "Yes"){$("#otherbusinessc").prop("checked", true);}
                if(result.casedesc == "Yes"){$("#casedescc").prop("checked", true);}
                if(result.noofmales == "Yes"){$("#NoofMalesc").prop("checked", true);}
                if(result.nooffemales == "Yes"){$("#NoofFemalesc").prop("checked", true);}
                if(result.noofdependents == "Yes"){$("#NoofDependentsc").prop("checked", true);}
                if(result.noofpersonearning == "Yes"){$("#NoofPersonEarningc").prop("checked", true);}
                if(result.familyincome == "Yes"){$("#FamilyIncomec").prop("checked", true);}
                if(result.monthlyration == "Yes"){$("#MonthlyRationc").prop("checked", true);}
                if(result.monthlyhealthcare == "Yes"){$("#MonthlyHealthCarec").prop("checked", true);}
                if(result.monthlyeducation == "Yes"){$("#MonthlyEducationc").prop("checked", true);}
                if(result.otherexpenses == "Yes"){$("#OtherExpensesc").prop("checked", true);}
                if(result.totalexpenses == "Yes"){$("#TotalExpensesc").prop("checked", true);}
                if(result.monthlysirplusdeficit == "Yes"){$("#MonthlySirplusdeficitc").prop("checked", true);}
                if(result.cashbank == "Yes"){$("#CashBankc").prop("checked", true);}
                if(result.goldsilver == "Yes"){$("#GoldSilverc").prop("checked", true);}
                if(result.provisionalfund == "Yes"){$("#ProvisionalFundc").prop("checked", true);}
                if(result.paidcommittee == "Yes"){$("#PaidCommitteec").prop("checked", true);}
                if(result.securitydeposit == "Yes"){$("#SecurityDepositc").prop("checked", true);}
                if(result.loangiven == "Yes"){$("#LoanGivenc").prop("checked", true);}
                if(result.othercurrency == "Yes"){$("#OtherCurrencyc").prop("checked", true);}
                if(result.tradeassets == "Yes"){$("#TradeAssetsc").prop("checked", true);}
                if(result.unnecessaryflats == "Yes"){$("#UnnecessaryFlatsc").prop("checked", true);}
                if(result.extramobilephones == "Yes"){$("#ExtraMobilePhonesc").prop("checked", true);}
                if(result.extravehicles == "Yes"){$("#ExtraVehiclesc").prop("checked", true);}
                if(result.extralivestocks == "Yes"){$("#ExtraLivestocksc").prop("checked", true);}
                if(result.totalcountableassets == "Yes"){$("#TotalCountableAssetsc").prop("checked", true);}
                if(result.rentpayable == "Yes"){$("#RentPayablec").prop("checked", true);}
                if(result.securitydepositpayable == "Yes"){$("#SecurityDepositPayablec").prop("checked", true);}
                if(result.payableamountcommittee == "Yes"){$("#PayableAmountCommitteec").prop("checked", true);}
                if(result.utilitybillspayable == "Yes"){$("#UtilityBillsPayablec").prop("checked", true);}
                if(result.loanpayable == "Yes"){$("#LoanPayablec").prop("checked", true);}
                if(result.ttldductliabilities == "Yes"){$("#TotalDeductableLiabilitiesc").prop("checked", true);}
                if(result.netcoutableassets == "Yes"){$("#TotalCountableAssets2c").prop("checked", true);}
                if(result.totaldeductableliabiliities == "Yes"){$("#TotalDeductableLiabiliitiesc").prop("checked", true);}
                if(result.netcoutableassets == "Yes"){$("#NetCoutableAssetsc").prop("checked", true);}
                if(result.currentzakatevaluation == "Yes"){$("#CurrentZakatEvaluationc").prop("checked", true);}
                if(result.muslim == "Yes"){$("#Muslimc").prop("checked", true);}
                if(result.syed == "Yes"){$("#Syedc").prop("checked", true);}
                if(result.agakani == "Yes"){$("#AgaKanic").prop("checked", true);}
                if(result.zakatevaluation == "Yes"){$("#ZakatEvaluationc").prop("checked", true);}
                if(result.executiverelationship == "Yes"){$("#ExecutiveRelationshipc").prop("checked", true);}
                if(result.referencename == "Yes"){$("#ReferenceNamec").prop("checked", true);}
                if(result.refferedby == "Yes"){$("#RefferedByc").prop("checked", true);}
                if(result.intension == "Yes"){$("#Intensionc").prop("checked", true);}
                if(result.experience == "Yes"){$("#Experiencec").prop("checked", true);} 
                if(result.training ==  "Yes"){$("#Trainingc").prop("checked", true);} 
                if(result.capability == "Yes"){$("#Capabilityc").prop("checked", true);} 
                if(result.otherremarks ==  "Yes"){$("#OtherRemarksc").prop("checked", true);} 
                if(result.employment ==  "Yes"){$("#employmentc").prop("checked", true);} 
                if(arrayrecord == 'yes'){
                    var data= '';
                    $("#AuthorityRemarks").html('');
                    for( i=0;i<IARemarks.length; i++){
                        data += '<tr><td>'+IARemarks[i]["username"]+'</td>'+
                        '<td>'+IARemarks[i]["remarks"]+'</td>'+
                        '<td>'+IARemarks[i]["date"]+'</td>'+
                        '<td>'+IARemarks[i]["action"]+'</td></tr>';
                    }
                    $("#AuthorityRemarks").html(data);
                }
                else {
                    $("#AuthorityRemarks").html('');
                    $("#AuthorityRemarks").html("No Remarks Found");
                }
                return data;
            }
        });
});
});
function submitRecord(){
    var caseid = $("#id1").val();
    var YourRemarks = $("#YourRemarks").val();
    var YourActions = $("#YourActions").val(); 
    if(YourRemarks == '' || YourRemarks == null){
        alert("Please Fill Remarks");
        $("#YourRemarks").focus();
    } else if(YourActions == '' || YourActions == null){
        alert("Please Select Your Actions");
        $("#YourActions").focus();
    }    else {
        $.ajax({
            url: "api/SubmitIA.php",
            method: "POST",
            data: {
                caseid: caseid,
                YourRemarks: YourRemarks,
                YourActions: YourActions
            },
            dataType: "JSON",
            beforeSend: function () {
               BtnLoadingTrue();
           },
           success: function (data) {
            BtnLoadingFalse();
            var result = data.result;
            if (result == "Success") {
                Swal.fire({
                    title: "Case " + YourActions + " Successfully.",
                    type: "success",
                    customClass: 'animated fadeIn',
                    timer: 4000
                }).then(function () {
                  $("#btncancel").trigger("click");
                            $("#datatable").DataTable().destroy();
                            tblcases();
                });
            } 
            else  {
                Swal.fire({
                    title: 'Error Occured',
                    type: "error",
                    customClass: 'animated fadeIn'
                }).then(function () {
                    window.location.href = 'IndividualAuthority.php';
                });
            }
            return data;
        }
    });
    }
}
function Updateremarks(value) {
    var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var caseid = $("#id1").val();
    var remarks = $("#PORemarks2").val();
    var poamount = $("#POAmount").val();
    var status = value;
    $("#remarks1").css("border-color", "");
    $("#10v").css("display", "");
    $("#foamount").css("border-color", "");
    $("#11v").css("display", "");
    if (remarks == "") {
        $("#10v1").css("display", "block");
        $("#10v1").text("Please Enter Some Remarks.");
        $("#remarks1").css("border-color", "red");
        $("#remarks1").focus();
    }
    else if (poamount == "") {
        $("#11v1").css("display", "block");
        $("#11v1").text("Please Enter Some Remarks.");
        $("#foamount").css("border-color", "red");
        $("#foamount").focus();
    }
    else {
        Swal.fire({
            title: "Are you sure?",
            text: "You want to " + status + " ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "api/PanelStatus.php",
                    method: "POST",
                    data: {
                        caseid: caseid,
                        remarks: remarks,
                        poamount: poamount,
                        status: status
                    },
                    dataType: "JSON",
                    success: function (data) {
                        var result = data.result;
                        if (result == "Success") {
                            Swal.fire({
                                title: "Application is " + status + " Successfully!",
                                type: "success",
                                timer: 4000,
                                showConfirmButton: true,
                            }).then(function () {
                                window.location.href = "Panel.php";
                            });
                        }
                        else {
                            Swal.fire({
                                title: "Opps! Some Error Occured!",
                                type: "error",
                                text: "Please login first",
                                timer: 4000,
                                showConfirmButton: true,
                            }).then(function () {
                                window.location.href = "index.php";
                            });
                        }
                        return data;
                    }
                });
            }
        })
    }
}
function switching(value) {
  
    $("#" + value + "-button").prop("disabled", false);
    if (value == "page0") {
        $("#page0").css("display", "inline");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
         $("#page8").css("display", "none");

    } else if (value == "page1") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "inline");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
         $("#page8").css("display", "none");

    }
    else if (value == "page2") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "inline");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
         $("#page8").css("display", "none");

    } else if (value == "page3") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "inline");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
         $("#page8").css("display", "none");

    } else if (value == "page4") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "inline");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
         $("#page8").css("display", "none");
      
    } else if (value == "page5") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "inline");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
         $("#page8").css("display", "none");
       
    } else if (value == "page6") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "inline");
        $("#page7").css("display", "none");
         $("#page8").css("display", "none");
        
    } else if (value == "page7") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "inline");
         $("#page8").css("display", "none");
       
    }  else if (value == "page8") {
        $("#page0").css("display", "none");
        $("#page1").css("display", "none");
        $("#page2").css("display", "none");
        $("#page3").css("display", "none");
        $("#page4").css("display", "none");
        $("#page5").css("display", "none");
        $("#page6").css("display", "none");
        $("#page7").css("display", "none");
        $("#page8").css("display", "inline");
       
    } 


}
function onloadss(){
    var caseid = $("#id1").val();
    var FOAmount = $("#FOAmount2").val();
    var FORemarks2 = $("#FORemarks2").val();
    var emailc = '';
    if($('#emailc').is(':checked') == true){emailc = 'Yes';}
    else {emailc = 'No';} 
    var fullnamec = '';
    if($('#fullnamec').is(':checked') == true){fullnamec = 'Yes';}
    else {fullnamec = 'No';}
    var fathersnamec = '';
    if($('#fathersnamec').is(':checked') == true){fathersnamec = 'Yes';}
    else {fathersnamec = 'No';}
    var employeec = '';
    if($('#employeec').is(':checked') == true){employeec = 'Yes';}
    else {employeec = 'No';}
    var contactc = '';
    if($('#contactc').is(':checked') == true){contactc = 'Yes';}
    else {contactc = 'No';}
    var cityc = '';
    if($('#cityc').is(':checked') == true){cityc = 'Yes';}
    else {cityc = 'No';}
    var NetSalaryc = '';
    if($('#NetSalaryc').is(':checked') == true){NetSalaryc = 'Yes';}
    else {NetSalaryc = 'No';}
    var cnicc = '';
    if($('#cnicc').is(':checked') == true){cnicc = 'Yes';}
    else {cnicc = 'No';}
    var Addressc = '';
    if($('#Addressc').is(':checked') == true){Addressc = 'Yes';}
    else {Addressc = 'No';}
    var casetypec = '';
    if($('#casetypec').is(':checked') == true){casetypec = 'Yes';}
    else {casetypec = 'No';}
    var natureofbusinessc = '';
    if($('#natureofbusinessc').is(':checked') == true){natureofbusinessc = 'Yes';}
    else {natureofbusinessc = 'No';}
    var otherbusinessc = '';
    if($('#otherbusinessc').is(':checked') == true){otherbusinessc = 'Yes';}
    else {otherbusinessc = 'No';}
    var casedescc = '';
    if($('#casedescc').is(':checked') == true){casedescc = 'Yes';}
    else {casedescc = 'No';}
    var NoofMalesc = '';
    if($('#NoofMalesc').is(':checked') == true){NoofMalesc = 'Yes';}
    else {NoofMalesc = 'No';}
    var NoofFemalesc = '';
    if($('#NoofFemalesc').is(':checked') == true){NoofFemalesc = 'Yes';}
    else {NoofFemalesc = 'No';}
    var NoofDependentsc = '';
    if($('#NoofDependentsc').is(':checked') == true){NoofDependentsc = 'Yes';}
    else {NoofDependentsc = 'No';}
    var NoofPersonEarningc = '';
    if($('#NoofPersonEarningc').is(':checked') == true){NoofPersonEarningc = 'Yes';}
    else {NoofPersonEarningc = 'No';}
    var FamilyIncomec = '';
    if($('#FamilyIncomec').is(':checked') == true){FamilyIncomec = 'Yes';}
    else {FamilyIncomec = 'No';}
    var MonthlyRationc = '';
    if($('#MonthlyRationc').is(':checked') == true){MonthlyRationc = 'Yes';}
    else {MonthlyRationc = 'No';}
    var MonthlyHealthCarec = '';
    if($('#MonthlyHealthCarec').is(':checked') == true){MonthlyHealthCarec = 'Yes';}
    else {MonthlyHealthCarec = 'No';}
    var MonthlyEducationc = '';
    if($('#MonthlyEducationc').is(':checked') == true){MonthlyEducationc = 'Yes';}
    else {MonthlyEducationc = 'No';}
    var OtherExpensesc = '';
    if($('#OtherExpensesc').is(':checked') == true){OtherExpensesc = 'Yes';}
    else {OtherExpensesc = 'No';}
    var TotalExpensesc = '';
    if($('#TotalExpensesc').is(':checked') == true){TotalExpensesc = 'Yes';}
    else {TotalExpensesc = 'No';}
    var MonthlySirplusdeficitc = '';
    if($('#MonthlySirplusdeficitc').is(':checked') == true){MonthlySirplusdeficitc = 'Yes';}
    else {MonthlySirplusdeficitc = 'No';}
    var CashBankc = '';
    if($('#CashBankc').is(':checked') == true){CashBankc = 'Yes';}
    else {CashBankc = 'No';}
    var GoldSilverc = '';
    if($('#GoldSilverc').is(':checked') == true){GoldSilverc = 'Yes';}
    else {GoldSilverc = 'No';}
    var ProvisionalFundc = '';
    if($('#ProvisionalFundc').is(':checked') == true){ProvisionalFundc = 'Yes';}
    else {ProvisionalFundc = 'No';}
    var PaidCommitteec = '';
    if($('#PaidCommitteec').is(':checked') == true){PaidCommitteec = 'Yes';}
    else {PaidCommitteec = 'No';}
    var SecurityDepositc = '';
    if($('#SecurityDepositc').is(':checked') == true){SecurityDepositc = 'Yes';}
    else {SecurityDepositc = 'No';}
    var LoanGivenc = '';
    if($('#LoanGivenc').is(':checked') == true){LoanGivenc = 'Yes';}
    else {LoanGivenc = 'No';}
    var OtherCurrencyc = '';
    if($('#OtherCurrencyc').is(':checked') == true){OtherCurrencyc = 'Yes';}
    else {OtherCurrencyc = 'No';}
    var TradeAssetsc = '';
    if($('#TradeAssetsc').is(':checked') == true){TradeAssetsc = 'Yes';}
    else {TradeAssetsc = 'No';}
    var UnnecessaryFlatsc = '';
    if($('#UnnecessaryFlatsc').is(':checked') == true){UnnecessaryFlatsc = 'Yes';}
    else {UnnecessaryFlatsc = 'No';}
    var ExtraMobilePhonesc = '';
    if($('#ExtraMobilePhonesc').is(':checked') == true){ExtraMobilePhonesc = 'Yes';}
    else {ExtraMobilePhonesc = 'No';}
    var ExtraVehiclesc = '';
    if($('#ExtraVehiclesc').is(':checked') == true){ExtraVehiclesc = 'Yes';}
    else {ExtraVehiclesc = 'No';}
    var ExtraLivestocksc = '';
    if($('#ExtraLivestocksc').is(':checked') == true){ExtraLivestocksc = 'Yes';}
    else {ExtraLivestocksc = 'No';}
    var TotalCountableAssetsc = '';
    if($('#TotalCountableAssetsc').is(':checked') == true){TotalCountableAssetsc = 'Yes';}
    else {TotalCountableAssetsc = 'No';}
    var RentPayablec = '';
    if($('#RentPayablec').is(':checked') == true){RentPayablec = 'Yes';}
    else {RentPayablec = 'No';}
    var SecurityDepositPayablec = '';
    if($('#SecurityDepositPayablec').is(':checked') == true){SecurityDepositPayablec = 'Yes';}
    else {SecurityDepositPayablec = 'No';}
    var PayableAmountCommitteec = '';
    if($('#PayableAmountCommitteec').is(':checked') == true){PayableAmountCommitteec = 'Yes';}
    else {PayableAmountCommitteec = 'No';}
    var UtilityBillsPayablec = '';
    if($('#UtilityBillsPayablec').is(':checked') == true){UtilityBillsPayablec = 'Yes';}
    else {UtilityBillsPayablec = 'No';}
    var LoanPayablec = '';
    if($('#LoanPayablec').is(':checked') == true){LoanPayablec = 'Yes';}
    else {LoanPayablec = 'No';}
    var TotalDeductableLiabilitiesc = '';
    if($('#TotalDeductableLiabilitiesc').is(':checked') == true){TotalDeductableLiabilitiesc = 'Yes';}
    else {TotalDeductableLiabilitiesc = 'No';}
    var TotalCountableAssets2c = '';
    if($('#TotalCountableAssets2c').is(':checked') == true){TotalCountableAssets2c = 'Yes';}
    else {TotalCountableAssets2c = 'No';}
    var TotalDeductableLiabiliitiesc = '';
    if($('#TotalDeductableLiabiliitiesc').is(':checked') == true){TotalDeductableLiabiliitiesc = 'Yes';}
    else {TotalDeductableLiabiliitiesc = 'No';}
    var NetCoutableAssetsc = '';
    if($('#NetCoutableAssetsc').is(':checked') == true){NetCoutableAssetsc = 'Yes';}
    else {NetCoutableAssetsc = 'No';}
    var CurrentZakatEvaluationc = '';
    if($('#CurrentZakatEvaluationc').is(':checked') == true){CurrentZakatEvaluationc = 'Yes';}
    else {CurrentZakatEvaluationc = 'No';}
    var Muslimc = '';
    if($('#Muslimc').is(':checked') == true){Muslimc = 'Yes';}
    else {Muslimc = 'No';}
    var Syedc = '';
    if($('#Syedc').is(':checked') == true){Syedc = 'Yes';}
    else {Syedc = 'No';}
    var AgaKanic = '';
    if($('#AgaKanic').is(':checked') == true){AgaKanic = 'Yes';}
    else {AgaKanic = 'No';}
    var ZakatEvaluationc = '';
    if($('#ZakatEvaluationc').is(':checked') == true){ZakatEvaluationc = 'Yes';}
    else {ZakatEvaluationc = 'No';}
    var ExecutiveRelationshipc = '';
    if($('#ExecutiveRelationshipc').is(':checked') == true){ExecutiveRelationshipc = 'Yes';}
    else {ExecutiveRelationshipc = 'No';}
    var ReferenceNamec = '';
    if($('#ReferenceNamec').is(':checked') == true){ReferenceNamec = 'Yes';}
    else {ReferenceNamec = 'No';}
    var RefferedByc = '';
    if($('#RefferedByc').is(':checked') == true){RefferedByc = 'Yes';}
    else {RefferedByc = 'No';}
    var Intensionc = '';
    if($('#Intensionc').is(':checked') == true){Intensionc = 'Yes';}
    else {Intensionc = 'No';}
    var Experiencec = '';
    if($('#Experiencec').is(':checked') == true){Experiencec = 'Yes';}
    else {Experiencec = 'No';}
    var Capabilityc = '';
    if($('#Capabilityc').is(':checked') == true){Capabilityc = 'Yes';}
    else {Capabilityc = 'No';}
    var Trainingc = '';
    if($('#Trainingc').is(':checked') == true){Trainingc = 'Yes';}
    else {Trainingc = 'No';}
    var OtherRemarksc = '';
    if($('#OtherRemarksc').is(':checked') == true){OtherRemarksc = 'Yes';}
    else {OtherRemarksc = 'No';}
    var employmentc = '';
    if($('#employmentc').is(':checked') == true){employmentc = 'Yes';}
    else {employmentc = 'No';}
    $.ajax({
        url: "api/FOChecking.php",
        method: "POST",
        data: {
          caseid:caseid,
          employmentc:employmentc,
          emailc:emailc,
          fullnamec:fullnamec,
          fathersnamec:fathersnamec,
          employeec:employeec,
          contactc:contactc,
          cityc:cityc,
          NetSalaryc:NetSalaryc,
          cnicc:cnicc,
          Addressc:Addressc,
          casetypec:casetypec,
          natureofbusinessc:natureofbusinessc,
          otherbusinessc:otherbusinessc,
          casedescc:casedescc,
          NoofMalesc:NoofMalesc,
          NoofFemalesc:NoofFemalesc,
          NoofDependentsc:NoofDependentsc,
          NoofPersonEarningc:NoofPersonEarningc,
          FamilyIncomec:FamilyIncomec,
          MonthlyRationc:MonthlyRationc,
          MonthlyHealthCarec:MonthlyHealthCarec,
          MonthlyEducationc:MonthlyEducationc,
          OtherExpensesc:OtherExpensesc,
          TotalExpensesc:TotalExpensesc,
          MonthlySirplusdeficitc:MonthlySirplusdeficitc,
          CashBankc:CashBankc,
          GoldSilverc:GoldSilverc,
          ProvisionalFundc:ProvisionalFundc,
          PaidCommitteec:PaidCommitteec,
          SecurityDepositc:SecurityDepositc,
          LoanGivenc:LoanGivenc,
          OtherCurrencyc:OtherCurrencyc,
          TradeAssetsc:TradeAssetsc,
          UnnecessaryFlatsc:UnnecessaryFlatsc,
          ExtraMobilePhonesc:ExtraMobilePhonesc,
          ExtraVehiclesc:ExtraVehiclesc,
          ExtraLivestocksc:ExtraLivestocksc,
          TotalCountableAssetsc:TotalCountableAssetsc,
          RentPayablec:RentPayablec,
          SecurityDepositPayablec:SecurityDepositPayablec,
          PayableAmountCommitteec:PayableAmountCommitteec,
          UtilityBillsPayablec:UtilityBillsPayablec,
          LoanPayablec:LoanPayablec,
          TotalDeductableLiabilitiesc:TotalDeductableLiabilitiesc,
          TotalCountableAssets2c:TotalCountableAssets2c,
          TotalDeductableLiabiliitiesc:TotalDeductableLiabiliitiesc,
          NetCoutableAssetsc:NetCoutableAssetsc,
          CurrentZakatEvaluationc:CurrentZakatEvaluationc,
          Muslimc:Muslimc,
          Syedc:Syedc,
          AgaKanic:AgaKanic,
          ZakatEvaluationc:ZakatEvaluationc,
          ExecutiveRelationshipc:ExecutiveRelationshipc,
          ReferenceNamec:ReferenceNamec,
          RefferedByc:RefferedByc,
          Intensionc:Intensionc,
          Experiencec:Experiencec,
          Capabilityc:Capabilityc,
          Trainingc:Trainingc,
          OtherRemarksc:OtherRemarksc,
          FOAmount:FOAmount,
          FORemarks2:FORemarks2
      },
      dataType: "JSON",
      success: function (data) {
        var result = data.result;
        if (result == "Inserted") {
            Swal.fire({
                title: "Action Performed Successfully",
                type: "success",
                timer: 6000,
                showConfirmButton: true,
            })
            $("#btncancel").trigger("click");
            $("#datatable").DataTable().destroy();
            tblcases();
        }
        else {
            Swal.fire({
                title: "Opps! Some Error Occured!",
                type: "error",
                text: "Please login first",
                timer: 4000,
                showConfirmButton: true,
            })
            $("#btncancel").trigger("click");
            $("#datatable").DataTable().destroy();
            tblcases();
        }
        return data;
    }
});
}
