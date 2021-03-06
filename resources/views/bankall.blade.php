
   
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
        Bank List
      </h1>
      <ol class="breadcrumb">
        <li><a href="/bankall"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bank List</li>
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
              <h3 class="box-title"><a href="/createbank"><button class="btn btn-info">Add New Bank</button></a>
              <!--<a href="NewE.php"><button class="btn btn-danger">CREATE</button></a>-->
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                <th>Bank Id</th>
<th>Bank Name</th>
<th>Actions</th>
                </tr>
                </thead>
<?php $i=1; ?>
                <tbody>
@foreach($bank as $banklist)
            <tr>
                <td>{{$i}}</td>
                
<!-- <td>{{$banklist->id}}</td> -->
<td>{{$banklist->bank_name}}</td>
<td>
                    <a href="editbank/{{$banklist->id}}"><button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-pencil"></i></button></a>
                    
                    
                    <a href="deletebank/{{$banklist->id}}"><button class="btn btn-sm btn-success" type="button"><i class="fa fa-trash"></i></button></a>                    
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

<script>
$(document).ready(function() {
   $('#example').DataTable( {
        "scrollX": true
    } );
} );
</script>

@endsection

