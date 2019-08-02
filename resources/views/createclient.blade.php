
   
@extends("partials.layout")

@section("content")


   <link rel=”stylesheet” href=”https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css”>

<link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel=”stylesheet”>
 


<!-- datepicker -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Client Detail
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/clientall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Clients</li>
      </ol>
    </section>

    <!-- Main content -->

<!--    <div class="content-wrapper">
<section class="content-header"> -->


<section class="content" style="overflow-x: scroll;">
<div class="emp-personal-info-view">
<div class="nav-tabs-custom">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true" id="tb1"><h5>Basic Details</h5></a></li>
<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false" id="tb2"><h5>Rating</h5></a></li>

</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_1">

<div class="box-body">
          
 <form class="form-horizontal" action="{{ URL::to('/registerclient')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
 {{ csrf_field() }}



<div class="form-group " style="margin-left: 11px;">
<label>Company name</label><r style="color: red">*</r>
<input type="text" class="form-control" name="cname" placeholder="Cname" style="width: 300px;">
<br></div>

<div class="form-group " style="margin-left: 11px;">
<label>Address</label><r style="color: red">*</r>
 <input type="text" class="form-control" name="address" placeholder="Address" style="width: 300px;">
<br></div>

<div class="form-group" style="margin-left: 11px;">
<label>Constitution</label><r style="color: red">*</r>
<input type="text" class="form-control" name="constitution" placeholder="Constitution" style="width: 300px;">
<br></div>

<div class="form-group " style="margin-left: 11px;">
<label>City</label><r style="color: red">*</r>
<input type="text" class="form-control" name="city" placeholder="City" style="width: 300px;">
<br></div>

<div class="form-group " style="margin-left: 11px;">
<label>Contperson</label><r style="color: red">*</r>
<input type="text" class="form-control" name="contperson" placeholder="Contperson" style="width: 300px;">
<br></div>

<div class="form-group" style="margin-left: 11px;">
<label>Email</label><r style="color: red">*</r>
<input type="text" class="form-control" name="email" placeholder="Email" style="width: 300px;">
<br></div>

<div class="form-group" style="margin-left: 11px;">
  <label>Active Status:</label><r style="color: red;font-size: 20px">*</r>
<input type="text" class="form-control" name="il" placeholder="status" disabled style="width: 300px;">
<br></div>

<!-- <div class="form-group col-lg-3" style="padding-top: 18px">
<a href="/clientall"><input class="btn btn-info" name='cancel' value="Cancel"></a>
</div>

<div class="form-group col-lg-3" style="padding-top: 18px">
<input class="btn btn-success " onclick="document.getElementById('tb2').click()"  name='Next' value="Next">
</div> -->

</div>
</div>
<!-- /.tab-pane -->
<div class="tab-pane " id="tab_2">
<div class="box-body">
     

<div class="form-group">
<label>Industrytype</label>
<input type="text" class="form-control" name="industrytype" placeholder="Industrytype" style="width: 300px;">
<br></div>

<div class="form-group">
<label>Purpose</label>
<input type="text" class="form-control" name="purpose" placeholder="Purpose" style="width: 300px;">
<br></div>

<div class="form-group">
<label>Status</label>
<input type="text" class="form-control" name="status" placeholder="Status" style="width: 300px;">
<br></div>


<div class="form-group">
 <label>Bank</label><r style="color: red">*</r>
<input type="text" class="form-control" name="bank" placeholder="Bank" style="width: 300px;">
<br></div>

<div class="form-group">
<label>Total exposure(Bank Limit)</label><r style="color: red">*</r>
<input type="text" class="form-control" name="texposure" placeholder="Texposure" style="width: 300px;">
<br></div>

<div class="form-group">
<label>Rated Exposure</label><r style="color: red">*</r>
<input type="text" class="form-control" name="Ratedexpo" placeholder="Ratedexpo" style="width: 300px;">
<br></div>

<div class="form-group">
<label>Rating History</label><r style="color: red">*</r>
<input type="text" class="form-control" name="ratinghist" placeholder="Ratinghist" style="width: 300px;">
<br></div>

<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                            <label>Nextfolloup</label><r style="color: red">*</r>

                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>





<div class="form-group" style="padding-top: 18px">
<input type='submit' class="btn btn-success " name='submit' value="Create"  >
</div>
 



<!-- /.tab-pane -->




</form>
</div>
</div>

</div>
</div>
</div>
</section>



<script src="{{ asset('/js/bootstrap.min.css') }}"></script>
<script src="{{ asset('/js/bootstrap-datetimepicker.min.css') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script> 

<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('/js/moment.js') }}"></script>


<script src="{{ asset('/js/bootstrap-datetimepicker.min.js') }}"></script>

 



 

<script type="text/javascript">
    function check(){
        document.getElementById('tb2').click();
    }
</script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script> 


@endsection
