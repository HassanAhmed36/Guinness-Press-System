@extends('user.layouts.template')
@section('body')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.2/tagify.css">
    <div class="container my-5">
        <form id="multiStepForm" method="POST" action="{{ route('submit.submission') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="uploadedFiles" id="uploadedFilesInput">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="step1-tab" data-bs-toggle="tab" type="button"
                                role="tab" aria-controls="step1" aria-selected="true">Start</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step2-tab" data-bs-toggle="tab" type="button" role="tab"
                                aria-controls="step2" aria-selected="false">Upload Submission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step3-tab" data-bs-toggle="tab" type="button" role="tab"
                                aria-controls="step3" aria-selected="false">Enter metadata</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step4-tab" data-bs-toggle="tab" type="button" role="tab"
                                aria-controls="step4" aria-selected="false">Confimation</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step5-tab" data-bs-toggle="tab" type="button" role="tab"
                                aria-controls="step5" aria-selected="false">Next step</button>
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content " id="myTabContent">
                        <div class="tab-pane fade show active" id="step1" style="border: none !important"
                            role="tabpanel" aria-labelledby="step1-tab">
                            <!-- Content of Step 1 -->
                            <div class="search-results py-3">
                                <div class="mb-4">
                                    <h5>Section Policy</h5>
                                    <p>This section comprises the research articles of the journal.</p>
                                </div>
                                <div class="col-12">
                                    <label for="journal-id" class="form-label">Selecte Journal</label>
                                    <select name="journal_id" id="journal-id" class="form-select">
                                        @foreach ($journals as $j)
                                            <option value="{{ $j->id }}">{{ $j->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="my-5">
                                    <h5>Submission Requirements</h5>
                                    <p class="text-muted">You must read and acknowledge that you have completed the
                                        requirements below before proceeding.</p>
                                </div>
                                <div class="mb-4">
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">The submission has not been
                                            previously published, nor is it before another journal for consideration (or an
                                            explanation has been provided in comments to the editor).</label>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck2" required>
                                        <label class="form-check-label" for="exampleCheck2">The submission file is in
                                            OpenOffice, Microsoft Word, RTF, or WordPerfect document file format.</label>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck3" required>
                                        <label class="form-check-label" for="exampleCheck3">Where available, URLs for the
                                            references have been provided.</label>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck4" required>
                                        <label class="form-check-label" for="exampleCheck4">The text is single-spaced;
                                            uses
                                            a 12-point font; employs italics rather than underlining (except with URL
                                            addresses); and all illustrations, figures, and tables are placed within the
                                            text at the appropriate points.</label>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck5" required>
                                        <label class="form-check-label" for="exampleCheck5">The text adheres to the
                                            stylistic and bibliographic requirements outlined in the <a
                                                href="">Author Guidelines</a>, which are found in the About the
                                            Journal section.</label>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck6" required>
                                        <label class="form-check-label" for="exampleCheck6">If submitting to a
                                            peer-reviewed section of the journal, the instructions in <a
                                                href="">Ensuring a Blind Review</a> have been followed.</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="my-5">
                                        <h5>Acknowledge the copyright statement</h5>
                                        <p>Copyright of the journal belongs to the University of San Jose-Recoletos.</p>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck7" required>
                                        <label class="form-check-label" for="exampleCheck7">Yes, I agree to abide by the
                                            terms of the copyright statement.</label>
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck8" required>
                                        <label class="form-check-label" for="exampleCheck8">Yes, I agree to have my data
                                            collected and stored according to the privacy policy.</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-light btn-blue  nextBtn" type="button">Next</button>
                        </div>
                        <div class="tab-pane fade" id="step2" style="border: none !important" role="tabpanel"
                            aria-labelledby="step2-tab">
                            <!-- Content of Step 2 -->
                            <div class="py-3">
                                <div class="mb-4 d-flex justify-content-between">
                                    <div>
                                        <h5>Files</h5>
                                    </div>
                                    <div>
                                        <!-- Button to trigger file upload -->
                                        <button class="btn btn-light btn-blue " type="button" id="addFile">Add Files</button>
                                    </div>
                                </div>
                                <table class="table table-borderless" id="fileTable">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Sno</th>
                                            <th>File</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="sno">1</th>
                                            <th>
                                                <input type="file" class="form-control" name="file[1][file]" required>
                                            </th>
                                            <th>
                                                <select name="file[1][filetype]" class="form-select">
                                                    <option value="Article Text">Article Text</option>
                                                    <option value="Research Instrument">Research Instrument</option>
                                                    <option value="Research Material">Research Material</option>
                                                    <option value="Research Article">Research Article</option>
                                                    <option value="Transcript">Transcript</option>
                                                    <option value="Data Analysis">Data Analysis</option>
                                                    <option value="Dataset">Dataset</option>
                                                    <option value="Source Test">Source Test</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </th>
                                            <th><button class="btn btn-light btn-blue btn-sm remove-row" disabled>Remove</button>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                            <button class="btn btn-light btn-blue  nextBtn" type="button">Next</button>
                        </div>
                        <div class="tab-pane fade" id="step3" style="border: none !important" role="tabpanel"
                            aria-labelledby="step3-tab">
                            <!-- Content of Step 3 -->
                            <div class="py-4">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Title <sup
                                            class="text-danger">*</sup></label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Enter your title" required>
                                </div>
                                <div class="mb-4">
                                    <label for="subtitle" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" name="subtitle"
                                        placeholder="Enter your subtitle (optional)">
                                </div>
                                <div class="mb-4">
                                    <label for="abstract" class="form-label">Abstract <sup
                                            class="text-danger">*</sup></label>
                                    <textarea id="abstract" name="abstract" class="form-control" rows="8" placeholder="Enter your Abstract"
                                        required></textarea>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5 class="my-3">List Of Contributors</h5>
                                        </div>
                                        <div>
                                            <button class="btn btn-light btn-blue " type="button" id="addContributorBtn">Add
                                                Contributor</button>
                                        </div>
                                    </div>
                                    <table class="table table-borderless" id="contributorTable">
                                        <thead class="table-secondary">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Orcid ID</th>
                                                <th>Role</th>
                                                <th>Primary Contact</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" name="author[1][name]" class="form-control"
                                                        placeholder="Name"
                                                        value="{{ auth()->user()->user_basic_info->name ?? '' }}" required>
                                                </td>
                                                <td>
                                                    <input type="email" name="author[1][email]" class="form-control"
                                                        placeholder="Email" value="{{ auth()->user()->email ?? '' }}"
                                                        required>
                                                </td>
                                                <td>
                                                    <input type="text" name="author[1][orcid]" class="form-control"
                                                        placeholder="Orcid" required>
                                                </td>
                                                <td>Author</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input primary-contact-checkbox"
                                                            type="checkbox" value="1" checked
                                                            name="author[1][is_primary_contact]">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-light btn-blue btn-sm" type="button"
                                                        disabled>Remove</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="keywords" class="form-label">Keywords</label>
                                        <input type="text" class="form-control" id="keywords"
                                            placeholder="Enter a keyword press ensta then enter next keyword"
                                            name="keywords" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label for="references" class="form-label">References</label>
                                        <textarea name="references" id="references" cols="30" rows="10" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                            <button class="btn btn-light btn-blue  nextBtn" type="button">Next</button>
                        </div>
                        <div class="tab-pane fade" id="step4" style="border: none !important" role="tabpanel"
                            aria-labelledby="step4-tab">
                            <p>your submission has been uploaded and its ready to sent you may go back to review any of
                                te information you have entered before continue when you ready click final submission
                            </p>
                            <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                            <button class="btn btn-light btn-blue " type="submit">Submit</button>
                        </div>
                        <div class="tab-pane fade" id="step5" style="border: none !important" role="tabpanel"
                            aria-labelledby="step5-tab">
                            <!-- Content of Step 5 -->
                            <div class="py-3">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentTab = 0;
            showTab(currentTab);

            function showTab(n) {
                var x = $(".tab-pane");
                x.eq(n).addClass("show active").siblings().removeClass("show active");
                $("#myTab .nav-link").eq(n).addClass("active").siblings().removeClass("active");

                if (n == 0) {
                    $(".prevBtn").hide();
                } else {
                    $(".prevBtn").show();
                }

                if (n == (x.length - 1)) {
                    $(".nextBtn").hide();
                } else {
                    $(".nextBtn").show();
                }
            }

            $(".nextBtn").click(function() {
                var valid = validateForm();
                if (valid) {
                    currentTab++;
                    showTab(currentTab);
                }
            });

            $(".prevBtn").click(function() {
                currentTab--;
                showTab(currentTab);
            });

            function validateForm() {
                var valid = true;
                var currentStep = $(".tab-pane").eq(currentTab);

                currentStep.find("input, select, textarea").each(function() {
                    if (!this.checkValidity()) {
                        $(this).addClass("is-invalid");
                        valid = false;
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });

                return valid;
            }
            let rowCount = 1;
            $("#addContributorBtn").click(function() {
                const newIndex = rowCount + 1;
                var newRow = `<tr>
                    <td><input type="text" name="author[${newIndex}][name]" class="form-control" placeholder="Name" required></td>
                    <td><input type="email" name="author[${newIndex}][email]" class="form-control" placeholder="Email" required></td>
                    <td><input type="text" name="author[${newIndex}][orcid]" class="form-control" placeholder="Orcid" required></td>
                    <td>Co-Author</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input primary-contact-checkbox" type="checkbox" value="1" name="author[${newIndex}][is_primary_contact]">
                        </div>
                    </td>
                    <td><button class="btn btn-light btn-blue btn-sm" type="button">Remove</button></td>
                </tr>`;
                $("#contributorTable tbody").append(newRow);
            });

            $(document).on("click", "#contributorTable .btn-danger", function() {
                $(this).closest("tr").remove();
            });

            $(document).on("change", ".primary-contact-checkbox", function() {
                $(".primary-contact-checkbox").not(this).prop("checked", false);
                var isChecked = $(this).prop("checked");
                if (isChecked) {
                    $(this).closest("tr").find("td:eq(3)").text("Author");
                    $("#contributorTable tbody tr").each(function() {
                        if (!$(this).find(".primary-contact-checkbox").prop("checked")) {
                            $(this).find("td:eq(3)").text("Co-Author");
                        }
                    });
                } else {
                    $(this).closest("tr").find("td:eq(3)").text("Author");
                }
            });


            $('#addFile').click(function() {
                const tableBody = $('#fileTable tbody');
                const rowCount = tableBody.find('tr').length;
                const newIndex = rowCount + 1;

                const newRowHtml = `
                <tr>
                    <td class="sno">${newIndex}</td>
                    <td>
                        <input type="file" class="form-control" name="file[${newIndex}][file]" required>
                    </td>
                    <td>
                        <select name="file[${newIndex}][filetype]" class="form-select">
                            <option value="Article Text">Article Text</option>
                            <option value="Research Instrument">Research Instrument</option>
                            <option value="Research Material">Research Material</option>
                            <option value="Research Article">Research Article</option>
                            <option value="Transcript">Transcript</option>
                            <option value="Data Analysis">Data Analysis</option>
                            <option value="Dataset">Dataset</option>
                            <option value="Source Test">Source Test</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-light btn-blue btn-sm remove-row">Remove</button>
                    </td>
                </tr>`;
                tableBody.append(newRowHtml);
            });

            $('#fileTable').on('click', '.remove-row', function() {
                $(this).closest('tr').remove();
                $('#fileTable tbody tr').each(function(index) {
                    $(this).find('td.sno').text(index + 1);
                });
            });

        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.2/tagify.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector('#keywords');
            new Tagify(input);
        });
    </script>
@endsection
