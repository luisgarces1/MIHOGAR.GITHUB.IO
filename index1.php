<?php
include("bd.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

    $sentencia = $conexion->prepare("DELETE FROM db1 WHERE ID=:ID");
    $sentencia->bindParam(":ID", $txtID);
    $sentencia->execute();
    header("location:datos.php");
}



$sentencia = $conexion->prepare("SELECT * FROM `db1`");
$sentencia->execute();
$lista_db1 = $sentencia->fetchAll((PDO::FETCH_ASSOC));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dxxxxxxx</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.1/css/select.dataTables.min.css">



    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.1.1/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css">

    <style>
        div.DTE_Form_Info {
            text-align: left;
        }

        table thead {
            background: linear-gradient(to right, #4A00E0, #8E2DE2);
            color: white;
        }

        tbody {
            background: #AED6F1;
        }

        .container {
            background: #EBEDEF;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <br>

    <div class="container">

        <table class="table table-striped display  display responsive nowrap" cellspacing="0" width="100%" id="tabla_id">

            <thead>
                <tr>
                    <th scoped="col">TRATAMIENTO_DE_DATOS</th>
                    <th scoped="col">PRIMER_NOMBRE</th>
                    <th scoped="col">SEGUNDO_NOMBRE</th>
                    <th scoped="col">PRIMER_APELLIDO</th>
                    <th scoped="col">SEGUNDO_APELLIDO</th>
                    <th scoped="col">NUMERO_DE_CEDULA</th>
                    <th scoped="col">TELEFONO</th>
                    <th scoped="col">DIRECCION</th>
                    <th scoped="col">CORREO_ELECTRONICO</th>
                    <th scoped="col">FECHA_DE_NACIMIENTO</th>
                    <th scoped="col">EDAD</th>
                    <th scoped="col">GENERO</th>
                    <th scoped="col">CEDULA_POSTU.</th>
                    <th scoped="col">ENFOQUE_DIFERE</th>
                    <th scoped="col">SOPORTE_ENFOQUE</th>
                    <th scoped="col">PARENTEZCO_FAMILIAR</th>
                    <th scoped="col">NOMBRE_COMPLETO_FAM.</th>
                    <th scoped="col">TIPO_DE_DOC</th>
                    <th scoped="col">NUMERO_DOCUMENTO</th>
                    <th scoped="col">EDAD_FAMILIAR</th>
                    <th scoped="col">GENERO_FAMILIAR</th>
                    <th scoped="col">SUBSIDIO</th>
                    <th scoped="col">ESTADO</th>
                    <th scoped="col">CERTIFICADO_DEL_SUBSIDIO</th>
                    <th scoped="col">SUBREGION</th>
                    <th scoped="col">MUNICIPIO</th>
                    <th scoped="col">NOMBRE_PROYECTO</th>
                    <th scoped="col">RAZON_SOCIAL_CONTRUCTOR</th>
                    <th scoped="col">CORREO_CONSTRUCTOR</th>
                    <th scoped="col">TELEFONO_CONSTRUCTOR</th>
                    <th scoped="col">VALOR_TOTAL_VIVIENDA</th>
                    <th scoped="col">FECHA_ESTIMADA_ENTREGA</th>
                    <th scoped="col">ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA</th>
                    <th scoped="col">ID</th>
                    <th scoped="col">ACCIONES_A_REALIZAR</th>

                </tr>

            </thead>

            <tbody class="R">

                <?php foreach ($lista_db1 as $registro) { ?>

                    <tr>
                        <td scoped="row"><?php echo $registro['TRATAMIENTO_DE_DATOS']; ?></td>
                        <td scoped="row"><?php echo $registro['PRIMER_NOMBRE']; ?> </td>
                        <td scoped="row"><?php echo $registro['SEGUNDO_NOMBRE']; ?> </td>
                        <td scoped="row"><?php echo $registro['PRIMER_APELLIDO']; ?> </td>
                        <td scoped="row"><?php echo $registro['SEGUNDO_APELLIDO']; ?> </td>
                        <td scoped="row"><?php echo $registro['NUMERO_DE_CEDULA_DE_CIUDADANIA']; ?> </td>
                        <td scoped="row"><?php echo $registro['TELEFONO_DE_CONTACTO']; ?></td>
                        <td scoped="row"><?php echo $registro['DIRECCION_CORRESPONDENCIA']; ?> </td>
                        <td scoped="row"><?php echo $registro['CORREO_ELECTRONICO']; ?> </td>
                        <td scoped="row"><?php echo $registro['FECHA_DE_NACIMIENTO']; ?> </td>
                        <td scoped="row"><?php echo $registro['EDAD']; ?> </td>
                        <td scoped="row"><?php echo $registro['GENERO']; ?> </td>
                        <td scoped="row"><?php echo $registro['ADJUNTAR_CEDULA_POSTULANTE']; ?></td>
                        <td scoped="row"><?php echo $registro['ENFOQUE_DIFERE']; ?> </td>
                        <td scoped="row"><?php echo $registro['ADJUNTAR_SOPORTE_ENFOQUE']; ?> </td>
                        <td scoped="row"><?php echo $registro['PARENTEZCO_CON_EL_JEFE_DEL_HOGAR']; ?> </td>
                        <td scoped="row"><?php echo $registro['NOMBRE_COMPLETO_FAMILIAR']; ?> </td>
                        <td scoped="row"><?php echo $registro['TIPO_DE_DOC']; ?> </td>
                        <td scoped="row"><?php echo $registro['NUMERO_DOCUMENTO_DE_IDENTIDAD']; ?></td>
                        <td scoped="row"><?php echo $registro['EDAD_FAMILIAR']; ?> </td>
                        <td scoped="row"><?php echo $registro['GENERO_FAMILIAR']; ?> </td>
                        <td scoped="row"><?php echo $registro['SUBSIDIO']; ?> </td>
                        <td scoped="row"><?php echo $registro['ESTADO']; ?> </td>
                        <td scoped="row"><?php echo $registro['ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL']; ?> </td>
                        <td scoped="row"><?php echo $registro['SUBREGION']; ?></td>
                        <td scoped="row"><?php echo $registro['MUNICIPIO']; ?> </td>
                        <td scoped="row"><?php echo $registro['NOMBRE_PROYECTO']; ?> </td>
                        <td scoped="row"><?php echo $registro['RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO']; ?> </td>
                        <td scoped="row"><?php echo $registro['CORREO_CONSTRUCTOR']; ?> </td>
                        <td scoped="row"><?php echo $registro['TELEFONO_CONSTRUCTOR']; ?> </td>
                        <td scoped="row"><?php echo $registro['VALOR_TOTAL_VIVIENDA']; ?></td>
                        <td scoped="row"><?php echo $registro['FECHA_ESTIMADA_VIVIENDA']; ?> </td>
                        <td scoped="row"><?php echo $registro['ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA']; ?> </td>
                        <td scoped="row"><?php echo $registro['ID']; ?> </td>

                        <td>

                            <a class="btn rounded-pill btn-info btn-sm" href="editar_datos.php?txtID=<?php echo $registro['ID']; ?>" role="button">Editar</a>
                            <a class="btn rounded-pill btn-danger btn-sm" href="datos.php?txtID=<?php echo $registro['ID']; ?>" role="button">Eliminar</a>

                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>

    <script src="https://cdn.datatables.net/searchpanes/2.1.1/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.1/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>




    <script>
        $(document).ready(function() {
            $('#tabla_id').DataTable({
                responsive: "true",
                dom: 'Bfrtip',

                buttons: [{
                        extend: 'searchPanes',
                        text: 'Filtrar',
                        config: {
                            cascadePanes: true
                        }

                    },



                    {
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel'
                    },

                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'PDF'
                    },

                    {
                        extend: 'copyHtml5',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copiar'
                    },

                    {
                        extend: 'csvHtml5',
                        text: '<i class="fa fa-file-text-o"></i>',
                        titleAttr: 'CSV'
                    },

                    {
                        extend: 'print',
                        text: 'Imprimir',
                        exportOptions: {
                            columns: ':Visible'
                        },

                    }


                ]
            });
        });
    </script>



</body>

</html>