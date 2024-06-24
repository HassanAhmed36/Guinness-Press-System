@extends('admin.Layout.master')

@section('main_section')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Reference Generator</h4>
        </div>
        <div class="card-body">
            <div class="mb-4">
                <label for="references" class="form-label">Paste references here</label>
                <textarea id="references" rows="10" class="form-control" placeholder="Paste references here.."></textarea>
            </div>
            <button class="btn btn-primary" id="generateBtn">Generate</button>
            <div class="my-4">
                <div>
                    <h5>Formatted Text</h5>
                    <button class="btn btn-secondary" id="copyBtn">Copy</button>
                </div>
                <div id="referencesTextarea" style="font-size: 16px; margin-top: 20px;">
                    <!-- References will be inserted here -->
                </div>
            </div>
        </div>
    </div>

    <style>
        .formatted-reference {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#generateBtn').click(function() {
                var text = $('#references').val();
                var references = text.split('\n');
                var updatedReferences = [];
                var regex = /\)\.\s*?(.+?)(?=\.\s*[A-Za-z])|\d+\.\s*(.+?)(?=\.\s*)/;
                var doiRegex = /(https:\/\/doi\.org\/[\w\d.\/\s]+)/gi;

                references.forEach(function(reference) {
                    var updatedReference = reference;
                    var links = '';

                    // Handle the extraction and formatting for Google Scholar
                    var match = reference.match(regex);
                    if (match) {
                        var extractedString = match[1] ? match[1].trim() : match[2].trim();
                        var formattedString = extractedString.replace(/[^\w\s]/gi, '').replace(/\s+/g, '+');
                        var googleScholarLink = `https://scholar.google.com/scholar_lookup?title=${formattedString}`;
                        links += `<a class="btn btn-sm btn-primary my-3" href="${googleScholarLink}" style="color: blue;" target="_blank">google scholar link</a>`;
                    }

                    // Handle DOI links
                    var doiMatch = reference.match(doiRegex);
                    if (doiMatch) {
                        doiMatch.forEach(function(doi) {
                            var cleanedDoi = doi.replace(/\s+/g, '');
                            var clickableDoi = `<a href="${cleanedDoi}" target="_blank" class="btn btn-sm btn-primary my-3">crossref link</a>`;
                            links += ` ${clickableDoi}`;
                        });
                    }

                    updatedReference += links ? `<br>${links}` : '';
                    updatedReferences.push(updatedReference + '<br>');
                });

                var updatedText = updatedReferences.join('\n');
                $('#referencesTextarea').html(updatedText);
            });

            // Copy to clipboard functionality
            $('#copyBtn').click(function() {
                var range = document.createRange();
                range.selectNode(document.getElementById('referencesTextarea'));
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(range);
                document.execCommand('copy');
                window.getSelection().removeAllRanges();
                alert('Copied to clipboard!');
            });
        });
    </script>
@endsection
