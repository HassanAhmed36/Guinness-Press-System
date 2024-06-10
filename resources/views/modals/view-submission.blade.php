

<div class="mb-3  border-light-subtle pb-1 poppins_fonts">
    <h5 class="mb-2">Author Information</h5>

    <div class="my-2">
        <div class="row">
            @if (null !== auth()->user()->user_basic_info())
            @if ($submission->user && $submission->user->basic_info)
            <div class="col-6 mb-2">
                <strong>Name:</strong> {{ $submission->user->basic_info->first_name }}
                {{ $submission->user->basic_info->last_name }}
            </div>
            <div class="col-6 mb-2">
                <strong>Institute:</strong> {{ $submission->user->institution }}
            </div>
            <div class="col-6 mb-2">
                <strong>Department:</strong> {{ $submission->user->department }}
            </div>
            <div class="col-6 mb-2">
                <strong>Job:</strong> {{ $submission->user->current_job_title }}
            </div>
            <div class="col-6 mb-2">
                <strong>Country:</strong> {{ $submission->user->country }}
            </div>
            @endif
            @endif
            <div class="col-6 mb-2">
                <strong>Email:</strong> {{ $submission->user->email }}
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
                <a href="{{ asset($submission->cover_letter_path) }}" download="{{ $submission->cover_letter_name }}"
                    class="btn btn-light btn-sm">
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
@if ($submission->author_message)
<div class="mb-3  border-light-subtle pb-1 poppins_fonts">
    <h5 class="mb-2">Author Message</h5>
    <p>{{ $submission->author_message }}</p>
</div>
@endif
@if ($submission->reviewer_message && Auth::user()->role_id == 1)
<div class="mb-3 ">
    <h5 class="mb-2 poppins_fonts">Reviewer Message</h5>
    <p>Reviewer Name:<strong> {{ $submission->reviewer->first_name }}
            {{ $submission->reviewer->last_name }}</strong></p>
    <br>
    <p>{{ $submission->reviewer_message }}</p>
</div>
@endif
@if ($submission->admin_message)
<div class="mb-3 ">
    <h5 class="mb-2">Admin Message</h5>
    <br>
    <p>{{ $submission->admin_message }}</p>
</div>
@endif