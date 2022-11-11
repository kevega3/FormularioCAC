<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Mensaje</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      max-width: 1000px;
      width: 90%;
      margin: 0 auto;
    }
    .bg-dark {
      background: #efefef;
      margin-top: 40px;
      padding: 20px 0;
    }
    .alert {
      font-size: 1.5em;
      position: relative;
      padding: .75rem 1.25rem;
      margin-bottom: 2rem;
      border: 1px solid transparent;
      border-radius: .25rem;
    }
    .alert-primary {
      color: #fff;
      background-color: #16185b;
      /*
      border-color: #b8daff;
      */
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    .mensaje {
      width: 80%;
      font-size: 20px;
      margin: 0 auto 40px;
      color: #000;
    }

    .texto {
      margin-top: 20px;
    }

    .footer {
      width: 100%;
      background: #16185b;
      text-align: center;
      color: #fff;
      padding: 10px;
      font-size: 14px;
    }

    .footer span {
      text-decoration: underline;
    }
    .boton{
      padding: 10px 10px 10px 10px;
      border: 1px solid #16185b;
      border-radius: 20px;
      background: #16185b;
      text-decoration: none;
      color: white;
    }
    .boton:hover{
      background: #0e0f35;
      border: 1px solid #0e0f35;
    }
    .contenedorBoton{
      padding: 0% 25%;
    }
    span{
      color: #16185b;
    }

  </style>
</head>
<body>
  <div class='container'>
    <div class='bg-dark'>
      <div class='alert alert-primary'>
        <center>
        <strong>¡Informacion Importante!</strong>
        </center>
      </div>

      <div class='mensaje'>
        <div class='titulo'>
          <h3>Solicitud de Usuario SISCAC  <span>Habilitado</span></h3> 
        </div>
        <br>
        
      </br>
     
      </br>
      <div class='texto'>
        <p>Ingrese a la siguiente pagina con el siguiente codigo  <strong>{$Token}</strong> para gestionar su solicitud de usuario <b>SISCAC</b>
           <span><b>Este codigo no lo debe compartir con ninguna persona o entidad.</b></span> 
        </p> 
      </div>
        
        </br>
        <center>
          <a class='boton' href='http://localhost/UsuariosSISCAC/' target='_blank'>Generar solicitud</a>
        </center>
      </div>
      <div class='footer'>
        Gracias por su atencion.Atentamente  Cuenta de Alto Costo
      </div>
    </div>
  </div>
</body>
</html>