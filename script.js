//CONTACTO

//----------------------------------------------------------------------
    //Validar los componentes del formulario
//----------------------------------------------------------------------
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

//ADOPCION PERROS, PPP y GATOS

    // ------------------------------------------------------------------
    //  GIRA TARJETA AL HACER CLICK EN ELLA
    // ------------------------------------------------------------------

    var tarjetas = document.querySelectorAll(".tarjeta");
    
    for (var i = 0; i < tarjetas.length; i++) {
        tarjetas[i].addEventListener("click", function() {
            this.classList.toggle("flip");
        });
    }

//MIS DATOS

    //--------------------------------------------------------------------
    //         MOSTRAR/OCULTAR CONTRASEÑA
    //--------------------------------------------------------------------

    function mostrarPassword(){
        var cambio = document.getElementById("Password");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            $('.botonvista').removeClass('botonOculto');
            $('.botonvista').addClass('botonMostrar');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            $('.botonvista').removeClass('botonMostrar');
            $('.botonvista').addClass('botonOculto');
            
        }
    } 




