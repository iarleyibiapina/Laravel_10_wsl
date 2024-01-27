{{-- testar paginas ?per_page=1 --}}
@if (isset($paginator))

    @php
        // verifica se existe appends
        $queryParam = isset($appends) && gettype($appends === 'array') ? '&' . http_build_query($appends) : '';
    @endphp

    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->isFirstPage())
            <span
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md btn">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="?page={{ $paginator->getNumberPreviousPage() }}{{ $queryParam }}" rel="prev"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 btn">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link  --}}
        @if ($paginator->isLastPage())
            <span
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md btn">
                {!! __('pagination.next') !!}
            </span>
        @else
            <a href="?page={{ $paginator->getNumberNextPage() }}{{ $queryParam }}" rel="next"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 btn">
                {!! __('pagination.next') !!}
            </a>
        @endif
    </nav>
@endif
