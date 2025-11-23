<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Adaugare Materie</h4>
    </div>

    <div class="card-body">

        <form method="post" action="{SITE_URL}/materii/add_done">
            <div class="row">
                <!-- Left column: simple inputs -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-denumire" class="form-label">Denumire</label>
                        <input type="text" id="input-denumire" name="denumire" class="form-control" placeholder="Denumire materie">
                    </div>

                    <div class="mb-3">
                        <label for="input-nr_max_studenti" class="form-label">Numar maxim studenti</label>
                        <input type="number" id="input-nr_max_studenti" name="nr_max_studenti" class="form-control" placeholder="Numar maxim studenti">
                    </div>

                    <div class="mb-3">
                        <label for="input-nr_credite" class="form-label">Numar credite</label>
                        <input type="number" id="input-nr_credite" name="nr_credite" class="form-control" placeholder="Numar credite">
                    </div>

                    <div class="mb-3">
                        <label for="input-cod_disciplina" class="form-label">Cod disciplina</label>
                        <input type="text" id="input-cod_disciplina" name="cod_disciplina" class="form-control" placeholder="Cod disciplina">
                    </div>

                    <div class="mb-3">
                        <label for="input-cod_pachet" class="form-label">Cod pachet</label>
                        <input type="number" id="input-cod_pachet" name="cod_pachet" class="form-control" placeholder="Cod pachet">
                    </div>
                </div> <!-- end col -->

                <!-- Right column: select options -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="select-tip" class="form-label">Tip</label>
                        <select class="form-select" id="select-tip" name="tip">
                            <option value="">Selecteaza Tip</option>
                            <option value="obligatorie">obligatorie</option>
                            <option value="optional">optional</option>
                            <option value="facultativ">facultativ</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select-finalizare" class="form-label">Finalizare</label>
                        <select class="form-select" id="select-finalizare" name="finalizare">
                            <option value="">Selecteaza Finalizare</option>
                            <option value="colocviu">colocviu</option>
                            <option value="examen">examen</option>
                            <option value="verificare pe parcurs">verificare pe parcurs</option>
                        </select>
                    </div>

                    
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salveaza materie</button>
            </div>
        </form>

    </div> <!-- end card-body -->
</div> <!-- end card -->