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
                <div class="card-header border-bottom-0 d-flex justify-content-between">
                    <div>
                        <h4 class="card-title fs-5 fw-semibold">Edit</h4>
                    </div>
                </div>
                <div class="card-body mt-4">
                    <form action="{{ route('admin.blog.update', ['id' => $blog->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-8 mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Blog Title..."
                                    required value="{{ old('title', $blog->title) }}">
                            </div>
                            <div class="col-4 mb-4">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail">

                            </div>
                            <div class="col-6 mb-4">
                                <label for="keywords" class="form-label">Keywords</label>
                                <input type="text" class="form-control" name="keywords" id="keywords"
                                    placeholder="Enter Blogs Keywords..." value="{{ old('keywords', $blog->keywords) }}">
                            </div>
                            <div class="col-3 mb-4">
                                <label for="published_at" class="form-label">Publish Date</label>
                                <input type="datetime-local" class="form-control" name="published_at" required
                                    value="{{ old('published_at', $blog->published_at ? Carbon\Carbon::parse($blog->published_at)->format('Y-m-d\TH:i:s') : '') }}">
                            </div>
                            <div class="col-3 mb-4 pt-4">
                                <div class="form-group pt-4">
                                    <label class="custom-switch">
                                        <input type="checkbox" class="custom-switch-input" name="is_active" value="1"
                                            {{ old('is_active', $blog->is_active) ? 'checked' : '' }}>
                                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                        <span class="custom-switch-description me-2">Is Active</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-9 mb-4">
                                <label for="tags" class="form-label">Tags</label>
                                <input type="text" class="form-control" name="tags" id="tags"
                                    placeholder="Enter Blogs tags..."
                                    value="{{ old('tags', $blog->tags->pluck('name')->implode(',')) }}">
                            </div>
                            <div class="col-3 mb-4">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-select">
                                    <option value="blog" @selected($blog->category == "blog")>Blog</option>
                                    <option value="researh study" @selected($blog->category == 'researh study')>Research study</option>
                                    <option value="case study" @selected($blog->category == 'case study')>case study</option>
                                </select>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="blog" class="form-label">Body</label>
                                <textarea class="form-control content" name="body" id="body" rows="10">{{ old('body', $blog->body) }}</textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tagify/3.21.4/tagify.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/3.21.4/tagify.min.js"></script>
    <script>
        var input = document.querySelector('input[name=keywords]');
        new Tagify(input);
        var input1 = document.querySelector('input[name=tags]');
        new Tagify(input1);
    </script>
@endsection
