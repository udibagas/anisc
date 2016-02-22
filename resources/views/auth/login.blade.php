@extends('layouts.blank')

@section('content')
    <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="http://www.anisc.sch.id"><b>ANISC</b>SIDIK</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign In ANISC SIDIK</p>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['url' => '/login']) !!}
          <div class="form-group has-feedback">
            <input name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            {!! Form::select('guard', [
                    'admin' => '- Pilih Role (Admin) -',
                    'guru' => 'Guru',
                    'staff' => 'Staff',
                    'ortu' => 'Orang Tua',
                    'siswa' => 'Siswa'
                ],
            null, ['class' => 'form-control']) !!}
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
          {!! Form::close() !!}

        <!-- <a href="#">I forgot my password</a><br> -->
        <!-- <a href="/register" class="text-center">Register a new membership</a> -->

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/AdminLTE/plugins/iCheck/icheck.min.js") }}" type="text/javascript"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
        //   increaseArea: '20%' // optional
        });
      });
    </script>
    </body>
@endsection
