<div id="search-bar" class="flex flex-col items-start pt-4 sm:flex-row">
    <form class="d-flex" role="search">
        <input wire:model.live="search"
            class="flex flex-col justify-center px-3 py-2 text-sm leading-5 whitespace-nowrap bg-white rounded-md border border-black border-solid shadow-sm w-[150%] text-black form-control me-2"
            type="search" placeholder="Search" aria-label="Search...">
    </form>
    @if (!empty($users))
        <div class="py-0 dropdown-menu d-block">
            @foreach ($users as $purchase_request)
                <div class="px-3 py-1 border-bottom">
                    <div class="ml-3 d-flex flex-column">
                        <span>{{ $purchase_request->department }}</span>
                        <small>{{ $purchase_request->status }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>
