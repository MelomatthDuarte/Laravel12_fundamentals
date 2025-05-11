@extends('template')

@section('content')
<div>
    <!-- Información destacada -->
</div>

<div class="content">
    <h1 class="heading">Contenido Técnico</h1>

    <div class="post-grid">
        @foreach ($posts as $post)
            <a href="" class="post-link">
                <p class="post-info">
                    <span class="tag">Tutorial</span>
                    <span>{{ $post->created_at->format('d/m/Y') }}</span>
                </p>
                <h2 class="post-title">
                    {{ $post->title }}
                </h2>
            </a>
        @endforeach
    </div>
    <div class="pagination">
        {{ $posts->links() }}
    </div>
</div>

@endsection

<style>
    .content {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .heading {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        color: #2D3748; /* Tailwind Gray 800 */
    }

    .post-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .post-link {
        display: block;
        background-color: #3EABF3FF; /* Tailwind Gray 100 */
        border-radius: 0.5rem;
        padding: 1.5rem;
        text-decoration: none;
        color: inherit;
    }

    .post-info {
        font-size: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .tag {
        text-transform: uppercase;
        background-color: #EDF2F7; /* Tailwind Gray 200 */
        border-radius: 9999px;
        padding: 0.25rem 0.5rem;
    }

    .post-title {
        font-size: 1.125rem; /* text-lg */
        color: #1A202C; /* Tailwind Gray 900 */
        margin-top: 0.5rem;
    }

    .pagination {
        margin-top: 2rem;
    }
</style>