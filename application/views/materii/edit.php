<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Editare materie</h4>
    </div>

    <div class="card-body">

        <form method="post" action="{SITE_URL}/materii/edit_done">
            <!-- corect: id_student și value corespunzător -->
            <input type="hidden" name="id_materie" value="{id_materie}">

            <div class="row">
                <!-- Left column: simple inputs -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-denumire" class="form-label">Denumire</label>
                        <input type="text" id="input-denumire" name="denumire" class="form-control" value="{denumire}">
                    </div>

                    <div class="mb-3">
                        <label for="input-nr_max_studenti" class="form-label">Numar maxim studenti</label>
                        <input type="number" id="input-nr_max_studenti" name="nr_max_studenti" class="form-control" value="{nr_max_studenti}">
                    </div>

                    <div class="mb-3">
                        <label for="input-nr_credite" class="form-label">Numar credite</label>
                        <input type="number" id="input-nr_credite" name="nr_credite" class="form-control" value="{nr_credite}">
                    </div>

                    <div class="mb-3">
                        <label for="input-cod_disciplina" class="form-label">Cod disciplina</label>
                        <input type="text" id="input-cod_disciplina" name="cod_disciplina" class="form-control" value="{cod_disciplina}">
                    </div>

                    <div class="mb-3">
                        <label for="input-cod_pachet" class="form-label">Cod pachet</label>
                        <input type="number" id="input-cod_pachet" name="cod_pachet" class="form-control" value="{cod_pachet}">
                    </div>
                </div> <!-- end col -->

                <!-- Right column: select options -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="select-tip" class="form-label">Tip</label>
                        <select class="form-select" id="select-tip" name="tip">
                            <option value="">Selecteaza Tip</option>
                            <option value="ob" {SELECT_OB}>obligatorie</option>
                            <option value="op" {SELECT_OP}>optional</option>
                            <option value="f" {SELECT_F}>facultativ</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-finalizare" class="form-label">Finalizare</label>
                        <select class="form-select" id="select-finalizare" name="finalizare">
                            <option value="">Selecteaza Finalizare</option>
                            <option value="c" {SELECT_C}>colocviu</option>
                            <option value="e" {SELECT_E}>examen</option>
                            <option value="v" {SELECT_V}>verificare pe parcurs</option>
                        </select>
                    </div> 
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salveaza modificările</button>
                <a href="{SITE_URL}/materii/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>

    </div> <!-- end card-body -->
</div> <!-- end card -->
