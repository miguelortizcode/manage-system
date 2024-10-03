// Función para mostrar alertas
function showAlert(message, type) {
    const alertBox = document.getElementById('alert');
    const alertMessage = document.getElementById('alert-message');
    const closeButton = document.getElementById('close-alert');

    alertMessage.textContent = message;
    alertBox.className = `alert ${type}`;
    alertBox.style.display = 'block';

    // Cerrar la alerta al hacer clic en el botón "X"
    closeButton.onclick = function() {
        alertBox.style.display = 'none'; // Cierra la alerta
    };

    // Ocultar la alerta automáticamente después de 3 segundos
    setTimeout(() => {
        alertBox.style.display = 'none'; // Desaparece después de 3 segundos
    }, 3000);
}
