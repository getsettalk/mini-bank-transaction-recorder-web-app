<?php
require("php/conn.php");
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="
https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" type="text/css" media="all" />
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
  </head>
  <body>
    <div id="divLoading" ></div>
  <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="search-tab" data-bs-toggle="tab" data-bs-target="#search" type="button" role="tab" aria-controls="search" aria-selected="false">Search</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Payment" type="button" role="tab" aria-controls="contact" aria-selected="false">Payment</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  
  <!--code for Home Tab-->
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <!--code start for home tab-->
  
     <div class="container-fluid mt-2">
       <div class="short-meter">
         <div class="row gy-3">
           <div class="col-sm-12 col-12 col-md-6 col-lg-3 col-xl-3">
             <div class="card">
               <div class="card-body bg-c-green">
                 <h3>Total Transaction:</h3>
                 <span>₹<span id="totalTxn"></span></span>
               </div>
             </div>
           </div>
           <div class="col-sm-12 col-12 col-md-6 col-lg-3 col-xl-3">
             <div class="card">
               <div class="card-body bg-c-12">
                 <h3>Total Withdraw:</h3>
                 <span>₹<span id="totalWithdraw">0</span></span>
               </div>
             </div>
           </div>
           <div class="col-sm-12 col-12 col-md-6 col-lg-3 col-xl-3">
             <div class="card">
               <div class="card-body bg-c-13">
                 <h3>Total Deposit:</h3>
                 <span>₹<span id="totalDeposit">0</span></span>
               </div>
             </div>
           </div>
           <div class="col-sm-12 col-12 col-md-6 col-lg-3 col-xl-3">
             <div class="card">
               <div class="card-body bg-c-14">
                 <h3>Total Payable:</h3>
                 <span>₹<span id="totalPayable">0</span></span>
               </div>
             </div>
           </div>
           <div class="col-sm-12 col-12 col-md-6 col-lg-3 col-xl-3">
             <div class="card">
               <div class="card-body bg-c-15">
                 <h3>High Txn. Date:</h3>
                 <span id="hightxnDate">xx/xx/xxx</span>
               </div>
             </div>
           </div>
           <div class="col-sm-12 col-12 col-md-6 col-lg-3 col-xl-3">
             <div class="card">
               <div class="card-body bg-c-green">
                 <h3>low Txn. Date:</h3>
                 <span id="lowtxnDate">xx/xx/xxxx</span>
               </div>
             </div>
           </div>

         </div>
       </div>
       
       <div class="text-center mt-3">
         <a class="text-decoration-none fw-bold btn btn-danger" href="logout.php">Logout now</a>
       </div>
     </div>
    <!--end code for home tab -->
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="container">
    <div class="container">
      <div class="alert alert-success text-center mt-5">
        This Section is under Construction !!!
      </div>
    </div>
  </div>
  
  </div>
  
   <!--Search tab start-->
  <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
    <!--now adding searching option-->
    <div class="container">
      <div class="card mt-1">
        <div class="card-header bg-c-blue text-center p-2 text-light fw-bold">
          Search Transaction 
        </div>
        <div class="card-body bg-c-some">
          <div class="row">
            <div class="col-12 col-lg-6 col-md-6">
              <label for="searchid">Aadhar/Account Number: </label>
              <input type="number" name="searchid" id="searchid" class="form-control" placeholder="Type Customer ID Number" />
            </div>
            <div class="col-12 col-lg-6 col-md-6 p-4">
           <div class="text-center">
             <button class="btn btn-info" id="searchbtn" type="button">Search</button>
           </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--now code for show table data all -->
    <div class="container-fluid">
      <!--display Searched data-->
      <div id="SearchedData" class="mb-2">
      </div>
      
      <!--from here stard all Records table-->
      <div class="text-center mt-2">
        <div class="text-danger fw-bold ">
          Here All Records :
        </div>
      </div>
      <div id="AllData">
      </div>
    </div>
    
    <!--modal for this search edit-->
    <div class="modal fade" id="myModal2"  role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document"> 
    <div class="modal-content">
      <div class="modal-header bg-c-green">
        <h5 class="modal-title" id="myModal2">Edit Record: </h5>
        <button type="button" class="d-btn hidemodal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-c-some">
      <div id="editForm">
        <!--load form here -->
      </div>
      </div>
      
    </div> 
  </div>
</div>
<!--modal end -->
  </div>
  <!--end of search tab-->
  
  
   <!--start Payment tab -->
  <div class="tab-pane fade" id="Payment" role="tabpanel" aria-labelledby="payment-tab">
    <div class="container-fluid">
      
      <section >
      <div class="container-fluid mt-4 mb-2">
        <div class="float-right ">
          <button id="openModal1" class="btn  bg-c-green" type="button"><span class="iconify" data-icon="fluent:clipboard-task-add-20-filled" data-width="20" data-height="20"></span> New </button>
        </div>
      </div>
      <br >
    </section>
    
    <!--show table data-->
    <div class="container-fluid">
      <div id="recData"></div>
    </div>
    
    
    <!--table end of added data -->
    <div class="modal fade" id="myModal1"  role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document"> 
    <div class="modal-content">
      <div class="modal-header bg-c-green">
        <h5 class="modal-title" id="myModal">Add  Record: </h5>
        <button type="button" class="d-btn hidemodal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-c-some">
        <form id="recordForm" class="form-group ">
          <div class="mb-3">
            <label for="Customer">Customer Name:</label>
            <input type="text" name="Customer" id="Customer" placeholder="Customer name" class="form-control"/>
          </div>
          <div class="mb-3">
            <label for="Customer">Aadhar/Account No.:</label>
            <input type="number" name="cid" id="cid" placeholder="Aadhar/Account number" class="form-control" />
          </div>
        <div class="d-flex justify-content-center">
            <div class="form-check me-5 bg-c-green-round">
  <input class="form-check-input " type="radio" name="txntype" id="deposit" value="1">
  <label class="form-check-label" for="deposit">
    Deposit 
  </label>
</div>
<div class="form-check bg-c-yellow-round">
  <input class="form-check-input" type="radio" name="txntype" id="withdraw" value="2" checked>
  <label class="form-check-label" for="withdraw">
    Withdraw
  </label>
</div>
          </div>
          
          <div class="mb-3 mt-3">
            <label for="totalamt">Total Amount:</label>
            <input type="number" name="totalamt" id="totalamt" placeholder="Enter Total Value of Amount" class="form-control" />
          </div>
          
          <!--relative-filed is hidden -->
          <div class="relative-filed">
             <div class="mb-3 mt-3">
            <label for="Payingterm">Paying term:</label>
            <select name="Paying" id="Payingterm" class="form-control">
              <option value="none">Please Select </option>
              <option value="1">Full Amount</option>
              <option value="2">Half Amount</option>
              <option value="3">Few Amount</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label for="amtofpay">Paying Amount:</label>
            <input type="number" name="amtofpay" id="amtofpay" placeholder="How Many Paid" class="form-control" />
          </div>
          </div>
         
        </form>
          
        
      </div>
      <div class="modal-footer bg-c-green">
        <button type="button" class="btn btn-secondary hidemodal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addData">Add Record</button>
      </div>
    </div> 
  </div>
</div>
    </div>
    
  </div>
  <!--Payment tab body end-->
  
</div>
  
    
    <!--here is all js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<script src="main.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>