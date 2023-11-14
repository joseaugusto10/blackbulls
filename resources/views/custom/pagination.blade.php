
@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>&laquo;&nbsp;&nbsp;Anterior</span></li>
        @else
            <li class="waves-effect"><a href="{{ $paginator->previousPageUrl() }}">&laquo;&nbsp;&nbsp;Anterior</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}">&nbsp;&nbsp;Próximo&nbsp;&nbsp;&raquo;</a></li>
        @else
            <li class="disabled"><span>&nbsp;&nbsp;Próximo&nbsp;&nbsp;&raquo;</span></li>
        @endif
    </ul>
@endif


