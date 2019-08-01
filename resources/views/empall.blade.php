
   
@extends("partials.layout")

@section("content")

 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<style type="text/css"> 

<style type="text/css">
  .btn-success {
    color: #fff;
    background-color: #3c8dbc;
    border-color: #3c8dbc59;
}
.btn-success:hover {
    color: #fff;
    background-color: #3c8dbcdb;
    border-color: #3c8dbc;
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee List
      </h1>
      <ol class="breadcrumb">
        <li><a href="/empall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="/createemp"><button class="btn btn-info">Add New Employee</button></a>
              <!--<a href="NewE.php"><button class="btn btn-danger">CREATE</button></a>-->
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                <th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
<th>Gender</th>
<th>DOB</th>
<th>Mobile No.</th>
<th>Education</th>
<th>Blood Group</th>
<th>Emergency person name</th>
<th>Emergency person phno.</th>
<th>Status</th>
<th>Account Name</th>
<th>Account No.</th>
<th>Bank Name</th>
<th>Branch</th>
<th>IFSC Code</th>
<th>Join Date</th>
<th>Pan No.</th>
<th>Adhar No.</th>
<th>Upload Adhar</th>
<th>Upload Pan</th>
<th>Upload Resume</th>
<th>Designation</th>
<th>Actions</th>



                </tr>
                </thead>
<?php $i=1; ?>
                <tbody>
@foreach($emp as $emplist)
            <tr>
                <td>{{$i}}</td>
                
<td>{{$emplist->fname}}</td>
<td>{{$emplist->lname}}</td>
<td>{{$emplist->email}}</td>
<td>{{$emplist->address}}</td>
<td>{{$emplist->gender}}</td>
<td>{{$emplist->dob}}</td>
<td>{{$emplist->mobileno}}</td>
<td>{{$emplist->education}}</td>
<td>{{$emplist->bloodgrp}}</td>
<td>{{$emplist->emp_per_name}}</td>
<td>{{$emplist->emp_per_mob}}</td>
<td>{{$emplist->status}}</td>
<td>{{$emplist->acc_name}}</td>
<td>{{$emplist->acc_no}}</td>
<td>{{$emplist->bank_name}}</td>
<td>{{$emplist->branch}}</td>
<td>{{$emplist->ifsc_code}}</td>
<td>{{$emplist->join_date}}</td>
<td>{{$emplist->pan_no}}</td>
<td>{{$emplist->adhar_no}}</td>
<td>{{$emplist->upload_adhar}}</td>
<td>{{$emplist->upload_pan}}</td>
<td>{{$emplist->upload_resume}}</td>
<td>{{$emplist->designation}}</td>
                
                <td>
                    <a href="editemp/{{$emplist->id}}"><button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-pencil"></i></button></a>
                    
                    <a href="viewemp/{{$emplist->id}}"><button class="btn btn-sm btn-success badge" type="button"><i class="fa fa-eye"></i></button></a>
                    
                    <a href="deleteemp/{{$emplist->id}}"><button class="btn btn-sm btn-success" type="button"><i class="fa fa-trash"></i></button></a>                    
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach

                </tbody>
 
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<script type="text/javascript">
$(document).ready(function() {
   $('#example').DataTable( {
        "scrollX": true
    } );
} );
</script>

<!-- <script>
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>
 -->
@endsection

