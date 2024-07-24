@extends('user.layouts.template')

@section('title', 'Home Page')

@section('banner')
    <section class="main_banner inner_banner"
        style="position: relative; min-height: 35vh; background-image: url('https://i.pngimg.me/thumb/f/720/comrawpixel3828297.jpg'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content white_text">
                        <h3 class="cocogoose_light fs-2 fw-bold mb-4">
                            Threads
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .main_banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #184888ae;
            z-index: 0;
        }
    </style>
@endsection

@section('body')
    <div class="container" style="min-height: 100vh">
        <div class="row mt-5">
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="cocogoose_light fw-bold fs-3 mb-4">{{ $thread->title }}</h3>
                    </div>
                    <div>
                        <i class="fa fa-eye me-2"></i> {{ $thread->views }} Views
                    </div>
                </div>
                <p>{{ $thread->body }}</p>
                <p>Posted At: {{ $thread->created_at->format('M d, Y') }}</p>
            </div>
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="cocogoose_light fw-bold fs-4 mb-4">Discussion:</h4>
                    </div>
                    <div>
                        <i class="fa fa-comments me-2"></i> {{ $thread->thread_comments_count }} Total Comments
                    </div>
                </div>
                <div class="my-4">
                    <form id="postThreadForm">
                        <div class="d-flex gap-1">
                            <input type="hidden" name="thread_id" value="{{ $thread->id }}" id="thread_id">
                            <input type="text" class="form-control" name="body" id="commentBody"
                                placeholder="Write a comment.." style="width: 85%" required>
                            <button class="btn btn-blue btn-light py-2" type="submit" id="postCommentBtn">Post
                                Comment</button>
                        </div>
                    </form>
                </div>
                <div id="comment">

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        let lastCommentId = 0;
        $(document).ready(function() {
            loadComments();

            setInterval(function() {
                loadComments();
            }, 5000);

            $('#postThreadForm').on('submit', function(e) {
                e.preventDefault();
                var commentBody = $('#commentBody').val();
                var threadId = $('#thread_id').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('post.comments') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        thread_id: threadId,
                        body: commentBody
                    },
                    success: function(response) {
                        $('#commentBody').val('');
                        loadComments();
                        $('#postCommentBtn').text('Post Comment');
                        $('#postCommentBtn').removeAttr('disabled');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error posting comment:', error);
                    }
                });
            });

            $(document).on('submit', '.replyForm', function(e) {
                e.preventDefault();

                let form = $(this);
                let parentId = form.data('parent-id');
                let threadId = form.data('thread-id');
                let body = form.find('.replyInput-' + parentId).val();

                if (!body) {
                    console.error('Reply body is empty.');
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "{{ route('post.reply') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        parentId: parentId,
                        threadId: threadId,
                        body: body
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            form.find('.replyInput-' + parentId).val('');
                            let newReplyHtml = `
                                <div class="card mb-4">
                                    <div class="card-body py-2">
                                        <div>
                                            <p>${body}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <small class="text-muted">Posted by: You on ${new Date().toLocaleString()}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            form.closest('.replies-' + parentId).append(newReplyHtml);
                        } else {
                            console.error('Reply posting failed.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error posting reply:', error);
                    }
                });
            });
        });

        function loadComments() {
            var threadId = $('#thread_id').val();
            $.ajax({
                type: "GET",
                url: "{{ route('get.comments') }}",
                data: {
                    threadId: threadId,
                    last_comment_id: lastCommentId
                },
                success: function(response) {
                    if (response) {
                        $('#comment').append(response);
                        lastCommentId = $('#comment').children().last().data('id');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error loading comments:', error);
                }
            });
        }

        $(document).on('click', '.drop-down-btn', function() {
            let commentId = $(this).data('id');
            $(`.replies-${commentId}`).toggle();
        });
    </script>
@endsection
