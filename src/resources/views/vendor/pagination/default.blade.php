@if ($paginator->hasPages())
<div class="column one pager_wrapper">
    <div class="pager">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <a class="pre_page"><i class="icon-left-open"></i></a>
    @else
        <a class="pre_page" href="{{ $paginator->previousPageUrl() }}"><i class="icon-left-open"></i></a>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li><a href="#">{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        <div class="pages">
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <a href="#" class="active">{{ $page }}</a>
                @else
                <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        </div>
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a class="next_page" href="{{ $paginator->nextPageUrl() }}"><i class="icon-right-open"></i></a>
    @else
        <a class="next_page"><i class="icon-right-open"></i></a>
    @endif
    </div>
</div>
@endif