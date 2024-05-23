<div class="mb-3 border-bottom border-light-subtle pb-1">
    <h4>{{ $submission->title }}</h4>
</div>

<div class="mb-3 border-bottom border-light-subtle pb-1">
    <h5 class="mb-3">Abstract</h5>
    <p>{{ $submission->abstract }}</p>
</div>
@if (Auth::user()->role_id != 3)
    <div class="mb-3 border-bottom border-light-subtle pb-1">
        <h5 class="mb-3">Author Information</h5>

        <div class="my-2">
            <div class="row">
                <div class="col-6 mb-2">
                    <strong>Name:</strong> {{ $submission->user->title }} {{ $submission->user->first_name }}
                    {{ $submission->user->last_name }}
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

            </div>
        </div>
    </div>
@endif
<div class="mb-3 border-bottom border-light-subtle pb-1">
    <h5 class="mb-3">Keywords</h5>
    @foreach ($submission->submision_keywords as $k)
        <span class="badge text-bg-light fw-medium  " style="font-size: 14px">{{ $k->keyword }}</span>
    @endforeach
</div>

<div class="mb-3 border-bottom border-light-subtle pb-1">
    <h5 class="mb-3">Author Files</h5>
    <div class="mb-3 border rounded-2 ">
        <div class="w-100 p-2 d-flex justify-content-between ">
            <div>manuscript: <strong>{{ $submission->manuscript_name }}</strong></div>
            <div>
                <a href="{{ asset($submission->manuscript_path) }}" download="{{ $submission->manuscript_name }}"
                    class="btn btn-light btn-sm">
                    <i class="bi bi-download"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="mb-3 border rounded-2 ">
        <div class="w-100 p-2 d-flex justify-content-between ">
            <div>Cover letter: <strong>{{ $submission->cover_letter_name }}</strong></div>
            <div>
                <a href="{{ asset($submission->cover_letter_path) }}" download="{{ $submission->cover_letter_name }}"
                    class="btn btn-light btn-sm">
                    <i class="bi bi-download"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="mb-3 border-bottom border-light-subtle pb-1">
    <h5 class="mb-3">Author Message</h5>
    <p>{{ $submission->author_message }}</p>
</div>
@if ($submission->reviewer_message)
    <div class="mb-3 ">
        <h5 class="mb-3">Reviewer Message</h5>
        <p>{{ $submission->reviewer_message }}</p>
    </div>
@endif
