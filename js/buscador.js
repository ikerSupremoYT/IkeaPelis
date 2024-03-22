// buscador.js
document.addEventListener('DOMContentLoaded', function () {
  const buscadorInput = document.getElementById('buscador');
  const peliculasContainer = document.getElementById('peliculasContainer');

  buscadorInput.addEventListener('input', function () {
    const searchTerm = buscadorInput.value.toLowerCase();

    // Oculta/muestra las películas según el término de búsqueda
    const peliculas = peliculasContainer.querySelectorAll('.movie');
    peliculas.forEach(function (pelicula) {
      const nombre = pelicula.getAttribute('data-nombre').toLowerCase();
      const coincide = nombre.includes(searchTerm);
      pelicula.style.display = coincide ? 'block' : 'none';
    });
  });
});
// buscador.js
function mostrarBuscador() {
  var campoBuscador = document.getElementById('campoBuscador');
  campoBuscador.style.maxHeight = campoBuscador.style.maxHeight === '0px' ? '100px' : '0px';
}

