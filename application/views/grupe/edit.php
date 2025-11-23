<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Editare grupă</h4>
    </div>

    <div class="card-body">

        <form method="post" action="{SITE_URL}/grupe/edit_done">
            <input type="hidden" name="id_grupa" value="{id_grupa}">
            <div class="row">
                <!-- Left column: simple inputs -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-id_an" class="form-label">ID An</label>
                        <input type="number" id="input-id_an" name="id_an" class="form-control" value="{id_an}">
                    </div>

                    <div class="mb-3">
                        <label for="input-denumire" class="form-label">Denumire</label>
                        <input type="text" id="input-denumire" name="denumire" class="form-control" value="{denumire}">
                    </div>
                </div> <!-- end col -->

                <!-- Right column: select options -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-nr_studenti" class="form-label">Număr Studenți</label>
                        <input type="number" id="input-nr_studenti" name="nr_studenti" class="form-control" value="{nr_studenti}">
                    </div>

                    <div class="mb-3">
                        <label for="input-tutore" class="form-label">Tutore</label>
                        <input type="text" id="input-tutore" name="tutore" class="form-control" value="{tutore}">
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvează grupă</button>
                <a href="{SITE_URL}/grupe/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>

    </div> <!-- end card-body -->
</div> <!-- end card -->