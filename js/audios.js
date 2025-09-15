window.addEventListener('load', function(){
	var galeria = document.getElementById('galeria');
	var menuGaleria = document.getElementById('menuGaleria');
	var elementosGaleria = menuGaleria.children;

	menuGaleria.style.display = 'none';
	galeria.style.position = 'static';
	galeria.style.zIndex = '1';

	for(let i=0; i<elementosGaleria.length; i++)
	{
		elementosGaleria[i].style.display = 'block';
		elementosGaleria[i].style.position = 'relative';
		elementosGaleria[i].style.zIndex = '2';
	}

	galeria.addEventListener('click', function(ev){
		ev.preventDefault();
		if(menuGaleria.style.display == 'none')
		{
			menuGaleria.style.display = 'block';
			galeria.style.backgroundColor = 'rgb(62, 142, 65)';
		}

		else
		{
			menuGaleria.style.display = 'none';
			galeria.style.backgroundColor = 'rgb(50,150,255)';
		}
		

	});
});
