window.addEventListener('load', function(){
    var figuras=document.querySelectorAll('#galeria figure');

    for (let figura of figuras)
    {
        figura.addEventListener('click', function(){
            var nuevaFigura = this.cloneNode(true);
            nuevaFigura.className = 'grande';
            nuevaFigura.querySelector('img').className='';

            let caption = nuevaFigura.querySelector('figcaption');
            caption.style.color = '#fff';
            caption.style.fontStyle = 'italic';

            nuevaFigura.appendChild(caption);

            nuevaFigura.addEventListener('click', function(){this.remove()});
            document.body.appendChild(nuevaFigura);
        });
    }
});