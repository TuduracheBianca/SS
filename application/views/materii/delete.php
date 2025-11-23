<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Ștergere materie</h4>
    </div>

    <div class="card-body">
        <p>Sigur dorești să ștergi materia <strong>{denumire}</strong> ? </p>

        <form method="post" action="{SITE_URL}/materii/delete_done/{id_materie}">
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-danger">Șterge definitiv</button>
                <a href="{SITE_URL}/materii/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>
    </div>
</div>
