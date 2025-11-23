<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Editare student</h4>
    </div>

    <div class="card-body">

        <form method="post" action="{SITE_URL}/studenti/edit_done">
            <!-- corect: id_student și value corespunzător -->
            <input type="hidden" name="id_student" value="{id_student}">

            <div class="row">
                <!-- Left column: simple inputs -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-name" class="form-label">Nume</label>
                        <input type="text" id="input-name" name="nume" class="form-control" value="{nume}">
                    </div>

                    <div class="mb-3">
                        <label for="input-prenume" class="form-label">Prenume</label>
                        <input type="text" id="input-prenume" name="prenume" class="form-control" value="{prenume}">
                    </div>

                    <div class="mb-3">
                        <label for="input-email" class="form-label">Email</label>
                        <input type="email" id="input-email" name="email" class="form-control" value="{email}">
                    </div>

                    <div class="mb-3">
                        <label for="input-cnp" class="form-label">CNP</label>
                        <input type="text" id="input-cnp" name="CNP" class="form-control" value="{CNP}">
                    </div>

                    <div class="mb-3">
                        <label for="input-media" class="form-label">Media</label>
                        <input type="number" id="input-media" name="media" class="form-control" step="0.01" min="0" max="10" value="{media}">
                    </div>
                </div> <!-- end col -->

                <!-- Right column: select options -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="select-nivel" class="form-label">Nivel</label>
                        <select class="form-select" id="select-nivel" name="nivel">
                            <option value="">Selecteaza nivel</option>
                            <option value="l" {SELECT_L}>licenta</option>
                            <option value="m" {SELECT_M}>master</option>
                            <option value="d" {SELECT_D}>doctorat</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-limba" class="form-label">Limba studiu</label>
                        <select class="form-select" id="select-limba" name="limba_studiu">
                            <option value="">Selecteaza limba</option>
                            <option value="ro" {SELECT_RO}>romana</option>
                            <option value="de" {SELECT_DE}>germana</option>
                            <option value="en" {SELECT_EN}>engleza</option>
                            <option value="hu" {SELECT_HU}>maghiara</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-specializare" class="form-label">Specializare</label>
                        <select class="form-select" id="select-specializare" name="specializare">
                            <option value="">Selecteaza specializarea</option>
                            <option value="mi" {SELECT_MI}>matematica-informatica</option>
                            <option value="m" {SELECT_MAT}>matematica</option>
                            <option value="i" {SELECT_INF}>informatica</option>
                        </select>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salveaza modificările</button>
                <a href="{SITE_URL}/studenti/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>

    </div> <!-- end card-body -->
</div> <!-- end card -->
