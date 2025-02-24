// Función para redirigir a la página seleccionada en el menú desplegable
function redirigir() {
    const select = document.getElementById('servicio');
    const value = select.value;
    window.location.href = value;
}