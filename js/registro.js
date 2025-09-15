// Load de la página de registro.
window.addEventListener('load', function(){
	var inputs = document.querySelectorAll('input.mayusculas');

	for(let input of inputs)
	{
		input.addEventListener ("keyup", function(){
			this.value = this.value.toUpperCase();
		});
	}
});