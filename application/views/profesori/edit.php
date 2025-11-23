<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Editare profesor</h4>
    </div>

    <div class="card-body">

        <form method="post" action="{SITE_URL}/profesori/edit_done">
            <input type="hidden" name="id_profesor" value="{id_profesor}">

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
                </div> <!-- end col -->

                <!-- Right column: select options -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="select-departament" class="form-label">Departament</label>
                        <select class="form-select" id="select-departament" name="departament">
                            <option value="">Selecteaza departament</option>
                            <option value="m" {SELECT_M}>matematica</option>
                            <option value="i" {SELECT_I}>informatica</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-grad" class="form-label">Grad didactic</label>
                        <select class="form-select" id="select-grad" name="grad">
                            <option value="">Selecteaza grad</option>
                            <option value="as" {SELECT_AS}>asistent</option>
                            <option value="le" {SELECT_LE}>lector</option>
                            <option value="co" {SELECT_CO}>conferentiar</option>
                            <option value="pr" {SELECT_PR}>profesor</option>
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
