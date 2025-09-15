/*
	FUNCIÓN: aleatorio(inicio, final)
	DESCRIPCIÓN: Genera números aleatorios entre dos números dados.
	PROTOTIPO: INT aleatorio(INT inicio, INT final).
	PARÁMETROS: Numero entero inicial y número entero final.
	VALOR RETORNO: Número entero aleatorio comprendido entre los números de entrada (ambos incluidos).
*/
function aleatorio (inicio, final)
{
	min = inicio>final ? parseInt(final) : parseInt(inicio);
	max = inicio>final ? parseInt(inicio) : parseInt(final);

	if(isNaN(min)||isNaN(max))
	{
		return NaN;
	}

	return (Math.floor(Math.random()*(max-min+1)))+min;
}
/*
	FUNCIÓN: retornarColor()
	DESCRIPCIÓN: Retorna un color RGB aleatorio.
	PROTOTIPO: STRING retornarColor(VOID).
	PARÁMETROS: Niguno.
	VALOR RETORNO: Cadena con color en formato RGB.
*/
function retornarColor()
{
	return `rgb(${aleatorio(0,255)}, ${aleatorio(0,255)}, ${aleatorio(0,255)})`;
}
/*
	FUNCIÓN: coloreaFondo(elemento, color)
	DESCRIPCIÓN: Cambia el color de fondo de un elemento HTML.
	PROTOTIPO: VOID coloreaFondo(HTMLElement elemento, STRING color).
	PARÁMETROS: Elemento HTML al que cambiar la propiedad bacgroundColor y una cadena con un color.
	VALOR RETORNO: Nada.
*/
function coloreaFondo(elemento, color)
{
	return elemento.backgroundColor = color;
}
/*
	FUNCIÓN: coloreaTexto(elemento, color)
	DESCRIPCIÓN:  Cambia el color de un elemento HTML.
	PROTOTIPO: VOID coloreaTexto(HTMLElement elemento, STRING color).
	PARÁMETROS: Elemento HTML al que cambiar la propiedad color y una cadena con un color.
	VALOR RETORNO: Nada.
*/
function coloreaTexto(elemento, color)
{
	return elemento.color = color;
}
/*
	FUNCIÓN: menor(num1, num2)
	DESCRIPCIÓN: Devuelve el menor de los dos números que se le han pasado.
	PROTOTIPO: FLOAT menor (FLOAT num1, FLOAT num2)
	PÁRAMETROS: Dos numeros decimales a comparar.
	VALOR RETORNO: El menor de los dos números que se han pasdo por parámetros.
*/
function menor(num1, num2)
{
	if(num1==undefined || num2==undefined)
		return NaN;
	return num1<num2 ? num1 : num2;
}
/*
	FUNCIÓN: mayor(num1, num2)
	DESCRIPCIÓN: Devuelve el mayor de los dos números que se le han pasado.
	PROTOTIPO: FLOAT mayor (FLOAT num1, FLOAT num2)
	PÁRAMETROS: Dos numeros decimales a comparar.
	VALOR RETORNO: El mayor de los dos números que se han pasdo por parámetros.
*/
function mayor(num1, num2)
{
	if(num1==undefined || num2==undefined)
		return NaN;
	return num1>num2 ? num1 : num2;
}
/*
	FUNCIÓN: esFechaValida(fechaCadena)
	DESCRIPCIÓN: Devuelve si la fecha de un String es válida o no (de momento solo acepta formato aaa-mm-dd).
	PROTOTIPO: bool esFechaValida (String fechaCadena)
	PÁRAMETROS: String con la fecha a validar.
	VALOR RETORNO: Boleano al comprobar si la fecha es válida o no.
*/
function esFechaValida(fechaCadena) 
{
	var indiceA = fechaCadena.indexOf('-');
	var fecha = new Date(fechaCadena);
	if (indiceA == 4 && !isNaN(fecha))
	{
		if(fechaCadena.substring(5, 7) != fecha.getMonth()+1)
		{
			return false;
		}
	} 	
  	// return isNaN(fecha) ? false : true;
  	return !isNaN(fecha);
}
/*
	FUNCIÓN: numeroAFecha(fechaNumero)
	DESCRIPCIÓN: Devuelve una fecha a partir de un número (con formato aaaammdd).
	PROTOTIPO: DATE numeroAFecha (INT fechaNumero)
	PÁRAMETROS: Numero con la fecha a validar.
	VALOR RETORNO: Fecha válida convertida o NaN si no es válida.
*/
function numeroAFecha(fechaNumero)
{
	var fechaCadena = '';
	fechaCadena = fechaNumero.toString();
	var fechaString = fechaCadena.substring(0, 4)+'-'+fechaCadena.substring(4,6)+'-'+fechaCadena.substring(6,8);
	if (!esFechaValida(fechaString))
			return NaN;
	var fecha = new Date(fechaString);
	return fecha;
}
/*
	FUNCIÓN: fechaANumero(fecha)
	DESCRIPCIÓN: Devuelve un número (con formato aaaammdd) a partir de una fecha.
	PROTOTIPO: INT fechaANumero (DATE fecha)
	PÁRAMETROS: Una fecha.
	VALOR RETORNO: Devuelve un número (con formato aaaammdd) de la fecha.
*/
function fechaANumero(fecha)
{
	var anno = fecha.getFullYear()*10000;
	var mes = (fecha.getMonth()+1)*100;
	var dia = fecha.getDate();
	return anno+mes+dia;
}

