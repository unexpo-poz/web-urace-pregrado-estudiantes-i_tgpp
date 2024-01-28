<?php
session_start();
include_once('conexion.php');
include ('class.ezpdf.php');
$pdf = new Cezpdf('LETTER','portrait');
$pdf->selectFont('./fonts/Times-Roman.afm');
$pdf->ezSetCmMargins(2.5,1,2.5,2.5);
	$sql="select CI_E, empresa, n_proyecto, TIPO_PASANTIA, cedula_TI, nombre_TI, apellido_TI, telefono_TI, correo_TI, fecha_i, fecha_c, id_estatus, cedula_TA, cedula_JS, cedula_JC from sol_tgpp where CI_E='$_REQUEST[id]' and TIPO_PASANTIA='$_REQUEST[tp]' ";
	$conex1 -> ExecSQL($sql,__LINE__,true);
	$fila = $conex1->filas;
	if ($fila==1)
	{	$tab1 = $conex1->result_h;
		$tab2 = $conex1->result[0];
		$tab = array_combine($tab1,$tab2);
		$tablaaux[]=$tab;
		
		$sql1="select APELLIDOS, NOMBRES, EXP_E, C_UNI_CA from dace002 where CI_E = '$tab[CI_E]'";
		$conex -> ExecSQL($sql1,__LINE__,true);
		$fila1 = $conex->filas;
		if ($fila1==1)
		{
			$reg1 = $conex->result_h;
			$reg2 = $conex->result[0];
			$reg = array_combine($reg1,$reg2);
			$reg_aux[]=$reg;
			
			$sql2="select APELLIDO, NOMBRE, CI from tblaca007 where CI = $tab[cedula_JC]";
			$conex -> ExecSQL($sql2,__LINE__,true);
			$fila2 = $conex->filas;
			if ($fila2==1)
		    	{
			$pro1 = $conex->result_h;
			$pro2 = $conex->result[0];
			$prof = array_combine($pro1,$pro2);
			$prof_aux[] =$prof;
			}
			$sql3="select APELLIDO, NOMBRE, CI from tblaca007 where CI = $tab[cedula_JS]";
            $conex -> ExecSQL($sql3,__LINE__,true);
			$fila3 = $conex->filas;
			if ($fila3==1)
		    	{
			$pro1 = $conex->result_h;
			$pro2 = $conex->result[0];
			$prof2 = array_combine($pro1,$pro2);
			$prof_aux2[] =$prof2;
			}
			$sql4="select APELLIDO, NOMBRE, CI from tblaca007 where CI = $tab[cedula_TA]";
                        $conex -> ExecSQL($sql4,__LINE__,true);
			$fila4 = $conex->filas;
			if ($fila4==1)
		    	{
			$pro1 = $conex->result_h;
			$pro2 = $conex->result[0];
			$prof3 = array_combine($pro1,$pro2);
			$prof_aux3[] =$prof3;
			}
		}
	}
	if ($_REQUEST[tp]==1)
		$asi[0]["TIPO"]="PR�CTICA PROFESIONAL";
		$ART[0]["ART"]=" LA";
		$ART[0]["LETRA"]="A";
		$ART[0]["ARTI"]="LA";
	if ($_REQUEST[tp]==2)
		$asi[0]["TIPO"]="TRABAJO DE GRADO";
		$ART[0]["ART"]="L";
		$ART[0]["LETRA"]="O";
		$ART[0]["ARTI"]="EL";
        switch($reg_aux[0]['C_UNI_CA'])
        {   case 2:
            $esp[0]["ESP"]="MEC�NICA";
            break;
            case 3:
            $esp[0]["ESP"]="EL�CTRICA";
            break;
            case 4:
            $esp[0]["ESP"]="METAL�RGICA";
            break;
            case 5:
            $esp[0]["ESP"]="ELECTR�NICA";
            break;
            case 6:
            $esp[0]["ESP"]="INDUSTRIAL";
            break;            
        }
	if($reg_aux[0]['C_UNI_CA']==5 && $_REQUEST[tp]==2)
	{	$cadena[0]["palabras"]=".";
	}	else
	{	$cadena[0]["palabras"]=", ".$ART[0]["ARTI"]." CUAL EST� DESARROLLAD".$ART[0]["LETRA"]." BAJO LA TUTOR�A INDUSTRIAL DEL ING. ".$tablaaux[0]['apellido_TI'].", ".$tablaaux[0]['apellido_TI'].".";
	}
	$diasemana[]=array("LUNES","MARTES","MI�RCOLES","JUEVES","VIERNES","S�BADO","DOMINGO");
	$meses[] = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
