<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>Agregar Estado</title>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <link rel="stylesheet" media="all" type="text/css" href="css/estilos.css"/>
</head>
<body>
	<table border="0px" align="center" width="750">
	    <tr>
		<td colspan="5" align="center">	
		    <table border="0" width="700">
			<tr>
			    <td width="100">
				<p align="right" style="margin-top: 0; margin-bottom: 0">
				    <img border="0" src="images/unex15.gif" width="75" height="75">
				</p>
			    </td>
			    <td width="600">
			        <p class="titulon">UNIVERSIDAD NACIONAL EXPERIMENTAL POLIT&Eacute;CNICA</p>
				<p class="titulon">"ANTONIO JOS&Eacute; DE SUCRE"</p>
				<p class="titulon">VICE-RECTORADO PUERTO ORDAZ</p>
				<p class="titulon">ASIGNATURA TRABAJO DE GRADO Y PR&Aacute;CTICA PROFESIONAL</p>
			    </td>
			    <td border="0" width="100">&nbsp;</td>
			</tr>
		    </table>
		</td>
	    </tr>
	    <tr><td colspan="5" style="background-color:#99CCFF;"><font style="font-size:2px;">&nbsp;</font></td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr>
		<form action="editarlisto.php" method="post" target="" >
                    <table border="0" bordercolor="#000000" align="center" cellpadding="0" cellspacing="0" >
		        <tr>
                            <td bgcolor="#99CCFF" class="datosc" height="22" >ID_STATUS</td>
                            <?php
				include_once('conexion.php');
				$sql2="select id_estatus, estatus from sol_estatus where id_estatus = '$_REQUEST[id]'";
				$conex1 -> ExecSQL($sql2,__LINE__,true);
				$fila = $conex1->filas;
				if ($fila!=0)
				    {
				    $sta1 = $conex1->result_h;
				    $sta2 = $conex1->result[0];
				    $estat = array_combine($sta1,$sta2);
                                            printf('
			                    <td class="datosc" style="text-align:center;">
                                            <input name="id_estatus" value="%s" style="text-align:center;" type="text" id="id_estatus" size="22" onblur="this.value=this.value.toUpperCase();" class="datosc">
                                            </td>',$estat["id_estatus"]);
											$_SESSION['id_estatus']=$estat["id_estatus"];
				    }
                            ?>
			    
                        </tr>
                        <tr><td><font style="font-size:2px;">&nbsp;</font></td></tr>
                        <tr>
                            <td bgcolor="#99CCFF" class="datosc" height="15">ESTATUS</td>
                            <?php
				$sql2="select id_estatus, estatus from sol_estatus where id_estatus = '$_REQUEST[id]'";
				$conex1 -> ExecSQL($sql2,__LINE__,true);
				$fila = $conex1->filas;
				if ($fila!=0)
				    {
				    $sta1 = $conex1->result_h;
				    $sta2 = $conex1->result[0];
				    $estat = array_combine($sta1,$sta2);
				    printf('
                                        <td class="datosc" style="text-align:center;">
                                        <input name="estatus" value="%s" style="text-align:center;" type="text" id="estatus" size="22" onblur="this.value=this.value.toUpperCase();" class="datosc">
                                        </td>',$estat["estatus"]);
										$_SESSION['estatus']=$estat["estatus"];
				    }
			    ?>
			</tr>
			<tr>
			    <td>
			    
			</tr>
		    </table >
	    </tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr>
		
		    <table border="0" bordercolor="#ffffff" align="center" cellpadding="0" cellspacing="0" >
			<tr>
			    <td height="40" align="center" valign="middle" colspan="1">
				<input type="submit" value="Modificar">
			    </td>
			    <td align="center" valign="middle" colspan="1">
				<input type="button" value="Cancelar" name="bexit" onclick="window.close();">
			    </td>
			</tr>
		    </table >
		</form>	
	</table>
</body>
</html>