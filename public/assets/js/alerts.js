// Función para mostrar alertas
function showAlert(message, type) {
    const alert_box = document.getElementById('alert');
    const alert_message = document.getElementById('alert-message');
    const close_alert = document.getElementById('close__alert');
    const pause_alert = document.getElementById('pause__alert');
    
    alert_message.textContent = message;
    alert_box.className = `alert ${type}`;
    alert_box.classList.remove('hidden');  // Muestra la alerta
    alert_box.classList.add('show');  // Agrega la clase de visualización

    let isPaused = false;  // Estado de pausa
    let remainingTime = 2000;  // Tiempo restante para ocultar la alerta
    let hideTimeout;
    let startTime;

    // Función para ocultar la alerta
    const hideAlert = () => {
        alert_box.classList.add('hidden');  // Oculta la alerta
    };

    // Función para iniciar el temporizador
    const startTimer = (duration) => {
        startTime = Date.now();  // Marca el tiempo de inicio
        hideTimeout = setTimeout(hideAlert, duration);  // Configura el temporizador con la duración
    };

    // Inicia el temporizador por primera vez (3 segundos)
    startTimer(remainingTime);

    // Cerrar la alerta al hacer clic en el botón "X"
    close_alert.onclick = function() {
        clearTimeout(hideTimeout);  // Detiene el temporizador si se cierra manualmente
        alert_box.classList.add('hidden');  // Oculta la alerta
    };

    // Pausar o reanudar el temporizador al hacer clic en el botón de pausa
    pause_alert.onclick = () =>{
        if (isPaused) {
            // Si está pausado, calcula el tiempo restante y reinicia el temporizador
            const elapsedTime = Date.now() - startTime;  // Calcula el tiempo transcurrido
            remainingTime -= elapsedTime;  // Resta el tiempo transcurrido del tiempo restante
            startTimer(remainingTime);  // Reinicia el temporizador con el tiempo restante
            pause_alert.textContent = 'pause'; 
            alert_box.classList.add('show');
            isPaused = false;
        } else {
            // Si no está pausado, pausa el temporizador
            clearTimeout(hideTimeout);  // Detiene el temporizador
            pause_alert.textContent = 'play_arrow';  // Cambia el texto/ícono a "play"
            alert_box.classList.add('show');
            isPaused = true;
        }
    };
}
