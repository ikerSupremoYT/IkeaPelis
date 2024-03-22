// Obtén la ventana emergente
var modal = document.getElementById("myModal");

// Obtén el contenido de la ventana emergente
var modalContent = document.querySelector(".modal-content");

// Obtén el elemento que cierra la ventana emergente
var span = document.getElementsByClassName("close")[0];

// Función para mostrar la ventana emergente
function showModal() {
  modal.style.display = "block";
  modal.style.opacity = "1";
  modalContent.style.transform = "scale(1)";
}

// Función para ocultar la ventana emergente
function hideModal() {
  modal.style.opacity = "0";
  modalContent.style.transform = "scale(0)";
  setTimeout(function() {
    modal.style.display = "none";
  }, 500); // Espera la duración de la animación antes de ocultar la ventana emergente
}

// Cuando la página se carga, abre la ventana emergente 
window.onload = showModal;

// Cuando el usuario hace clic en (x), cierra la ventana emergente
span.onclick = hideModal;

// Cuando el usuario hace clic en cualquier lugar fuera de la ventana emergente, ciérrala
window.onclick = function(event) {
  if (event.target == modal) {
    hideModal();
  }
}

// Añade una transición de entrada a la ventana emergente
modalContent.style.transition = "transform 0.3s, opacity 0.3s";

// Añade una transición de salida a la ventana emergente
modal.style.transition = "opacity 0.3s";