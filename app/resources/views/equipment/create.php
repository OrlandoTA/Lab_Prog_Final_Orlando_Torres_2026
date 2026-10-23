
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/equipment/index.html?"
                class="btn btn-secondary" role="button" id="btnVolver">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
                Volver
            </a>
            <h2 class="titulo-vista mb-4">Crear equipo</h2>
        </div>
        <form action="" class="formCrear">


            <div class="row g-3">

                <div class="col-12">
                    <label for="equipo" class="form-label">Tipo de equipo</label>
                    <input type="text" class="form-control" id="equipo" rows="4" placeholder="Ej.: Computadora">

                </div>

            </div>


            <div class="d-flex justify-content-end gap-2 mt-4 mb-4">
                <a href="http://localhost/Lab_Prog_Final_Orlando_Torres_2026/app/resources/views/equipment/index.html"
                    class="btn btn-outline-secondary btn-lg">
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
