<div class="mb-3  border-light-subtle pb-1 poppins_fonts">
    <h5 class="mb-2">Author Information</h5>
    <div class="my-2">
        <div class="row">
            <div class="col-6 mb-2">
                <strong>Name:</strong> {{ $submission->user->name }}
            </div>
            <div class="col-6 mb-2">
                <strong>Institute:</strong> {{ $submission->user->email }}
            </div>
            <div class="col-6 mb-2">
                <strong>Department:</strong> {{ $submission->user->phone_number }}
            </div>
            <div class="col-6 mb-2">
                <strong>Job:</strong> {{ $submission->user->country }}
            </div>
        </div>
    </div>
</div>
<div class="mb-3  border-light-subtle pb-1 poppins_fonts">
    <h5 class="mb-4">Author Files</h5>
    @foreach ($submission->submission_files as $file)
        <div class="mb-2 border rounded-2">
            <div class="w-100 p-2 d-flex justify-content-between">
                <div>manuscript: <strong>{{ $file->file_name }}</strong></div>
                <div>
                    <a href="{{ asset($file->file_path) }}" download="{{ $file->file_name }}"
                        class="btn btn-light btn-sm ">
                        <i class="bi bi-download me-2"></i> Download
                    </a>
                    <a href="{{ asset($file->file_path) }}" target="_blank" class="btn btn-light btn-sm ">
                        <i class="bi bi-eye me-2"></i> View
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if ($submission->admin_message)
    <div class="mb-3 ">
        <h5 class="mb-2">Review Message</h5>
        <br>
        <p>{{ $submission->admin_message }}</p>
    </div>
@endif
