<?php

session_start();
$nombre = $_SESSION['rol'];

if (isset($_SESSION['rol'])) {
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <title>Bienvenida</title>
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');


        html,
        body {
            background-image: url('./img/viva.png');
            background-size: cover;
            background-repeat: repeat;
            height: 200px;
            font-family: 'Numans', sans-serif;

        }

        .card-body {

            background-image: url('./img/animal y lucas.jpg');
            background-size: cover;
            filter: contrast(1);




            width: 1345px;
            height: 570px;
        }


        .ir {
            margin-left: 900px;

        }

        .salir {
            padding-left: 30px;
        }
    </style>




    <body>

        <br>
        <div class="card">
            <div class="card-header">
                <img src="./img/cabecera.png" alt="" width="700" height="130">
            </div>

            <div class="card-body">



                <div class="row align-items-md-stretch">
                    <div class="col-md-12">
                        <div class="h-00 p-2 text-white bg- border rounded-3">
                            <h3> <b> Bienvenid@ ciudadan@ VIVA. </b></h3>
                            <br>
                            <h4> Para nosotros es una "ALEGRIA DE SERVIR" poder ayudar a mejorar <b> "UNIDOS" </b> la vida de los Antioqueñ@s. </h4>
                            <br>
                            <h5> Gracias por llenar tu formulario de postulación a "Mi hogar con VIVA". </h5>
                            <br>
                            <H5>
                                Te pedimos que antes de diligenciar este formulario, tener digitalizados en PDF, .JPG, <br>
                                los documentos requeridos que son:
                            </H5>
                            <br>
                            <li> Cedula del titular.</li>
                            <li> Soporte de enfoque diferencial (si se tiene).</li>
                            <li> Soporte de subsidio recibido, ya sea “Mi Casa YA”, de la caja de compensación, etc.</li>
                            <li> Declaración de notificación a postulados enviado por la constructora.</li>
                            <br>
                            <p>Ya que son requeridos para enviar este formulario y recibir el apoyo de VIVA para ser parte de "Mi hogar con VIVA".
                                <br>
                                Una vez diligenciado el formulario y enviado, no se puede editar.
                            </p>
                            <h2>Anímate a tener "Mi hogar con VIVA".</h2>

                            <div class="btn-group">

                                <div class="ir">
                                    <a href="formulario.php" class="btn  rounded-pill  btn-info  btn-md " role="button">Ir a formulario</a>
                                </div>



                                <div class="salir">
                                    <a href="./inicio/salir.php" class="btn rounded-pill btn-warning  btn-md " role="button">Cerrar sesión</a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>



                <br>

            </div>

        </div>


        <div class="card-footer text-muted">
            <img src="./img/pie.png" alt="" width="1345" height="110">
        </div>


    </body>



    </html>


<?php
} else {

    header('Location:./inicio/login.php');
}

?>