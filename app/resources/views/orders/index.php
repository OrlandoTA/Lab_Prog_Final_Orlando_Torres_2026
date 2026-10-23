

    <div class="container-fluid">
        
        <div class="d-flex align-items-center">
            <h2 class="titulo-vista">Ordenes de trabajo</h2>
            <div class="ms-auto " role="group" >
                <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/orders/create.html" class="btn btn-outline-success btn-lg">
                    <i class="bi bi-plus-lg"></i>
                    Crear orden
                </a>
                
                <button type="button" class="btn btn-outline-primary btn-lg"><i class="bi bi-download me-1"></i>Exportar</button>  
            </div>
            
        </div>

        <!-- Filtros -->
        <div class="card filtro-fixium mt-4 mb-4">
            <div class="card-body">
                <div class="row g-3 align-items-end">

                    <!-- Buscar -->
                    <div class="col-lg-4 col-md-12">
                        <label for="buscar" class="form-label">Buscar</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" id="buscar"
                                placeholder="Cliente, equipo o orden">
                        </div>
                    </div>

                    <!-- Estados -->
                    <div class="col-lg-2 col-md-6">
                        <label for="ordenes" class="form-label">Estados</label>
                        <select class="form-select" id="ordenes">
                            <option selected value="">Todos</option>
                            <option value="recibida">Recibida</option>
                            <option value="en-reparacion">En reparación</option>
                            <option value="reparada">Reparada</option>
                            <option value="sin-reparacion">Sin reparación</option>
                            <option value="entregada">Entregada</option>
                        </select>
                    </div>
                    
                    <!-- Fecha de alta -->
                    <div class="col-lg-2 col-md-3 col-6">
                        <label for="fechaDesde" class="form-label">Alta desde</label>
                        <input type="date" class="form-control" id="fechaDesde">
                    </div>

                    <div class="col-lg-2 col-md-3 col-6">
                        <label for="fechaHasta" class="form-label">Alta hasta</label>
                        <input type="date" class="form-control" id="fechaHasta">
                    </div>

                    <!-- Botones -->
                    <div class="col-lg-2 col-md-12 d-flex gap-2">
                        <button type="button" class="btn btn-filtrar flex-grow-1">
                            Filtrar
                        </button>
                        <button type="button" class="btn btn-limpiar" title="Limpiar filtros" aria-label="Limpiar filtros">
                            <i class="bi bi-arrow-counterclockwise"></i>
                        </button>
                    </div>

                </div>
        </div>
    </div>

        <!--Tabla de ordenes-->
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table table-hover table-fixium">
                    <thead>
                        <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Equipo</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/orders/edit.html" type="button" class="btn btn-sm btn-primary" title="Editar orden">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-primary" title="Ver orden">
                                <i class="bi bi-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
