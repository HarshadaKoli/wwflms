
   
@extends("partials.layout")

@section("content")


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Detail
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/empall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employees</li>
      </ol>
    </section>

    <!-- Main content -->

<!--    <div class="content-wrapper">
<section class="content-header"> -->


<section class="content">
<div class="emp-personal-info-view">
<div class="nav-tabs-custom">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true" id="tb1"><h5>Basic Details</h5></a></li>
<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false" id="tb2"><h5>Bank Details</h5></a></li>
<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"  id="tb3"><h5>Job Details</h5></a></li>
<li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false"  id="tb4"><h5>Profile</h5></a></li>
</ul>
<div class="tab-content" style="height: 535px;">
<div class="tab-pane active" id="tab_1">

<div class="box-body">
          
 <form class="form-horizontal" action="{{ URL::to('/registeremp')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
 {{ csrf_field() }}



<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>First Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="fname" placeholder="First Name">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Last Name</label><r style="color: red">*</r>
 <input type="text" class="form-control" name="lname" placeholder="Last Name">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Email</label><r style="color: red">*</r>
<input type="text" class="form-control" name="email" placeholder="Enter email">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Address</label><r style="color: red">*</r>
<input type="text" class="form-control" name="address" placeholder="Address">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px">
<label class="control-label">Gender</label><r style="color: red">*</r>
<select name="gender" class="form-control">
<option value="select1">--Please select--</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>    

<div class="form-group col-lg-3" style="margin-left: 11px">
<label>DOB</label><r style="color: red">*</r>
<input type='text' class="form-control" id="datepicker" name='dob' placeholder="dd/mm/yyyy"><br>
</div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Mobile</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="mobileno" placeholder="Mobile Number">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Education</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="education" placeholder="Education">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Blood Group:</label>
<select class="form-control bloodgroup" name="bloodgrp">
  <option value="Choose here">--Please Select--</option>
  <option value="Male">A+</option>
  <option value="Female">A-</option>
  <option value="Male">B+</option>
  <option value="Female">B-</option>
  <option value="Male">AB+</option>
  <option value="Female">o+</option>
  <option value="Female">o-</option>
</select>
</div><br>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Emergency person name</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="emp_per_name" placeholder="Emergency person name">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Emergency person mobile no.</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="emp_per_mob" placeholder="Emergency person mobile no.">
<br></div>

<div class="form-group col-lg-3" style="margin-left: 11px">
<label class="control-label">Status</label><r style="color: red">*</r>
<select name="status" class="form-control">
<option value="select1">--Please select--</option>
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</div>   

<!-- <div class="form-group col-lg-3" style="margin-left: 11px;">
  <label>Roles</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="roles" placeholder="Roles">
<br></div>
 -->
 <div class="row col-lg-12">
<div class="form-group col-lg-6" >
<a href="/empall" style="float: right;"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>

<div class="form-group col-lg-6" style="padding-left: 50px">
<input class="btn btn-success " onclick="document.getElementById('tb2').click()"  name='Next' value="Next">
</div>
</div>

</div>
</div>
<!-- /.tab-pane -->
<div class="tab-pane " id="tab_2">
<div class="box-body">
     

<div class="form-group col-lg-3">
 <label>Account Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="acc_name" placeholder="Bank">
<br></div>

<div class="form-group col-lg-3">
<label>Account No.</label><r style="color: red">*</r>
<input type="text" class="form-control" name="acc_no" placeholder="Account No.">
<br></div>

<div class="form-group col-lg-3">
<label>Bank Name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="bank_name" placeholder="Bank Name">
<br></div>

<div class="form-group col-lg-3">
<label>Branch</label><r style="color: red">*</r>
<input type="text" class="form-control" name="branch" placeholder="Branch">
<br></div>

<div class="form-group col-lg-3">
 <label>IFSC Code</label><r style="color: red">*</r>
<input type="text" class="form-control" name="ifsc_code" placeholder="IFSC Code">
<br></div><br>

<div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/empall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>
<div class="form-group col-lg-3" style="padding-top: 18px">
<input class="btn btn-success" onclick="document.getElementById('tb3').click()" name='Next' value="Next">
<br>
</div>

 </div>
</div>


<!-- /.tab-pane -->
<div class="tab-pane " id="tab_3">
<div class="box-body">           

<div class="form-group col-lg-3">
<label>Join Date</label><r style="color: red">*</r>
<input type='text' class="form-control" id="datepicker2" name='join_date' placeholder="dd/mm/yyyy"><br>
</div>

<div class="form-group col-lg-3">
<label>Pan No.</label>
<input type="text" class="form-control" name="pan_no" placeholder="Pan No.">
<br></div>

<div class="form-group col-lg-3">
<label>Adhar No.</label>
<input type="text" class="form-control" name="adhar_no" placeholder="Adhar No.">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Adhar</label>
<input type="file" class="form-control" name="upload_adhar" placeholder="Upload Adhar">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Pan</label>
<input type="file" class="form-control" name="upload_pan" placeholder="Upload Pan">
<br></div>

<div class="form-group col-lg-3">
<label>Upload Resume</label>
<input type="file" class="form-control" name="upload_resume" placeholder="Upload Resume">
<br></div>

<div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/empall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>
<div class="form-group col-lg-3" style="padding-top: 18px">
<input class="btn btn-success" onclick="document.getElementById('tb4').click()" name='Next' value="Next">
<br>
</div>

</div>
</div>

<!-- /.tab-pane -->
<div class="tab-pane " id="tab_4">
<div class="box-body">

<div class="form-group col-lg-3" style="margin-left: 11px">
<label class="control-label">Designation</label><r style="color: red">*</r>
<select name="Designation" class="form-control">
<option value="select1">--Please select--</option>
<option value="calling">Calling</option>
<option value="sales service">Sales Service</option>
<option value="accounting">Accounting</option>

</select>
</div>  
  

<div class=" col-lg-3" style="padding-left: 26px;">
<input type='submit' class="btn btn-success " name='submit' value="Create">
</div>

</form>
</div>
</div>

</div>
</div>
</div>
</section>


</div>
</body>
</html>



    <!-- In your Javascript (external .js resource or <script> tag) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    function check(){
        document.getElementById('tb2').click();
    }
    </script>
<!-- <script>
  $('.select2').select2();
</script> -->
 <script >
   
    $('.bloodgroup').select2();
 </script>
 
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
   $('#datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
    });

</script>

<script type="text/javascript">
   $('#datepicker2').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
    });

</script>

@endsection
