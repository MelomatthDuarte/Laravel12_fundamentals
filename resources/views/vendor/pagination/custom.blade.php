@if ($paginator->hasPages())
    <nav class="pagination-nav">
        {{-- Botón anterior --}}
        @if ($paginator->onFirstPage())
            <span class="pagination-btn disabled">&laquo;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-btn">&laquo;</a>
        @endif

        {{-- Enlaces de páginas --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="pagination-btn disabled">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="pagination-btn active">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="pagination-btn">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botón siguiente --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-btn">&raquo;</a>
        @else
            <span class="pagination-btn disabled">&raquo;</span>
        @endif
    </nav>
@endif

<style>
    .pagination-nav {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 2rem;
    font-size: 0.875rem;
}

.pagination-btn {
    padding: 0.5rem 0.75rem;
    background-color: #E2E8F0; /* gris claro */
    color: #1A202C; /* gris oscuro */
    text-decoration: none;
    border-radius: 0.375rem;
    transition: background-color 0.2s ease-in-out;
}

.pagination-btn:hover {
    background-color: #CBD5E0;
}

.pagination-btn.active {
    background-color: #3182CE;
    color: white;
    font-weight: bold;
}

.pagination-btn.disabled {
    background-color: #EDF2F7;
    color: #A0AEC0;
    cursor: not-allowed;
}
</style>