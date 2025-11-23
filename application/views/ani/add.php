<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Adăugare an universitar</h4>
    </div>

    <div class="card-body">

        <form method="post" action="{SITE_URL}/ani/add_done">
            <div class="row">
                <!-- Coloana stângă -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-denumire" class="form-label">Denumire</label>
                        <input type="text" id="input-denumire" name="denumire" class="form-control" placeholder="Promotia 2023-2026">
                    </div>

                    <div class="mb-3">
                        <label for="input-an-inceput" class="form-label">An început</label>
                        <input type="number" id="input-an-inceput" name="an_inceput" class="form-control" min="2000" max="2100" placeholder="2024">
                    </div>
                </div> <!-- end col -->

                <!-- Coloana dreaptă -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="input-an-final" class="form-label">An final</label>
                        <input type="number" id="input-an-final" name="an_final" class="form-control" min="2000" max="2100" placeholder="2025">
                    </div>

                    <div class="mb-3">
                        <label for="input-nr-grupe" class="form-label">Număr grupe</label>
                        <input type="number" id="input-nr-grupe" name="nr_grupe" class="form-control" min="1" placeholder="10">
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvează an</button>
                <a href="{SITE_URL}/ani/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>

    </div> <!-- end card-body -->
</div> <!-- end card -->
