<?php 
    include('Conexion.php'); 
    include('mail/class.phpmailer.php'); 
    include('mail/class.smtp.php'); 


    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = 587; 
    $mail->IsHTML(true); 
    $mail->CharSet = "utf-8";
    $smtpHost = "smtp.office365.com";
    $smtpUsuario = "info@cuentadealtocosto.org"; 
    $smtpClave = "jcvxrwvsldpmczhd";
    $mail->Host = $smtpHost; 
    $mail->Username = $smtpUsuario; 
    $mail->Password = $smtpClave;
    $mail->From = "info@cuentadealtocosto.org";
    $mail->FromName = "CUESTIONARIO CAC";
    $mail->Subject = "Preguntas Pendientes";



    $Buscar ="SELECT * FROM persona WHERE Admin = '2' ";
    $res =  mysqli_query($conn,$Buscar);
    while ($row=mysqli_fetch_array($res)) {
        $FechaCreacion = $row["FechaCreacion"];
        $idPersona = $row["idPersona"];


        $BuscarMayor8 = "SELECT * FROM persona  WHERE TIMESTAMPDIFF(DAY,'$FechaCreacion',NOW()) > 8 AND idPersona = '$idPersona' ";
        $resMayor=  mysqli_query($conn,$BuscarMayor8);
        while ($fila=mysqli_fetch_array($resMayor)) {
            $idPersonaMayor8Dias = $row["idPersona"];

            $BuscarNoRespondidos = "SELECT * FROM `persona` p WHERE p.idPersona = '$idPersonaMayor8Dias' and (p.repo1 = 0 OR p.repo1 = 0 OR p.repo2 = 0 OR p.repo3 = 0 or p.repo4 = 0 OR p.repo5 = 0 OR p.repo6 = 0 OR p.repo7 = 0 OR p.repo8 = 0 OR p.repo9 = 0 OR p.repo10 = 0 OR p.repo11 = 0 OR p.repo12 = 0 OR p.repo13 = 0 OR p.repo14 = 0 OR p.repo15 = 0 OR p.repo16 = 0 OR p.repo17 = 0 OR p.repo18 = 0)";
            $resNoRespondidos =  mysqli_query($conn,$BuscarNoRespondidos);
            
            while ($filaNoRespondidos=mysqli_fetch_array($resNoRespondidos)) {
                $Nombre1 = $filaNoRespondidos["nombre1"];
                $idPersona = $filaNoRespondidos["idPersona"];

                $contador = 0;
                for ($i = 1;$i<19; $i++){
                    $Var = $filaNoRespondidos['repo'.$i];
                    
                    if($Var == 0){
                        $contador = $contador + 1;
                    }
                }

                $Dias = $contador;

                
            $body ="<table style='background: #034da2;border-radius: 5px;padding: 10px; color: white;'>
            <tr>
            <td rowspan='2'>
            <img src='https://cuentadealtocosto.org/CUESTIONARIOCAC/IMG/simbolo_cac_blanco.png' style='width: 150px;'>
            </td>
            <td>
            <span style='font-size: 25px;margin-left: auto;margin-right: auto;display: table;font-family: -webkit-pictograph;'>Hola <strong>".$filaNoRespondidos['nombre1']."</strong>, tienes</span>
            <strong style='font-size: 40px;margin-left: auto;margin-right: auto;display: table;font-family: -webkit-pictograph;'>".$Dias. "  Modulos sin responder</strong>
            
            </td>
            </tr>
            <tr>
            <td>
            <a href='https://cuentadealtocosto.org/siscac_users/CUESTIONARIOCAC/'><button style='cursor: pointer;background-color: #d2098d;width: 100%;height: 30px;border: none;border-radius: 5px;color: white;'>IR AL CUESTIONARIO</button></a>
            </td>
            </tr>
            </table>";

            


            
            $mail->Body = $body;
            $mail->AddAddress($row['correo']);

            if (!$mail->Send()) {
                echo "No se supo mandar el correo";
            }
            $mail->ClearAddresses(); 
            }

            
            }

        }

?>