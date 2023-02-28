 
 $(document).ready(function () {

    gettingdata();
 });

function gettingdata() {

 var check = 1;
        $.ajax({
            url: "api/Home.php",

            method: "POST",
            data: {
                check: check
            },

            dataType: "JSON",
           
            success: function (data) {
       
                var newCases = data.newCases;
                $('#newCases').html(newCases);

                var ApprovedCases = data.ApprovedCases;
                $('#ApprovedCases').html(ApprovedCases);

                var SubmittedCases = data.SubmittedCases;
                $('#SubmittedCases').html(SubmittedCases);

                var ClosedCases = data.ClosedCases;
                $('#ClosedCases').html(ClosedCases);

                var totalCases = data.totalCases;
                $('#totalCases').html(totalCases);

                  var AssignedCases = data.AssignedCases;
                $('#AssignedCases').html(AssignedCases);

                     var RejectedCases = data.RejectedCases;
                $('#RejectedCases').html(RejectedCases);

                




                

                
                  
              
                return data;

            }
        });
  



}


