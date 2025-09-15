// Load de la página index.html
window.addEventListener('load', function(){
	document.body.onkeyup = function(ev){
		if(ev.key.toUpperCase()=='Q' && ev.shiftKey)
		{
			window.location.href = './contacto.html';
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
		cookies.remove();
	}
	else
	{
		mensaje.innerHTML = "";
		mensaje.innerHTML = "Debe marcar el check para aceptar las cookies.";
	}
}
