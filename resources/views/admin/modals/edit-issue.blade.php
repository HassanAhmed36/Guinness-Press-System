<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit Issue</h5>
        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">×</span></button>
    </div>
    <form action="{{ route('admin.issue.update', ['id' => $issue->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body row">
            <div class="col-6 mb-4">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Issue name" name="name"
                    value="{{ $issue->name }}" required>
            </div>
            <div class="col-6 mb-4 pt-4">
                <div class="form-group pt-4">
                    <label class="custom-switch">
                        <input type="checkbox" class="custom-switch-input" name="is_active" value="1"
                            @checked($issue->is_active)>
                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                        <span class="custom-switch-description me-2">Is Active</span>
                    </label>
                </div>
            </div>
            <div class="col-6 mb-4">
                <label for="journal" class="form-label">Journal</label>
                <select id="journal" class="form-select" name="journal_id" data-url="{{ route('volumes.fetch') }}"
                    required>
                    <option selected disabled>Choose Journal</option>
                    @foreach ($journals as $journal)
                        <option value="{{ $journal->id }}" @selected($issue->journal_id == $journal->id)>{{ $journal->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mb-4">
                <label for="volume" class="form-label">Volume</label>
                <select id="volume" class="form-select" name="volume_id" required>
                    <option selected value="{{ $issue->volume->id }}">{{ $issue->volume->name }}</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary waves-effect waves-light" type="submit">Update Issue</button>
        </div>
    </form>
</div>
