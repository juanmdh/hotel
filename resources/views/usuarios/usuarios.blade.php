<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hottel Ottavis & Cafe</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://www.google.com/recaptcha/api.js"></script>
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
<body class="hold-transition register-user-page">
    <div class="register-box">
        <div class="register-logo">
            <a><b>Hottel Ottavis & Cafe</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="register-box-body ">
            <p class="register-box-msg"><b>REGISTRO DE USUARIO</b></p>
            {{-- action="{{route('registrar-usuario')}}" --}}
            <form id="formulario_registro_usuario"  method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">

                    <div class="elementos col-xs-12 ">
                        <div class="form-group has-feedback ">
                            <label  >Ingrese su correo electronico</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="correo" name="correo" placeholder="Ingrese...">
                            </div>
                        </div>
                    </div>
                    <div class="elementos col-xs-12 ">
                        <div class="form-group has-feedback ">
                            <label  >Ingrese sus contraseña</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="contrasena" name="contrasena" placeholder="Ingrese...">
                            </div>
                        </div>
                    </div>
                    <div class="elementos col-xs-12 ">
                        <div class="form-group has-feedback ">
                            <label  >Vuelva a ingresar la contrasena (contraseña de verigicación)</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="contrasena1" name="contrasena1" placeholder="Ingrese...">
                            </div>
                        </div>
                    </div>
                    <div class="elementos col-xs-12 ">
                        <div class="form-group has-feedback ">
                            <label>Ingrese sus nombres</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="nombres" name="nombres" placeholder="Ingrese...">
                            </div>
                        </div>
                    </div>
                    <div class="elementos col-xs-6 ">
                        <div class="form-group has-feedback ">
                            <label  >Ingrese su primer apellidos</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="primerApellido" name="primerApellido" placeholder="Ingrese...">
                            </div>
                        </div>
                    </div>
                    <div class="elementos col-xs-6 ">
                        <div class="form-group has-feedback ">
                            <label  >Ingrese su segundo apellidos</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="segundoApellido" name="segundoApellido" placeholder="Ingrese...">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="elementos col-xs-12 ">
                        <div class="form-group has-feedback">
                            <label>Proporcione una foto</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa  fa-file-picture-o "></i>
                                </div>
                                <input type="file" class="form-control pull-right" id="imagen" name="imagen" placeholder="Ingrese...">
                            </div>

                        </div>
                    </div> --}}
                    <div class="elementos col-xs-12     ">
                        <div class="form-group has-feedback">
                            <label for="exampleFormControlFile1">Seleccione su tipo de documento de identidad</label>
                            <div class="form-check form-check-inline    ">
                                <div class=" ">
                                    <input class="form-check-input" type="radio" name="idTiposdocumentos" id="dni" value="1" onclick="habilitar_numero_identidad();">
                                    <label class="form-check-label" for="dni" onclick="habilitar_numero_identidad();">DNI</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="idTiposdocumentos" id="pasaporte" value="2" onclick="habilitar_numero_identidad();">
                                    <label class="form-check-label" for="pasaporte" onclick="habilitar_numero_identidad();">Pasaporte</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementos col-xs-12  ">
                        <div class="form-group has-feedback">
                            <label for="exampleFormControlFile1">Ingrese su número de su documento</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="numero_documento"name="numero_documento" placeholder="Ingrese..." disabled>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="elementos col-xs-12  ">
                        <div class="form-group has-feedback">
                            <label for="exampleFormControlFile1">Ingrese su número de celular</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa  fa-phone"></i>
                                </div>
                                <input type="number" class="form-control pull-right" id="telefono"name="telefono" placeholder="Ingrese...">
                            </div>
                        </div>
                    </div>
                    <div class="elementos col-xs-12 ">
                        <div class="form-group has-feedback">
                            <label for="exampleFormControlFile1">Seleccione su sexo</label>
                            <div class="form-check form-check-inline row col-xs-12">

                                    <input class="form-check-input" type="radio" name="sexo" id="masculino" value="1">
                                    <label class="form-check-label" for="masculino">Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input class="form-check-input" type="radio" name="sexo" id="femenino" value="2">
                                    <label class="form-check-label" for="femenino">Femenino</label>

                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="row">
                    <div class="elementos col-xs-12 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                        <label for="exampleFormControlFile1">Fecha de nacimiento</label>
                        <div class="input-group">
                            <div class="input-group-addon" >
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                            <script>
                                var fechaActual = new Date().toISOString().split("T")[0];
                                document.getElementById("fechaNacimiento").max = fechaActual;
                            </script>
                        </div>
                        <!-- /.input group -->
                    </div>
                </div> --}}

                <div class="row">
                        <div class="col-xs-12">
                        <button id="guardar_usuario" name="guardar_usuario"  class=" btn btn-block btn-login btn-flat"
                        {{-- g-recaptcha --}}
                        {{-- data-sitekey="6LejYo4lAAAAACFLBtrG3BCwq4V8hgyLar2m_fs6" --}}
                        {{-- data-callback='onSubmit' --}}
                        {{-- data-action='submit'   --}}
                        onclick="validar_vacios_registro();">Registrar</button>
                        </div>
                        <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
            <p>- O -</p>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Registrar con
                Google+</a>
            </div>
            <!-- /.social-auth-links -->
            <div class="row ">
                <div class="col-xs-12">
                    <a href="{{route('index')}}" ><b>Ya tengo cuenta</b></a><br>
                </div>
            </div>



        </div>
    <!-- /.login-box-body -->
    </div>
    <div class="col-xs-12"></div>


    <script>
        $(document).ready(function(){
          $("#formulario_registro_usuario").on('submit', function(e){
            e.preventDefault();
            buscar();
          });
        });
    </script>

    <!-- /.login-box -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{asset('js/validation.js')}}"></script>
    <!-- jQuery 3 -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
