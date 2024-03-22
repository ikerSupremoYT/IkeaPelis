function cambiarIdioma(src) {
  // Cambiar la fuente del iframe al hacer clic en un botón
  var iframe = document.getElementById('peliculaFrame');
  iframe.style.opacity = '0'; // Ocultar el iframe

  // Cambiar la fuente del iframe después de un breve retraso
  setTimeout(function() {
    iframe.src = src;
    iframe.style.opacity = '1'; // Mostrar el iframe
  }, 200); // Retraso de 200 milisegundos

  // Resaltar el botón seleccionado
  var buttons = document.querySelectorAll('.idioma-buttons button');
  buttons.forEach(function(button) {
    button.classList.remove('seleccionado');
  });

  var clickedButton = event.target;
  clickedButton.classList.add('seleccionado');
  clickedButton.focus(); // Cambiar el enfoque al botón seleccionado
}
