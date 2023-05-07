<?php include('cabecera.php'); ?>



<?php

$TRATAMIENTO_DE_DATOS = (isset($_POST['TRATAMIENTO_DE_DATOS'])) ? $_POST['TRATAMIENTO_DE_DATOS'] : "";
$FECHA_DE_LLENADO = (isset($_POST['FECHA_DE_LLENADO'])) ? $_POST['FECHA_DE_LLENADO'] : "";
$PRIMER_NOMBRE = (isset($_POST['PRIMER_NOMBRE'])) ? $_POST['PRIMER_NOMBRE'] : "";
$SEGUNDO_NOMBRE = (isset($_POST['SEGUNDO_NOMBRE'])) ? $_POST['SEGUNDO_NOMBRE'] : "";
$PRIMER_APELLIDO = (isset($_POST['PRIMER_APELLIDO'])) ? $_POST['PRIMER_APELLIDO'] : "";
$SEGUNDO_APELLIDO = (isset($_POST['SEGUNDO_APELLIDO'])) ? $_POST['SEGUNDO_APELLIDO'] : "";
$NUMERO_DE_CEDULA_DE_CIUDADANIA = (isset($_POST['NUMERO_DE_CEDULA_DE_CIUDADANIA'])) ? $_POST['NUMERO_DE_CEDULA_DE_CIUDADANIA'] : "";
$TELEFONO_DE_CONTACTO = (isset($_POST['TELEFONO_DE_CONTACTO'])) ? $_POST['TELEFONO_DE_CONTACTO'] : "";
$DIRECCION_CORRESPONDENCIA = (isset($_POST['DIRECCION_CORRESPONDENCIA'])) ? $_POST['DIRECCION_CORRESPONDENCIA'] : "";
$CORREO_ELECTRONICO = (isset($_POST['CORREO_ELECTRONICO'])) ? $_POST['CORREO_ELECTRONICO'] : "";
$FECHA_DE_NACIMIENTO = (isset($_POST['FECHA_DE_NACIMIENTO'])) ? $_POST['FECHA_DE_NACIMIENTO'] : "";
$EDAD = (isset($_POST['EDAD'])) ? $_POST['EDAD'] : "";
$GENERO = (isset($_POST['GENERO'])) ? $_POST['GENERO'] : "";
$ADJUNTAR_CEDULA_POSTULANTE = (isset($_FILES['ADJUNTAR_CEDULA_POSTULANTE'])) ? $_FILES['ADJUNTAR_CEDULA_POSTULANTE'] : "";
$ENFOQUE_DIFERE = (isset($_POST['ENFOQUE_DIFERE'])) ? $_POST['ENFOQUE_DIFERE'] : "";
$ADJUNTAR_SOPORTE_ENFOQUE = (isset($_FILES['ADJUNTAR_SOPORTE_ENFOQUE'])) ? $_FILES['ADJUNTAR_SOPORTE_ENFOQUE'] : "";



$PARENTEZCO_CON_EL_JEFE_DEL_HOGAR = (isset($_POST['PARENTEZCO_CON_EL_JEFE_DEL_HOGAR'])) ? $_POST['PARENTEZCO_CON_EL_JEFE_DEL_HOGAR'] : "";
$NOMBRE_COMPLETO_FAMILIAR = (isset($_POST['NOMBRE_COMPLETO_FAMILIAR'])) ? $_POST['NOMBRE_COMPLETO_FAMILIAR'] : "";
$TIPO_DE_DOC = (isset($_POST['TIPO_DE_DOC'])) ? $_POST['TIPO_DE_DOC'] : "";
$NUMERO_DOCUMENTO_DE_IDENTIDAD= (isset($_POST['NUMERO_DOCUMENTO_DE_IDENTIDAD'])) ? $_POST['NUMERO_DOCUMENTO_DE_IDENTIDAD'] : "";
$EDAD_FAMILIAR = (isset($_POST['EDAD_FAMILIAR'])) ? $_POST['EDAD_FAMILIAR'] : "";
$GENERO_FAMILIAR = (isset($_POST['GENERO_FAMILIAR'])) ? $_POST['GENERO_FAMILIAR'] : "";


/*$PARENTEZCO_CON_EL_JEFE_DEL_HOGAR1 = (isset($_POST['PARENTEZCO_CON_EL_JEFE_DEL_HOGAR1'])) ? $_POST['PARENTEZCO_CON_EL_JEFE_DEL_HOGAR1'] : "";
$NOMBRE_COMPLETO_FAMILIAR1 = (isset($_POST['NOMBRE_COMPLETO_FAMILIAR1'])) ? $_POST['NOMBRE_COMPLETO_FAMILIAR1'] : "";
$TIPO_DE_DOC1 = (isset($_POST['TIPO_DE_DOC1'])) ? $_POST['TIPO_DE_DOC1'] : "";
$NUMERO_DOCUMENTO_DE_IDENTIDAD1 = (isset($_POST['NUMERO_DOCUMENTO_DE_IDENTIDAD1'])) ? $_POST['NUMERO_DOCUMENTO_DE_IDENTIDAD1'] : "";
$EDAD_FAMILIAR1 = (isset($_POST['EDAD_FAMILIAR1'])) ? $_POST['EDAD_FAMILIAR1'] : "";
$GENERO_FAMILIAR1 = (isset($_POST['GENERO_FAMILIAR1'])) ? $_POST['GENERO_FAMILIAR1'] : "";*/






