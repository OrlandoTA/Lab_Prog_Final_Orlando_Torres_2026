


    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/customer/index.html?"
                class="btn btn-secondary" role="button" id="btnVolver">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
                Volver
            </a>
            <h2 class="titulo-vista mb-4">Crear cliente</h2>
            
        </div>
        <form class="formCrear">
            <div class="row g-3">

                <div class="col-md-4">
                    <label for="nombreCliente" class="form-label">Nombre</label>

                    <input type="text" class="form-control" id="nombreCliente" placeholder="Ej.: Jose" >
                </div>
                <div class="col-md-4">
                    <label for="apellidoCliente" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellidoCliente" placeholder="Ej.: Martinez" >
                </div>

                <div class="col-md-4">
                    <label for="dniCliente" class="form-label">Documento nacional de identificacion <span
                            class="text-secondary">(DNI)</span></label>
                    <input type="number" class="form-control" id="dniCliente" placeholder="Ej.: 45899801" >
                </div>

            </div>

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="emailCliente" class="form-label">Email<span
                            class="text-secondary">(Opcional)</span></label>
                    <input type="email" id="emailCliente" class="form-control" placeholder="Ej.: ejem@hotmail.com" >

                </div>
                <div class="col-md-4">
                    <label for="telefonoCliente" class="form-label">Telefono</label>

                    <input type="number" class="form-control campo-editable"  id="telefonoCliente"
                        placeholder="Ej.: 154183724">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="calleCliente" class="form-label">Calle <span
                            class="text-secondary">(Opcional)</span></label>
                    <input type="text" class="form-control campo-editable" id="calleCliente"
                        placeholder="Ej.: Av. San Martín">
                </div>
                <div class="col-md-3">
                    <label for="numeroCliente" class="form-label">Número</label>
                    <input type="text" class="form-control campo-editable" id="numeroCliente" placeholder="Ej.: 1250">
                </div>
                <div class="col-md-3">
                    <label for="pisoDptoCliente" class="form-label">Piso/Dpto <span
                            class="text-secondary">(Opcional)</span></label>
                    <input type="text" class="form-control campo-editable" id="pisoDptoCliente" placeholder="Ej.: 2° B">
                </div>

            </div>




            <div class="d-flex justify-content-end gap-2 mt-4 mb-4">
                <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/customer/index.html" class="btn btn-outline-secondary btn-lg">
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
