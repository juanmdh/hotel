//  // Example starter JavaScript for disabling form submissions if there are invalid fields
// (() => {
//     'use strict'

//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     const forms = document.querySelectorAll('.needs-validation')

//     // Loop over them and prevent submission
//     Array.from(forms).forEach(form => {
//       form.addEventListener('submit', event => {
//         if (!form.checkValidity()) {
//           event.preventDefault()
//           event.stopPropagation()
//         }

//         form.classList.add('was-validated')
//       }, false)
//     })
//   })()


function validar_vacios_login(){
    var correo = document.getElementById("correo");
    var contrasena = document.getElementById("contrasena");

    if(correo.value === "") {
        event.preventDefault();
            Swal.fire({
                title: 'No a ingresado el correo !',
                text: "Por favor ingrese su correo",
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Regresar'
              }).then((result) => {
              })
    }

    if(contrasena.value === "") {
        event.preventDefault();
        Swal.fire({
            title: 'No a ingresado la contraseña !',
            text: "Por favor ingrese su contraseña",
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }

    if((correo.value === "") && (contrasena.value === "")) {
        event.preventDefault();
        Swal.fire({
            title: 'No a ingresado el correo ni la contraseña !',
            text: "Por favor ingrese su correo y contraseña",
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }
}

function buscar_logeo(){
    // var datos=$("#formulario_registro_usuario").serialize();
    var datos = $('#formulario_logeo')[0];
    $.ajax({
        type:"POST",
        url:"buscar-buscar_logeo",
        data:new FormData(datos),
        processData: false,
        contentType: false,
        success:function(e){
            if (e == 1) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Bien venido',
                    showConfirmButton: false,
                    timer: 2500
                })
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Los datos ingresados son incorrectos',
                    showConfirmButton: false,
                    timer: 2500
                })
            }
        },
    });
    return false;
}

////////////////////////////////////////////////////////////////////////////////////
///                          REGISTRO                    ////
function habilitar_numero_identidad(){
    var dni = document.getElementById("dni");
    var pasaporte = document.getElementById("pasaporte");
    var numero_documento = document.getElementById("numero_documento");
    if(dni.checked || pasaporte.checked){
        var numero_documento = document.getElementById("numero_documento");
        numero_documento.disabled = false;
    }
}