$pdf->ezImage("unexpo.jpg",'0','90','none','left','');
$pdf->ezSetY(740);
$pdf->ezText('REP�BLICA BOLIVARIANA DE VENEZUELA',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('MINISTERIO DEL PODER POPULAR PARA LA EDUCACI�N UNIVERSITARIA',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('UNIVERSIDAD NACIONAL EXPERIMENTAL POLIT�CNICA',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('"ANTONIO JOS� DE SUCRE"',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('VICE-RECTORADO PUERTO ORDAZ',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('DEPARTAMENTO DE INGENIER�A '.$esp[0]["ESP"],10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->setLineStyle(2);
$pdf->line(70,650,550,650);
$pdf->line(70,645,550,645);
$pdf->ezSetY(643);
$pdf->ezText('URB VILLA ASIA - FINAL CALLE CHINA - TLF:(0286)9623821 TELEFAX 9623881-9625245 - APARTADO POSTAL 78',8,array('justification' => 'center','left'=> 0,'spacing' =>1));
$pdf->ezSetY(615);
$pdf->ezText('<b>ACTA DE EVALUACI�N FINAL DE '.$asi[0]["TIPO"].'</b>',10,array('justification' => 'center','spacing' =>1));
$pdf->ezSetY(590);
$pdf->ezText('HOY,_______________________, REUNIDOS EN________________________________, PRESIDIDO POR EL PROFESOR: '.$prof_aux[0]["NOMBRE"].' '.$prof_aux[0]["APELLIDO"].
             ', SE DIO INICIO AL ACTA DE PRESENTACI�N ORAL P�BLICA DE'.$ART[0]["ART"].' '.$asi[0]["TIPO"].' TITULAD'.$ART[0]["LETRA"].': '.$tablaaux[0]["n_proyecto"].'.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezSetDy(-5);
$pdf->ezText('PRESENTADO POR EL BACHILLER: <b>'.$reg_aux[0]["APELLIDOS"].', '.$reg_aux[0]["NOMBRES"].'</b>, C.I.: '.$tablaaux[0]["CI_E"].'.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezSetDy(-5);
$pdf->ezText('UNA VEZ REALIZADA LA PRESENTACI�N ORAL Y CONCLUIDO EL CICLO DE PREGUNTAS, EL JURADO EVALUADOR EMITI� SU VEREDICTO DE ___________ CON UNA CALIFICACI�N DE, ________ PUNTOS EN LA ESCALA DEL 1 AL 9, DE ACUERDO A LA SIGUIENTE DISTRIBUCI�N: 
',10,array('justification' => 'full','spacing' =>1.5));

$data = array(
array('MIEMBROS'=>'COORDINADOR',     'INFORME'=>'M�XIMO (20)','NOTA1'=>'','PRESENTACI�N'=>'M�XIMO (10)','NOTA2'=>'','NOTAJ'=>'M�XIMO (30)','NOTA3'=>''),
array('MIEMBROS'=>'SECRETARIO',      'INFORME'=>'M�XIMO (20)','NOTA1'=>'','PRESENTACI�N'=>'M�XIMO (10)','NOTA2'=>'','NOTAJ'=>'M�XIMO (30)','NOTA3'=>''),
array('MIEMBROS'=>'TUTOR ACAD�MICO', 'INFORME'=>'M�XIMO (15)','NOTA1'=>'','PRESENTACI�N'=>'M�XIMO (5)', 'NOTA2'=>'','NOTAJ'=>'M�XIMO (20)','NOTA3'=>''),
array('MIEMBROS'=>'TUTOR INDUSTRIAL','INFORME'=>'M�XIMO (15)','NOTA1'=>'','PRESENTACI�N'=>'M�XIMO (5)', 'NOTA2'=>'','NOTAJ'=>'M�XIMO (20)','NOTA3'=>'')
);
$cols = array('MIEMBROS'=>'<b>MIEMBROS</b>','INFORME'=>'<b>INFORME</b>','NOTA1'=>'<b>NOTA</b>','PRESENTACI�N'=>'<b>PRESENTACI�N</b>','NOTA2'=>'<b>NOTA</b>','NOTAJ'=>'<b>NOTA POR JURADO</b>','NOTA3'=>'<b>NOTA</b>');
$options= array('showLines'=>2,'showHeadings' =>1,'xPos'=>318,'shaded'=>0,
                'cols'=>array('PRESENTACI�N'=>array('justification'=>'left','width'=>90)));
$data1 = array(
array('DEF'=>'NOTA DEFINITIVA (M�XIMA 100 PUNTOS)','NOTA'=>''),
array('DEF'=>'NOTA DEFINITIVA (ESCALA DEL 1 AL 9)','NOTA'=>'')
);
$cols1 = array('DEF'=>'DEF','NOTA'=>'NOTA');
$options1= array('showLines'=>2,'showHeadings' =>0,'xPos'=>318,'shaded'=>0,
                 'cols'=>array('DEF'=>array('justification'=>'center','width'=>344),'NOTA'=>array('justification'=>'left','width'=>146)));
$pdf->ezTable($data,$cols,'',$options);
$pdf->ezTable($data1,$cols1,'',$options1);
$pdf->ezSetDy(-5);
$pdf->ezText('SE EMITE LA PRESENTE ACTA, QUEDANDO ASENTADA EN EL DEPARTAMENTO DE ING. '.$esp[0]["ESP"].', A LOS _________ D�AS DEL MES DE _______________ DE ____________.',10,array('justification' => 'full','spacing' =>1.15));
$pdf->ezText('OBSERVACIONES: ____________________________________________________________________________',10,array('justification' => 'full','spacing' =>1.15));
$pdf->ezText(' _____________________________________________________________________________________________',10,array('justification' => 'full','spacing' =>1.15));
$data2 = array(
array('MIEMBROS'=>'COORDINADOR',     'NYA'=>$prof_aux[0]["NOMBRE"].' '.$prof_aux[0]["APELLIDO"],'CI'=>$prof_aux[0]["CI"],'FIRMA'=>''),
array('MIEMBROS'=>'SECRETARIO',      'NYA'=>$prof_aux2[0]["NOMBRE"].' '.$prof_aux2[0]["APELLIDO"],'CI'=>$prof_aux2[0]["CI"],'FIRMA'=>''),
array('MIEMBROS'=>'TUTOR ACAD�MICO', 'NYA'=>$prof_aux3[0]["NOMBRE"].' '.$prof_aux3[0]["APELLIDO"],'CI'=>$prof_aux3[0]["CI"],'FIRMA'=>''),
array('MIEMBROS'=>'TUTOR INDUSTRIAL','NYA'=>$tablaaux[0]['nombre_TI'].' '.$tablaaux[0]['apellido_TI'],'CI'=>$tablaaux[0]["cedula_TI"],'FIRMA'=>'')
);
$cols2 = array('MIEMBROS'=>'<b>MIEMBROS</b>','NYA'=>'<b>NOMBRE Y APELLIDO</b>','CI'=>'<b>C.I.</b>','FIRMA'=>'<b>FIRMA</b>');
$options2= array('showLines'=>2,'showHeadings' =>1,'xPos'=>318,'shaded'=>0,'titleFontSize' => 10,
                'cols'=>array('MIEMBROS'=>array('justification'=>'left','width'=>120),'NYA'=>array('justification'=>'left','width'=>172),
                'CI'=>array('justification'=>'center','width'=>100),'FIRMA'=>array('justification'=>'center','width'=>100)));
$pdf->ezSetDy(-5);
$pdf->ezTable($data2,$cols2,'<b>FIRMAN LOS MIEMBROS DEL JURADO</b>',$options2);
//$pdf->ezText('AVALADO POR EL COORDINADOR DEL COMIT� DE '.$asi[0]["TIPO"].'.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->setLineStyle(1);
$pdf->ezSetY(130);
$pdf->ezText('AVALADO POR EL COORDINADOR DEL COMIT� DE '.$asi[0]["TIPO"].'.',10,array('justification' => 'full','spacing' =>1.5));

	/*$tipo_coord = ($_REQUEST[tp] == 1) ? "": ;

	$cSQL = "SELECT userid FROM usuarios WHERE tipo_usuario=";*/
	
	
	/*$sql1="select APELLIDO, NOMBRE, DEPARTAMENTO from tblaca007 where CI = '$_SESSION[coor]'";
        $conex -> ExecSQL($sql1,__LINE__,true);
	$fila = $conex->filas;
	if ($fila==0)
	    {
	    $reg1 = $conex->result_h;
	    $reg2 = $conex->result[0];
	    $reg = array_combine($reg1,$reg2);*/
$pdf->ezSetY(110);
//$pdf->ezText($reg["NOMBRE"].' '.$reg["APELLIDO"],10,array('justification' => 'center','right'=> 0,'spacing' =>1.15));
$pdf->ezText("NOMBRE Y APELLIDO: _________________________________ ",10,array('justification' => 'left','right'=> 0,'spacing' =>1.15));
$pdf->ezText("CI: _______________",10,array('justification' => 'left','right'=> 0,'spacing' =>1.15));
$pdf->ezSetY(75);
$pdf->ezText("FIRMA: _________________________________",10,array('justification' => 'left','right'=> 0,'spacing' =>1.15));
	    //}
ob_end_clean();
$pdf->eZstream();
?>
