// Load de la página index.html
window.addEventListener('load', function(){
	document.body.onkeyup = function(ev){
		if(ev.key.toUpperCase()=='Q' && ev.shiftKey)
		{
			window.location.href = './contacto.php';
		}
	}
});

function evaluar()
{
	aceptar = document.getElementById("aceptar");
	cookies = document.getElementById("cookies");
	mensaje = document.getElementById("mensaje");

	if(aceptar.checked)
	{
		document.cookie = 'aceptar=si; expires=' + new Date('2028-01-01');
		cookies.remove();
	}
	else
	{
		mensaje.innerHTML = '';
		mensaje.innerHTML = "Debe marcar el check para aceptar las cookies.";
	}
}
