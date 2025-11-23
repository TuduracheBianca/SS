<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Lista cursuri</h4>
    </div>
    <div class="card-body p-0"> 
        <div class="table-responsive" style="overflow-x: auto; max-height: 500px;">
            <table class="table table-striped-columns mb-0" style="font-size: 0.85rem; min-width: 900px;">
                <thead style="position: sticky; top: 0; background: white; z-index: 10;">
                    <tr>
                        <th style="min-width: 150px;">Denumire</th>
                        <th style="min-width: 80px;">Nr. credite</th>
                        <th style="min-width: 100px;">Tip</th>
                        <th style="min-width: 120px;">Nr. maxim studenti</th>
                        <th style="min-width: 120px;">Cod disciplina</th>
                        <th style="min-width: 100px;">Cod pachet</th>
                        <th style="min-width: 100px;">Finalizare</th>
                        <th style="min-width: 100px;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {CURSURI}
                    <tr>
                        <td>{denumire}</td>
                        <td>{nr_credite}</td>
                        <td>{tip}</td>
                        <td>{nr_max_studenti}</td>
                        <td>{cod_disciplina}</td>
                        <td>{cod_pachet}</td>
                        <td>{finalizare}</td>
                        <td class="text-muted text-center">
                            <a href="javascript: void(0);" class="link-reset fs-15 p-1">
                                <i class="ti ti-pencil" style="font-size: 0.85rem;"></i>
                            </a>
                            <a href="javascript: void(0);" class="link-reset fs-15 p-1">
                                <i class="ti ti-trash" style="font-size: 0.85rem;"></i>
                            </a>
                        </td>
                    </tr>
                    {/CURSURI}
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