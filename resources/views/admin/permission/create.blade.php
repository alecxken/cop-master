
@yield('content')
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <link rel="icon" type="image/png" sizes="200x200" href="assets/bootstrap/img/ecp.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'e-community police') }}</title>

     @include('partials.topbar')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Main Header -->
    @include('member.header')
<!-- Sidebar -->
    @include('member.sidebar')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Permission
      </h1>
      <ol class="breadcrumb">
       <li><a href="/member"><i class="fa fa-home" ></i>Dashboard</a></li>
       <li class="active"><a href="#"><i class="fa fa-book"></i>Permissions</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Create New Permission</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      
            <form action="{{ route('permissions.store') }}" method="POST">
               {{ csrf_field() }} 
               <div id="basic">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                       <label>Name(Pick your choice carefully, this can't be edited later once saved)</label> 
                        <input type="text" placeholder="eg create-user" value="{{ old('name') }}" name="name" class="form-control" required>
                        <!-- If role name has error -->
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                   </div>
                   <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
                       <label>Display Name</label> 
                        <input type="text" placeholder="eg Create Users" value="{{ old('display_name') }}" name="display_name" class="form-control" minlength="5" maxlength="100" required>
                        <!-- If role name has error -->
                        @if ($errors->has('display_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('display_name') }}</strong>
                            </span>
                        @endif
                   </div>
                   <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                       <label>Description</label> 
                        <input type="text" placeholder="eg Allows a user to create other users" value="{{ old('description') }}" name="description" class="form-control" required>
                        <!-- If display name has error -->
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                   </div>
               </div>
               <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
        <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>

    <!-- Footer -->
    @include('layouts.footer')
   
    
</div><!-- ./wrapper -->
@include('includes.js')
@yield('js')

</body>
</html>