$SUBSIDIO = (isset($_POST['SUBSIDIO'])) ? $_POST['SUBSIDIO'] : "";
$ESTADO = (isset($_POST['ESTADO'])) ? $_POST['ESTADO'] : "";
$ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL = (isset($_FILES['ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL'])) ? $_FILES['ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL'] : "";
$SUBREGION = (isset($_POST['SUBREGION'])) ? $_POST['SUBREGION'] : "";
$MUNICIPIO = (isset($_POST['MUNICIPIO'])) ? $_POST['MUNICIPIO'] : "";
$NOMBRE_PROYECTO = (isset($_POST['NOMBRE_PROYECTO'])) ? $_POST['NOMBRE_PROYECTO'] : "";
$NIT_CONSTRUCTOR = (isset($_POST['NIT_CONSTRUCTOR'])) ? $_POST['NIT_CONSTRUCTOR'] : "";
$RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO = (isset($_POST['RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO'])) ? $_POST['RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO'] : "";
$CORREO_CONSTRUCTOR = (isset($_POST['CORREO_CONSTRUCTOR'])) ? $_POST['CORREO_CONSTRUCTOR'] : "";
$TELEFONO_CONSTRUCTOR = (isset($_POST['TELEFONO_CONSTRUCTOR'])) ? $_POST['TELEFONO_CONSTRUCTOR'] : "";
$VALOR_TOTAL_VIVIENDA = (isset($_POST['VALOR_TOTAL_VIVIENDA'])) ? $_POST['VALOR_TOTAL_VIVIENDA'] : "";
$FECHA_ESTIMADA_VIVIENDA = (isset($_POST['FECHA_ESTIMADA_VIVIENDA'])) ? $_POST['FECHA_ESTIMADA_VIVIENDA'] : "";
$ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA = (isset($_FILES['ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA'])) ? $_FILES['ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

include('bd.php');
switch ($accion) {
  case "Agregar":

    $sentenciaSQL = $conexion->prepare("INSERT INTO db1 (TRATAMIENTO_DE_DATOS,FECHA_DE_LLENADO, PRIMER_NOMBRE, SEGUNDO_NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, NUMERO_DE_CEDULA_DE_CIUDADANIA, TELEFONO_DE_CONTACTO, DIRECCION_CORRESPONDENCIA, CORREO_ELECTRONICO, FECHA_DE_NACIMIENTO, EDAD, GENERO, ADJUNTAR_CEDULA_POSTULANTE, ENFOQUE_DIFERE, ADJUNTAR_SOPORTE_ENFOQUE, PARENTEZCO_CON_EL_JEFE_DEL_HOGAR, NOMBRE_COMPLETO_FAMILIAR, TIPO_DE_DOC, NUMERO_DOCUMENTO_DE_IDENTIDAD, EDAD_FAMILIAR, GENERO_FAMILIAR, SUBSIDIO, ESTADO, ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL, SUBREGION, MUNICIPIO, NOMBRE_PROYECTO,NIT_CONSTRUCTOR, RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO,CORREO_CONSTRUCTOR,TELEFONO_CONSTRUCTOR, VALOR_TOTAL_VIVIENDA,FECHA_ESTIMADA_VIVIENDA,ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA) VALUES (:TRATAMIENTO_DE_DATOS,:FECHA_DE_LLENADO,:PRIMER_NOMBRE,:SEGUNDO_NOMBRE,:PRIMER_APELLIDO,:SEGUNDO_APELLIDO,:NUMERO_DE_CEDULA_DE_CIUDADANIA,:TELEFONO_DE_CONTACTO,:DIRECCION_CORRESPONDENCIA,:CORREO_ELECTRONICO,:FECHA_DE_NACIMIENTO,:EDAD,:GENERO,:ADJUNTAR_CEDULA_POSTULANTE,:ENFOQUE_DIFERE,:ADJUNTAR_SOPORTE_ENFOQUE,:PARENTEZCO_CON_EL_JEFE_DEL_HOGAR,:NOMBRE_COMPLETO_FAMILIAR,:TIPO_DE_DOC, :NUMERO_DOCUMENTO_DE_IDENTIDAD,:EDAD_FAMILIAR,:GENERO_FAMILIAR,:SUBSIDIO,:ESTADO,:ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL,:SUBREGION,:MUNICIPIO,:NOMBRE_PROYECTO,:NIT_CONSTRUCTOR,:RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO,:CORREO_CONSTRUCTOR,:TELEFONO_CONSTRUCTOR,:VALOR_TOTAL_VIVIENDA,:FECHA_ESTIMADA_VIVIENDA,:ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA);");


    $sentenciaSQL->bindParam(':TRATAMIENTO_DE_DATOS', $TRATAMIENTO_DE_DATOS);
    $sentenciaSQL->bindParam(':FECHA_DE_LLENADO', $FECHA_DE_LLENADO);
    $sentenciaSQL->bindParam(':PRIMER_NOMBRE', $PRIMER_NOMBRE);
    $sentenciaSQL->bindParam(':SEGUNDO_NOMBRE', $SEGUNDO_NOMBRE);
    $sentenciaSQL->bindParam(':PRIMER_APELLIDO', $PRIMER_APELLIDO);
    $sentenciaSQL->bindParam(':SEGUNDO_APELLIDO', $SEGUNDO_APELLIDO);
    $sentenciaSQL->bindParam(':NUMERO_DE_CEDULA_DE_CIUDADANIA', $NUMERO_DE_CEDULA_DE_CIUDADANIA);
    $sentenciaSQL->bindParam(':TELEFONO_DE_CONTACTO', $TELEFONO_DE_CONTACTO);
    $sentenciaSQL->bindParam(':DIRECCION_CORRESPONDENCIA', $DIRECCION_CORRESPONDENCIA);
    $sentenciaSQL->bindParam(':CORREO_ELECTRONICO', $CORREO_ELECTRONICO);
    $sentenciaSQL->bindParam(':FECHA_DE_NACIMIENTO', $FECHA_DE_NACIMIENTO);
    $sentenciaSQL->bindParam(':EDAD', $EDAD);
    $sentenciaSQL->bindParam(':GENERO', $GENERO);
    $sentenciaSQL->bindParam(':ENFOQUE_DIFERE', $ENFOQUE_DIFERE);
    $sentenciaSQL->bindParam(':PARENTEZCO_CON_EL_JEFE_DEL_HOGAR', $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR);
    $sentenciaSQL->bindParam(':NOMBRE_COMPLETO_FAMILIAR', $NOMBRE_COMPLETO_FAMILIAR);
    $sentenciaSQL->bindParam(':TIPO_DE_DOC', $TIPO_DE_DOC);
    $sentenciaSQL->bindParam(':NUMERO_DOCUMENTO_DE_IDENTIDAD', $NUMERO_DOCUMENTO_DE_IDENTIDAD);
    $sentenciaSQL->bindParam(':EDAD_FAMILIAR', $EDAD_FAMILIAR);
    $sentenciaSQL->bindParam(':GENERO_FAMILIAR', $GENERO_FAMILIAR);

    /*$sentenciaSQL->bindParam(':PARENTEZCO_CON_EL_JEFE_DEL_HOGAR1', $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR1);
    $sentenciaSQL->bindParam(':NOMBRE_COMPLETO_FAMILIAR1', $NOMBRE_COMPLETO_FAMILIAR1);
    $sentenciaSQL->bindParam(':TIPO_DE_DOC1', $TIPO_DE_DOC1);
    $sentenciaSQL->bindParam(':NUMERO_DOCUMENTO_DE_IDENTIDAD1', $NUMERO_DOCUMENTO_DE_IDENTIDAD1);
    $sentenciaSQL->bindParam(':EDAD_FAMILIAR1', $EDAD_FAMILIAR1);
    $sentenciaSQL->bindParam(':GENERO_FAMILIAR1', $GENERO_FAMILIAR1);*/

    $sentenciaSQL->bindParam(':SUBSIDIO', $SUBSIDIO);
    $sentenciaSQL->bindParam(':ESTADO', $ESTADO);
    $sentenciaSQL->bindParam(':SUBREGION', $SUBREGION);
    $sentenciaSQL->bindParam(':MUNICIPIO', $MUNICIPIO);
    $sentenciaSQL->bindParam(':NOMBRE_PROYECTO', $NOMBRE_PROYECTO);
    $sentenciaSQL->bindParam(':NIT_CONSTRUCTOR', $NIT_CONSTRUCTOR);
    $sentenciaSQL->bindParam(':RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO', $RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO);
    $sentenciaSQL->bindParam(':CORREO_CONSTRUCTOR', $CORREO_CONSTRUCTOR);
    $sentenciaSQL->bindParam(':TELEFONO_CONSTRUCTOR', $TELEFONO_CONSTRUCTOR);
    $sentenciaSQL->bindParam(':VALOR_TOTAL_VIVIENDA', $VALOR_TOTAL_VIVIENDA);
    $sentenciaSQL->bindParam(':FECHA_ESTIMADA_VIVIENDA', $FECHA_ESTIMADA_VIVIENDA);





   /* $SAPOS= array($PARENTEZCO_CON_EL_JEFE_DEL_HOGAR,$PARENTEZCO_CON_EL_JEFE_DEL_HOGAR1);

    foreach ($SAPOS as $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR) {
      $conexion= "INSERT INTO db1  (PARENTEZCO_CON_EL_JEFE_DEL_HOGAR) VALUES ('$PARENTEZCO_CON_EL_JEFE_DEL_HOGAR')";
      
    }*/




    

    /*crear un nuevo archivo renombrado que junte la fecha con el nombre de la foto*/
    $nombreArchivo1 = ($ADJUNTAR_CEDULA_POSTULANTE != "") ?  $_FILES["ADJUNTAR_CEDULA_POSTULANTE"]["name"] : "sin cedula.jpg";
    $nombreArchivo2 = ($ADJUNTAR_SOPORTE_ENFOQUE != "") ? $_FILES["ADJUNTAR_SOPORTE_ENFOQUE"]["name"] : "Sin Enfoque.jpg";
    $nombreArchivo3 = ($ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL != "") ? $_FILES["ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL"]["name"] : "Sin Subsidio.jpg";
    $nombreArchivo4 = ($ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA != "") ? $_FILES["ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA"]["name"] : "Sin Certificado.jpg";

    /*enuncia que hay un archivo temporal en la casilla de imagen para luego decirle que si hay un archivo en ese archivo lo suba a la carpeta*/
    $tmpImagen1 = $_FILES["ADJUNTAR_CEDULA_POSTULANTE"]["tmp_name"];
    $tmpImagen2 = $_FILES["ADJUNTAR_SOPORTE_ENFOQUE"]["tmp_name"];
    $tmpImagen3 = $_FILES["ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL"]["tmp_name"];
    $tmpImagen4 = $_FILES["ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA"]["tmp_name"];

    /* enunciar como se crea la carpeta base y se como se llamara la carpeta nueva y va a llamarse igual a la imagen*/
    $nombre_carpeta = "adjuntos/" . $NUMERO_DE_CEDULA_DE_CIUDADANIA . "";

    /* creacion de nueva carperta dentro de la carpeta base*/
    if (!is_dir($nombre_carpeta)) {
      if (!mkdir($nombre_carpeta, 0700, true)) {
        die('Fallo al crear las carpetas...');
      }
    }

    /*enviar archivo a la carpeta img es opcion inicial*/
    if ($tmpImagen1 . $tmpImagen2 . $tmpImagen3 != "") {
      move_uploaded_file($tmpImagen1, "$nombre_carpeta/" . $nombreArchivo1);
      move_uploaded_file($tmpImagen2, "$nombre_carpeta/" . $nombreArchivo2);
      move_uploaded_file($tmpImagen3, "$nombre_carpeta/" . $nombreArchivo3);
      move_uploaded_file($tmpImagen4, "$nombre_carpeta/" . $nombreArchivo4);
    }
    $sentenciaSQL->bindParam(':ADJUNTAR_CEDULA_POSTULANTE', $nombreArchivo1);
    $sentenciaSQL->bindParam(':ADJUNTAR_SOPORTE_ENFOQUE', $nombreArchivo2);
    $sentenciaSQL->bindParam(':ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL', $nombreArchivo3);
    $sentenciaSQL->bindParam(':ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA', $nombreArchivo4);


    /*$sentenciaSQL->bindParam(':ADJUNTAR_CEDULA_POSTULANTE', $nombreArchivo1);*/
    $sentenciaSQL->execute();

    //mensaje de envio
    $mensaje = "FELICITACIONES, TU FORMULARIO HA SIDO REGISTRADO CORRECTAMENTE";

    /*vuelve al fromulario en blanco y saca mensaje de formulario enviado0*/
    header("location:formulario.php?mensaje=" . $mensaje);

    break;
}

$sentenciaSQL = $conexion->prepare("SELECT *FROM db1");
$sentenciaSQL->execute();

$listaPostulados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>


<?php
// mensaje de envio

if (isset($_GET['mensaje'])) { ?>
  <script>
    Swal.fire({
      icon: "succes",
      title: "<?php echo $_GET['mensaje']; ?>",
    });
  </script>
<?php } ?>



<?php

session_start();
$nombre = $_SESSION['rol'];

if (isset($_SESSION['rol'])) {
?>



  <div class="card">

    <div class="d-flex flex-row-reverse bd-highlight">
      <div class="p-2 bd-highlight">
        <a href="javascript:salir()" class="btn rounded-pill btn-warning " role="button">Cerrar sesión</a>
      </div>
    </div>






    <div class=" card-header">
      <h2 align="center">FORMULARIO DE POSTULACION RECURSOS COMPLEMENTARIOS</h2>
    </div>

    <div class="card-body">

      <h4> TRATAMIENTO DE DATOS</h4>

      <form method="POST" enctype="multipart/form-data" class="row g-4">

        <div class="col-12" "row g-2">

          <div class="form-check">
            <input class="form-check-input" name="TRATAMIENTO_DE_DATOS" type="checkbox" value="Acepto" id="invalidCheck2" required>

            <label class="form-check-label" for="invalidCheck2">
              "La Empresa de Vivienda de Antioquia -VIVA-, en cumplimiento de lo previsto por la Ley 1581 de 2012, sus decretos reglamentarios y demás normas concordantes, es el responsable del tratamiento de los datos personales, por lo anterior con el diligenciamiento en la presente lista de asistencia, de manera voluntaria, previa, explícita, informada e inequívoca, se autoriza a la Empresa de Vivienda de Antioquia -VIVA-, para tratar los datos personales consignados de acuerdo con la Política de Tratamiento de Datos Personales de la Empresa de Vivienda de Antioquia -VIVA-, los cuales serán incorporados en las base de datos, siendo tratados con la finalidad de enviar informaciOn, así como la invitación a eventos que realice la entidad. Se deja constancia que la información obtenida para el tratamiento de los datos personales, se suministra de forma voluntaria y verídica.

              La Empresa de Vivienda de Antioquia -VIVA-, reconoce que quien registra los datos tendrá derecho a conocer, actualizar y rectificar los datos personales y en los casos en que sea procedente a suprimirlos o revocar la autorización otorgada.

              Los datos proporcionados serán tratados de acuerdo a la política de tratamiento de datos personales de la Empresa de Vivienda de Antioquia -viva- y a la ley 1581 de 2012. y podrán ser consultados en nuestra sede ubicada en la carrera 43a # 34-95 Centro Comercial Almacentro, torre sur, piso 10, Medellín, Antioquia y nuestra página Web".
            </label>
          </div>
          <br>
          <hr align="center" color="black">
        </div>


        <div class="col-md-4">
          <label for="date" class="form-label">Fecha que llenas este formulario.</label>
          <input type="date" id="date" value="<?php echo $FECHA_DE_LLENADO; ?>" name="FECHA_DE_LLENADO" max="2030-12-31" class="form-control" required>
        </div>

        <h3>1. DATOS DEL POSTULANTE</h3>

        <h4>1.1. INFORMACION PERSONAL POSTULANTE <br></h4>

        <div class="col-md-6" "row g-4">
          <label for="validationDefault01" class="form-label">Primer nombre.</label>
          <input type="text" class="form-control" value="<?php echo $PRIMER_NOMBRE; ?>" name="PRIMER_NOMBRE" id="validationDefault01" placeholder="NOMBRE" required>
          <div id="nameHelp" class="form-text">Solo el primer nombre.</div>
        </div>

        <div class="col-md-6" "row g-4">
          <label for="validationDefault01" class="form-label">Segundo nombre.</label>
          <input type="text" class="form-control" value="<?php echo $SEGUNDO_NOMBRE; ?>" name="SEGUNDO_NOMBRE" id="validationDefault01" placeholder="NOMBRE">
          <div id="nameHelp" class="form-text">El segundo nombre si lo tiene.</div>
        </div>

        <div class="col-md-6" "row g-4">
          <label for="validationDefault01" class="form-label">Primer Apellido.</label>
          <input type="text" class="form-control" value="<?php echo $PRIMER_APELLIDO; ?>" name="PRIMER_APELLIDO" id="validationDefault01" placeholder="APELLIDO">
          <div id="nameHelp" class="form-text">Solo el primer apellido.</div>
        </div>
        <div class="col-md-6" "row g-4">
          <label for="validationDefault01" class="form-label">Segundo Apellido.</label>
          <input type="text" class="form-control" value="<?php echo $SEGUNDO_APELLIDO; ?>" name="SEGUNDO_APELLIDO" id="validationDefault01" placeholder="APELLIDO">
          <div id="nameHelp" class="form-text">Solo el segundo apellido.</div>
        </div>

        <div class="col-md-2">
          <label for="validationDefault02" class="form-label">Cédula.</label>
          <input type="text" class="form-control" value="<?php echo $NUMERO_DE_CEDULA_DE_CIUDADANIA; ?>" name="NUMERO_DE_CEDULA_DE_CIUDADANIA" id="validationDefault02" placeholder="01010101010">
          <div id="nameHelp" class="form-text">Sin puntos ni comas.</div>
        </div>

        <div class="col-md-3">

          <label for="validationDefaultCelular" class="form-label">Tel. de Contacto.</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">+57</span>
            <input type="text" class="form-control" value="<?php echo $TELEFONO_DE_CONTACTO; ?>" name="TELEFONO_DE_CONTACTO" id="validationDefaultCelular" aria-describedby="inputGroupPrepend2">

          </div>
          <div id=" nameHelp" class="form-text">Número telefonico.
          </div>

        </div>

        <div class="col-md-4">
          <label for="validationDefault03" class="form-label">Direccion de correspondencia.</label>
          <input type="text" class="form-control" value="<?php echo $DIRECCION_CORRESPONDENCIA; ?>" name="DIRECCION_CORRESPONDENCIA" id="validationDefault03" placeholder="Direccion donde enviar la correspondencia">
        </div>

        <div class="col-md-3">
          <label for="validationDefault03" class="form-label">Correo Electronico.</label>
          <input type="text" class="form-control" value="<?php echo $CORREO_ELECTRONICO; ?>" name="CORREO_ELECTRONICO" id="validationDefault03" placeholder="jose@perez.com">
        </div>

        <div class="row mb-3">
          <div class="col-md-3 col-sm-6">
            <label for="date" class="form-label">Fecha de nacimiento:</label>
            <input type="date" id="fechaNacimiento" onchange="calcularEdad()" value="<?php echo $FECHA_DE_NACIMIENTO; ?>" name="FECHA_DE_NACIMIENTO" max="2030-12-31" class="form-control">
          </div>

          <div class="col-md-1 col-sm-6">
            <label for="validationDefault04" class="form-label">Edad:</label>
            <input type="text" id="edad" readonly value="<?php echo $EDAD; ?>" name="EDAD" class="form-control">
          </div>

          <div class="col-md-2 col-sm-6">
            <label for="validationDefault04" class="form-label">Sexo.</label>
            <select class="form-select" value="<?php echo $GENERO; ?>" name="GENERO" id="validationDefault04">
              <option selected disabled value="true"> Seleccione... </option>
              <option>Másculino</option>
              <option>Fémenino</option>
              <option>Otro</option>
            </select>
          </div>

          <div class="col-md-6 col-sm-12">
            <label for="formFile" class="form-label">Cedula:</label>
            <input class="form-control btn rounded-pill btn-info" type="file" value="<?php echo $ADJUNTAR_CEDULA_POSTULANTE; ?>" name="ADJUNTAR_CEDULA_POSTULANTE" id="ADJUNTAR_CEDULA_POSTULANTE" placeholder="jpg, pdf, .doc">
            <div id="nameHelp" class="form-text">JPG, PDF, DOCX.</div>
          </div>
        </div>
        <div class="col-md-12">
          <hr align="center" color="black">
        </div>

        <h4>1.2. ENFOQUE DIFERENCIAL</h4>

        <div class="col-md-4" "row g-2">
          <label for="validationDefault04" class="form-label">Enfoque diferencial.</label>
          <select class="form-select" value="<?php echo $ENFOQUE_DIFERE; ?>" name="ENFOQUE_DIFERE" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Ninguno</option>
            <option>Mujero o Hombre en cabeza de hogar</option>
            <option>Víctimas</option>
            <option>Indígena</option>
            <option>LGBTIQ+</option>
            <option>Afrodescendiente</option>
            <option>Discapacidad</option>
          </select>
        </div>

        <div class="col-md-2">

        </div>
        <!--selecciona el documento o foto//-->
        <div class="col-md-5">
          <label for="formFile" class="form-label md-4">Soporte:</label>
          <input class="form-control  btn rounded-pill btn-info" type="file" value="<?php echo $ADJUNTAR_SOPORTE_ENFOQUE; ?>" name="ADJUNTAR_SOPORTE_ENFOQUE" id="ADJUNTAR_SOPORTE_ENFOQUE" placeholder="jpg, pdf, .doc">
          <div id="nameHelp" class="form-text">JPG, PDF, DOCX.</div>
        </div>

        <div class="col-md-12">
          <hr align="center" color="black">
        </div>


        <h4>1.3 INFORMACION COMPLEMENTARIA DEL GRUPO FAMILIAR</h4>

        <div class="col-md-4" "row g-3">
          <label for="validationDefault04" class="form-label">Parentesco.</label>
          <select class="form-select" value="<?php echo $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR; ?>" name="PARENTEZCO_CON_EL_JEFE_DEL_HOGAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>CONYUGUE / COMPAÑERO(A)</option>
            <option>HIJO(A)</option>
            <option>HERMANO(A)</option>
            <option>PADRE</option>
            <option>MADRE</option>
            <option>TIO(A)</option>
            <option>SOBRINO(A)</option>
            <option>ABUELO (A)</option>
            <option>BISABUELO(A)</option>
            <option>NIETO (A)</option>
            <option>SUEGRO(A)</option>
            <option>CUÑADO(A)</option>
            <option>NUERA</option>
            <option>YERNO</option>
            <option>PADRE O MADRE ADOPTIVO(A)</option>
            <option>HIJO(A) ADOPTIVO(A)</option>
            <option>OTRO</option>
          </select>
        </div>

        <div class="col-md-5">
          <label for="validationDefault01" class="form-label">Nombre Completo.</label>
          <input type="text" class="form-control" value="<?php echo $NOMBRE_COMPLETO_FAMILIAR; ?>" name="NOMBRE_COMPLETO_FAMILIAR" id="validationDefault01" placeholder="NOMBRE Y APELLIDO">
          <div id="nameHelp" class="form-text">El nombre completo incluye los apellidos.</div>
        </div>

        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Tipo de doc.</label>
          <select class="form-select" value="<?php echo $TIPO_DE_DOC; ?>" name="TIPO_DE_DOC" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Cédula de CiudadanIa</option>
            <option>Registro Civil</option>
            <option>Tarjeta de Identidad</option>
            <option>Cédula de ExtranjerIa</option>
            <option>Número de IdentificaciOn Personal</option>
            <option>Número Único de IdentificaciOn personal</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Documento.</label>
          <input type="text" class="form-control" value="<?php echo $NUMERO_DOCUMENTO_DE_IDENTIDAD; ?>" name="NUMERO_DOCUMENTO_DE_IDENTIDAD" id="validationDefault02" placeholder="01010101010">
          <div id="nameHelp" class="form-text">Sin puntos ni comas.</div>
        </div>

        <div class="col-md-1">
          <label for="validationDefault02" class="form-label">Edad.</label>
          <input type="text" class="form-control" value="<?php echo $EDAD_FAMILIAR; ?>" name="EDAD_FAMILIAR" id="validationDefault02" placeholder="#">
        </div>

        <div class="col-md-3" "row g-2">
          <label for="validationDefault04" class="form-label">Sexo.</label>
          <select class="form-select" value="<?php echo $GENERO_FAMILIAR; ?>" name="GENERO_FAMILIAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Másculino</option>
            <option>Fémenino</option>
            <option>Otro</option>
          </select>

        </div>
        <div class="col-md-10">
          <hr align="center" color="black">
        </div>


        <div class="col-md-4" "row g-3">
          <label for="validationDefault04" class="form-label">Parentesco.</label>
          <select class="form-select" value="<?php echo $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR; ?>" name="PARENTEZCO_CON_EL_JEFE_DEL_HOGAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>CONYUGUE / COMPAÑERO(A)</option>
            <option>HIJO(A)</option>
            <option>HERMANO(A)</option>
            <option>PADRE</option>
            <option>MADRE</option>
            <option>TIO(A)</option>
            <option>SOBRINO(A)</option>
            <option>ABUELO (A)</option>
            <option>BISABUELO(A)</option>
            <option>NIETO (A)</option>
            <option>SUEGRO(A)</option>
            <option>CUÑADO(A)</option>
            <option>NUERA</option>
            <option>YERNO</option>
            <option>PADRE O MADRE ADOPTIVO(A)</option>
            <option>HIJO(A) ADOPTIVO(A)</option>
            <option>OTRO</option>
          </select>
        </div>

        <div class="col-md-5">
          <label for="validationDefault01" class="form-label">Nombre Completo.</label>
          <input type="text" class="form-control" value="<?php echo $NOMBRE_COMPLETO_FAMILIAR; ?>" name="NOMBRE_COMPLETO_FAMILIAR" id="validationDefault01" placeholder="NOMBRE Y APELLIDO">
          <div id="nameHelp" class="form-text">El nombre completo incluye los apellidos.</div>
        </div>

        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Tipo de doc.</label>
          <select class="form-select" value="<?php echo $TIPO_DE_DOC; ?>" name="TIPO_DE_DOC" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Cédula de CiudadanIa</option>
            <option>Registro Civil</option>
            <option>Tarjeta de Identidad</option>
            <option>Cédula de ExtranjerIa</option>
            <option>Número de IdentificaciOn Personal</option>
            <option>Número Único de IdentificaciOn personal</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Documento.</label>
          <input type="text" class="form-control" value="<?php echo $NUMERO_DOCUMENTO_DE_IDENTIDAD; ?>" name="NUMERO_DOCUMENTO_DE_IDENTIDAD" id="validationDefault02" placeholder="01010101010">
          <div id="nameHelp" class="form-text">Sin puntos ni comas.</div>
        </div>

        <div class="col-md-1">
          <label for="validationDefault02" class="form-label">Edad.</label>
          <input type="text" class="form-control" value="<?php echo $EDAD_FAMILIAR; ?>" name="EDAD_FAMILIAR" id="validationDefault02" placeholder="#">
        </div>

        <div class="col-md-3" "row g-2">
          <label for="validationDefault04" class="form-label">Sexo.</label>
          <select class="form-select" value="<?php echo $GENERO_FAMILIAR; ?>" name="GENERO_FAMILIAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Másculino</option>
            <option>Fémenino</option>
            <option>Otro</option>
          </select>

        </div>
        <div class="col-md-10">
          <hr align="center" color="black">
        </div>




        <div class="col-md-4" "row g-3">
          <label for="validationDefault04" class="form-label">Parentesco.</label>
          <select class="form-select" value="<?php echo $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR; ?>" name="PARENTEZCO_CON_EL_JEFE_DEL_HOGAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>CONYUGUE / COMPAÑERO(A)</option>
            <option>HIJO(A)</option>
            <option>HERMANO(A)</option>
            <option>PADRE</option>
            <option>MADRE</option>
            <option>TIO(A)</option>
            <option>SOBRINO(A)</option>
            <option>ABUELO (A)</option>
            <option>BISABUELO(A)</option>
            <option>NIETO (A)</option>
            <option>SUEGRO(A)</option>
            <option>CUÑADO(A)</option>
            <option>NUERA</option>
            <option>YERNO</option>
            <option>PADRE O MADRE ADOPTIVO(A)</option>
            <option>HIJO(A) ADOPTIVO(A)</option>
            <option>OTRO</option>
          </select>
        </div>

        <div class="col-md-5">
          <label for="validationDefault01" class="form-label">Nombre Completo.</label>
          <input type="text" class="form-control" value="<?php echo $NOMBRE_COMPLETO_FAMILIAR; ?>" name="NOMBRE_COMPLETO_FAMILIAR" id="validationDefault01" placeholder="NOMBRE Y APELLIDO">
          <div id="nameHelp" class="form-text">El nombre completo incluye los apellidos.</div>
        </div>

        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Tipo de doc.</label>
          <select class="form-select" value="<?php echo $TIPO_DE_DOC; ?>" name="TIPO_DE_DOC" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Cédula de CiudadanIa</option>
            <option>Registro Civil</option>
            <option>Tarjeta de Identidad</option>
            <option>Cédula de ExtranjerIa</option>
            <option>Número de IdentificaciOn Personal</option>
            <option>Número Único de IdentificaciOn personal</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Documento.</label>
          <input type="text" class="form-control" value="<?php echo $NUMERO_DOCUMENTO_DE_IDENTIDAD; ?>" name="NUMERO_DOCUMENTO_DE_IDENTIDAD" id="validationDefault02" placeholder="01010101010">
          <div id="nameHelp" class="form-text">Sin puntos ni comas.</div>
        </div>

        <div class="col-md-1">
          <label for="validationDefault02" class="form-label">Edad.</label>
          <input type="text" class="form-control" value="<?php echo $EDAD_FAMILIAR; ?>" name="EDAD_FAMILIAR" id="validationDefault02" placeholder="#">
        </div>

        <div class="col-md-3" "row g-2">
          <label for="validationDefault04" class="form-label">Sexo.</label>
          <select class="form-select" value="<?php echo $GENERO_FAMILIAR; ?>" name="GENERO_FAMILIAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Másculino</option>
            <option>Fémenino</option>
            <option>Otro</option>
          </select>

        </div>
        <div class="col-md-10">
          <hr align="center" color="black">
        </div>


        <div class="col-md-4" "row g-3">
          <label for="validationDefault04" class="form-label">Parentesco.</label>
          <select class="form-select" value="<?php echo $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR; ?>" name="PARENTEZCO_CON_EL_JEFE_DEL_HOGAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>CONYUGUE / COMPAÑERO(A)</option>
            <option>HIJO(A)</option>
            <option>HERMANO(A)</option>
            <option>PADRE</option>
            <option>MADRE</option>
            <option>TIO(A)</option>
            <option>SOBRINO(A)</option>
            <option>ABUELO (A)</option>
            <option>BISABUELO(A)</option>
            <option>NIETO (A)</option>
            <option>SUEGRO(A)</option>
            <option>CUÑADO(A)</option>
            <option>NUERA</option>
            <option>YERNO</option>
            <option>PADRE O MADRE ADOPTIVO(A)</option>
            <option>HIJO(A) ADOPTIVO(A)</option>
            <option>OTRO</option>
          </select>
        </div>

        <div class="col-md-5">
          <label for="validationDefault01" class="form-label">Nombre Completo.</label>
          <input type="text" class="form-control" value="<?php echo $NOMBRE_COMPLETO_FAMILIAR; ?>" name="NOMBRE_COMPLETO_FAMILIAR" id="validationDefault01" placeholder="NOMBRE Y APELLIDO">
          <div id="nameHelp" class="form-text">El nombre completo incluye los apellidos.</div>
        </div>

        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Tipo de doc.</label>
          <select class="form-select" value="<?php echo $TIPO_DE_DOC; ?>" name="TIPO_DE_DOC" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Cédula de CiudadanIa</option>
            <option>Registro Civil</option>
            <option>Tarjeta de Identidad</option>
            <option>Cédula de ExtranjerIa</option>
            <option>Número de IdentificaciOn Personal</option>
            <option>Número Único de IdentificaciOn personal</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Documento.</label>
          <input type="text" class="form-control" value="<?php echo $NUMERO_DOCUMENTO_DE_IDENTIDAD; ?>" name="NUMERO_DOCUMENTO_DE_IDENTIDAD" id="validationDefault02" placeholder="01010101010">
          <div id="nameHelp" class="form-text">Sin puntos ni comas.</div>
        </div>

        <div class="col-md-1">
          <label for="validationDefault02" class="form-label">Edad.</label>
          <input type="text" class="form-control" value="<?php echo $EDAD_FAMILIAR; ?>" name="EDAD_FAMILIAR" id="validationDefault02" placeholder="#">
        </div>

        <div class="col-md-3" "row g-2">
          <label for="validationDefault04" class="form-label">Sexo.</label>
          <select class="form-select" value="<?php echo $GENERO_FAMILIAR; ?>" name="GENERO_FAMILIAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Másculino</option>
            <option>Fémenino</option>
            <option>Otro</option>
          </select>

        </div>
        <div class="col-md-10">
          <hr align="center" color="black">
        </div>



        <div class="col-md-4" "row g-3">
          <label for="validationDefault04" class="form-label">Parentesco.</label>
          <select class="form-select" value="<?php echo $PARENTEZCO_CON_EL_JEFE_DEL_HOGAR; ?>" name="PARENTEZCO_CON_EL_JEFE_DEL_HOGAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>CONYUGUE / COMPAÑERO(A)</option>
            <option>HIJO(A)</option>
            <option>HERMANO(A)</option>
            <option>PADRE</option>
            <option>MADRE</option>
            <option>TIO(A)</option>
            <option>SOBRINO(A)</option>
            <option>ABUELO (A)</option>
            <option>BISABUELO(A)</option>
            <option>NIETO (A)</option>
            <option>SUEGRO(A)</option>
            <option>CUÑADO(A)</option>
            <option>NUERA</option>
            <option>YERNO</option>
            <option>PADRE O MADRE ADOPTIVO(A)</option>
            <option>HIJO(A) ADOPTIVO(A)</option>
            <option>OTRO</option>
          </select>
        </div>

        <div class="col-md-5">
          <label for="validationDefault01" class="form-label">Nombre Completo.</label>
          <input type="text" class="form-control" value="<?php echo $NOMBRE_COMPLETO_FAMILIAR; ?>" name="NOMBRE_COMPLETO_FAMILIAR" id="validationDefault01" placeholder="NOMBRE Y APELLIDO">
          <div id="nameHelp" class="form-text">El nombre completo incluye los apellidos.</div>
        </div>

        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Tipo de doc.</label>
          <select class="form-select" value="<?php echo $TIPO_DE_DOC; ?>" name="TIPO_DE_DOC" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Cédula de CiudadanIa</option>
            <option>Registro Civil</option>
            <option>Tarjeta de Identidad</option>
            <option>Cédula de ExtranjerIa</option>
            <option>Número de IdentificaciOn Personal</option>
            <option>Número Único de IdentificaciOn personal</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Documento.</label>
          <input type="text" class="form-control" value="<?php echo $NUMERO_DOCUMENTO_DE_IDENTIDAD; ?>" name="NUMERO_DOCUMENTO_DE_IDENTIDAD" id="validationDefault02" placeholder="01010101010">
          <div id="nameHelp" class="form-text">Sin puntos ni comas.</div>
        </div>

        <div class="col-md-1">
          <label for="validationDefault02" class="form-label">Edad.</label>
          <input type="text" class="form-control" value="<?php echo $EDAD_FAMILIAR; ?>" name="EDAD_FAMILIAR" id="validationDefault02" placeholder="#">
        </div>

        <div class="col-md-3" "row g-2">
          <label for="validationDefault04" class="form-label">Sexo.</label>
          <select class="form-select" value="<?php echo $GENERO_FAMILIAR; ?>" name="GENERO_FAMILIAR" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Másculino</option>
            <option>Fémenino</option>
            <option>Otro</option>
          </select>

        </div>


        <div class="col-md-12">
          <hr align="center" color="black">
        </div>


        <h4>2. INFORMACION DEL SUBSIDIO</h4>

        <div class="col-md-3" "row g-2">
          <label for="validationDefault04" class="form-label">Subsidio.</label>
          <select class="form-select" value="<?php echo $SUBSIDIO; ?>" name="SUBSIDIO" id="validationDefault04">
            <option selected disabled value="true"> Selecione... </option>
            <option>Mi_Casa_ya</option>
            <option>Comfenalco</option>
            <option>Comfamiliar_Camacol</option>
            <option>Comfama</option>
            <option>Municipio</option>
            <option>Otro</option>

          </select>
        </div>

        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Estado del Subsidio.</label>
          <select class="form-select" value="<?php echo $ESTADO; ?>" name="ESTADO" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>
            <option>Asignado</option>
            <option>Rechazado</option>
            <option>Legalizado</option>
            <option>Prorrogado</option>
            <option>Vencido</option>

          </select>
        </div>

        <!--selecciona el documento o foto//-->
        <div class="col-md-5">
          <label for="formFile" class="form-label md-4">Soporte:</label>
          <input class="form-control  btn rounded-pill btn-info" type="file" value="<?php echo $ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL; ?>" name="ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL" id="ADJUNTAR_CERTIFICADO_DEL_SUBSIDIO_PARA_MUNICIPAL" placeholder="jpg, pdf, .doc">
          <div id="nameHelp" class="form-text">JPG, PDF, DOCX.</div>
        </div>




        <div class="col-md-12">
          <hr align="center" color="black">
        </div>


        <h4>3. INFORMACION DEL PROYECTO</h4>

        <div class="col-md-2" "row g-2">
          <label for="validationDefault04" class="form-label">Subregion.</label>
          <select class="form-select" value="<?php echo $SUBREGION; ?>" name="SUBREGION" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>

            <option>AMDVA</option>

            <option>Oriente</option>

            <option>Occidente</option>

            <option>Bajo cauca</option>

            <option>Magadalena medio</option>

            <option>Nordeste</option>

            <option>Norte</option>

            <option>Suroeste</option>

            <option>Uraba</option>
          </select>
        </div>


        <div class="col-md-3" "row g-2">
          <label for="validationDefault04" class="form-label">Municipio.</label>
          <select class="form-select" value="<?php echo $MUNICIPIO; ?>" name="MUNICIPIO" id="validationDefault04">
            <option selected disabled value="true"> Seleccione... </option>

            <option>Abejorral</option>

            <option>Abriaquí</option>

            <option>Alejandría</option>

            <option>Amagá</option>

            <option>Amalfi</option>

            <option>Andes</option>

            <option>Angelópolis</option>

            <option>Angostura</option>

            <option>Anorí</option>

            <option>Anzá</option>

            <option>Apartadó</option>

            <option>Arboletes</option>

            <option>Argelia</option>

            <option>Armenia</option>

            <option>Barbosa</option>

            <option>Bello</option>

            <option>Belmira</option>

            <option>Betania</option>

            <option>Betulia</option>

            <option>Briceño</option>

            <option>Buriticá</option>

            <option>Cáceres</option>

            <option>Caicedo</option>

            <option>Caldas</option>

            <option>Campamento</option>

            <option>Cañasgordas</option>

            <option>Caracolí</option>

            <option>Caramanta</option>

            <option>Carepa</option>

            <option>Carolina</option>

            <option>Caucasia</option>

            <option>Chigorodó</option>

            <option>Cisneros</option>

            <option>Ciudad Bolívar</option>

            <option>Cocorná</option>

            <option>Concepción</option>

            <option>Concordia</option>

            <option>Copacabana</option>

            <option>Dabeiba</option>

            <option>Donmatías</option>

            <option>Ebéjico</option>

            <option>El Bagre</option>

            <option>El Carmen de Viboral </option>

            <option>Peñol</option>

            <option>Retiro</option>

            <option>El Santuario</option>

            <option>Entrerríos</option>

            <option>Envigado</option>

            <option>Fredonia</option>

            <option>Frontino</option>

            <option>Giraldo</option>

            <option>Girardota</option>

            <option>Gómez Plata</option>

            <option>Granada</option>

            <option>Guadalupe</option>

            <option>Guarne</option>

            <option>Guatapé</option>

            <option>Heliconia</option>

            <option>Hispania</option>

            <option>Itagüí</option>

            <option>Ituango</option>

            <option>Jardín</option>

            <option>Jericó</option>

            <option>La Ceja</option>

            <option>La Estrella</option>

            <option>La Pintada</option>

            <option>La Unión</option>

            <option>Liborina</option>

            <option>Maceo</option>

            <option>Marinilla</option>

            <option>Medellín</option>

            <option>Montebello</option>

            <option>Murindó</option>

            <option>Mutatá</option>

            <option>Nariño</option>

            <option>Nechí</option>

            <option>Necoclí</option>

            <option>Olaya</option>

            <option>Peque</option>

            <option>Pueblorrico</option>

            <option>Puerto Berrío</option>

            <option>Puerto Nare</option>

            <option>Puerto Triunfo</option>

            <option>Remedios</option>

            <option>Rionegro</option>

            <option>Sabanalarga</option>

            <option>Sabaneta</option>

            <option>Salgar</option>

            <option>San Andrés de Cuerquia</option>

            <option>San Carlos</option>

            <option>San Francisco</option>

            <option>San Jerónimo</option>

            <option>San José de la Montaña</option>

            <option>San Juan de Urabá</option>

            <option>San Luis</option>

            <option>San Pedro de los Milagros</option>

            <option>San Pedro de Urabá</option>

            <option>San Rafael</option>

            <option>San Roque</option>

            <option>San Vicente Ferrer</option>

            <option>Santa Bárbara</option>

            <option>Santa Fé de Antioquia</option>

            <option>Santa Rosa de Osos</option>

            <option>Santo Domingo</option>

            <option>Segovia</option>

            <option>Sonsón</option>

            <option>Sopetrán</option>

            <option>Támesis</option>

            <option>Tarazá</option>

            <option>Tarso</option>

            <option>Titiribí</option>

            <option>Toledo</option>

            <option>Turbo</option>

            <option>Uramita</option>

            <option>Urrao</option>

            <option>Valdivia</option>

            <option>Valparaíso</option>

            <option>Vegachí</option>

            <option>Venecia</option>

            <option>Vigía del Fuerte</option>

            <option>Yalí</option>

            <option>Yarumal</option>

            <option>Yolombó</option>

            <option>Yondó</option>

            <option>Zaragoza</option>

          </select>
        </div>



        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Nombre del proyecto.</label>
          <input type="text" class="form-control" value="<?php echo $NOMBRE_PROYECTO; ?>" name="NOMBRE_PROYECTO" id="validationDefault05">
        </div>

        <div class="col-md-2">
          <label for="validationDefault05" class="form-label">Nit constructor.</label>
          <input type="text" class="form-control" value="<?php echo $NIT_CONSTRUCTOR; ?>" name="NIT_CONSTRUCTOR" id="validationDefault05">
        </div>

        <div class="col-md-4">
          <label for="validationDefault05" class="form-label">Razón de social constructor o promotor del proyecto.</label>
          <input type="text" class="form-control" value="<?php echo $RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO; ?>" name="RAZON_SOCIAL_CONTRUCTOR_O_PROMOTOR_DEL_PROYECTO" id="validationDefault05">
        </div>

        <div class="col-md-4" "row g-2">
          <label for="validationDefault05" class="form-label">Correo electronico del constructor o promotor del proyecto.</label>
          <input type="text" class="form-control" value="<?php echo $CORREO_CONSTRUCTOR; ?>" name="CORREO_CONSTRUCTOR" id="validationDefault05">
        </div>
        <br>

        <div class="col-md-3">

          <label for="validationDefaultCelular" class="form-label">Tel. de Contacto del constructor.</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">+57</span>
            <input type="text" class="form-control" value="<?php echo $TELEFONO_CONSTRUCTOR; ?>" name="TELEFONO_CONSTRUCTOR" id="validationDefaultCelular" aria-describedby="inputGroupPrepend2">
          </div>
          <div id=" nameHelp" class="form-text">Número telefonico.
          </div>

        </div>


        <div class="col-md-2" "row g-2">
          <label for="validationDefault05" class="form-label">Valor vivienda.</label>
          <input type="text" class="form-control" value="<?php echo $VALOR_TOTAL_VIVIENDA; ?>" name="VALOR_TOTAL_VIVIENDA" id="validationDefault05">
        </div>


        <div class="col-md-4">
          <label for="date" class="form-label">Fecha estimada entrega de la vivienda.</label>

          <input type="date" id="date" value="<?php echo $FECHA_ESTIMADA_VIVIENDA; ?>" name="FECHA_ESTIMADA_VIVIENDA" max="2030-12-31" class="form-control">
        </div>

        <div class="col-md-5">
          <label for="formFile" class="form-label md-4">Soporte certificado postulado por constructora:</label>
          <input class="form-control  btn rounded-pill btn-info" type="file" value="<?php echo $ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA; ?>" name="ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA" id="ADJUNTAR_CERTIFICADO_POSTULADO_DE_CONSTRUCTORA" placeholder="jpg, pdf, .doc">
          <div id="nameHelp" class="form-text">JPG, PDF, DOCX.</div>
        </div>


        <div class="col-md-12">
          <hr align="center" color="black">
        </div>

        <div class="col-12">

          <button type="submit" name="accion" value="Agregar" class="btn rounded-pill btn-primary">Enviar el formulario</button>
        </div>
        <br>

      </form>

    </div>

  </div>

<?php
} else {

  header('Location:./inicio/salir.php');
}

?>







<?php include('pie.php'); ?>