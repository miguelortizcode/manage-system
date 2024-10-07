// Variables para los elementos del formulario
const form = document.getElementById('form');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

// Evento de envío del formulario
form.addEventListener('submit', (e) => {
    e.preventDefault(); // Evitar el envío del formulario
    validateForm();
});

// Eventos de los inputs
emailInput.addEventListener('input', () => validateInput(emailInput, validateEmail));
passwordInput.addEventListener('input', () => validateInput(passwordInput, validatePassword));

// Función para validar el formulario
function validateForm() {
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    let valid = true;

    // Validación del correo electrónico
    if (!validateEmail(email)) {
        valid = false;
    }

    // Validación de la contraseña
    if (!validatePassword(password)) {
        valid = false;
    }

    // Mostrar mensaje final y enviar el formulario si es válido
    if (valid) {
        showAlert('Inicio de sesión exitoso', 'success');
        // Simulando el envío del formulario
        form.submit(); // Asegúrate de que este sea el comportamiento deseado.
    } else {
        showAlert('Por favor, corrige los errores en el formulario.', 'warning');
    }
}

// Validar los inputs
function validateInput(inputElement, validateFunction) {
    const isValid = validateFunction(inputElement.value.trim());
    applyStyle(inputElement, isValid);
}

// Aplicar estilos según corresponda
function applyStyle(inputElement, isValid) {
    if (isValid) {
        inputElement.classList.remove('input__error');
        inputElement.classList.add('input__success');
    } else {
        inputElement.classList.remove('input__success');
        inputElement.classList.add('input__error');
    }
}

// Función de validación para el correo
function validateEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (email === '') {
        showAlert('El correo electrónico es obligatorio', 'warning');
        return false; 
    }

    if (!emailRegex.test(email)) {
        showAlert('El correo electrónico no es válido', 'warning');
        return false; 
    }

    return true; // Retorna true si la validación es exitosa
}

// Función de validación para la contraseña
function validatePassword(password) {
    if (password === '') {
        showAlert('La contraseña es obligatoria', 'warning');
        return false;
    }

    if (password.length < 8) {
        showAlert('La contraseña debe tener al menos 8 caracteres', 'warning');
        return false;
    }

    return true; // Retorna true si la validación es exitosa
}