<div class="modal-header">
    <h5 class="modal-title" id="myModalLabel">Edit Volume</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="{{ route('admin.volume.update', ['id' => $volums->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body row">
        <div class="col-6 mb-4">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter Volume name" name="name" required
                value="{{ $volums->name }}">
        </div>
        <div class="col-6 mb-4 pt-4">
            <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd"  name="is_active"
                    @checked($volums->is_active == 1)>
                <label class="form-check-label" for="SwitchCheckSizemd">is active</label>
            </div>
        </div>
        <div class="col-12 mb-4">
            <label for="" class="form-label">Journal</label>
            <select id="" class="form-select" name="journal_id">
                <option selected disabled>Choose Journal</option>
                @foreach ($journals as $j)
                    <option value="{{ $j->id }}" @selected($volums->journal_id == $j->id)>{{ $j->name }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary waves-effect waves-light" type="submit">Update
            Volume</button>
    </div>
</form>
