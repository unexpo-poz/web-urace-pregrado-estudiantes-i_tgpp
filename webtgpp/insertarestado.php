<?php
session_start();
 include_once('conexion.php');
	$fi=$_SESSION['$fi'];
 	$sql2="insert into sol_estatus (id_estatus, estatus)  values ('$fi', '$_REQUEST[estatus]')";
	$conex1 -> ExecSQL($sql2,__LINE__,true);
            
?>
<html>
<head>
	<link rel="stylesheet" media="all" type="text/css" href="css/estilos.css" />
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
	    <tr><td colspan="5" style="background-color:#99CCFF;"><font style="font-size:2px;">&nbsp;</font></td></tr>		<tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
	    <tr><td colspan="5">&nbsp</td></tr>
            <tr><td colspan="5">&nbsp</td></tr>
            <tr>
                <td>
                    <div class="tituloc" align=center>Sus datos  se  han modificado exitosamente!<br></div>
                </td>
            </tr>
            <tr>
		<form action="insertarestado.php" method="post" target="" >
		    <table width="150" height="20"  border="0" align="center">
                    <tr>
                        <td align="center" valign="bottom" colspan="1">
                            <br><input type="button" value="Finalizar" name="bexit" onclick="window.close();">
                        </td>
                    </tr>
		    </table>
		</form>
	    </tr>	
	</table>
</body>
</html>