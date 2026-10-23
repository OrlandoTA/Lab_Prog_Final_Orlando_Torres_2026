
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/orders/index.html?"
                class="btn btn-secondary" role="button" id="btnVolver">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
                Volver
            </a>
            <h2 class="titulo-vista mb-4">Crear orden de trabajo</h2>  
        </div>
        <form action="" class="formCrear">
            <div class="row g-3">

                <div class="col-md-6">
                    <label for="numeroOrden" class="form-label">N.º de orden</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-hash"></i>
                        </span>
                        <input type="text" class="form-control" id="numeroOrden" value="000125" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="clienteSelect" class="form-label">Cliente</label>
                    <div class="input-group">
                        <select class="form-select" id="clienteSelect">
                            <option selected>Seleccionar cliente</option>
                            <option>Juan Pérez</option>
                            <option>María González</option>
                            <option>Carlos Rodríguez</option>
                        </select>

                        <button type="button" class="btn btn-outline-primary" title="Crear nuevo cliente">
                            <i class="bi bi-plus-lg"></i>
                            Nuevo
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="fechaIngreso" class="form-label">Fecha de ingreso</label>
                    <input type="date" class="form-control" id="fechaIngreso" readonly>
                </div>

                <div class="col-md-6">
                    <label for="estadoSelect" class="form-label">Estado</label>
                    <select class="form-select campo-editable select-estado" id="estadoSelect">
                        <option selected>Seleccionar estado</option>
                        <option value="recibida" class="estado-recibida">Recibida</option>
                        <option value="reparacion" class="estado-reparacion">En reparación</option>
                        <option value="reparada" class="estado-reparada">Reparada</option>
                        <option value="sin-reparacion" class="estado-sin-reparacion">Sin reparación</option>
                        <option value="entregado" class="estado-entregado">Entregado</option>
                        <option value="anulada" class="estado-anulada">Anulada</option>
                    </select>
                </div>


            </div>

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="equipoSelect" class="form-label">Equipo</label>
                    <div class="input-group">
                        <select class="form-select" id="equipoSelect">
                            <option selected>Seleccionar equipo</option>
                            <option>Notebook</option>
                            <option>PC de escritorio</option>
                            <option>Celular</option>
                            <option>Tablet</option>
                            <option>Monitor</option>
                            <option>Impresora</option>
                        </select>

                        <button type="button" class="btn btn-outline-primary" title="Crear nuevo equipo">
                            <i class="bi bi-plus-lg"></i>
                            Nuevo
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="marca" placeholder="Ej.: Lenovo">
                </div>

                <div class="col-md-4">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" placeholder="Ej.: IdeaPad 3">
                </div>

                <div class="col-12">
                    <label for="numeroSerie" class="form-label">N.º de serie <span class="text-secondary">(Opcional)</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-upc"></i>
                        </span>
                        <input type="text" class="form-control" id="numeroSerie" placeholder="Ej.: SN123456789">
                    </div>
                </div>
            </div>


            <div class="row g-3">

                <div class="col-12">
                    <label for="descripcionFalla" class="form-label">Descripción de la falla</label>
                    <textarea class="form-control" id="descripcionFalla" rows="4" placeholder="Describa la falla o problema informado por el cliente..."></textarea>
                    <div class="form-text">
                        Incluya los detalles relevantes del problema.
                    </div>
                </div>

                <div class="col-12">
                    <label for="observaciones" class="form-label">
                        Observaciones del técnico <span class="text-secondary">(Opcional)</span>
                    </label>
                    <textarea class="form-control" id="observaciones" rows="4" placeholder="Ingrese observaciones realizadas durante la revisión..."></textarea>
                    <div class="form-text">
                        Incluya observaciones relevantes del equipo.
                    </div>
                </div>

            </div>

            <div class="row g-3 mb-4">

                <div class="col-md-6">
                    <label for="importeFinal" class="form-label">
                        Importe final <span class="text-secondary">(Opcional)</span>
                    </label>

                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="importeFinal"
                            placeholder="0.00" min="0" step="0.01">
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="fechaEntrega" class="form-label">Fecha de entrega</label>
                    <input type="date" class="form-control" id="fechaEntrega" readonly>
                    <div class="form-text">
                        Se asignará cuando la reparación sea finalizada.
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4 mb-4">
                <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/orders/index.html" class="btn btn-outline-secondary btn-lg">
                   <i class="bi bi-x-lg"></i>
                    Cancelar
                </a>
                
               <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-lg"></i>
                    Guardar
                </button>
            </div>
        </form>
    </div>
