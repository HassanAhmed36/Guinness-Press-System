<div class="bg-transparent">
    @forelse ($articles as $article)
        <a href="/publication/journal/{{ $article->journal->acronym }}/{{ $article->article_code }}">
            <div class="card" style="margin-bottom:15px !important">
                <div class="card-body">
                    <p> {{ $article->title }}</p>
                    <small>Journal: {{ $article->journal->acronym }}  | Volume: {{ $article->volume->name }}  |
                        Issue: {{ $article->issue->name }}</small>
                </div>
            </div>
        </a>
    @empty
        <div class="card">
            <div class="card-body">
                No Data found
            </div>
        </div>
    @endforelse
</div>
