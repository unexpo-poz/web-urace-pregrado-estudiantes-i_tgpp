<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>B�squeda de Estudiantes</title>
    <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" media="all" type="text/css" href="css/estilos.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <link type="text/css" rel="stylesheet" href="css/ui-lightness/jquery-ui-1.8.16.custom.css"/>
    <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="js/autocomplet.js"></script>
    </script>
        <script languaje="Javascript">
    <!--
    Estudiante = '';        var Imprimio = false;
    function imprimir(fi) {
	with (fi) {
	    bimp.style.display="none";
            bexit.style.display="none";
            window.print();
            Imprimio = true;
            msgI = Estudiante + ':\nSi mandaste a imprimir tu planilla\n';
            msgI = msgI + "pulsa el bot�n 'Finalizar' y ve a retirar tu planilla por la impresora,\n";
            msgI = msgI + 'de lo contrario vuelve a pulsar Imprimir\n';
            //alert(msgI);
            bimp.style.display="block";
            bexit.style.display="block";
        }
    }
    function verificarSiImprimio(){
        window.status = Estudiante + ': NO TE VAYAS SIN IMPRIMIR TU PLANILLA';
        if (Imprimio){
            window.close();
        }
        else {
            msgI = '            ATENCION!\n' + Estudiante;
            alert(msgI +':\nNo te vayas sin imprimir tu planilla');
	    Imprimio = true;
        }
    }
    <!--
    document.writeln('</font>');
    //-->
    </script>
    <style>
    .programa{border: 1px solid #ccc; padding: 5px; margin-bottom: 3px; width: 150px}
    .titulo{background: #ccc; cursor: pointer}
    .desc{display: none}
    </style>
</head>
<body>
	    <table border="0px" align="center" width="900">
		<tr>
		    <td colspan="5" align="center">	
			<table border="0" width="900">
			    <tr>
				<td width="150">
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
				<td width="150">&nbsp;</td>
			    </tr>
			</table>
		    </td>
		</tr>
		<tr><td colspan="5" style="background-color:#99CCFF;"><font style="font-size:2px;">&nbsp;</font></td></tr>
		<tr><td colspan="5">&nbsp</td></tr>
        <tr><td class="enc_p" colspan="5">B&Uacute;SQUEDA DE ESTUDIANTES</td></tr>
                <tr>
                    <table width="900" height="60"  border="0" align="center" bgcolor="#99CCFF" style="border-collapse: collapse;">
                        <form name="buscador" action="" method="post">
                        <tr>
                            <td width="140" align="center"><span class="datosp">Nombres</span></td>
                            <td width="120" align="center"><span class="datosp">C&eacute;dula</span></td>
                            <td width="180" align="center"><span class="datosp">Asignatura</span></td>
                            <td width="180" align="center"><span class="datosp">Lapso</span></td>
                            <td rowspan="2" width="80" align="center"><input name="buscar" type="submit" class="datosp" value="Buscar"></td>
                        </tr>
                        <tr>
                            <td class="datosc"><input type="text" class="datosc" id="buscar_usuario" name="buscar_usuario" size="45" /></td>
                            <td align="center"><input type="text" class="datosc" id="cedula" name="CI_E" size="15" /></td>
                            <td class="datosc" style="text-align:center">
								<select name="TIPO_PASANTIA" id="TIPO_PASANTIA" class="datospf">
								<option value=""  <?php if($_POST)if($_POST['TIPO_PASANTIA']=='') echo 'selected="selected" ';?>>SELECCIONE UNA OPCI&Oacute;N</option>
								<option value="1" <?php if($_POST)if($_POST['TIPO_PASANTIA']=='1') echo 'selected="selected" ';?>>PR&Aacute;CTICA PROFESIONAL</option>
								<option value="2" <?php if($_POST)if($_POST['TIPO_PASANTIA']=='2') echo 'selected="selected" ';?>>TRABAJO DE GRADO</option>		
								</select>                    
                            </td>
                            <td class="datosc" style="text-align:center">
                                <input name="lapso" id="lapso" type="text" value="<?php if (isset($_POST['lapso'])) echo $_POST['lapso']; ?>"  maxlength="8" size="12">
                            </td>
                        </tr>
                        </form>
                    </table>
                </tr>
                <tr><td colspan="5"><font style="font-size:12px;">&nbsp;</font></td></tr>		
		<tr>
		    <td colspan="5">
			<table width="900"  align=center border="1" CELLPADDING=0 CELLSPACING=0 overflow:auto bgcolor="99CCFF">
			    <tr height="30">
				<th width="40" scope="col"><span class="datosp">Lapso</span></th>
                <th width="50" scope="col"><span class="datosp">C&eacute;dula</span></th>
                <th width="120" scope="col"><span class="datosp">Nombres</span></th>
				<th width="120" scope="col"><span class="datosp">Apellidos</span></th>
                <th width="120" scope="col"><span class="datosp">Asignatura</span></th>
				<th width="300" scope="col"><span class="datosp">Nombre del Proyecto</span></th>
				<th width="40" scope="col"><span class="datosp">Ver</span></th>
			    </tr>
			    <tr>
				    <?php
				    include_once('conexion.php');
                    if($_REQUEST)
                    {
					$i=0;
					$sql2="select DISTINCT CI_E, lapso, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus from sol_historial order by CI_E";
					$conex1 -> ExecSQL($sql2,__LINE__,true);
    
					$fila = $conex1->filas;

					//echo $sql2;

				//	while ($i<$fila) {
					    $tab1 = $conex1->result_h;
					    $tab2 = $conex1->result[$i];
					    $tab = array_combine($tab1,$tab2);

						if($_POST['CI_E']!="") { // Si busca por cedula
							if ($_POST['TIPO_PASANTIA']!="") {
								if ($_POST['lapso']!="") {
									$j=0;
									$sql2="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial where CI_E='$_POST[CI_E]' and TIPO_PASANTIA='$_POST[TIPO_PASANTIA]' and lapso='$_POST[lapso]' order by CI_E ";

									$conex1 -> ExecSQL($sql2,__LINE__,true);    
									$fila = $conex1->filas;

									while ($j<$fila) {
										$tab1 = $conex1->result_h;
									    $tab2 = $conex1->result[$j];
									    $tab = array_combine($tab1,$tab2);
								
									    $sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";

										$conex -> ExecSQL($sql1,__LINE__,true);
									    $fila1 = $conex->filas;
									    $k=0;
						
										while($k<$fila1) {	
											$reg1 = $conex->result_h;
											$reg2 = $conex->result[$k];
											$reg = array_combine($reg1,$reg2);

											if ($tab['TIPO_PASANTIA']==1)
												$asi='PR�CTICA PROFESIONAL';
											if ($tab['TIPO_PASANTIA']==2)
												$asi='TRABAJO DE GRADO';

											 printf('<tr height="30">
											 <td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>></td>
											 </tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);

											 $k++;
										}
										$j++;
									}
								}
							else {
								$j=0;
								$sql2="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial where CI_E='$_POST[CI_E]' and TIPO_PASANTIA='$_POST[TIPO_PASANTIA]' order by CI_E";
								$conex1 -> ExecSQL($sql2,__LINE__,true);    
								$fila = $conex1->filas;
								while ($j<$fila) {
									$tab1 = $conex1->result_h;
									$tab2 = $conex1->result[$j];
									$tab = array_combine($tab1,$tab2);
									
									$sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";
									$conex -> ExecSQL($sql1,__LINE__,true);
									$fila1 = $conex->filas;
									$k=0;
									while($k<$fila1) {	
										$reg1 = $conex->result_h;
										$reg2 = $conex->result[$k];
										$reg = array_combine($reg1,$reg2);

										if ($tab['TIPO_PASANTIA']==1)
											$asi='PR�CTICA PROFESIONAL';
                                        if ($tab['TIPO_PASANTIA']==2)
											$asi='TRABAJO DE GRADO';
                                            
										printf('<tr height="30">
										<td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc">%s</td><td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>></td>
										</tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);

										$k++;
									}

									$j++;

								}
							}
						}
					else
                                                {
                                                    if ($_POST['lapso']!="")
                                                    {
							$j=0;
							$sql2="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial where CI_E='$_POST[CI_E]' and lapso='$_POST[lapso]' order by CI_E";
							$conex1 -> ExecSQL($sql2,__LINE__,true);    
							$fila = $conex1->filas;
							while ($j<$fila)
							{
							    $tab1 = $conex1->result_h;
							    $tab2 = $conex1->result[$j];
							    $tab = array_combine($tab1,$tab2);
							    
							    $sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";
							    $conex -> ExecSQL($sql1,__LINE__,true);
							    $fila1 = $conex->filas;
							    $k=0;
							    while($k<$fila1)
							    {	
								$reg1 = $conex->result_h;
								$reg2 = $conex->result[$k];
								$reg = array_combine($reg1,$reg2);
							
                                                                    if ($tab['TIPO_PASANTIA']==1)
                                                                        $asi='PR�CTICA PROFESIONAL';
                                                                    if ($tab['TIPO_PASANTIA']==2)
                                                                        $asi='TRABAJO DE GRADO';
                                                                    printf('
                                                                    <tr height="30"><td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>></td>
                                                                    </tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);
                                                            $k++;
							    }
							$j++;
                                                        }
                                                    }
                                                    else
                                                    {
							$j=0;
							$sql2="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial where CI_E='$_POST[CI_E]' order by CI_E";
							$conex1 -> ExecSQL($sql2,__LINE__,true);    
							$fila = $conex1->filas;
							while ($j<$fila)
							{
							    $tab1 = $conex1->result_h;
							    $tab2 = $conex1->result[$j];
							    $tab = array_combine($tab1,$tab2);
							    
							    $sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";
							    $conex -> ExecSQL($sql1,__LINE__,true);
							    $fila1 = $conex->filas;
							    $k=0;
							    while($k<$fila1)
							    {	
								$reg1 = $conex->result_h;
								$reg2 = $conex->result[$k];
								$reg = array_combine($reg1,$reg2);

                                                                    if ($tab['TIPO_PASANTIA']==1)
                                                                        $asi='PR�CTICA PROFESIONAL';
                                                                    if ($tab['TIPO_PASANTIA']==2)
                                                                        $asi='TRABAJO DE GRADO';
                                                                    printf('
                                                                    <tr height="30"><td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>></td>
                                                                    </tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);
                                                            $k++;
							    }
							$j++;
                                                        }
                                                    }
                                                }
                   } //Fin Busca por cedula
				   else {
					  // echo  "voy";
					   if ($_POST['TIPO_PASANTIA']!="")
                                                {
                                                    if ($_POST['lapso']!="")
                                                    {
							$j=0;
							$sql2="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial where TIPO_PASANTIA='$_POST[TIPO_PASANTIA]' and lapso='$_POST[lapso]' order by CI_E";
							$conex1 -> ExecSQL($sql2,__LINE__,true);    
							$fila = $conex1->filas;
							while ($j<$fila)
							{
							    $tab1 = $conex1->result_h;
							    $tab2 = $conex1->result[$j];
							    $tab = array_combine($tab1,$tab2);
							    
							    $sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";
							    $conex -> ExecSQL($sql1,__LINE__,true);
							    $fila1 = $conex->filas;
							    $k=0;
							    while($k<$fila1)
							    {	
								$reg1 = $conex->result_h;
								$reg2 = $conex->result[$k];
								$reg = array_combine($reg1,$reg2);
							
							
                                                                    if ($tab['TIPO_PASANTIA']==1)
                                                                        $asi='PR�CTICA PROFESIONAL';
                                                                    if ($tab['TIPO_PASANTIA']==2)
                                                                        $asi='TRABAJO DE GRADO';
                                                                    printf('
                                                                    <tr height="30"><td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>></td>
                                                                    </tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);
                                                            $k++;
							    }
							$j++;
                                                        }
                                                    }
                                                    else
                                                    {
							$j=0;
							$sql2="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial where TIPO_PASANTIA='$_POST[TIPO_PASANTIA]' order by CI_E";
							$conex1 -> ExecSQL($sql2,__LINE__,true);    
							$fila = $conex1->filas;
							while ($j<$fila)
							{
							    $tab1 = $conex1->result_h;
							    $tab2 = $conex1->result[$j];
							    $tab = array_combine($tab1,$tab2);
							    
							    $sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";
							    $conex -> ExecSQL($sql1,__LINE__,true);
							    $fila1 = $conex->filas;
							    $k=0;
							    while($k<$fila1)
							    {	
								$reg1 = $conex->result_h;
								$reg2 = $conex->result[$k];
								$reg = array_combine($reg1,$reg2);

                                                                    if ($tab['TIPO_PASANTIA']==1)
                                                                        $asi='PR�CTICA PROFESIONAL';
                                                                    if ($tab['TIPO_PASANTIA']==2)
                                                                        $asi='TRABAJO DE GRADO';
                                                                    printf('
                                                                    <tr height="30"><td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>></td>
                                                                    </tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);
                                                            $k++;    
							    }
							$j++;
                                                        }
                                                    }
                                                }
                                                else
                                                {
                                                    if ($_POST['lapso']!="")
                                                    {
							$j=0;
							$sql2="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial where lapso='$_POST[lapso]' order by CI_E";
							$conex1 -> ExecSQL($sql2,__LINE__,true);    
							$fila = $conex1->filas;
							while ($j<$fila)
							{
							    $tab1 = $conex1->result_h;
							    $tab2 = $conex1->result[$j];
							    $tab = array_combine($tab1,$tab2);
							    
							    $sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";
							    $conex -> ExecSQL($sql1,__LINE__,true);
							    $fila1 = $conex->filas;
							    $k=0;
							    while($k<$fila1)
							    {	
								$reg1 = $conex->result_h;
								$reg2 = $conex->result[$k];
								$reg = array_combine($reg1,$reg2);

                                                                    if ($tab['TIPO_PASANTIA']==1)
                                                                        $asi='PR�CTICA PROFESIONAL';
                                                                    if ($tab['TIPO_PASANTIA']==2)
                                                                        $asi='TRABAJO DE GRADO';
                                                                    printf('
                                                                    <tr height="30"><td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>></td>
                                                                    </tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);
                                                            $k++;
							    }
							$j++;
                                                        }
                                                    }
						else {// Todo viene en blanco
							$j=0;
							$sql2="select DISTINCT CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, lapso from sol_historial order by CI_E";
							$conex1 -> ExecSQL($sql2,__LINE__,true);    
							$fila = $conex1->filas;
							
							//echo $fila;

							while ($j<$fila)
							{
							    $tab1 = $conex1->result_h;
							    $tab2 = $conex1->result[$j];
							    $tab = array_combine($tab1,$tab2);
							    
							    $sql1="select NOMBRES, APELLIDOS from dace002 where CI_E = '$tab[CI_E]'";
							    $conex -> ExecSQL($sql1,__LINE__,true);
							    $fila1 = $conex->filas;
							    $k=0;
							    while($k<$fila1)
							    {	
								$reg1 = $conex->result_h;
								$reg2 = $conex->result[$k];
								$reg = array_combine($reg1,$reg2);							
							
                                                                    if ($tab['TIPO_PASANTIA']==1)
                                                                        $asi='PR�CTICA PROFESIONAL';
                                                                    if ($tab['TIPO_PASANTIA']==2)
                                                                        $asi='TRABAJO DE GRADO';
                                                                    printf('
                                                                    <tr height="30"><td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc">%s</td>
                                                                    <td bgcolor="#FFFFFF"><div class="datosc"><a href="verhist.php?id=%d&as=%s" target="popup" onclick=window.open("", popup, width = 900, height = 800, left=220, top=0, scrollbars=yes)><img src="imagenes/icono_buscar.gif" alt="buscar" width="15"height="15" border="0"></a></td>
                                                                    </tr>',$tab["lapso"],$tab["CI_E"],$reg["NOMBRES"],$reg["APELLIDOS"],$asi,$tab["n_proyecto"],$tab["CI_E"],$tab['TIPO_PASANTIA']);
                                                            $k++;
							    }
							$j++;
                                                        }
                                                    }
                                                }
                                            }
                                        $i++;
					//} // Fin while
                                    }
                                ?>
                            </tr>
			</table>
		    </td>
		<tr><td colspan="5" style="background-color:#99CCFF;"><font style="font-size:2px;">&nbsp;</font></td></tr>
		<tr><td colspan="5"><font style="font-size:5px;">&nbsp;</font></td></tr>		
		<tr align="center" colspan="5">
		    <table align="center" border="0" width=40%>
			<tr>
			    <form name="" action="" >
			        <td valign="bottom">
				    <p align="center"><input type="button" value="Finalizar" name="bexit" onclick="window.close();"></p> 
			        </td>
			    </form>
			</tr>
		    </table>
		</tr>
	    </table>
	</form>
</body>
</html>