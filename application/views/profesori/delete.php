<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Ștergere profesor</h4>
    </div>

    <div class="card-body">
        <p>Sigur dorești să ștergi profesorul <strong>{prenume} {nume}</strong> (username: <strong>{username}</strong>)?</p>

        <form method="post" action="{SITE_URL}/profesori/delete_done/{id_profesor}">
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-danger">Șterge definitiv</button>
                <a href="{SITE_URL}/profesori/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>
    </div>
</div>
