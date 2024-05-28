<div class="modal-header">
    <h5 class="modal-title" id="myModalLabel">Edit Board Member</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="{{ route('editorial.member.update', ['id' => $m->id]) }}" method="POST">
    @csrf
    <div class="modal-body row">
        <div class="row">
            <div class="col-6 mb-4">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Department name" name="name" required
                    value="{{ $m->name }}">
            </div>
            <div class="col-6 mb-4">
                <label for="" class="form-label">Country</label>
                <select id="" class="form-select" name="country">
                    <option selected disabled>Choose Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country['name'] }}" @selected($m->country == $country['name'])>{{ $country['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mb-4">
                <label for="" class="form-label">Journal</label>
                <select id="" class="form-select" name="journal_id">
                    <option selected disabled>Choose Journal</option>
                    @foreach ($journals as $j)
                        <option value="{{ $j->id }}" @selected($m->journal_id == $j->id)>{{ $j->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mb-4">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" placeholder="Enter Department name" name="image">
            </div>
            <div class="col-12 mb-4">
                <label for="" class="form-label">Affliation</label>
                <input type="text" name="affliation" class="form-control" placeholder="Enter Affiliateion" required
                    value="{{ $m->affliation }}">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Biography</label>
                <textarea id="" cols="30" rows="10" name="biography" class="form-control"
                    placeholder="Enter Biography">{{ $m->biography }}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary waves-effect waves-light" type="submit">Save</button>
    </div>
</form>
