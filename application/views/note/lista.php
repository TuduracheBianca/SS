<div class="card">
    <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
        <h4 class="header-title mb-0">Gestionare Note</h4>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#adaugaNotaModal">
            <i class="ti ti-plus me-1"></i> Adaugă Notă
        </button>
    </div>
    <div class="card-body p-0"> 
        <div class="table-responsive" style="overflow-x: auto; max-height: 500px;">
            <table class="table table-striped-columns mb-0" style="font-size: 0.85rem; min-width: 700px;">
                <thead style="position: sticky; top: 0; background: white; z-index: 10;">
                    <tr>
                        <th style="min-width: 150px;">Student</th>
                        <th style="min-width: 150px;">Materie</th>
                        <th style="min-width: 80px;">Nota</th>
                        <th style="min-width: 120px;">Data</th>
                        <th style="min-width: 100px;">Semestru</th>
                        <th style="min-width: 120px;" class="text-center">Acțiuni</th>
                    </tr>
                </thead>
                <!-- În tbody, schimbă variabilele -->
<tbody>
    {NOTE}
    <tr>
        <td>{prenume_student} {nume_student}</td>
        <td>{nume_materie}</td>
        <td><strong>{nota}</strong></td>
        <td>{data_nota}</td>
        <td>{semestru}</td>
        <td class="text-center">
            <a href="javascript:void(0);" class="link-reset fs-15 p-1 edit-nota" 
               data-id="{id_cross_stud_materie}" data-nota="{nota}" 
               data-student="{prenume_student} {nume_student}" 
               data-materie="{nume_materie}" data-data="{data_nota}" data-semestru="{semestru}">
                <i class="ti ti-pencil" style="font-size: 0.85rem;"></i>
            </a>
            <a href="javascript:void(0);" class="link-reset fs-15 p-1 delete-nota" 
               data-id="{id_cross_stud_materie}" data-student="{prenume_student} {nume_student}">
                <i class="ti ti-trash" style="font-size: 0.85rem;"></i>
            </a>
        </td>
    </tr>
    {/NOTE}
</tbody>
            </table>
        </div>
        
        
    </div>
</div>

<!-- Modal pentru adăugare notă -->
<div class="modal fade" id="adaugaNotaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adaugă Notă</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formAdaugaNota">
                    <div class="mb-3">
                        <label class="form-label">Materie</label>
                        <select class="form-select" name="id_materie" required>
                            <option value="">Selectează materia</option>
                            {MATERII}
                            <option value="{id_materie}">{denumire}</option>
                            {/MATERII}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Student</label>
                        <select class="form-select" name="id_student" required>
                            <option value="">Selectează mai întâi materia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nota</label>
                        <input type="number" step="0.01" min="1" max="10" class="form-control" name="nota" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data</label>
                        <input type="date" class="form-control" name="data_nota" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Semestru</label>
                        <select class="form-select" name="semestru" required>
                            <option value="1">Semestru 1</option>
                            <option value="2">Semestru 2</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anulează</button>
                <button type="button" class="btn btn-primary" id="salveazaNota">Salvează</button>
            </div>
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

<script>
// JavaScript pentru gestionarea notelor
document.addEventListener('DOMContentLoaded', function() {
    // Schimbare materie - încarcă studenții
    document.querySelector('select[name="id_materie"]').addEventListener('change', function() {
        const idMaterie = this.value;
        if(idMaterie) {
            // Aici faci un AJAX call să obții studenții pentru materia selectată
            fetch(`/note/get_studenti/${idMaterie}`)
                .then(response => response.json())
                .then(data => {
                    const studentSelect = document.querySelector('select[name="id_student"]');
                    studentSelect.innerHTML = '<option value="">Selectează studentul</option>';
                    data.forEach(student => {
                        studentSelect.innerHTML += `<option value="${student.id_student}">${student.prenume} ${student.nume}</option>`;
                    });
                });
        }
    });

    // Salvare notă
    document.getElementById('salveazaNota').addEventListener('click', function() {
        const formData = new FormData(document.getElementById('formAdaugaNota'));
        
        fetch('/note/adauga', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                location.reload();
            } else {
                alert('Eroare la salvare: ' + data.message);
            }
        });
    });
});
</script>