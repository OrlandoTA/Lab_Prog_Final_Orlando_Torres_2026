function configurarColorEstado() {
    const estadoSelect = document.getElementById('estadoSelect');

    if (!estadoSelect) return;

    const estados = [
        'estado-recibida',
        'estado-reparacion',
        'estado-reparada',
        'estado-sin-reparacion'
    ];

    function actualizarColor() {
        estadoSelect.classList.remove(...estados);
        estadoSelect.classList.add(`estado-${estadoSelect.value}`);
    }

    estadoSelect.addEventListener('change', actualizarColor);

    actualizarColor();
}

document.addEventListener('DOMContentLoaded', configurarColorEstado);