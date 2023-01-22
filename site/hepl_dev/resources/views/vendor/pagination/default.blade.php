@if ($paginator->hasPages())
    <nav class="pagination">
        <ul class="pagination__list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled pagination__item " aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="pagination__arrow" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="pagination__item">
                    <a class="pagination__arrow-active" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled pagination__item" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active pagination__item" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="pagination__item"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__item">
                    <a class="pagination__arrow-active" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled pagination__item" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="pagination__arrow" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
