<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Percobaan Login</title>
  <head>
    <meta charset="utf-8">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title></title>
  </head>
  <body>

    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('user.register.submit')}}" method="post"  id="quickForm">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputname">Name</label>
                <input type="text" name="name" required class="form-control" id="exampleInputname" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" required name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                </div>
              </div>
              @include('flash-message')
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </form>
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
    </section>
    </div>

  </body>

  <script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- jquery-validation -->
  <script src="{{url('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{url('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('assets/dist/js/demo.js')}}"></script>

</html>
