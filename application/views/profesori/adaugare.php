<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Adaugare Profesor</h4>
    </div>

    <div class="card-body">

        <form method="post" action="<?= site_url('profesori/add_done') ?>">
            <div class="row">
                <!-- Left column: simple inputs -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-name" class="form-label">Nume</label>
                        <input type="text" id="input-name" name="nume" class="form-control" placeholder="Nume">
                    </div>

                    <div class="mb-3">
                        <label for="input-name" class="form-label">Prenume</label>
                        <input type="text" id="input-name" name="prenume" class="form-control" placeholder="Prenume complet">
                    </div>

                    <div class="mb-3">
                        <label for="input-email" class="form-label">Email</label>
                        <input type="email" id="input-email" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label for="input-cnp" class="form-label">CNP</label>
                        <input type="text" id="input-cnp" name="CNP" class="form-control" placeholder="CNP">
                    </div>
                </div> <!-- end col -->

                <!-- Right column: select options -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="select-departament" class="form-label">Departament</label>
                        <select class="form-select" id="select-departament" name="departament">
                            <option value="">Selecteaza Departament</option>
                            <option value="matematica">matematica</option>
                            <option value="informatica">informatica</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-grad" class="form-label">Grad didactic</label>
                        <select class="form-select" id="select-grad" name="grad">
                            <option value="">Selecteaza grad</option>
                            <option value="asistent">asistent</option>
                            <option value="lector">lector</option>
                            <option value="conferentiar">conferentiar</option>
                            <option value="profesor">profesor</option>
                        </select>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salveaza profesor</button>
            </div>
        </form>

    </div> <!-- end card-body -->
</div> <!-- end card -->