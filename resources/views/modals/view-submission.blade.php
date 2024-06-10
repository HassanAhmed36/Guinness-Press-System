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
    <div class="mb-2 border rounded-2">
        <div class="w-100 p-2 d-flex justify-content-between">
            <div>manuscript: <strong>{{ $submission->manuscript_name }}</strong></div>
            <div>
                <a href="{{ asset($submission->manuscript_path) }}" download="{{ $submission->manuscript_name }}"
                    class="btn btn-light btn-sm ">
                    <i class="bi bi-download me-2"></i> Download
                </a>
                <a href="{{ asset($submission->manuscript_path) }}" target="_blank" class="btn btn-light btn-sm ">
                    <i class="bi bi-eye me-2"></i> View
                </a>
            </div>
        </div>
    </div>
    @if ($submission->cover_letter_name)
        <div class="mb-2 border rounded-2 poppins_fonts">
            <div class="w-100 p-2 d-flex justify-content-between">
                <div>Cover letter: <strong>{{ $submission->cover_letter_name }}</strong></div>
                <div>
                    <a href="{{ asset($submission->cover_letter_path) }}"
                        download="{{ $submission->cover_letter_name }}" class="btn btn-light btn-sm">
                        <i class="bi bi-download">download</i>
                    </a>
                    <a href="{{ asset($submission->cover_letter_path) }}" target="_blank" class="btn btn-light btn-sm">
                        <i class="bi bi-eye"></i> View
                    </a>
                </div>
            </div>
        </div>
    @endif

</div>
@if ($submission->admin_message)
    <div class="mb-3 ">
        <h5 class="mb-2">Review Message</h5>
        <br>
        <p>{{ $submission->admin_message }}</p>
    </div>
@endif
