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
                    <h4 class="card-title  mb-4">Edit Article</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.article.update' , ['id' => $article->id]) }}" method="POST" enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Journals</label>
                                    <select id="journal" class="form-select custom-select select2 select2-show-search "
                                            name="journal_id" required>
                                        <option selected disabled>Choose Journal</option>
                                        @foreach ($journals as $j)
                                            <option value="{{ $j->id }}" @selected($article->volume_id == $j->id ?? old('journal_id') == $j->id)>
                                                {{ ucwords(strtolower($j->name)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Volume</label>
                                    <select id="volume" class="form-select custom-select select2" name="volume_id"
                                            required>

                                        @if (old('volume_id'))
                                            @foreach (session()->get('fetch_volume', []) as $volume)
                                                <option value="{{ $volume->id }}"
                                                    {{ old('volume_id') == $volume->id ? 'selected' : '' }}>
                                                    {{ $volume->name }}
                                                </option>
                                            @endforeach
                                        @else
                                           <option value="{{$article->volume_id}}">{{$article->volume->name}}</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Issue</label>
                                    <select id="issue" class="form-select custom-select select2" name="issue_id" required>
                                        @if (old('volume_id'))
                                            @foreach (session()->get('fetch_issue', []) as $issue)
                                                <option value="{{ $issue->id }}"
                                                    {{ old('issue_id') == $issue->id ? 'selected' : '' }}>
                                                    {{ $issue->name }}
                                                </option>
                                            @endforeach
                                        @else
                                            <option value="{{$article->issue_id }}">{{$article->issue->name}}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 mb-4 pt-4">
                                <div class="form-group pt-4">
                                    <label class="custom-switch">
                                        <input type="checkbox" class="custom-switch-input" name="is_active" value="1"
                                               @checked($article->is_active) >
                                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                        <span class="custom-switch-description me-2">Is Active</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="form-email-input" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $article->title ?? old('title') }}"
                                           placeholder="Enter Article Title" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">First Page</label>
                                    <input type="number" class="form-control" name="first_page"
                                           value="{{ $article->first_page ?? old('first_page') }}" placeholder="Enter First Page Number" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Last Page</label>
                                    <input type="number" class="form-control" name="last_page"
                                           value="{{ $article->last_page ?? old('last_page') }}" placeholder="Enter Last Page Number" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">DOI</label>
                                    <input type="text" class="form-control" placeholder="Enter DIO" name="dio"
                                           value="{{ $article->dio ?? old('dio') }}" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Recived Date</label>
                                    <input type="date" class="form-control" placeholder="" name="recived_date"
                                           value="{{ $article->recived_date ?? old('recived_date') }}">
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Revised Date</label>
                                    <input type="date" class="form-control" placeholder="" name="revised_date"
                                           value="{{ $article->revised_date ?? old('revised_date') }}">
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Accepted Date</label>
                                    <input type="date" class="form-control" placeholder="" name="accepted_date"
                                           value="{{ $article->accepted_date ?? old('accepted_date') }}">
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">published Date</label>
                                    <input type="date" class="form-control" placeholder="" name="published_date"
                                           value="{{ $article->published_date ?? old('published_date') }}">
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="mb-4">
                                    @php
                                        $keywordsArray = $article->keywords->map(function ($keyword) {
                                            return $keyword['keyword'];
                                        })->toArray();
                                        $keywordsString = implode(', ', $keywordsArray);
                                    @endphp
                                    <label for="" class="form-label">Keywords Comma Seprated</label>
                                    <input type="text" class="form-control" placeholder="Enter Keywords"
                                           name="keywords" value="{{ old('keywords' , $keywordsString) }}" required>
                                    <small>Enter comma seperated keywords</small>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Articles Type</label>
                                    <select class="form-select custom-select select2 select2-show-search" name="article_type">
                                        <option selected disabled>Choose Article Type</option>
                                        <option value="Research Articles" @selected(old('article_type' , $article->article_type) == 'Research Articles')>Research Articles</option>
                                        <option value="Review Articles" @selected(old('article_type', $article->article_type) == 'Review Articles')>Review Articles</option>
                                        <option value="Systematic Reviews" @selected(old('article_type', $article->article_type) == 'Systematic Reviews')>Systematic Reviews</option>
                                        <option value="Meta-Analyses" @selected(old('article_type', $article->article_type) == 'Meta-Analyses')>Meta-Analyses</option>
                                        <option value="Short Communications" @selected(old('article_type', $article->article_type) == 'Short Communications')>Short Communications</option>
                                        <option value="Case Studies" @selected(old('article_type', $article->article_type) == 'Case Studies')>Case Studies</option>
                                        <option value="Technical Notes" @selected(old('article_type', $article->article_type) == 'Technical Notes')>Technical Notes</option>
                                        <option value="Editorials" @selected(old('article_type', $article->article_type) == 'Editorials')>Editorials</option>
                                        <option value="Perspectives" @selected(old('article_type', $article->article_type) == 'Perspectives')>Perspectives</option>
                                        <option value="Commentaries" @selected(old('article_type', $article->article_type) == 'Commentaries')>Commentaries</option>
                                        <option value="Literature Reviews" @selected(old('article_type', $article->article_type) == 'Literature Reviews')>Literature Reviews</option>
                                        <option value="Survey Articles" @selected(old('article_type', $article->article_type) == 'Survey Articles')>Survey Articles</option>
                                        <option value="Conference Reports" @selected(old('article_type', $article->article_type) == 'Conference Reports')>Conference Reports</option>
                                        <option value="Letters to the Editor" @selected(old('article_type', $article->article_type) == 'Letters to the Editor')>Letters to the Editor</option>
                                        <option value="Errata/Corrections" @selected(old('article_type', $article->article_type) == 'Errata/Corrections')>Errata/Corrections</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">File</label>
                                    <input type="file" class="form-control form-control-sm" name="file"
                                           value="{{ old('file') }}" >
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="mb-4">
                                    <label for="" class="form-label">Supplementary file</label>
                                    <input type="file" class="form-control form-control-sm" name="supplementary_file"
                                           value="{{ old('supplementary_file') }}" >
                                </div>
                            </div>
                            @php
                               $affiliations = $article->article_details->affiliations;
                               $affiliation_count = count($affiliations);
                               $authors = $article->article_details->authors;
                               $author_count = count($authors);
                            @endphp
                            <div class="col-12">
                                <h5 class="my-3">Affliation Details</h5>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div id="affiliation-container">
                                    <div class="row affiliation-entry">
                                        <div class="col-10 row" id="one_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[first_affiliation][name]" placeholder="Enter Affliation"
                                                           value="{{ $affiliations[0]['name'] ?? old('affiliation.first_affiliation.name') }}"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[first_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.first_affiliation.country' , $affiliations[0]['country']) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="two_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[second_affiliation][name]" placeholder="Enter Affiliation"
                                                           value="{{ $affiliations[1]['name'] ?? old('affiliation.second_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[second_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.second_affiliation.country' , $affiliations[1]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="three_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control" value="{{ $affiliations[2]['country'] ?? old('affiliation.third_affiliation.name') }}"
                                                           name="affiliation[third_affiliation][name]" placeholder="Enter Affliation"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[third_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.third_affiliation.country', $affiliations[2]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="four_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[fourth_affiliation][name]" placeholder="Enter Affiliation"
                                                           value="{{ $affiliations[3]['name'] ?? old('affiliation.fourth_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[fourth_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected( old('affiliation.fourth_affiliation.country' , $affiliations[3]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="five_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[fifth_affiliation][name]" placeholder="Enter Affliation"
                                                           value="{{ $affiliations[4]['name'] ?? old('affiliation.fifth_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[fifth_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.fifth_affiliation.country' , $affiliations[4]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="six_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[sixth_affiliation][name]" placeholder="Enter Affliation"
                                                           value="{{ $affiliations[5]['name'] ?? old('affiliation.sixth_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[sixth_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.sixth_affiliation.country' , $affiliations[5]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="seven_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[seventh_affiliation][name]" placeholder="Enter Affliation"
                                                           value="{{ $affiliations[6]['name'] ?? old('affiliation.seventh_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[seventh_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.seventh_affiliation.country' , $affiliations[6]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="eight_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[eight_affiliation][name]" placeholder="Enter Affliation"
                                                           value="{{ $affiliations[7]['name'] ?? old('affiliation.eight_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[eight_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.eigth_affiliation.country' , $affiliations[7]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="nine_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[nine_affiliation][name]" placeholder="Enter Affiliation"
                                                           value="{{ $affiliations[8]['name'] ?? old('affiliation.nine_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[nine_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.nine_affiliation.country' , $affiliations[8]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="ten_box">
                                            <div class="col-7">
                                                <div class="mb-4">
                                                    <label for="author_name" class="form-label">Affliation</label>
                                                    <input type="text" class="form-control"
                                                           name="affiliation[ten_affiliation][name]" placeholder="Enter Affliation"
                                                           value="{{ $affiliations[9]['name'] ?? old('affiliation.ten_affiliation.name') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                        name="affiliation[ten_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.ten_affiliation.country', $affiliations[9]['country'] ?? null) == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-5">
                                            <button type="button" class="btn btn-primary add-affiliation"
                                                    id="showNextBox">Add Affiliation</button>
                                            <button type="button" class="btn btn-success save-affiliation">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="my-3">Author Details</h5>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div id="author-box" class="row">
                                    <div class="col-10" id="first_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[first_author][firstname]"
                                                           placeholder="Enter First Author" required value="{{ $authors[0]['firstname'] ?? old('authors.first_author.firstname') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[first_author][middlename]"
                                                           value="{{ $authors[0]['middlename'] ?? old('authors.first_author.middlename') }}"
                                                           placeholder="Enter Middle Name" required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[first_author][lastname]"
                                                           value="{{ $authors[0]['lastname'] ?? old('authors.first_author.lastname') }}"
                                                           placeholder="Enter Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[first_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[0]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[first_author][email]" placeholder="Enter Email"
                                                           value="{{ $authors[0]['email'] ?? old('authors.first_author.email') }}"

                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[first_author][orchid_id]" value="{{ $authors[0]['orchid_id'] ?? old('authors.first_author.orchid_id') }}"
                                                           placeholder="Enter Author's ORCID ID" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="second_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[second_author][firstname]"
                                                           value="{{ $authors[1]['firstname'] ?? old('authors.second_author.firstname') }}"
                                                           placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[second_author][middlename]"
                                                           value="{{ $authors[1]['middlename'] ?? old('authors.second_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[second_author][lastname]"
                                                           value="{{ $authors[1]['lastname'] ?? old('authors.second_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[second_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[1]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[second_author][email]" placeholder="Enter Email"
                                                           value="{{ $authors[1]['email'] ?? old('authors.second_author.email') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"  name="authors[second_author][orchid_id]"
                                                           value="{{ $authors[1]['orchid_id'] ?? old('authors.second_author.orchid_id') }}"
                                                           placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="third_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[third_author][firstname]" value="{{ $authors[2]['firstname'] ?? old('authors.third_author.firstname') }}"
                                                           placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[third_author][middlename]"
                                                           value="{{ $authors[2]['middlename'] ?? old('authors.third_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[third_author][lastname]"
                                                           value="{{ $authors[2]['lastname'] ?? old('authors.third_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[third_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[2]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[third_author][email]" placeholder="Enter Email"
                                                           value="{{ $authors[2]['email'] ?? old('authors.third_author.email') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[third_author][orchid_id]"
                                                           placeholder="Enter Author's ORCID ID"
                                                           value="{{ $authors[2]['orchid_id'] ?? old('authors.third_author.orchid_id') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="fourth_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fourth_author][firstname]"
                                                           value="{{ $authors[3]['firstname'] ??  old('authors.fourth_author.firstname') }}"
                                                           placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fourth_author][middlename]"
                                                           value="{{ $authors[3]['middlename'] ?? old('authors.fourth_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fourth_author][lastname]"
                                                           value="{{ $authors[3]['lastname'] ?? old('authors.fourth_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[fourth_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[3]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fourth_author][email]" placeholder="Enter Email"
                                                           value="{{  $authors[3]['email'] ?? old('authors.fourth_author.email') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fourth_author][orchid_id]" value="{{ $authors[3]['orchid_id'] ?? old('authors.fourth_author.orchid_id') }}"
                                                           placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="fifth_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fifth_author][firstname]"
                                                           value="{{ $authors[4]['firstname'] ?? old('authors.fifth_author.firstname') }}"
                                                           placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fifth_author][middlename]" value="{{  $authors[4]['middlename'] ?? old('authors.fifth_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fifth_author][lastname]"
                                                           value="{{ $authors[4]['lastname'] ?? old('authors.fifth_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[fifth_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[4]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fifth_author][email]" placeholder="Enter Email"
                                                           value="{{ $authors[4]['email'] ?? old('authors.fifth_author.email') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[fifth_author][orchid_id]"
                                                           value="{{ $authors[4]['orchid_id'] ?? old('authors.fifth_author.orchid_id') }}"
                                                           placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="sixth_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[sixth_author][firstname]"
                                                           value="{{ $authors[5]['firstname'] ?? old('authors.sixth_author.firstname') }}"
                                                           placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[sixth_author][middlename]"
                                                           value="{{ $authors[5]['middlename'] ?? old('authors.sixth_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[sixth_author][lastname]"
                                                           value="{{  $authors[5]['lastname'] ?? old('authors.sixth_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[sixth_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[5]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[sixth_author][email]" placeholder="Enter Email"
                                                           value="{{ $authors[5]['email'] ?? old('authors.sixth_author.email') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[sixth_author][orchid_id]"
                                                           placeholder="Enter Author's ORCID ID"
                                                           value="{{ $authors[5]['orchid_id'] ?? old('authors.sixth_author.orchid_id') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="seventh_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[seventh_author][firstname]"
                                                           value="{{ $authors[6]['firstname'] ?? old('authors.seventh_author.firstname') }}"
                                                           placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[seventh_author][middlename]"
                                                           value="{{ $authors[6]['middlename'] ?? old('authors.seventh_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[seventh_author][lastname]"
                                                           value="{{ $authors[6]['lastname'] ?? old('authors.seventh_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[seventh_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[6]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[seventh_author][email]" placeholder="Enter Email"
                                                           value="{{ $authors[6]['email']  ?? old('authors.seventh_author.email') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[seventh_author][orchid_id]"
                                                           placeholder="Enter Author's ORCID ID"
                                                           value="{{ $authors[6]['orchid_id'] ?? old('authors.seventh_author.orchid_id') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="eight_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[eight_author][firstname]"
                                                           placeholder="Enter First Author"
                                                           value="{{ $authors[7]['firstname'] ?? old('authors.eight_author.firstname') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[eight_author][middlename]"
                                                           placeholder="Enter Middle Name"
                                                           value="{{ $authors[7]['middlename'] ?? old('authors.eight_author.middlename') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[eight_author][lastname]"
                                                           value="{{ $authors[7]['lastname'] ?? old('authors.eight_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[eight_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[7]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           value="{{ $authors[7]['email'] ?? old('authors.eight_author.email') }}"
                                                           name="authors[eight_author][email]" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[eight_author][orchid_id]"
                                                           value="{{ $authors[7]['orchid_id'] ?? old('authors.eight_author.orchid_id') }}"
                                                           placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="nine_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[nine_author][firstname]"
                                                           value="{{ $authors[8]['firstname'] ?? old('authors.nine_author.firstname') }}"
                                                           placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[nine_author][middlename]"
                                                           value="{{ $authors[8]['middlename'] ?? old('authors.nine_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[nine_author][lastname]"
                                                           value="{{ $authors[8]['lastname'] ?? old('authors.nine_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[nine_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[8]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[nine_author][email]" placeholder="Enter Email"
                                                           value="{{ $authors[8]['email'] ?? old('authors.nine_author.email') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[nine_author][orchid_id]"
                                                           placeholder="Enter Author's ORCID ID"
                                                           value="{{ $authors[8]['orchid_id'] ?? old('authors.nine_author.orchid_id') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="ten_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[ten_author][firstname]"
                                                           placeholder="Enter First Author"
                                                           value="{{ $authors[9]['firstname'] ?? old('authors.ten_author.firstname') }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[ten_author][middlename]"
                                                           value="{{ $authors[9]['middlename'] ?? old('authors.ten_author.middlename') }}"
                                                           placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[ten_author][lastname]"
                                                           value="{{ $authors[9]['lastname'] ?? old('authors.ten_author.lastname') }}"
                                                           placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                        name="authors[ten_author][affiliation][]" multiple>
                                                    @foreach($affiliations as $aff)
                                                        <option value="{{ $aff['name'] }}"
                                                            {{ in_array($aff['name'], $authors[8]['affiliation'] ?? []) ? 'selected' : '' }}>
                                                            {{ $aff['name'] }} , {{ $aff['country'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                           value="{{ $authors[9]['email'] ?? old('authors.ten_author.email') }}"
                                                           name="authors[ten_author][email]" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-4">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                           name="authors[ten_author][orchid_id]"
                                                           value="{{ $authors[9]['email'] ?? old('authors.ten_author.orchid_id') }}"
                                                           placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-danger remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-5">
                                        <button type="button" class="btn btn-primary add-author">Add Author</button>
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
                                        <textarea rows="4" class="form-control content" name="abstract" placeholder="Enter Abstract..">{{ $article->article_details->abstract ?? old('abstract') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="mb-4">
                                        <label for="" class="form-label">References</label>
                                        <textarea rows="4" class="form-control content" name="references" placeholder="Enter references..">{{  $article->article_details->references ?? old('references') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button type="submit" class="btn btn-primary">Update Articles</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if ($errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                @if (old('abstract'))
                $('textarea[name="abstract"]').val(`{!! old('abstract') !!}`);
                @endif
                @if (old('references'))
                $('textarea[name="references"]').val(`{!! old('references') !!}`);
                @endif
            });
        </script>
    @endif

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
            $('#two_box').hide();
            $('#three_box').hide();
            $('#four_box').hide();
            $('#five_box').hide();
            $('#six_box').hide();
            $('#seven_box').hide();
            $('#eight_box').hide();
            $('#nine_box').hide();
            $('#ten_box').hide();
            let affiliationNumberArr = ['one' , 'two' , 'three' , 'four' , 'five' , 'six' , 'seven' , 'eight' , 'nine' , 'ten'];

            let affiliationCount = {{ $affiliation_count }};
            let currentBoxIndex = affiliationCount;
            for (let i = 0; i <= affiliationCount; i++) {
                $(`#${affiliationNumberArr[i - 1]}_box`).show();
            }

            $('#showNextBox').click(function(e) {
                e.preventDefault();
                currentBoxIndex++;
                if (currentBoxIndex <= 10) {
                    $(`#${numberToWord(currentBoxIndex)}_box`).show();
                }
            });

            $(document).on('click', '.remove-btn', function(e) {
                e.preventDefault();
                let parentDiv = $(this).closest('.col-10.row');
                parentDiv.find('input').val('');
                parentDiv.find('select').val('');
                parentDiv.hide();
            });

            $(document).ready(function() {
                let affiliations = [];

                $(document).on('click', '.save-affiliation', function() {
                    affiliations = [];
                    $('.col-10.row').each(function() {
                        let affiliationName = $(this).find('input[name$="[name]"]').val();
                        let affiliationCountry = $(this).find('select[name$="[country]"]')
                            .val();
                        if (affiliationName && affiliationCountry) {
                            affiliations.push({
                                name: affiliationName,
                                country: affiliationCountry
                            });
                        }
                    });

                    $('.affiliation_select').each(function() {
                        $(this).empty().append(
                            '<option selected disabled>Choose Affiliation</option>');

                        affiliations.forEach(function(affiliation) {
                            $(this).append(
                                `<option value="${affiliation.name},${affiliation.country}">${affiliation.name}, ${affiliation.country}</option>`
                            );
                        }.bind(this));
                    });

                    console.log(affiliations);
                });
            });

        });

        function numberToWord(number) {
            const words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
            return words[number - 1];
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#second_author_box').hide();
            $('#third_author_box').hide();
            $('#fourth_author_box').hide();
            $('#fifth_author_box').hide();
            $('#sixth_author_box').hide();
            $('#seventh_author_box').hide();
            $('#eight_author_box').hide();
            $('#nine_author_box').hide();
            $('#ten_author_box').hide();

            let authorCount = {{ $author_count }};
            let i = authorCount;
            console.log(authorCount)
            const numberArr = ['first', 'second' , 'third' , 'fourth' , 'fifth' , 'sixth' , 'seventh' , 'eight' , 'nine' , 'ten'];
            for (let i = 0; i <= authorCount; i++) {
                console.log(i)
                console.log(`#${numberArr[i - 1]}_author_box`)
                $(`#${numberArr[i - 1]}_author_box`).show();
            }

            $('.add-author').click(function(e) {
                e.preventDefault();
                if (i <= 10) {
                    $('#' + ordinal(i) + '_author_box').show();
                    i++;
                }
            });
            $(document).on('click', '.remove-author', function(e) {
                e.preventDefault();
                let authorBox = $(this).closest('.author-box');
                authorBox.find('input, select').val('');
                authorBox.hide();
                i--;
            });

            function ordinal(number) {
                const
                    ordinals = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth',
                        'ninth', 'tenth'
                    ];
                return ordinals[number - 1];
            }
        });
    </script>


@endsection
