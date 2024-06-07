@extends('admin.Layout.master')
@section('main_section')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header mb-2">
                    <h4 class="card-title fs-5">Edit Journals</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.journal.update', ['id' => $journal->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="my-3">Journal Basic Information</h5>
                                <hr>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name') ?? $journal->name }}" placeholder="Enter Journal Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">ISSN No</label>
                                    <input type="text" class="form-control" placeholder="Enter ISSN No" name="issn_no"
                                        value="{{ old('issn_no') ?? $journal->issn_no }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Acronym</label>
                                    <input type="text" class="form-control" placeholder="Enter Your acronym"
                                        value="{{ $journal->acronym }}" name="acronym" value="{{ old('acronym') }}">
                                </div>
                            </div>
                            <div class="col-3 mb-4 pt-4">
                                <div class="form-group pt-4">
                                    <label class="custom-switch">
                                        <input type="checkbox" class="custom-switch-input" name="is_active" value="1"
                                            @checked($journal->is_active)>
                                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                        <span class="custom-switch-description me-2">Is Active</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Journal Image</label>
                                    <input type="file" class="form-control" placeholder="Enter Your Email" name="image"
                                        value="{{ old('image') }}">
                                </div>
                            </div>


                            <div class="col-md-12 mt-1">
                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <textarea rows="4" class="form-control" name="description" placeholder="Enter Journal Description..">{{ old('description') ?? $journal->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="my-3">Journal Matrix</h5>
                                <hr>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Acceptance Rate</label>
                                    <input type="text" class="form-control" placeholder="Enter Acceptance Rate"
                                        name="acceptance_rate"
                                        value="{{ old('acceptance_rate') ?? $journal->journal_matrix->acceptance_rate }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Submission to Final Decision</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Submission to Final Decision" name="submission_to_final_decision"
                                        value="{{ old('submission_to_final_decision') ?? $journal->journal_matrix->submission_to_final_decision }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Acceptance To Publication</label>
                                    <input type="text" class="form-control" placeholder="Enter Acceptance to publication"
                                        name="acceptance_to_publication"
                                        value="{{ old('acceptance_to_publication') ?? $journal->journal_matrix->acceptance_to_publication }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">DIO Prefix</label>
                                    <input type="text" class="form-control" placeholder="Enter Dio Prefix"
                                        name="dio_prefix"
                                        value="{{ old('dio_prefix') ?? $journal->journal_matrix->dio_prefix }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-4">
                                    <label for="formrow-inputState" class="form-label">Index Bodies</label>
                                    <select class="form-select select" name="indexing_bodies">
                                        <option selected disabled>Choose...</option>
                                        <option value="1" @selected($journal->journal_matrix->indexing_bodies == 1)>1</option>
                                        <option value="2" @selected($journal->journal_matrix->indexing_bodies == 2)>2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Publication Model</label>
                                    <select class="form-select" name="publishing_model">
                                        <option selected disabled>Choose...</option>
                                        <option value="Open Access" @selected($journal->journal_matrix->publishing_model == 'Open Access')>Open Access</option>
                                        <option value="Paid" @selected($journal->journal_matrix->publishing_model == 'Paid')>Paid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-4">
                                    <label for="formrow-inputState" class="form-label">Publication Category</label>
                                    <input type="text" class="form-control" name="journal_category"
                                        placeholder="Enter Publication Category" required
                                        value="{{ $journal->journal_matrix->journal_category ?? old('journal_category') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">ACP</label>
                                    <input type="text" class="form-control" placeholder="Enter ACP" name="acp"
                                        value="{{ old('salary') ?? $journal->journal_matrix->acp }}">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update Journals</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
