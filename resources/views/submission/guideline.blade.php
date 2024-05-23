@extends('layouts.app')
@section('main_section')
    <div class="my-5 container " id="guideline-box">
        <h5 class="mb-3"> General Guideline for submission</h5>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus velit optio
            rem voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
            totam  quaerat vitae iste vero!Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus
            velit optio rem voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
            totam quaerat vitae iste vero Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus
            velit optio rem voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
            totam quaerat vitae iste vero!</p>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus velit optio rem
            voluptate sunt sequi temporibus deleniti incidunt! Est eum, iure magni pariatur voluptas sed
            totam quaerat vitae iste vero!</p>
        <div class="mb-2">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Accept all Guidelines</label>
            </div>
            <span id="error-msg" class="text-danger"></span><br>
        </div>
        <button class="btn btn-dark" id="accept-guideline">Accept Guidelines</button>
    </div>
    <script>
        $('#accept-guideline').click(function(e) {
            e.preventDefault();
            if (!$('#exampleCheck1').prop('checked')) {
                $('#error-msg').text('Please check this box to proceed.')
            } else {
                window.location.href = '/create-submission';
            }
        });
    </script>
@endsection
