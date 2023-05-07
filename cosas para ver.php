 
 
 
 
 
 <a href="javascript:salir()" class="btn-flotante btn rounded-pill " role="button">Cerrar sesion</a>


 <style>
     .btn-flotante {
         font-size: 13px;
         /* Cambiar el tamaño de la tipografia */
         text-transform: uppercase;
         /* Texto en mayusculas */
         font-weight: bold;
         /* Fuente en negrita o bold */
         color: #ffffff;
         /* Color del texto */

         /* Borde del boton */

         /* Espacio entre letras */
         background-color: #FDB109;
         /* Color de fondo */
         padding: 6px 6px;
         /* Relleno del boton */
         position: fixed;
         bottom: 40px;
         right: 40px;
         transition: all 300ms ease 0ms;
         box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
         z-index: 99;
     }

     .btn-flotante:hover {
         background-color: #2c2fa5;
         /* Color de fondo al pasar el cursor */
         box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
         transform: translateY(-7px);
     }

     @media only screen and (max-width: 00px) {
         .btn-flotante {
             font-size: 14px;
             padding: 12px 20px;
             bottom: 20px;
             right: 20px;
         }
     }
 </style>