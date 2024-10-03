document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío del formulario

    // Obtener valores de los campos
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;

    // Validación del correo electrónico
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
        showAlert('Por favor, introduce un correo electrónico válido.', 'error');
        return;
    }

    // Validación de la contraseña
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!passwordRegex.test(password)) {
        showAlert('La contraseña debe tener al menos 8 caracteres, incluyendo una mayúscula, una minúscula, un número y un carácter especial.', 'error');
        return;
    }

    // Si las validaciones son exitosas, se puede enviar el formulario
    showAlert('Inicio de sesión exitoso!', 'success');
    // Aquí puedes proceder a enviar el formulario si es necesario, por ejemplo:
    // this.submit();
});
