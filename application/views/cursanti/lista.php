<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Lista cursanti</h4>
    </div>
    <div class="card-body p-0"> 
        <div class="table-responsive" style="overflow-x: auto; max-height: 500px;">
            <table class="table table-striped-columns mb-0" style="font-size: 0.85rem; min-width: 1200px;">
                <thead style="position: sticky; top: 0; background: white; z-index: 10;">
                    <tr>
                        <th style="min-width: 100px;">Prenume</th>
                        <th style="min-width: 100px;">Nume</th>
                        <th style="min-width: 100px;">Username</th>
                        <th style="min-width: 150px;">Email</th>
                        <th style="min-width: 120px;">CNP</th>
                        <th style="min-width: 80px;">Nivel</th>
                        <th style="min-width: 120px;">Specializare</th>
                        <th style="min-width: 100px;">Limba studiu</th>
                        <th style="min-width: 120px;">Forma finanțare</th>
                        <th style="min-width: 100px;">Nr. matricol</th>
                        <th style="min-width: 80px;">Medie</th>
                        <th style="min-width: 80px;">Nr. credite</th>
                        <th style="min-width: 100px;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {CURSANTI}
                    <tr>
                        <td>{prenume}</td>
                        <td>{nume}</td>
                        <td>{username}</td>
                        <td>{email}</td>
                        <td>{CNP}</td>
                        <td>{nivel}</td>
                        <td>{specializare}</td>
                        <td>{limba_studiu}</td>
                        <td>{forma_finantare}</td>
                        <td>{nr_matricol}</td>
                        <td>{medie}</td>
                        <td>{nr_credite}</td>
                        <td class="text-muted text-center">
                            <a href="{SITE_URL}/studenti/edit/{id_student}" class="link-reset fs-15 p-1"> 
                                <i class="ti ti-pencil" style="font-size: 0.85rem;"></i>
                            </a>
                            <a href="javascript: void(0);" class="link-reset fs-15 p-1"> 
                                <i class="ti ti-trash" style="font-size: 0.85rem;"></i>
                            </a>
                        </td>
                    </tr>
                    {/CURSANTI}
                </tbody>
            </table>
        </div>
        
        
    </div>
</div>

<style>
.table-responsive::-webkit-scrollbar {
    height: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 4px;
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #a8a8a8;
}

.table th, .table td {
    vertical-align: middle;
    padding: 0.5rem 0.75rem;
}
</style>