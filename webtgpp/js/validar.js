function validar(f)
{
	    if (f.nom_proyecto.value == "") {
		alert("Debe colocar el Nombre del Proyecto");
		f.nom_proyecto.focus();
		return false;
	    }
	    if (f.Sel_Fecha1.value == "") {
		alert("Debe colocar la Fecha de Inicio");
		return false;
	    }
	    if (f.Sel_Fecha.value == "") {
		alert("Debe colocar la Fecha de Culminaci�n");
		return false;
	    }
	    if (f.apellido_ti.value == "") {
		alert("Debe colocar el Apellido del Tutor Industrial");
		f.apellido_ti.focus();
		return false;
	    }
	    if (f.nombre_ti.value == "") {
		alert("Debe colocar el Nombre del Tutor Industrial");
		f.nombre_ti.focus();
		return false;
	    }
	    if (f.cedula_ti.value == "") {
		alert("Debe colocar la C�dula del Tutor Industrial");
		f.cedula_ti.focus();
		return false;
	    }
	    if (f.telefono_ti.value == "") {
		alert("Debe colocar el Tel�fono del Tutor Industrial");
		f.telefono_ti.focus();
		return false;
	    }
	    if (f.correo_ti.value == "") {
		alert("Debe colocar el Correo del Tutor Industrial");
		f.correo_ti.focus();
		return false;
	    }
            if (f.nom_proyecto.value == "") {
		alert("Debe colocar el Nombre del Proyecto");
		f.nom_proyecto.focus();
		return false;
	    }
	    if (f.Sel_Fecha1.value == "") {
		alert("Debe colocar la Fecha de Inicio");
		return false;
	    }
	    if (f.Sel_Fecha.value == "") {
		alert("Debe colocar la Fecha de Culminaci�n");
		return false;
	    }
	    if (f.cedula_TA.value == "") {
		alert("Debe colocar su Tutor Acad�mico");
		return false;
	    }
            if (f.buscar_usuario.value == "") {
		alert("Debe colocar su Tutor Acad�mico");
		return false;
		}
		    if (f.buscar_usuario.value == "NULL") {
		alert("Debe colocar su Tutor Acad�mico");
		return false;
		}    
}