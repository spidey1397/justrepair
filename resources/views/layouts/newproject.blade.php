<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
      .card-w{
          width: -webkit-fill-available;
      }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('sidebar')     {{-- sidebar & navbar content from view --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Project</li>
            </ol>
          </div><!-- /.col -->
          <div>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="card card-w pt-4 pb-4">
            <div class="col-md-12">
              
          {!! Form::open(['method'=>'post','action'=>'ProjectController@store']) !!}
          <div class="form-group">
              
              {!! Form::label('name', 'Project Name') !!}
              {!! Form::text('project_name', null, ['class'=>'form-control', 'placeholder'=>'Enter your Project Name']) !!}
              {!! Form::label('name', 'Client Name') !!}
              {!! Form::text('client_name', null, ['class'=>'form-control', 'placeholder'=>'Enter your Name']) !!}
              {!! Form::Label('name', 'City') !!}
              {!! Form::text('city', null, ['class'=>'form-control' ,'placeholder'=>'Your Area']) !!}
              
              
            </div>
          <div class="form-group">
              {!! Form::submit('Submit', ['class'=>'btn btn-success']) !!}
          </div>    
          {!! Form::close() !!}
        </div>
        </div>
    </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
