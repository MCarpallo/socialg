function validacionLogin(){
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;

	if (user == '' && password == '') {
		document.getElementById('mensaje').style.display ='block'
		document.getElementById('mensaje').innerHTML = "Los campos user y password son obligatorios";
		return false;
	}else if (user=='') {
		document.getElementById('mensaje').style.display ='block'
		document.getElementById('mensaje').innerHTML = "El campo user es obligatorio";
		return false;
	}else if (password=='') {
		document.getElementById('mensaje').style.display ='block'
		document.getElementById('mensaje').innerHTML = "El campo password es obligatorio";
		return false;
	}else {
		return true;
	}
	}


	
	function validacionImagen(){
	var nombre = document.getElementById('nombre').value;
	var desc = document.getElementById('desc').value;
	var upload = document.getElementById('uploadedfile').value;


	if (nombre == '' && desc == '' && upload == '') {
		document.getElementById('mensaje').style.display ='block';
		document.getElementById('mensaje').innerHTML = "Los campos nombre, descripción y la imágen son obligatorios";
		return false;
	}else if (nombre=='' && desc == '') {
		document.getElementById('mensaje').style.display ='block';
		document.getElementById('mensaje').innerHTML = "El nombre y la descripcion son obligatorios";
		return false;
	}else if (nombre='' && upload=='') {
		document.getElementById('mensaje').style.display ='block';
		document.getElementById('mensaje').innerHTML = "La imágen y el nombre son obligatorios";
		return false;
	}else if (desc == '' & upload=='') {
		document.getElementById('mensaje').style.display ='block';
		document.getElementById('mensaje').innerHTML = "La imágen y la descripción son obligatorias";
		return false;
	}else if (upload=='') {
		document.getElementById('mensaje').style.display ='block';
		document.getElementById('mensaje').innerHTML = "La imágen es obligatoria";
		return false;
	}else if (desc == '') {
		document.getElementById('mensaje').style.display ='block';
		document.getElementById('mensaje').innerHTML = "La descripción es obligatoria";
		return false;
	}else if (nombre =='') {
		document.getElementById('mensaje').style.display ='block';
		document.getElementById('mensaje').innerHTML = "EL nombre es obligatorio";
		return true;
	}else{
		return true;
	}
	
	}