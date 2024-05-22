@extends('layouts.app')
@section('main_section')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div>
                    <h3 class="mb-4">Create New Submission</h3>
                </div>
                <div class="my-5" id="guideline-box">
                    <h5 class="mb-3"> General Guideline for submission</h5>
                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus velit optio
                        rem
                        voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
                        totam
                        quaerat vitae iste vero!Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus
                        velit
                        optio rem
                        voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
                        totam
                        quaerat vitae iste vero Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus
                        velit
                        optio rem
                        voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
                        totam
                        quaerat vitae iste vero!</p>
                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus velit optio
                        rem
                        voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
                        totam
                        quaerat vitae iste vero!</p>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Accept all Guidelines</label>
                        </div>
                        <span id="error-msg" class="text-danger"></span><br>
                    </div>
                    <button class="btn btn-dark" id="accept-guideline">Accept Guidelines</button>
                </div>
                <div class="my-5" id="form-box">
                    form box
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#form-box').hide();
        $('#accept-guideline').click(function(e) {
            e.preventDefault();
            if (!$('#exampleCheck1').prop('checked')) {
                $('#error-msg').text('Please check this box to proceed.')
            } else {
                $('#guideline-box').hide();
                $('#form-box').show();
            }
        });
    </script>
@endsection
