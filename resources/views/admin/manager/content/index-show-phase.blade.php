@extends('admin.manager.body.phase')
@section('phase-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-3 mb-3 stretch-card align-self-start">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Here</h4>
                    <form action="{{ route('manager.store.phase') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="phase_name" class="form-label">Phase Name</label>
                                    <input type="text" name="phase_name" id="phase_name" value="{{ old('phase_name') }}" class="form-control @error('phase_name') is-invalid @enderror" placeholder="Enter Phase Name">
                                    @error('phase_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        
                        <button type="submit" class="btn btn-primary submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9 mb-3 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Phase</h6>
                    <div class="table-responsive">
                        <table id="phase" class="table table-hover">
                            <thead>
                                <th>Action</th>
                                <th>id</th>
                                <th>Phase Name</th>
                                <th>Status</th>
                                <th>Created</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editPhaseModal" tabindex="-1" aria-labelledby="editPhaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPhaseModalLabel">Edit Phase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <form id="editPhaseForm">
                    @csrf
                    <input type="hidden" name="id" id="editPhaseId">
                    <div class="mb-3">
                        <label for="phase_name" class="form-label">Phase Name</label>
                        <input type="text" name="phase_name" id="retrieve_phase_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-select mb-3 @error('status') is-invalid @enderror" id="status">
                            <option selected disabled>Open this select menu</option>
                            <option value="available">Available</option>
                            <option value="unavailable">Not-Available</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" id="submitEditPhase">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    var editUrl = "{{ route('manager.edit.phase', ':id') }}";
    var deleteUrl = "{{ route('manager.delete.phase', ':id') }}";

    var Phase = $('#phase').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('manager.show.phase') }}"
        },
        columns: [
            {
                data: 'id',
                name: 'id',
                render: function(data, type, row) {
                    var actions = '';
                    actions += '<a href="#" class="btn btn-outline-primary btn-icon edit-phase" data-id="' + data + '" style="margin-right: 3px"><i class="fa-solid fa-edit fa-sm"></i></a>';
                    actions += '<a href="' + deleteUrl.replace(':id', data) + '" id="delete-phase" class="btn btn-outline-danger btn-icon" style="margin-right: 3px"><i class="fa-solid fa-trash fa-sm"></i></a>';
                    return actions;
                }
            },
            { data: 'id', name: 'id', visible: true },
            { data: 'phase_name', name: 'phase_name' },
            { data: 'status', name: 'status' },
            {
                data: 'created_at',
                name: 'created_at',
                render: function (data, type, row) {
                    return moment(data).fromNow();
                }
            }, 
        ]
    });

    $('#phase tbody').on('click', '.edit-phase', function() {
        var phaseId = $(this).data('id');

        $.ajax({
            url: editUrl.replace(':id', phaseId),
            type: 'GET',
            success: function(response) {
                $('#retrieve_phase_name').val(response.phase_name); // Set the phase_name value
                $('#editPhaseId').val(phaseId);
                $('#status').val(response.status); // Set the selected status
                $('#editPhaseModal').modal('show');
            },
            error: function(error) {
                console.error('Error fetching phase details:', error);
            }
        });
    });

    // Submit Edit Phase Form
    $('#submitEditPhase').on('click', function() {
        var editPhaseForm = $('#editPhaseForm');

        $.ajax({
            url: editUrl.replace(':id', $('#editPhaseId').val()),
            type: 'HEAD',
            data: editPhaseForm.serialize(),
            success: function(response) {
                $('#editPhaseModal').modal('hide');
                Phase.ajax.reload();
            },
            error: function(error) {
                console.error('Error updating phase:', error);
            }
        });
    });
});
</script>
@endsection