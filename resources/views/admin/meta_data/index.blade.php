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
                        <h4 class="card-title  fw-bold">Meta Data</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.post.meta.data') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Journals</label>
                                    <select class="form-select" name="journal_id" id="journal_id" required>
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
                            <div class="col-12 mb-4">
                                <button class="btn btn-primary" type="submit">Generate Meta data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('#journal_id').on('change', function() {
                let journal = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('volumes.fetch') }}",
                    data: {
                        journal_id: journal
                    },
                    success: function(response) {
                        $('#volume').html(response);
                    }
                });
            });
            $('#volume').on('change', function() {
                let volume = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('issue.fetch') }}",
                    data: {
                        volume_id: volume
                    },
                    success: function(response) {
                        $('#issue').html(response);
                    }
                });
            });
        });
    </script>
@endsection
