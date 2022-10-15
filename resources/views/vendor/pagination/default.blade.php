@if ($paginator->hasPages())
    <nav class="text-white">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled py-2 px-2 border border-light  border-opacity-50 rounded-start" aria-disabled="true"
                    aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="py-2 px-2 border border-light  border-opacity-50 rounded-start">
                    <a class="link-light" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled py-2 px-2 border border-light  border-opacity-50" aria-disabled="true">
                        <span>{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active align-self-center py-2 px-2 border border-light  border-opacity-50 fw-bold text-bg-primary"
                                aria-current="page">
                                <span>{{ $page }}</span>
                            </li>
                        @else
                            <li class="py-2 px-2 border border-light  border-opacity-50">
                                <a class="link-light" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="py-2 px-2 border border-light  border-opacity-50 rounded-end">
                    <a class="link-light" href="{{ $paginator->nextPageUrl() }}" rel="next"
                        aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled py-2 px-2 border border-light  border-opacity-50 rounded-end" aria-disabled="true"
                    aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
