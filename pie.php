</div>
</div>

<script>
    // alerta de salida del fromulario

    function salir() {
        Swal.fire({
            title: '¿DESEAS SALIR DEL FROMULARIO?',

            showCancelButton: true,
            confirmButtonText: 'SI',
            denyButtonText: `NO`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                window.location = "./inicio/salir.php";

            }
        })


    }
</script>


</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>

<script>
    function calcularEdad() {
        var fechaNacimiento = new Date(document.getElementById("fechaNacimiento").value);
        var edadEnMilisegundos = Date.now() - fechaNacimiento.getTime();
        var edadEnAnos = Math.floor(edadEnMilisegundos / 3.15576e+10);
        document.getElementById("edad").value = edadEnAnos;
    }
</script>