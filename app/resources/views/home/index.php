
    <div class="contenedor">
        <div class="container-fluid">
            <h1 class="titulo-vista">Panel de inicio</h1>
            <h2>Resumen de las ordenes de trabajo</h2>
            <!--Cards-->
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-received">
                        <div class="card-body">
                            <i class="bi bi-inbox"></i>
                            <h2>25</h2>
                            <p>Ordenes recibidas</p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-3">
                    <div class="card card-reparing">
                        <div class="card-body">
                            <i class="bi bi-tools"></i>
                            <h2>2</h2>
                            <p>Ordenes en reparacion</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-done">
                        <div class="card-body">
                            <i class="bi bi-check"></i>
                            <h2>0</h2>
                            <p>Ordenes reparadas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-notDone">
                        <div class="card-body">
                            <i class="bi bi-x"></i>
                            <h2>2</h2>
                            <p>Ordenes sin reparacion</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Botones de acceso rapido-->
            <div class="mt-5">
                <h2>Acceso rapido</h2>

                <div class="d-flex gap-2 mt-3">
                    <a href="#" class="btn btn-accesoRapido">
                        <i class="bi bi-plus-circle"></i>
                        Nueva orden
                    </a>
                    <a href="#" class="btn btn-accesoRapido">
                        <i class="bi bi-person-plus"></i>
                        Nuevo cliente
                    </a>
                    <a href="#" class="btn btn-accesoRapido">
                        <i class="bi bi-phone"></i>
                        Nuevo equipo
                    </a>
                </div>

            </div>

            <!--Tabla de ordenes recientes-->
            <div class="mt-5">
                <h2>Ordenes recientes</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-fixium">
                        <thead>
                            <tr>
                            <th scope="col">Orden</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr >
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr >
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                
            
        </div>
       
        
</div>
