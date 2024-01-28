<?php
session_start();
include_once('conexion.php');
include ('class.ezpdf.php');
$pdf = new Cezpdf('LETTER','portrait');
$pdf->selectFont('./fonts/Times-Roman.afm');
$pdf->ezSetCmMargins(2.5,2.5,2.5,2.5);	
		$sql="select APELLIDOS, NOMBRES, EXP_E, C_UNI_CA from dace002 where CI_E = '$_SESSION[cedula]'";
		$conex -> ExecSQL($sql,__LINE__,true);
		$fila1 = $conex->filas;
		if ($fila1==1)
		{
			$reg1 = $conex->result_h;
			$reg2 = $conex->result[0];
			$reg = array_combine($reg1,$reg2);
			$reg_aux[]=$reg;

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
		}
$pdf->ezImage("unexpo.jpg",'0','90','none','left','');
$pdf->ezSetY(740);
$pdf->ezText('REP�BLICA BOLIVARIANA DE VENEZUELA',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('MINISTERIO DEL PODER POPULAR PARA LA EDUCACI�N UNIVERSITARIA',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('UNIVERSIDAD NACIONAL EXPERIMENTAL POLIT�CNICA',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('"ANTONIO JOS� DE SUCRE"',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('VICE-RECTORADO PUERTO ORDAZ',10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->ezText('DEPARTAMENTO DE ING. '.$esp[0]["ESP"],10,array('justification' => 'center','left'=> 128,'spacing' =>1.15));
$pdf->setLineStyle(2);
$pdf->line(70,650,550,650);
$pdf->line(70,645,550,645);
$pdf->ezSetY(643);
$pdf->ezText('URB VILLA ASIA - FINAL CALLE CHINA - TLF:(0286)9623821 TELEFAX 9623881-9625245 - APARTADO POSTAL 78',8,array('justification' => 'center','left'=> 0,'spacing' =>1));
$pdf->ezSetY(600);
$pdf->ezText('<b>REQUISITOS PARA LA REALIZACI�N DE LA PR�CTICA PROFESIONAL</b>',10,array('justification' => 'center','spacing' =>1));
$pdf->ezSetDy(-30);
$pdf->ezText('<b>Para la inscripci�n de PP:</b>',10,array('justification' => 'left','spacing' =>1.5));
switch($reg_aux[0]['C_UNI_CA'])
        {   case 2:
            $uc[0]["UC"]="147 U.C.";
            break;
            case 3:
            $uc[0]["UC"]="142 U.C.";
            break;
            case 4:
            $uc[0]["UC"]="148 U.C.";
            break;
            case 5:
            $uc[0]["UC"]="166 U.C.";
            break;
            case 6:
            $uc[0]["UC"]="145 U.C.";
            break;            
        }
$pdf->ezText('1. Tener aprobadas '.$uc[0]["UC"],10,array('justification' => 'left','spacing' =>1.5));
if ($reg_aux[0]['C_UNI_CA']==2)
{
	$pdf->ezText('2. Haber aprobado la asignatura (300956) Metodolog�a de la Investigaci�n o tenerla inscrita en paralelo con la Pr�ctica Profesional.',10,array('justification' => 'left','spacing' =>1.5));
	$pdf->ezText('3. Haber aprobado las asignaturas (322728) Gesti�n de Mantenimiento e (324862) Ingenier�a Indsutrial.',10,array('justification' => 'left','spacing' =>1.5));
}
if ($reg_aux[0]['C_UNI_CA']==3)
{
	$pdf->ezText('2. Haber aprobado la asignatura (300956) Metodolog�a de la Investigaci�n o tenerla inscrita en paralelo con la Pr�ctica Profesional.',10,array('justification' => 'left','spacing' =>1.5));
}
if ($reg_aux[0]['C_UNI_CA']==6)
{
	$pdf->ezText('2. Haber aprobado las asignaturas (344834) Higiene y Seguridad Industrial y (344812) Organizaci�n de Empresas.',10,array('justification' => 'left','spacing' =>1.5));
}
$pdf->ezText('<b>Para la entrega de Anteproyecto:</b>',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('Hacer entrega de lo indicado al Coordinador de Pr�ctica Profesional:',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('1. Copia impresa del Anteproyecto.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('2. Carta de aceptaci�n firmada por el tutor acad�mico.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('Luego, este contenido ser� sometido a evaluaci�n por parte del Comit� de Pr�ctica Profesional para su aprobaci�n.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezSetDy(-10);
$pdf->ezText('<b>Para la asignaci�n de Jurados:</b>',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('Hacer entrega de lo indicado al Coordinador de Pr�ctica Profesional:',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('1. Carta de aprobaci�n/culminaci�n de la Pr�ctica Profesional firmada por el tutor acad�mico.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('2. Dos (2) copias impresas y encuadernadas del informe de Pr�ctica Profesional.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->ezText('Luego, este contenido ser� sometido a evaluaci�n por parte del Comit� de Pr�ctica Profesional para la asignaci�n
del Jurado Presidente y Jurado Secretario.',10,array('justification' => 'full','spacing' =>1.5));
$pdf->eZstream();
?>
