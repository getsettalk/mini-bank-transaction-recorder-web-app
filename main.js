 $(function(){
    $("#openModal1").click(function(){
      $("#myModal1").modal('show');
    });
    //univarsal class for close modal
const closemodal =$(".hidemodal");
closemodal.click(function(){
  $(".modal").modal('hide');
});
    
    /*load all added records for new data saving time*/
    function loadAll(){
      $.ajax({
        url:"php/load-all-data.php",
        type:"post",
        success:function(data){
         // console.log(data);
         $("#recData").html(data);
        }
      });
    }

    loadAll(); // calling for load data
    // this fullData table will show in search Tab 
    function fullData(pages){
      $.ajax({
        url:"php/load-full-data.php",
        type:"post",
        data:{pno:pages},
        success:function(data){
         // console.log(data);
         $("#AllData").html(data);
        }
      });
    }

    fullData(); // calling for load data
    
    // Create Pagination action 
    $(document).on("click",".pagination .page-item a",function(e){
      e.preventDefault();
      var thispageid = $(this).attr('id');
      fullData(thispageid);
    });
    
    // toaster function
    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
    
    // code for hide and show after Withdraw option
    $("input:radio[name=txntype]").bind('change', function(){
      navigator.vibrate(400); // vibrate for 200ms
   if($("input:radio[name=txntype]:checked").val() ==1){
     $(".relative-filed").addClass("d-none");
   }else {
      $(".relative-filed").removeClass("d-none");
   }
  }); 
  
  /*now code for auto select amount on the basis of option */
  $("#Payingterm").change(function(){
      // tamt mean total amount variable 
      
      var pterm = $("#Payingterm").val();
      var tamt = $("#totalamt").val();
      var paidamt = $("#amtofpay").val();
      if(pterm == 1){
        $("#amtofpay").val(tamt);
      }else if(pterm ==2) {
        $("#amtofpay").val(tamt*50/100);
      }else {
        $("#amtofpay").val("");
      }
  });
  
   /*code for submit form data */
  $("#addData").click(function(e){
   e.preventDefault();
 //  alert("ggw");
 if($("#Customer").val() ==" " || $("#Customer").val() =="" ){
 toastr["warning"]("Please Enter Customer Name ?");
 }else {
  if($("#cid").val() =="" || $("#cid").val() == "0" ){
    toastr["warning"]("Please Enter Customer Identification Number ?");
  }else {
    
    if($("#totalamt").val() =="" || $("#totalamt").val() == "0" ){
    toastr["warning"]("Entet Valid Total Amount ?");
    }else {
      
      // check both radio button who is enable
      if($("input:radio[name=txntype]:checked").val() ==2){
        // if checked withdraw radio than validate relative field
        if($("#Payingterm").val() == "none") {
          navigator.vibrate(200); // vibrate for 200ms
          toastr["warning"]("Select Paying Term option, mean how many amount you are paying to customer ?");
        }else {
          // now check filed of paying amount is empty or not
          if($("#amtofpay").val() =="" || $("#amtofpay").val() =="0" ) {
            navigator.vibrate(200); // vibrate for 200ms
            toastr["warning"]("Please Enter Amount of Paid and enter valid amount ?");
          }else {
            // now confirm
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, submit it!'
}).then((result) => {
  if (result.isConfirmed) {
    $("#divLoading").addClass('show');
    $.ajax({
      url:"php/save-data.php",
      type:"post",
      data:$("#recordForm").serialize(),
      success:function(data){
        $("#divLoading").removeClass('show');
        loadAll(); // calling for load data
        fullData();
        //console.log(data);
        if(data == 222) {
          $("#recordForm").trigger('reset');
          $(".modal").modal('hide');
          toastr["success"]("New Records has been added successfully done !!");
          Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
        }else if(data == 333){
          toastr["error"]("Failed to save new records ?");
        }else {
          navigator.vibrate(500);
          toastr["error"](data);
        }
      }
    });
  }
});
          }
        }
        
      }else {
  //      console.log($("#recordForm").serialize());
        // again code for submit data of deposite
           Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, save it!'
}).then((result) => {
  if (result.isConfirmed) {
    $("#divLoading").addClass('show');
    $.ajax({
      url:"php/save-data.php",
      type:"post",
      data:$("#recordForm").serialize(),
      success:function(data){
        $("#divLoading").removeClass('show');
        loadAll(); // calling for load data 
        fullData();
       // console.log(data);
               if(data == 222) {
                 $("#recordForm").trigger('reset');
          $(".modal").modal('hide');
          toastr["success"]("New Records has been added successfully done !!");
          Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
        }else if(data == 333){
          toastr["error"]("Failed to save new records ?");
        }else {
          navigator.vibrate(500);
          toastr["error"](data);
        }
      }
    });
  }
});
      }
      
      
    }
  }
 }
  });
  
  // check id number is decimal or not
  $('#cid').bind('keypress', function(event) {
        var currValue = $("#cid").val();
        if(currValue.search(/[^0-9]/gi) != -1)
        {
       $("#cid").css("background","#f76161");
       toastr["error"]("Don't Enter Point Value / Decimal Value ?")
        }else {
          $("#cid").css("background","white");
        }

        $(this).val(currValue.replace(/[^0-9]/gi, ''));
    });

