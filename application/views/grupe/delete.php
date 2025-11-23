<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Ștergere grupă</h4>
    </div>

    <div class="card-body">
        <p>Sigur dorești să ștergi grupa <strong>{denumire}</strong> ?</p>

        <form method="post" action="{SITE_URL}/grupe/delete_done/{id_grupa}">
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-danger">Șterge definitiv</button>
                <a href="{SITE_URL}/grupe/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>
    </div>
</div>
