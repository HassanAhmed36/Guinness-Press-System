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
                <div class="card-body">
                    <h4 class="card-title fs-4 mb-3">Edit Journals</h4>
                    <hr>
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
                                    <label for="" class="form-label">Journal Image</label>
                                    <input type="file" class="form-control" placeholder="Enter Your Email" name="image"
                                        value="{{ old('image') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Acronym</label>
                                    <input type="text" class="form-control" placeholder="Enter Your acronym"
                                        value="{{ $journal->acronym }}" name="acronym" value="{{ old('acronym') }}">
                                </div>
                            </div>
                            <div class="col-md-3 pt-4 mt-1">
                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                    <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd" name="is_active"
                                        @checked($journal->is_active)>
                                    <label class="form-check-label" for="SwitchCheckSizemd">is active</label>
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
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Publication Type</label>
                                    <select class="form-select" name="publication_type">
                                        <option selected disabled>Choose...</option>
                                        <option value="1" @selected($journal->journal_matrix->publication_type == 1)>Option 1</option>
                                        <option value="2" @selected($journal->journal_matrix->publication_type == 2)>Option 2</option>
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
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Publication Category</label>
                                    <select class="form-select" name="journal_category">
                                        <option selected disabled>Choose...</option>
                                        <option value="1" @selected($journal->journal_matrix->journal_category == '1')>Option 1</option>
                                        <option value="2" @selected($journal->journal_matrix->journal_category == '2')>Option 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">ACP</label>
                                    <input type="text" class="form-control" placeholder="Enter ACP" name="acp"
                                        value="{{ old('salary') ?? $journal->journal_matrix->acp }}">
                                </div>
                            </div>
                            <div class="col-12 row" id="leave_box">
                                <div class="col-12">
                                    <h5 class="my-3">Journal Overview</h5>
                                    <hr>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Manuscript Prepation Guideline</label>
                                        <textarea rows="4" class="form-control content" name="manuscript_prepation_guideline"
                                            placeholder="Enter Manuscript Prepation Guideline..">{{ old('manuscript_prepation_guideline') ?? $journal->journal_overview->manuscript_prepation_guideline }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Aims & Scope</label>
                                        <textarea rows="4" class="form-control content" name="aims_and_scope" placeholder="Enter Aims & Scope..">{{ old('aims_and_scope') ?? $journal->journal_overview->aims_and_scope }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Editorial Polices</label>
                                        <textarea rows="4" class="form-control content" name="editorial_polices"
                                            placeholder="Enter Editorial Polices..">{{ old('address') ?? $journal->journal_overview->editorial_polices }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Author Guideline</label>
                                        <textarea rows="4" class="form-control content" name="author_guideline"
                                            placeholder="Enter Author Guideline..">{{ old('address') ?? $journal->journal_overview->author_guideline }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Role of EIC</label>
                                        <textarea rows="4" class="form-control content" name="role_of_eic" placeholder="Enter Role of EIC..">{{ old('address') ?? $journal->journal_overview->role_of_eic }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Role Of EBM</label>
                                        <textarea rows="4" class="form-control content" name="role_of_ebm" placeholder="Enter Role of EBM..">{{ old('address') ?? $journal->journal_overview->role_of_ebm }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button type="submit" class="btn btn-primary">Update Journals</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
