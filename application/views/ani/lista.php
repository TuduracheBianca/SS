<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center">
        <h4 class="header-title">Lista ani</h4>
    </div>
    <div class="card-body p-0"> 
        <div class="table-responsive" style="overflow-x: auto; max-height: 500px;">
            <table class="table table-striped-columns mb-0" style="font-size: 0.85rem; min-width: 600px;">
                <thead style="position: sticky; top: 0; background: white; z-index: 10;">
                    <tr>
                        <th style="min-width: 150px;">Denumire</th>
                        <th style="min-width: 100px;">An inceput</th>
                        <th style="min-width: 100px;">An final</th>
                        <th style="min-width: 100px;">Nr. grupe</th>
                        <th style="min-width: 100px;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {ANI}
                    <tr>
                        <td>{denumire}</td>
                        <td>{an_inceput}</td>
                        <td>{an_final}</td>
                        <td>{nr_grupe}</td>
                        <td class="text-muted text-center">
                            <a href="{SITE_URL}/ani/edit/{id_an}" class="link-reset fs-15 p-1">
                                <i class="ti ti-pencil" style="font-size: 0.85rem;"></i>
                            </a>
                            <a href="{SITE_URL}/ani/delete/{id_an}" class="link-reset fs-15 p-1">
                                <i class="ti ti-trash" style="font-size: 0.85rem;"></i>
                            </a>
                        </td>
                    </tr>
                    {/ANI}
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