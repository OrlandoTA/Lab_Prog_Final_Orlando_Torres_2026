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


document.addEventListener('DOMContentLoaded',()=>{
    const form = document.querySelector('.formCrear');
    const btnEditar = document.getElementById('btnEditar');
    const btnGuardar = document.getElementById('btnGuardar');
    const campos = document.querySelectorAll('.campo-editable');
    const btnDescartar = document.getElementById('btnDescartarCambios');
    const btnVolver = document.getElementById('btnVolver');

    const textoEditar = '<i class="bi bi-pencil-square"></i> Editar';
    const textoEditando = '<i class="bi bi-pencil-square"></i> Editando';

    let valoresOriginales = {};

    function guardarOriginales() {
        valoresOriginales = {};
        campos.forEach(c => valoresOriginales[c.id] = c.value);
    }

    function restaurarOriginales() {
        campos.forEach(c => c.value = valoresOriginales[c.id]);
        // reset de valores no dispara "change", así que se lo avisamos
        // al select para que actualice su color de estado
        estadoSelect.dispatchEvent(new Event('change'));
    }

    function hayCambios() {
        return [...campos].some(c => c.value !== valoresOriginales[c.id]);
    }
    function habilitarEdicion() {
        campos.forEach(campo => campo.disabled = false);
        btnGuardar.disabled = false;
        btnEditar.disabled = true;
        btnEditar.innerHTML = textoEditando;
    }

    function bloquearEdicion() {
        campos.forEach(campo => campo.disabled = true);
        btnGuardar.disabled = true;
        btnEditar.disabled = false;
        btnEditar.innerHTML = textoEditar;
    }

    btnEditar.addEventListener('click', habilitarEdicion);

    
    btnDescartar.addEventListener('click', async ()=>{
        if(!hayCambios()){
            bloquearEdicion();
            return
        }

        const resultado = await Swal.fire({
            title: '¿Descartar los cambios?',
            text: 'Se perderán las modificaciones que no guardaste.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Descartar',
            cancelButtonText: 'Seguir editando',
            confirmButtonColor: '#EF4444'
        });

        if (resultado.isConfirmed) {
            restaurarOriginales();
            bloquearEdicion();
        }
    });

    btnVolver.addEventListener('click', async(e) =>{

        e.preventDefault();
        if(!hayCambios()){
            bloquearEdicion();
            return
        }

        const resultado = await Swal.fire({
            title: '¿Desea volver?',
            text: 'Se perderán las modificaciones que no guardaste.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Volver',
            cancelButtonText: 'Seguir editando',
            confirmButtonColor: '#EF4444'
        });

        if (resultado.isConfirmed) {
            restaurarOriginales();
            bloquearEdicion();
        }
    });



    form.addEventListener('submit', (e) => {
        e.preventDefault();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Acá va el guardado real (fetch al backend).
        // Si el servidor responde bien, recién ahí se bloquea y se avisa:

        bloquearEdicion();

        Swal.fire({
            title: 'Cambios guardados',
            icon: 'success',
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    });

    // Estado inicial: todo bloqueado
    bloquearEdicion();
});



