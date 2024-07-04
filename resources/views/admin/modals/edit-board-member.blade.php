<div class="modal-header">
    <h5 class="modal-title" id="myModalLabel">Edit Board Member</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="{{ route('editorial.member.update', ['id' => $m->id]) }}" method="POST" enctype="multipart/form-data">
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
                <label for="imageInput" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="imageInput1"
                    placeholder="Select an image">
            </div>
            <div class="col-4 mb-4">
                <label for="" class="form-label">Google Scholars</label>
                <input type="text" name="google_scholar" class="form-control"
                    placeholder="enter google scholars link" value="{{ $m->google_scholar ?? '' }}">
            </div>
            <div class="col-4 mb-4">
                <label for="" class="form-label">Orchid</label>
                <input type="text" name="orcid" class="form-control" placeholder="enter Orchid link"
                    value="{{ $m->orchid ?? '' }}">
            </div>
            <div class="col-4 mb-4">
                <label for="" class="form-label">Scopus</label>
                <input type="text" name="scopus" class="form-control" placeholder="enter Scopus link"
                    value="{{ $m->scopus ?? '' }}">
            </div>
            <div class="col-4 mb-4">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="enter Email Address"
                    value="{{ $m->email ?? '' }}">
            </div>
            <div class="col-12 mb-4">
                <label for="" class="form-label">affiliation</label>
                <input type="text" name="affiliation" class="form-control" placeholder="Enter Affiliateion" required
                    value="{{ $m->affiliation }}">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Biography</label>
                <textarea id="" cols="30" rows="10" name="biography" class="form-control"
                    placeholder="Enter Biography">{{ $m->biography }}</textarea>
            </div>
            <style>
                .card-img-top {
                    width: 100px;
                    height: auto;
                    object-fit: cover;
                    aspect-ratio: 1;
                    border-radius: 50%;

                }
            </style>
            <div class="col-12 mb-4 imag_member">
                <img id="imagePreview1" style="object-fit: cover;" class="card-img-top" src="{{ asset($m->image) }}"
                    alt="Member">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary waves-effect waves-light" type="submit">Save</button>
    </div>
</form>

<script>
    document.getElementById('imageInput1').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview1');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
