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
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title  fw-bold">DOI Generator</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Journals</label>
                                <select id="journal" class="form-select" name="journal_id" required>
                                    <option selected disabled>Choose Journal</option>
                                    @foreach ($journals as $j)
                                        <option value="{{ $j->id }}" data-acronym="{{ $j->acronym }}"
                                            data-issn="{{ $j->issn_no }}">
                                            {{ ucwords(strtolower($j->name)) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Volume</label>
                                <select id="volume" class="form-select" name="volume_id" required>
                                    <option selected disabled>Choose Volume</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Issue</label>
                                <select id="issue" class="form-select" name="issue_id">
                                    <option selected disabled>Choose Issue</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-11 mb-4">
                            <label for="" class="form-label">Generated DOI</label>
                            <input type="text" class="form-control" placeholder="" name="name" required id="doi"
                                readonly>
                        </div>
                        <div class="col-1 mt-5">
                            <button id="copyDoiButton" class="btn btn-primary">Copy DOI</button>
                        </div>
                        <div class="col-1 mt-5">
                            <button id="regenrateDoi" class="btn btn-primary">Regenrate DOI</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#journal').change(function() {
                    let journalId = $(this).val();
                    let url = "{{ route('volumes.fetch.dio') }}";
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
                    let url = "{{ route('issue.fetch.dio') }}";
                    $.ajax({
                        type: "GET",
                        url: url,
                        data: {
                            volume_id: volumeID
                        },
                        success: function(response) {
                            $('#issue').html(response);
                            generatedoi()
                        }
                    });
                });
            });

            function generatedoi() {
                let journal = $('#journal').val();
                let volume = $('#volume').val();
                let issue = $('#issue').val();
                let acronym = $('#journal option:selected').data('acronym');
                let issn = $('#journal option:selected').data('issn');
                console.log(acronym.toLowerCase());
                let currentDate = new Date();
                let date = String(currentDate.getDate()).padStart(2, '0');
                let month = String(currentDate.getMonth() + 1).padStart(2, '0');
                let year = String(currentDate.getFullYear());

                let hours = String(currentDate.getHours()).padStart(2, '0');
                let minutes = String(currentDate.getMinutes()).padStart(2, '0');
                let seconds = String(currentDate.getSeconds()).padStart(2, '0');
                console.log(`hour: ${hours} , min: ${minutes} , sec: ${seconds}`);

                ac = acronym.padEnd(4, '0');
                issn = issn.replace(/-/g, '');

                let doi =
                    `10.59762/${acronym.toLowerCase()}${issn}${volume}${issue}${year}${month}${date}${hours}${minutes}${seconds}`;
                console.log(doi);
                console.log(doi.length);
                $('#doi').val(doi);
            }
            $('#copyDoiButton').click(function() {
                let doiField = $('#doi');
                doiField.select();
                doiField[0].setSelectionRange(0, 99999);
                navigator.clipboard.writeText(doiField.val()).then(function() {
                    $('#copyDoiButton').text('Copied');
                }, function(err) {
                    console.error('Failed to copy: ', err);
                });
                setTimeout(function() {
                    $('#copyDoiButton').text('Copy DOI');
                }, 2000);
            });

            $('#regenrateDoi').click(function() {
                generatedoi();
            });
        </script>
    @endsection
