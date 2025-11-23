<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Ștergere an universitar</h4>
    </div>

    <div class="card-body">
        <p>Sigur dorești să ștergi anul universitar <strong>{denumire}</strong> ?</p>

        <form method="post" action="{SITE_URL}/ani/delete_done/{id_an}">
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-danger">Șterge definitiv</button>
                <a href="{SITE_URL}/ani/index" class="btn btn-secondary">Anulează</a>
            </div>
        </form>
    </div>
</div>
