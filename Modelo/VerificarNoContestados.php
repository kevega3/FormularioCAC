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



    $Buscar ="SELECT * from persona WHERE Admin = '2' ";
    $res =  mysqli_query($conn,$Buscar);
    while ($row=mysqli_fetch_array($res)) {
        $FechaCreacion = $row["FechaCreacion"];
        $idPersona = $row["idPersona"];

        $BuscarId = "SELECT p.idPersona,p.correo,p.FechaCreacion,p.repo1,p.repo2,p.repo3,p.repo4,p.repo5,p.repo6,p.repo7,p.repo8,p.repo9,p.repo10,p.repo11,p.repo12,p.nombre1,p.repo13,p.repo14,p.repo15,p.repo16,p.repo17,p.repo18
        from persona p WHERE TIMESTAMPDIFF(DAY,'$FechaCreacion',NOW()) > 8 AND p.idPersona = $idPersona and p.repo1 = 0 OR p.repo1 = 0 OR p.repo2 = 0 OR p.repo3 = 0 or p.repo4 = 0 OR p.repo5 = 0 OR p.repo6 = 0 OR p.repo7 = 0 OR p.repo8 = 0 OR p.repo9 = 0 OR p.repo10 = 0 OR p.repo11 = 0 OR p.repo12 = 0 OR p.repo13 = 0 OR p.repo14 = 0 OR p.repo15 = 0 OR p.repo16 = 0 OR p.repo17 = 0 OR p.repo18 = 0"; 
        $resId =  mysqli_query($conn,$BuscarId);
        while ($fila=mysqli_fetch_array($resId)) {
            $BuscarFecha = "SELECT TIMESTAMPDIFF(DAY,'$FechaCreacion',NOW())";
            $Fechares =  mysqli_query($conn,$BuscarFecha);
            while ($filafeCHA=mysqli_fetch_array($Fechares)) {
                $Dias = $filafeCHA["TIMESTAMPDIFF(DAY,'$FechaCreacion',NOW())"]; 
            }
            
            $body ="<table style='background: #034da2;border-radius: 5px;padding: 10px; color: white;'>
        <tr>
        <td rowspan='2'>
        <img src='https://cuentadealtocosto.org/siscac_users/CUESTIONARIOCAC/IMG/simbolo_cac_blanco.png' style='width: 150px;'>
        </td>
        <td>
        <span style='font-size: 25px;margin-left: auto;margin-right: auto;display: table;font-family: -webkit-pictograph;'>Hola <strong>".$row['nombre1']."</strong>, tienes</span>
        <strong style='font-size: 40px;margin-left: auto;margin-right: auto;display: table;font-family: -webkit-pictograph;'>Preguntas sin responder</strong>
        <span style='font-size: 17px;margin-left: auto;margin-right: auto;display: table;font-family: -webkit-pictograph;'>Han pasado ".$Dias." Días desde que tienes acceso</span>
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
            echo "Error al enviar a: ".$row["correo"]."<br>";
        }
        $mail->ClearAddresses(); 
        }
    }
?>