<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <title>Actualizacion de Proyecto - Trabajo de Grado</title>
    <link rel="stylesheet" media="all" type="text/css" href="css/estilos.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script language='javascript' src='js/popcalendar.js'></script>
    <script language='javascript' src='js/validar.js'></script>
    <script language="javascript">
    function setTextAreaListner(eve,func) {
    var ele = document.forms[0].elements;
    for(var i = 0; i <ele.length;i++) {
    element = ele[i];
    if (element.type) {
    switch (element.type) {
    case 'textarea':
    attachEvent(eve,element,func);
    }
    }
    }
    }
    </script>
    <script language="javascript">
    setTextAreaListner("keypress",maxLength);
    setTextAreaListner("paste",maxLengthPaste);
    </script>
</head>
<body>
    <?
    include_once('conexion.php');
	$sql1="select APELLIDOS, NOMBRES, EXP_E, C_UNI_CA, TELEFONO2 from dace002 where CI_E = '$_SESSION[cedula]'";
        $conex -> ExecSQL($sql1,__LINE__,true);
	$fila = $conex->filas;
	if ($fila==1)
	{
	    $reg1 = $conex->result_h;
	    $reg2 = $conex->result[0];
	    $reg = array_combine($reg1,$reg2);

		$mSQL="select MAX(carta2) from sol_solicitudes where EXP_E= '$reg[EXP_E]' and TIPO_PASANTIA='2' and tipo_solicitud='2' ";
		$conex -> ExecSQL($mSQL,__LINE__,true);
		$anio = $conex->result[0][0];

		$mSQL="select MAX(carta) from sol_solicitudes where EXP_E= '$reg[EXP_E]' and TIPO_PASANTIA='2' and tipo_solicitud='2' AND carta2='".$anio."' ";
		$conex -> ExecSQL($mSQL,__LINE__,true);
		$max = $conex->result[0][0];
	    
	    $sql1="SELECT id_empresa FROM sol_solicitudes WHERE exp_e='".$reg['EXP_E']."' AND TIPO_PASANTIA='2' AND tipo_solicitud='2'  AND carta='".$max."' AND carta2='".$anio."' ";

		$conex -> ExecSQL($sql1,__LINE__,true);
	    $fila = $conex->filas;
		
		//echo $conex->result[0][0];

	    if ($fila >= 1) { // Consiguio un postulacion para Practica Profesional

		$emp1 = $conex->result_h;
		$emp2 = $conex->result[0];
		$empre = array_combine($emp1,$emp2);

		$empre['ID_EMPRESA'] = $empre['id_empresa'];

		//echo $empre['ID_EMPRESA'];

		    if(empty($empre['ID_EMPRESA']))
		    {
			print (" <script language='javascript'> window.alert('DEBE REGISTRAR SU PRÁCTICA PROFESIONAL EN EL DEPARTAMENTO DE ENTRENAMIENTO INDUSTRIAL');window.close();</script>");
		    }
		    else{
				//echo $empre['ID_EMPRESA'];
    ?>
	<form name="Solicitud" action="modificartg.php" method="post" onSubmit="return validar(this)">
	    <table border="0px" align="center">
		<tr>
		    <td colspan="5" align="center">	
			<table border="0" width="600">
			    <tr>
				<td width="50">
				    <p align="right" style="margin-top: 0; margin-bottom: 0">
					<img border="0" src="images/unex15.gif" width="75" height="75">
				    </p>
				</td>
				<td width="500">
			            <p class="titulon">UNIVERSIDAD NACIONAL EXPERIMENTAL POLIT&Eacute;CNICA</p>
				    <p class="titulon">"ANTONIO JOS&Eacute; DE SUCRE"</p>
				    <p class="titulon">VICE-RECTORADO PUERTO ORDAZ</font></p>
				    <p class="titulon">ASIGNATURA TRABAJO DE GRADO</font>
				</td>
				<td border="0" width="50">&nbsp;</td>
			    </tr>
			</table>
		    </td>
		</tr>
		<tr><td colspan="5" style="background-color:#99CCFF;"><font style="font-size:2px;">&nbsp;</font></td></tr>
	        <tr><td class="enc_p" colspan="5">DATOS DEL ESTUDIANTE</td></tr>
		<tr align="center">
		    <td colspan="5">
		        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
			    <tbody>
			        <tr>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosc"><B>Apellidos:</B></div></td>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosc"><B>Nombres:</B></div></td>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosc"><B>C&eacute;dula:</B></div></td>
				</tr>
				<?php
				    printf('<tr>
					<td <div class="datosc">%s</div></td>
					<td <div class="datosc">%s</div></td>
					<td <div class="datosc">%s</div></td></tr>',$reg["APELLIDOS"],$reg["NOMBRES"],$_SESSION["cedula"]);
				?>
				<tr>
				    <td bgcolor="#FFFFFF"><div class="datosc"><B>Expediente:</B></div></td>
				    <td bgcolor="#FFFFFF"><div class="datosc"><B>Especialidad:</B></div>
				    <td bgcolor="#FFFFFF" colspan="3"><div class="datosc"><B>Teléfono:</B></div>
				    </td>
				</tr>
				<?php
				    $sql1="select CARRERA from tblaca010 where C_UNI_CA= '$reg[C_UNI_CA]'";
				    $conex -> ExecSQL($sql1,__LINE__,true);
				    $fila = $conex->filas;
				    if ($fila==1)
				        {
				        $esp1 = $conex->result_h;
				        $esp2 = $conex->result[0];
				        $espe = array_combine($esp1,$esp2);
					printf('<tr>
					    <td bgcolor="#FFFFFF"><div class="datosc">%s</div></td>
					    <td bgcolor="#FFFFFF"><div class="datosc">%s</div></td>
					    <td bgcolor="#FFFFFF"><div class="datosc">%s</div></td></tr>', $reg["EXP_E"], $espe["CARRERA"], $reg["TELEFONO2"]);
					}
				?>
			    </tbody>
			</table>
		    </td>
		</tr>
		<tr><td colspan="5" style="background-color:#99CCFF;"><font style="font-size:2px;">&nbsp;</font></td></tr>
		<tr><td colspan="5"><font style="font-size:5px;">&nbsp;</font></td></tr>
		<tr>
		    <td colspan="5">
		        <table width="100%">
			    <tbody>
				<tr>
				    <td style="text-align: center;" class="datosp">
					<strong>Empresa</strong>
				    </td>
				</tr>
				<tr>
				    <td style="text-align: center;" class="datosp">
					<?php
						$sql1="select NOMBRE_EMPRESA from sol_empresas where ID_EMPRESA = '$empre[ID_EMPRESA]'";
						$conex -> ExecSQL($sql1,__LINE__,true);
						$fila = $conex->filas;
						if ($fila==1)
						    {
						    $nemp1 = $conex->result_h;
						    $nemp2 = $conex->result[0];
						    $nempre = array_combine($nemp1,$nemp2);
						    printf('<tr>
						    <td bgcolor="#FFFFFF"><div  style="text-align:center;" class="datosp">%s</div></td></tr>', $nempre["NOMBRE_EMPRESA"]);
						    $empresa=$nempre["NOMBRE_EMPRESA"];
						    $_SESSION['empresa']=$empresa;
						    }
					?>
				    </td>
				</tr>
			    </tbody>
			</table>
		    </td>
		</tr>
		<tr><td colspan="5"><font style="font-size: 5px;">&nbsp;</font></td></tr>
		<tr>
		    <td width="100%">
			<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
			    <tbody>
				<tr>
				    <td colspan="2" width="92%" style="text-align: center;" class="datosp">
					<strong>Titulo del Proyecto:</strong>
				    </td>
				    <td colspan="2">
					<div id="cuenta2" class="datosp"></div>
					<script>document.getElementById('cuenta2').innerHTML=document.getElementById('textarea1').value.length+'/'+document.getElementById('textarea1').maxLength;
					attachEvent("keypress","textarea1",maxLength);
					attachEvent("paste","textarea1",maxLengthPaste);
					</script>
				    </td>
				</tr>
				<tr>
				    <td colspan="5" style="text-align: center;" class="datosp">

					<?
					// SELECCIONAR LOS DATOS DEL TRABAJO

					$tSQL = "SELECT n_proyecto, fecha_i, fecha_c, apellido_ti, nombre_ti, cedula_ti, telefono_ti, correo_ti, id_estatus ";
					$tSQL.= "FROM sol_tgpp WHERE ci_e = '$_SESSION[cedula]' AND tipo_pasantia = '2' ";
					$conex1 -> ExecSQL($tSQL,__LINE__,true);

					//print_r($conex1->result);

					$n_proyecto		= $conex1->result[0][0];
					$fecha_i		= $conex1->result[0][1];
					$fecha_c		= $conex1->result[0][2];
					$apellido_ti	= $conex1->result[0][3];
					$nombre_ti		= $conex1->result[0][4];
					$cedula_ti		= $conex1->result[0][5];
					$telefono_ti	= $conex1->result[0][6];
					$correo_ti		= $conex1->result[0][7];
					$id_estatus		= $conex1->result[0][8];

					if ($id_estatus == '3'){
						die ("<script languaje=\"javascript\"> window.close(alert('Este anteproyecto tiene estatus APROBADO por lo tanto no puede modificarse.')); </script>");
					} if ($id_estatus == '4'){
						die ("<script languaje=\"javascript\"> window.close(alert('Este proyecto tiene estatus CULMINADO por lo tanto no puede modificarse.')); </script>");
					}

					?>

					<textarea name="nom_proyecto" maxLength="250" id="textarea1" onKeyUp="document.getElementById('cuenta2').innerHTML=document.getElementById('textarea1').value.length+'/'+document.getElementById('textarea1').maxLength;" class="datosp" onblur="this.value=this.value.toUpperCase();" rows="1" cols="100"><? echo $n_proyecto ?></textarea>                   
				    </td>    	
				</tr>						
			    </tbody>
			</table>
		    </td>
		</tr>
		<tr><td colspan="5"><font style="font-size: 5px;">&nbsp;</font></td></tr>
		<tr>
		    <td width="100%">
			<table align="center" border="0" cellpadding="1" cellspacing="1" width="60%" style="border-collapse: collapse;">
			    <tbody  valign="center">
				<tr>			    
				    <td width="30%" style="text-align: center;" class="datosp">
					<strong>Fecha de Inicio:</strong>
				    </td>
				    <td width="30%" style="text-align: center;" class="datosp">
					<strong>Fecha de Culminación:</strong>
				    </td>
				</tr>
				<tr>
				    <td class="datosp" style="text-align:center;">
					    <input name="Sel_Fecha1" style="text-align:center; cursor:pointer;" type="text" id="dateArrival" onClick="popUpCalendar(this, Solicitud.dateArrival, 'dd-mm-yyyy');" readonly="" size="10" class="datospf" value="<? echo $fecha_i ?>">
					    <img src="images/cal.jpeg" style="cursor:pointer" width="18" height="15" border="0" alt="Presione para seleccionar una fecha" title="Presione para seleccionar una fecha" onClick="popUpCalendar(document.Solicitud.Sel_Fecha1, Solicitud.dateArrival, 'dd-mm-yyyy');"> 
				    </td>
				    <td class="datosp" style="text-align:center;">
					    <input name="Sel_Fecha" style="text-align:center; cursor:pointer;" type="text" id="dateArrival1" onClick="popUpCalendar(this, Solicitud.dateArrival1, 'dd-mm-yyyy');" readonly="" size="10" class="datospf" value="<? echo $fecha_c ?>">
					    <img src="images/cal.jpeg" style="cursor:pointer" width="18" height="15" border="0" alt="Presione para seleccionar una fecha" title="Presione para seleccionar una fecha" onClick="popUpCalendar(document.Solicitud.Sel_Fecha, Solicitud.dateArrival1, 'dd-mm-yyyy');">
				    </td>
				</tr>
			    </tbody>
			</table>
		    </td>
		</tr>
		<tr><td colspan="5"><font style="font-size:2px;">&nbsp;</font></td></tr>
		<tr><td colspan="5" style="background-color:#99CCFF;"><font style="font-size:2px;">&nbsp;</font></td></tr>
		<tr><td class="enc_p" colspan="5">DATOS DEL TUTOR INDUSTRIAL</td></tr>
		<tr><td colspan="5" style="color:red;text-align:center;font-weight:bold;">&nbsp;</td></tr>
		<tr align="center">
		    <td colspan="5">
			<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
			    <tbody>
				<tr>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosp"><B>Apellidos:</B></div></td>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosp"><B>Nombres:</B></div></td>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosp"><B>C&eacute;dula:</B></div></td>
				</tr>
				<tr>
				    <td bgcolor="#FFFFFF"><div class="datosp"><input type="text" class="datosp" onblur="this.value=this.value.toUpperCase();" name="apellido_ti" size="25" value="<? echo $apellido_ti ?>"></div></td>
				    <td bgcolor="#FFFFFF"><div class="datosp"><input type="text" class="datosp" onblur="this.value=this.value.toUpperCase();" name="nombre_ti" size="25" value="<? echo $nombre_ti ?>"></div></td>
				    <td bgcolor="#FFFFFF"><div class="datosp"><input type="text" class="datosp" onblur="this.value=this.value.toUpperCase();" name="cedula_ti" size="25" value="<? echo $cedula_ti ?>"></div></td>
				</tr>
				<tr>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosp"><B>Teléfono:</B></div></td>
				    <td style="width: 200px;" bgcolor="#FFFFFF"><div class="datosp"><B>Correo:</B></div></td>
				</tr>
				<tr>
				    <td bgcolor="#FFFFFF"><div class="datosp"><input type="text" class="datosp" onblur="this.value=this.value.toUpperCase();" name="telefono_ti" size="25" value="<? echo $telefono_ti ?>"></div></td>
				    <td bgcolor="#FFFFFF" colspan="2"><div class="datosp"><input type="text" class="datosp" onblur="this.value=this.value.toUpperCase();" name="correo_ti" size="55" value="<? echo $correo_ti ?>"></div>
				    <td><input type="hidden" name="TIPO_PASANTIA" value="1"></td>
				    </td>
				</tr>
			    </tbody>
			</table>
		    </td>
		</tr>
		<tr><td colspan="5"><font style="font-size:10px;">&nbsp;</font></td></tr>
		<tr class="act">
		    <td valign="middle" style="text-align: center;" colspan="5" class="datosp">
			<br>Solo seran procesadas las solicitudes que cumplan TODOS los Pre-Requisitos<br><br>
		    </td>
		</tr>
		<tr align=center>
		    <table align="center" border="0" width=40%>
		    <tr><td height="40" align="center" valign="bottom" colspan="2">
			<input type="submit" value="Actualizar">
		    </td>
		    <td align="center" valign="bottom" colspan="1">
			<input type="button" value="Finalizar" name="bexit" onclick="window.close();">
		    </td>
		    </tr>
		    </table>
		</tr>
	    </table>
	</form>
    <?php
		    }
		} else {
			print (" <script language='javascript'> window.alert('DEBE REGISTRAR SU PRÁCTICA PROFESIONAL EN EL DEPARTAMENTO DE ENTRENAMIENTO INDUSTRIAL');window.close();</script>");
		}	
	}
    ?>
</body>
</html>