/*--------- now code for search btn ----------*/

$("#searchbtn").click(function(){
  if ($("#searchid").val() =="" || $("#searchid").val() ==" ") {
    window.navigator.vibrate("523");
    toastr["info"]("Please Enter Customer Identification Number for Search Data ?");
  }else {
    $("#divLoading").addClass('show');
    $.ajax({
      url:"php/find-data.php",
      type:"post",
      data:{num:$("#searchid").val()},
      success:function(data){
        $("#searchid").val("");
        $("#divLoading").removeClass('show');
        window.navigator.vibrate("533");
        //console.log(data);
       $("#SearchedData").html(data);
      }
    });
  }
});

// now code for edit txn
$(document).on("click",".etxn",function(){
  var thisid = $(this).data('id');
  $("#divLoading").addClass('show');
  $.ajax({
    url:"php/fetch-edit-data.php",
    type:"post",
    data:{txnid:thisid},
    success:function(data){
      $("#divLoading").removeClass('show');
      $("#myModal2").modal('show');
      $("#editForm").html(data);
    }
  });

  
});

// code for delete txn data
$(document).on("click",".dtxn",function(){
  var thisid = $(this).data('id');
  var elem = this;
 // alert(thisid+"Work in Progress");
 Swal.fire({
  title: 'Really?',
  text: "you want to delete this record !",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#6d2adf',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $("#divLoading").addClass('show');
    $.ajax({
      url:"php/delete-this-rec.php",
      type:"post",
      data:{rid:thisid},
      success:function(data){
        loadAll();
        fullData();
        $("#divLoading").removeClass('show');
        toastr["success"](data);
        $(elem).closest("tr").fadeOut();
      }
    });
  }
})
})

$(document).on("click","#updateData",function(){
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this changes.",
  icon: 'info',
  showCancelButton: true,
  confirmButtonColor: '#6ed630',
  cancelButtonColor: '#fa1f1f',
  confirmButtonText: 'update it!'
}).then((result) => {
  if (result.isConfirmed) {
    $("#divLoading").addClass('show');
    $.ajax({
      url:"php/update-edit-data.php",
      type:"post",
      data:$("#updateForm").serialize(),
      success:function(data){
        $("#divLoading").removeClass('show');
        if(data == "success"){
           $(".modal").modal('hide');
          Swal.fire(
        'Your update has been saved.'
      );
      // reload 
      fullData();
          toastr["success"]("Data Updated Done ✓✓");
        }else if(data == "failed"){
          toastr["error"]("Failed to update data , something wrong !!");
        }else if(data == "wrong"){
          toastr["error"]("Wrong !! Paid Amount must be equal and less than to total amount.");
        }else {
          toastr["error"](data);
        }
      }
    });
  }
});
});

// fetch every time data
// for Withdraw total amount
function shortDataWithdraw(){
  $.ajax({
    url:"php/data-function1.php",
    type:"post",
    data:{dataFetch:"yes"},
    success:function(data){
      $("#totalWithdraw").html(data); 
      
    }
  });
}
shortDataWithdraw();
// for deposit total amount
function shortDataDeposit(){
  $.ajax({
    url:"php/data-function2.php",
    type:"post",
    data:{dataFetch:"yes"},
    success:function(data){
      
      $("#totalDeposit").html(data); 
    }
  });
}
shortDataDeposit();
// for total payable amount
function shortDataPayable(){
  $.ajax({
    url:"php/data-function3.php",
    type:"post",
    data:{dataFetch:"yes"},
    success:function(data){
      $("#totalPayable").html(data); 
      
    }
  });
}
shortDataPayable();
// for fetch high txn date
function shortDataHighTxnDate(){
  $.ajax({
    url:"php/data-function4.php",
    type:"post",
    data:{dataFetch:"yes"},
    success:function(data){
      $("#hightxnDate").html(data); 
      
    }
  });
}
shortDataHighTxnDate();
// for get low txn in which day
function shortDataLowTxnDate(){
  $.ajax({
    url:"php/data-function5.php",
    type:"post",
    data:{dataFetch:"yes"},
    success:function(data){
      $("#lowtxnDate").html(data); 
      
    }
  });
}
shortDataLowTxnDate();
// total txn amount
function shortDataTotalTxn(){
  $.ajax({
    url:"php/data-function6.php",
    type:"post",
    data:{dataFetch:"yes"},
    success:function(data){
      $("#totalTxn").html(data); 
      
    }
  });
}
shortDataTotalTxn();

 

// interval for all short function to get in data in 10 sec
setInterval(shortDataWithdraw, 8000);
setInterval(shortDataDeposit, 10000);
setInterval(shortDataPayable, 12000);
setInterval(shortDataTotalTxn, 9000);
// end of jquery 
  });