<div class="modal-header">
    <h5 class="modal-title" id="myModalLabel">Edit Indexing Body</h5>
    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">×</span></button>
</div>
<form action="{{ route('index.body.update', ['id' => $indexBody->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body row">
        <div class="col-6 mb-4">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter Indexing Bodies name" name="name" required
                value="{{ $indexBody->name }}">
        </div>
        <div class="col-6 mb-4">
            <label for="" class="form-label">Link</label>
            <input type="url" class="form-control" placeholder="Enter Indexing Bodies Link" name="link" required
                value="{{ $indexBody->link }}">
        </div>
        <div class="col-6 mb-4">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="image"
                onchange="document.querySelector('#output-1').src=window.URL.createObjectURL(this.files[0])">
        </div>
        <div class="col-12 mb-4">
            <img src="{{ asset($indexBody->image) }}" alt="Indexing Body Image" class="img-fluid"
                style="border-radius: 50%; width: 25% !important; height: 8rem" id="output-1">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary waves-effect waves-light" type="submit">Update Indexing Body</button>
    </div>
</form>
