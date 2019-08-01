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
        Bank Detail
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/bankall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Banks</li>
      </ol>
    </section>

    <!-- Main content -->

<!--    <div class="content-wrapper">
<section class="content-header"> -->


<section class="content" style="overflow-x: scroll;">
<div class="emp-personal-info-view">
<div class="nav-tabs-custom">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true" id="tb1"><h5>Bank Details</h5></a></li>
<!-- <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false" id="tb2"><h5>Bank Details</h5></a></li>
<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"  id="tb3"><h5>Job Details</h5></a></li>
<li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false"  id="tb4"><h5>Profile</h5></a></li> -->
</ul>
<div class="tab-content" style="height: 535px;">
<div class="tab-pane active" id="tab_1">

<div class="box-body">
          
 <form class="form-horizontal" action="{{ URL::to('/registerbank')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
 {{ csrf_field() }}



<!-- <div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Bank Id</label><r style="color: red">*</r>
<input type="text" class="form-control" name="id" placeholder="Bank Id">
<br></div> -->

<div class="form-group col-lg-3" style="margin-left: 11px;">
<label>Bank Name</label><r style="color: red">*</r>
 <input type="text" class="form-control" name="bank_name" placeholder="Bank Name">
<br></div>

<div class=" col-lg-3" style="padding-left: 26px;">
<input type='submit' class="btn btn-success " name='submit' value="Create">
</div>

</div>

</div>
</div>

     


<!-- /.tab-pane -->
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