function validar_vacios_registro(){
    var correo = document.getElementById("correo");
    var contrasena = document.getElementById("contrasena");
    var contrasena1 = document.getElementById("contrasena1");
    var nombres = document.getElementById("nombres");
    var primerApellido = document.getElementById("primerApellido");
    var segundoApellido = document.getElementById("segundoApellido");
    var imagen = document.getElementById("imagen");
    var dni = document.getElementById("dni");
    var pasaporte = document.getElementById("pasaporte");
    var numero_documento = document.getElementById("numero_documento");
    var masculino = document.getElementById("masculino");
    var femenino = document.getElementById("femenino");
    var fechaNacimiento = document.getElementById("fechaNacimiento");


    // if(imagen.value === ""|| imagen.files.length === 0) {
    //     // event.preventDefault();
    //     Swal.fire({
    //         title: 'No a administrado una imagen suya',
    //         text: "Por favor proporcione una foto para poder identificarlo",
    //         icon: 'error',
    //         showCancelButton: false,
    //         confirmButtonText: 'Regresar'
    //       }).then((result) => {
    //       })
    // }


    if(!dni.checked && !pasaporte.checked){
        // event.preventDefault();
        Swal.fire({
            title: 'No a seleccionado el tipo de documento de identificación!',
            text: "Por favor seleccione el tipo de documento de identificación",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }

    if(segundoApellido.value === "") {
        // event.preventDefault();
        Swal.fire({
            title: 'No a ingresado su segundo apellido !',
            text: "Por favor ingrese su segundo apellido",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }


    if(primerApellido.value === "") {
        // event.preventDefault();
        Swal.fire({
            title: 'No a ingresado su primer apellido !',
            text: "Por favor ingrese su primer apellido",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }

    if(nombres.value === "") {
        // event.preventDefault();
        Swal.fire({
            title: 'No a ingresado sus nombres !',
            text: "Por favor ingrese sus nombres",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }


    if(contrasena1.value === "") {
        // event.preventDefault();
        Swal.fire({
            title: 'No a ingresado la contraseña de verificación!',
            text: "Por favor ingrese la contraseña de verificación",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }

    if(contrasena.value === "") {
        // event.preventDefault();
        Swal.fire({
            title: 'No a ingresado la contraseña !',
            text: "Por favor ingrese su contraseña",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }else{
        // event.preventDefault();
        var contrasena = document.getElementById("contrasena").value;
        var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        if (!(regex.test(contrasena))) {
            alert('no');
        }
    }




    if(correo.value === "") {
        // event.preventDefault();
            Swal.fire({
                title: 'No a ingresado el correo !',
                text: "Por favor ingrese su correo",
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'Regresar'
              }).then((result) => {
              })
    }


    if(dni.checked && numero_documento.value != ""){
        var numero_documento = document.getElementById('numero_documento');
        const cantidad_digitos = numero_documento.value;
        if (cantidad_digitos.length <=7) {
            // event.preventDefault();
            Swal.fire({
                title: 'Número de DNI incorrecto!',
                text: "La cantidad de digitos del DNI es menor a 8",
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'Regresar'
              }).then((result) => {
              })
        } else if (cantidad_digitos.length >8) {
            // event.preventDefault();
            Swal.fire({
                title: 'Número de Pasaporte incorrecto!',
                text: "La cantidad de digitos del DNI es mayor a 8",
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'Regresar'
              }).then((result) => {
              })
        }

    }else if(dni.checked && numero_documento.value == ""){
        Swal.fire({
            title: 'No a ingresado el número de DNI!',
            text: "Por favor ingrese el número de DNI",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }

    if(pasaporte.checked && numero_documento.value != ""){
        var numero_documento = document.getElementById('numero_documento');
        const cantidad_digitos = numero_documento.value;
        if (cantidad_digitos.length <=11) {
            // event.preventDefault();
            Swal.fire({
                title: 'Número de Pasaporte incorrecto!',
                text: "La cantidad de digitos del Pasaporte es menor a 12",
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'Regresar'
              }).then((result) => {
              })
        } else if (cantidad_digitos.length >12) {
            // event.preventDefault();
            Swal.fire({
                title: 'Número de Pasaporte incorrecto!',
                text: "La cantidad de digitos del Pasaporte es mayor a 12",
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'Regresar'
              }).then((result) => {
              })
        }
    }else if(pasaporte.checked && numero_documento.value == ""){
        Swal.fire({
            title: 'No a ingresado el número de Pasaporte!',
            text: "Por favor ingrese el número de Pasaporte",
            icon: 'error',
            showCancelButton: false,
            confirmButtonText: 'Regresar'
          }).then((result) => {
          })
    }

    // if(masculino.checked && femenino.checked) {
    // }else{
    //     // event.preventDefault();
    //     Swal.fire({
    //         title: 'No a seleccionado el tipo de sexo!',
    //         text: "Por favor seleccione el tipo de sexo que corresponda",
    //         icon: 'error',
    //         showCancelButton: false,
    //         confirmButtonText: 'Regresar'
    //       }).then((result) => {
    //       })
    // }

    // if(fechaNacimiento.value === "") {
    //     // event.preventDefault();
    //     Swal.fire({
    //         title: 'No a ingresado la fecha de nacimineto!',
    //         text: "Por favor ingrese la fecha de nacimineto",
    //         icon: 'error',
    //         showCancelButton: false,
    //         confirmButtonText: 'Regresar'
    //       }).then((result) => {
    //       })
    // }
}






function buscar(){
    // var datos=$("#formulario_registro_usuario").serialize();
    var datos = $('#formulario_registro_usuario')[0];
    $.ajax({
        type:"POST",
        url:"buscar-usuario_correo",
        data:new FormData(datos),
        processData: false,
        contentType: false,
        success:function(e){
            if (e == 1) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'El correo ya se encuentra en uso',
                    showConfirmButton: false,
                    timer: 2500
                })
            } else {
                buscar_documento_identidad();
            }
        },
    });
    return false;
}


function buscar_documento_identidad(){
    // var datos=$("#formulario_registro_usuario").serialize();
    var datos = $('#formulario_registro_usuario')[0];
    $.ajax({
        type:"POST",
        url:"buscar-usuario_documento_identidad",
        data:new FormData(datos),
        processData: false,
        contentType: false,
        success:function(e){
            if (e == 1) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'El número de identidad ya se encuentra en uso',
                    showConfirmButton: false,
                    timer: 2500
                })
            } else {
                guardar();
            }
        },
    });
    return false;
}


function guardar(){
    // var datos=$("#formulario_registro_usuario").serialize();
    var datos = $('#formulario_registro_usuario')[0];
    $.ajax({
        type:"POST",
        url:"registrar-usuario",
        data:new FormData(datos),
        processData: false,
        contentType: false,
        success:function(e){
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Registro realizado',
                showConfirmButton: false,
                timer: 1500
              })
        },
        error:function(e){
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error con el ajax de registro',
                showConfirmButton: false,
                timer: 1500
              })
        }
    });
    return false;
}



