@foreach ($thread_comments as $comment)
    <div class="mb-4" data-id="{{ $comment->id }}">
        <div class="card">
            <div class="card-body py-2">
                <div>
                    <p>{{ $comment->body }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="text-muted">Posted by:
                            @if ($comment->user)
                                {{ $comment->user->user_basic_info->name ?? '' }}
                            @else
                                Guest User
                            @endif
                            on {{ $comment->created_at->format('M d, Y H:i') }}
                        </small>
                    </div>
                    <div>
                        <div class="d-flex justify-content-end">
                            <i class="fa-solid fa-caret-down drop-down-btn" data-id="{{ $comment->id }}"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-4">
            <div class="mt-2 replies replies-{{ $comment->id }}" style="display: none;">
                <div class="mb-4">
                    <form class="replyForm d-flex" data-parent-id="{{ $comment->id }}" data-thread-id="{{ $comment->thread_id }}">
                        <input type="text" class="form-control replyInput-{{ $comment->id }}"
                            placeholder="Reply to this message..." style="width: 90%">
                        <button class="btn btn-blue btn-light py-2 replyPostBtn" type="submit">Post Reply</button>
                    </form>
                    
                </div>
                @if ($comment->replies)
                    @foreach ($comment->replies as $replies)
                        <div class="card mb-4">
                            <div class="card-body py-2">
                                <div>
                                    <p>{{ $replies->body }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small class="text-muted">Posted by:
                                            @if ($replies->user)
                                                {{ $replies->user->user_basic_info->name ?? '' }}
                                            @else
                                                Guest User
                                            @endif
                                            on {{ $replies->created_at->format('M d, Y H:i') }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endforeach
