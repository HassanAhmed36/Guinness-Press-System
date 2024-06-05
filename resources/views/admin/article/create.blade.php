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
                <div class="card-header">
                    <h4 class="card-title  mb-4">Add New Article</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Journals</label>
                                    <select id="journal" class="form-select custom-select select2 select2-show-search "
                                        name="journal_id" required>
                                        <option selected disabled>Choose Journal</option>
                                        @foreach ($journals as $j)
                                            <option value="{{ $j->id }}">{{ ucwords(strtolower($j->name)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Volume</label>
                                    <select id="volume" class="form-select custom-select select2" name="volume_id"
                                        required>
                                        <option selected disabled>Choose Volume</option>

                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="author_array" id="author_array">
                            <input type="hidden" name="affiliation_array" id="affiliation_array">
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Issue</label>
                                    <select id="issue" class="form-select custom-select select2" name="issue_id">
                                        <option selected disabled>Choose Issue</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4"></div>

                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="form-email-input" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        placeholder="Enter Article Title" required>
                                </div>
                            </div>

                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">First Page</label>
                                    <input type="number" class="form-control" name="first_page"
                                        value="{{ old('first_page') }}" placeholder="Enter First Page Number" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Last Page</label>
                                    <input type="number" class="form-control" name="last_page"
                                        value="{{ old('last_page') }}" placeholder="Enter Last Page Number" required>
                                </div>
                            </div>

                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">DOI</label>
                                    <input type="text" class="form-control" placeholder="Enter DIO" name="dio"
                                        value="{{ old('dio') }}" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Published Date</label>
                                    <input type="date" class="form-control" placeholder="" name="published_date"
                                        value="{{ old('published_date') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Keywords Comma Seprated</label>
                                    <input type="text" class="form-control" placeholder="Enter Keywords" name="keywords"
                                        value="{{ old('keywords') }}" required>
                                    <small>Enter comma seperated keywords</small>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Articles Type</label>
                                    <select class="form-select custom-select select2 select2 select2-show-search "
                                        name="article_type" required>
                                        <option selected disabled>Choose Volume</option>
                                        <option value="Research Articles">Research Articles</option>
                                        <option value="Review Articles">Review Articles</option>
                                        <option value="Systematic Reviews">Systematic Reviews</option>
                                        <option value="Meta-Analyses">Meta-Analyses</option>
                                        <option value="Short Communications">Short Communications</option>
                                        <option value="Case Studies">Case Studies</option>
                                        <option value="Technical Notes">Technical Notes</option>
                                        <option value="Editorials">Editorials</option>
                                        <option value="Perspectives">Perspectives</option>
                                        <option value="Commentaries">Commentaries</option>
                                        <option value="Literature Reviews">Literature Reviews</option>
                                        <option value="Survey Articles">Survey Articles</option>
                                        <option value="Conference Reports">Conference Reports</option>
                                        <option value="Letters to the Editor">Letters to the Editor</option>
                                        <option value="Errata/Corrections">Errata/Corrections</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">File</label>
                                    <input type="file" class="form-control form-control-sm" name="file"
                                        value="{{ old('file') }}">
                                </div>
                            </div>
                            <div class="col-4 mb-4 pt-4">
                                <div class="form-group pt-4">
                                    <label class="custom-switch">
                                        <input type="checkbox" class="custom-switch-input" name="is_active"
                                            value="1" checked="">
                                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                        <span class="custom-switch-description me-2">Is Active</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="my-3">Affliation Details</h5>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div id="affiliation-container">
                                    <div class="row affiliation-entry">
                                        <div class="col-7">
                                            <div class="mb-4">
                                                <label for="author_name" class="form-label">Affliation</label>
                                                <input type="text" class="form-control" name="affiliation[name]"
                                                    placeholder="Enter Affliation " required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="" class="form-label">Country</label>
                                            <select class="form-select custom-select select2 select2-show-search"
                                                name="affiliation[country]">
                                                <option selected disabled>Choose Country</option>
                                                @foreach ($countries as $c)
                                                    <option value="{{ $c['name'] }}">{{ $c['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-2 mt-5">
                                            <button type="button" class="btn btn-success save-affiliation">Save</button>
                                            <button type="button" class="btn btn-primary add-affiliation">Add
                                                Affiliation</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <h5 class="my-3">Author Details</h5>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div id="author-box">
                                    <div class="row author-form">
                                        <div class="col-3">
                                            <div class="mb-4">
                                                <label for="author_firstname" class="form-label">Author's First
                                                    Name</label>
                                                <input type="text" class="form-control" name="authors[][firstname]"
                                                    placeholder="Enter First Author" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-4">
                                                <label for="author_middlename" class="form-label">Author's Middle
                                                    Name</label>
                                                <input type="text" class="form-control" name="authors[][middlename]"
                                                    placeholder="Enter Middle Name" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-4">
                                                <label for="author_lastname" class="form-label">Author's Last
                                                    Name</label>
                                                <input type="text" class="form-control" name="authors[][lastname]"
                                                    placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                            <select class="form-select select2 affiliation_dropdown"
                                                name="authors[][affiliation][]" multiple>
                                                <option selected disabled>Choose Affiliation</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-4">
                                                <label for="author_email" class="form-label">Author's Email</label>
                                                <input type="text" class="form-control" name="authors[][email]"
                                                    placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-4">
                                                <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                <input type="text" class="form-control" name="authors[][orchid_id]"
                                                    placeholder="Enter Author's ORCID ID" required>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-5">
                                            <button type="button" class="btn btn-success save-author">Save</button>
                                            <button type="button" class="btn btn-primary add-author">Add
                                                Author</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 row">
                                <div class="col-12">
                                    <h5 class="my-3">Article Details</h5>
                                    <hr>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="mb-4">
                                        <label for="" class="form-label">Abstract</label>
                                        <textarea rows="4" class="form-control content" name="abstract" placeholder="Enter Abstract..">{{ old('abstract') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="mb-4">
                                        <label for="" class="form-label">References</label>
                                        <textarea rows="4" class="form-control content" name="references" placeholder="Enter references..">{{ old('references') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="mb-4">
                                        <label for="" class="form-label">Extra Meta Data</label>
                                        <textarea rows="4" class="form-control content" name="extra_meta_tag" placeholder="Enter references..">{{ old('extra_meta_tag') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button type="submit" class="btn btn-primary">Add New Articles</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#journal').change(function() {
                let journalId = $(this).val();
                let url = "{{ route('volumes.fetch') }}";
                if (journalId) {
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: {
                            journal_id: journalId
                        },
                        success: function(data) {
                            $('#volume').html(data);
                        }
                    });
                } else {
                    $('#volume').empty().append('<option selected disabled>Choose Volume</option>');
                }
            });
            $('#volume').change(function() {
                let volumeID = $(this).val();
                let url = "{{ route('issue.fetch') }}"
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        volume_id: volumeID
                    },
                    success: function(response) {
                        $('#issue').html(response);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let affiliations = [];
            let authors = [];

            function updateAffiliations() {
                affiliations = [];
                $('.affiliation-entry').each(function() {
                    let name = $(this).find('input[name="affiliation[name]"]').val();
                    let country = $(this).find('select[name="affiliation[country]"]').val();
                    if (name && country && country !== 'Choose Country') {
                        affiliations.push({
                            name: name,
                            country: country
                        });
                    }
                    console.log(affiliations);
                    $('#affiliation_array').val(JSON.stringify(affiliations))
                });
                // Update all affiliation dropdowns
                $('.affiliation_dropdown').each(function() {
                    $(this).empty().append('<option selected disabled>Choose Affiliation</option>');
                    affiliations.forEach(function(affiliation) {
                        $(this).append(
                            `<option value="${affiliation.name},${affiliation.country}">${affiliation.name}</option>`
                        );
                    }.bind(this));
                });
                $('.select2').select2();
            }

            function updateAuthors() {
                authors = [];
                $('.author-form').each(function() {
                    let firstname = $(this).find('input[name="authors[][firstname]"]').val();
                    let middlename = $(this).find('input[name="authors[][middlename]"]').val();
                    let lastname = $(this).find('input[name="authors[][lastname]"]').val();
                    let affiliations = $(this).find('select[name="authors[][affiliation][]"]').val();
                    let email = $(this).find('input[name="authors[][email]"]').val();
                    let orchid_id = $(this).find('input[name="authors[][orchid_id]"]').val();

                    if (firstname && lastname && email && affiliations && affiliations.length > 0) {
                        authors.push({
                            firstname: firstname,
                            middlename: middlename,
                            lastname: lastname,
                            affiliations: affiliations,
                            email: email,
                            orchid_id: orchid_id
                        });
                    }
                });
                console.log("Authors:", authors);
                $('#author_array').val(JSON.stringify(authors))
            }

            $('#affiliation-container').on('click', '.add-affiliation', function() {
                let newAffiliationRow = $(`
                <div class="row affiliation-entry">
                    <div class="col-7">
                        <div class="mb-4">
                            <label for="affiliation_name" class="form-label">Affiliation</label>
                            <input type="text" class="form-control" name="affiliation[name]" placeholder="Enter Affiliation" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Country</label>
                        <select class="form-select custom-select select2 select2-show-search" name="affiliation[country]">
                            <option selected disabled>Choose Country</option>
                            @foreach ($countries as $c)
                                <option value="{{ $c['name'] }}">{{ $c['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2 mt-5">
                        <button type="button" class="btn btn-success save-affiliation">Save</button>
                        <button type="button" class="btn btn-danger remove-affiliation">Remove</button>
                    </div>
                </div>
            `);
                $('#affiliation-container').append(newAffiliationRow);
                $('.select2').select2();
            });

            $('#affiliation-container').on('click', '.remove-affiliation', function() {
                $(this).closest('.affiliation-entry').remove();
                updateAffiliations();
            });

            $('#affiliation-container').on('click', '.save-affiliation', function() {
                let entry = $(this).closest('.affiliation-entry');
                let name = entry.find('input[name="affiliation[name]"]').val();
                let country = entry.find('select[name="affiliation[country]"]').val();
                if (name && country && country !== 'Choose Country') {
                    affiliations.push({
                        name: name,
                        country: country
                    });
                    updateAffiliations();
                }
            });

            $('#author-box').on('click', '.add-author', function() {
                let authorHtml = `
                <div class="row author-form">
                    <div class="col-3">
                        <div class="mb-4">
                            <label for="author_firstname" class="form-label">Author's First Name</label>
                            <input type="text" class="form-control" name="authors[][firstname]" placeholder="Enter First Author" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-4">
                            <label for="author_middlename" class="form-label">Author's Middle Name</label>
                            <input type="text" class="form-control" name="authors[][middlename]" placeholder="Enter Middle Name" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-4">
                            <label for="author_lastname" class="form-label">Author's Last Name</label>
                            <input type="text" class="form-control" name="authors[][lastname]" placeholder="Enter Last Name" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                        <select class="form-select select2 affiliation_dropdown" name="authors[][affiliation][]" multiple>
                            <option selected disabled>Choose Affiliation</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <div class="mb-4">
                            <label for="author_email" class="form-label">Author's Email</label>
                            <input type="text" class="form-control" name="authors[][email]" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-4">
                            <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                            <input type="text" class="form-control" name="authors[][orchid_id]" placeholder="Enter Author's ORCID ID" required>
                        </div>
                    </div>
                    <div class="col-2 mt-5">
                        <button type="button" class="btn btn-success save-author">Save</button>
                        <button type="button" class="btn btn-danger remove-author">Remove Author</button>
                    </div>
                </div>`;
                let newAuthorForm = $(authorHtml);
                $('#author-box').append(newAuthorForm);
                newAuthorForm.find('.select2').select2();
                updateAuthors();
            });

            $('#author-box').on('click', '.remove-author', function() {
                $(this).closest('.author-form').remove();
                updateAuthors();
            });

            $('#author-box').on('click', '.save-author', function() {
                updateAuthors();
            });

            updateAffiliations();
            updateAuthors();
        });
    </script>

@endsection
