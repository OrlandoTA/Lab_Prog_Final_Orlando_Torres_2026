
    <div class="container-fluid">
        
        <div class="d-flex align-items-center">
            <h2 class="titulo-vista">Clientes</h2>
            <div class="ms-auto " role="group" >
                <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/orders/create.html" class="btn btn-outline-success btn-lg">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                    </svg>
                    Agregar Cliente
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
                            placeholder="Nombre, DNI, teléfono o correo">
                    </div>
                </div>

                <!-- Órdenes -->
                <div class="col-lg-2 col-md-6">
                    <label for="ordenes" class="form-label">Órdenes</label>
                    <select class="form-select" id="ordenes">
                        <option value="" selected>Todos</option>
                        <option value="en-curso">Con órdenes en curso</option>
                        <option value="sin-ordenes">Sin órdenes</option>
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
                        <th scope="col">Nombre y Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo electronico</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td>Marko Santinni</th>
                            <td>27.532.969</td>
                            <td>1547253</td>
                            <td>marksantinni@hotmail.com</td>
                            <td>
                                <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/customer/edit.html" type="button" class="btn btn-sm btn-primary" title="Editar orden">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-primary" title="Ver orden">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" title="Ver orden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
