<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hottel Ottavis & Cafe</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"></link>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('css/SweetAlert2.css')}}"></link>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/3989b18344.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}"></link>
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}"></link>
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="{{asset('css/iCheck/blue.css')}}"></link> --}}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>Hottel Ottavis & Cafe</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><b>INICIO DE SESIÓN</b></p>
    <form  id="formulario_logeo" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
        @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="contrasena"
        name="contrasena" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        {{-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div> --}}
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-block btn-login btn-flat" onclick="validar_vacios_login();">Iniciar sesión</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- O -</p>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Iniciar sesión con
        Google+</a>
    </div>
    <!-- /.social-auth-links -->
    <div class="row ">
        <div class="col-xs-9">
            <a href="" ><b>Olvide mi contraseña</b></a><br>
        </div>
        <div class="col-xs-2">
            <a   href="{{route('uruarios')}}"   class="text-center"><b>Registrar</b></a>
        </div>
    </div>

    <script>
        $(document).ready(function(){
          $("#formulario_logeo").on('submit', function(e){
            e.preventDefault();
            buscar_logeo();
          });
        });
    </script>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{asset('js/validation.js')}}"></script>
<!-- jQuery 3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>




<!-- iCheck -->
{{-- <script src="{{asset('js/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script> --}}
</body>
</html>
