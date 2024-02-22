//leccionar textarea
var textarea =.getElementById('text');

// Escuchar el evento de camb de tamaño delarea
textarea.('input', function {
    //ablecer el ancho y alto delarea al tamaño delo
    text.style.width = (textarea.scrollWidth) + 'px';
    textarea.style.height = (textarea.scrollHeight) + 'px';
});