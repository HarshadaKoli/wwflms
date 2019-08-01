
   
@extends("partials.layout")

@section('content')




      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Purpose Update
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/purposeall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Purpose</li>
      </ol>
    </section>

    


<section class="content" style="overflow-x: scroll;">
<div class="emp-personal-info-view">
<div class="nav-tabs-custom">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true" id="tb1"><h5>Purpose Details</h5></a></li>

</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_1">

<div class="box-body">
          
  <form class="form-horizontal" action="{{ URL::to('/updatepurpose')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
 {{ csrf_field() }}

 
                <input type="hidden" value="{{$purpose->id}}" name="id">


                    <div class="form-group">
                    <label class="control-label">Purpose_name</label>
                    <input type="text" class="form-control" name="purpose_name" placeholder="purpose_name" value="{{$purpose->purpose_name}}">
                    </div>    
                
  
<div class="form-group col-lg-3" style="padding-top: 18px  width: 103px"  >
<a href=""><input type='submit' class="btn btn-success" name='Submit' value="Submit" ></a>
<br>
</div>

<div class="form-group col-lg-3" style="padding-top: 18px width: 103px">
<a href="/purposeall"><input type='submit' class="btn btn-success" name='Cancel' value="Cancel"></a>
<br>
</div>






</div>
</div>
</form>


</div>
</div>
</div>
</section>

</div>

@endsection
