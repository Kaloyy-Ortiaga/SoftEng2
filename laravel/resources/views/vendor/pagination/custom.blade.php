@if ($paginator->hasPages())
    <div class="flex self-end gap-0 mt-8 text-zinc-500">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="grow justify-center px-3 py-2 bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] leading-[143%] text-ellipsis opacity-50 cursor-not-allowed">
                PREVIOUS
            </div>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="grow justify-center px-3 py-2 bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] leading-[143%] text-ellipsis">
                PREVIOUS
            </a>
        @endif

        {{-- Current Page --}}
        <div class="justify-center px-4 py-2 text-xl font-medium leading-5 text-white whitespace-nowrap rounded-md shadow aspect-[1.17] bg-zinc-900">
            {{ $paginator->currentPage() }}
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="justify-center py-2 pl-5 pr-5 leading-5 bg-white rounded-md border border-solid shadow-sm aspect-[1.94] border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis">
                NEXT
            </a>
        @else
            <div class="justify-center py-2 pl-3 leading-5 bg-white rounded-md border border-solid shadow-sm aspect-[1.94] border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis opacity-50 cursor-not-allowed">
                NEXT
            </div>
        @endif
    </div>
@endif