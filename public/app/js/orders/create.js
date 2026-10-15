function configurarColorEstado() {
    const estadoSelect = document.getElementById('estadoSelect');

    if (!estadoSelect) return;

    function actualizarColor() {
        // Quita cualquier clase estado-* previa
        estadoSelect.classList.forEach(clase => {
            if (clase.startsWith('estado-')) {
                estadoSelect.classList.remove(clase);
            }
        });

        // Si no hay estado elegido, no agrega nada
        if (estadoSelect.value) {
            estadoSelect.classList.add(`estado-${estadoSelect.value}`);
        }
    }

    estadoSelect.addEventListener('change', actualizarColor);
    actualizarColor();
}

document.addEventListener('DOMContentLoaded', configurarColorEstado);