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
          <h3>Estuidio de madurez,codigo <span>Habilitado</span></h3> 
        </div>
        <br>
        
      </br>
     
      </br>
      <div class='texto'>
        <p>
        De conformidad con estudio de madurez en gobierno y gestión de dato y teniendo en cuenta la importancia que requiere diligenciar el formulario nos permitimos compartir el siguiente codigo <strong>{$Token}</strong> Recuerde que <span><b>este codigo no debe ser compartido con ninguna persona o entidad</span></b>
        </p>
      </div>
        
        </br>
        <center>
          <a class='boton' href='http://localhost/UsuariosSISCAC/' target='_blank'>Ir al cuestionario</a>
        </center>
      </div>
      <div class='footer'>
        Gracias por su atencion.Atentamente  Cuenta de Alto Costo
      </div>
    </div>
  </div>
</body>
</html>                       



INSERT INTO `bancorespuesta`(`idPregunta`, `Respuesta`, `Activo`, `TipoPregunta`, `ValTipoPregunta`, `Valor`) VALUES (14,'IPS - HC ELECTRONICA',1,'Multiple_IntegracionSistema','MultiSelect',1), 
(14,'Integración manual (Manual data integration) ',1,'Multiple_IntegracionSistema','MultiSelect',2),
(14,'Integración con uso de middleware (Middleware data integration)',1,'Multiple_IntegracionSistema','MultiSelect',3),
(14,' Integración a partir de aplicaciones (Application-based integration)',1,'Multiple_IntegracionSistema','MultiSelect',4),
(14,'Integración de acceso uniforme (Uniform access integration)',1,'Multiple_IntegracionSistema','MultiSelect',5),
(14,'Integración de almacenamiento común (Common storage integration)',1,'Multiple_IntegracionSistema','MultiSelect',6)