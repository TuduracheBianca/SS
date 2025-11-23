
<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Adaugare student</h4>
    </div>

    <div class="card-body">

        <form method="post" action="{SITE_URL}/studenti/add_done">
            <div class="row">
                <!-- Left column: simple inputs -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-name" class="form-label">Nume</label>
                        <input type="text" id="input-name" name="nume" class="form-control" placeholder="Nume">
                    </div>

                    <div class="mb-3">
                        <label for="input-name" class="form-label">Prenume</label>
                        <input type="text" id="input-name" name="prenume" class="form-control" placeholder="Prenume Complet">
                    </div>

                    <div class="mb-3">
                        <label for="input-email" class="form-label">Email</label>
                        <input type="email" id="input-email" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label for="input-cnp" class="form-label">CNP</label>
                        <input type="text" id="input-cnp" name="CNP" class="form-control" placeholder="CNP">
                    </div>

                    <div class="mb-3">
                        <label for="input-media" class="form-label">Media</label>
                        <input type="number" id="input-media" name="media" class="form-control" step="0.01" min="0" max="10" placeholder="Media (ex. 9.50)">
                    </div>
                </div> <!-- end col -->

                <!-- Right column: select options -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="select-nivel" class="form-label">Nivel</label>
                        <select class="form-select" id="select-nivel" name="nivel">
                            <option value="">Selecteaza nivel</option>
                            <option value="l">licenta</option>
                            <option value="m">master</option>
                            <option value="d">doctorat</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-limba" class="form-label">Limba studiu</label>
                        <select class="form-select" id="select-limba" name="limba_studiu">
                            <option value="">Selecteaza limba</option>
                            <option value="ro">romana</option>
                            <option value="de">germana</option>
                            <option value="en">engleza</option>
                            <option value="hu">maghiara</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-specializare" class="form-label">Specializare</label>
                        <select class="form-select" id="select-specializare" name="specializare">
                            <option value="">Selecteaza specializarea</option>
                            <option value="mi">matematica-informatica</option>
                            <option value="m">matematica</option>
                            <option value="i">informatica</option>
                        </select>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salveaza student</button>
            </div>
        </form>

    </div> <!-- end card-body -->
</div> <!-- end card -->