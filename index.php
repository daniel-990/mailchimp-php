<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .alerta{
            color: #bd2130 !important;
        }
    </style>
</head>
<body>
    

    <section class="contenedor-formulario">
        <div class="container">
            <br>
            <h2 class="text-left">Registro para la descarga de contenido</h2>
            <br>
            <form id="signup" action="index.html" method="get">
                <div class="form-group">
                    <label for="mailApp">Correo electronico</label>
                    <input type="email" name="mail" class="form-control" id="mailApp" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted alerta">Por favor ingrese un correo electronico valido a este correo se le enviara el link de descarga del PDF de la buena practica.</small>
                </div>
                <div class="form-group">
                    <label for="nombreApp">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombreApp" aria-describedby="" required>
                </div>
                <div class="form-group">
                    <label for="apellidoApp">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="apellidoApp" aria-describedby="" required>
                </div>
                <div class="form-group">
                    <label for="iesApp">Nombre de la IES</label>
                    <input type="text" name="ies" class="form-control" id="iesApp" aria-describedby="" required>
                </div>
                <input type="text" id="" name="pdf" value="https://newlbsuptest.wpengine.com/?pdf=2708">
                <button type="submit" id="SendButton" class="btn btn-info">Enviar <i class="fas fa-paper-plane"></i></button>
                <!-- <input type="submit" id="SendButton" name="submit" class="btn btn-info" value="Sign Up" />  -->
                <hr>
                <span id="message"></span>
            </form>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/7a9ca3a04b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#signup').submit(function() {
            $("#message").html("Ingresa un correo electronico");
            $.ajax({
                url: './subscribe.php',
                type: "POST",
                data: $('#signup').serialize(),
                success: function(msg) 
                {
                    $('#message').html("Grcias por ingresar los datos!");
                },
                error: function(msg) 
                {
                    $('#message').html("<span style='color: red;'> Error, por favor intentar de nuevo.</span>");
                    console.log(arguments);
                }
            });
            return false;
        });
    });
    </script>
</body>
</html>