<div class="flex flex-col bg-white">
    @include('livewire.includes.header')
    <div class="w-full pr-14 bg-zinc-300 max-md:pr-5 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
            @include('livewire.includes.sides')
            <div class="flex flex-col ml-9 w-[84%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-row items-center justify-between">
                    <div class="mt-10 text-3xl font-semibold text-black max-md:max-w-full">
                        PURCHASE ORDER
                    </div>
                    <div class="flex gap-2 mt-10 mr-5">
                       

                        {{-- <button
                            class="w-[74px] h-9 justify-center font-medium text-white rounded-md shadow bg-indigo-800 flex items-center">
                            <a href="{{ route('print-request', ['id' => $createPr->purchaseRequest->id]) }}"
                                class="flex items-center justify-center w-full h-full px-4">
                                PRINT
                            </a>
                        </button> --}}
                    </div>
                </div>
                <div class="h-px mt-3 bg-black shrink-0 max-md:max-w-full"></div>
                <div class="px-16 py-12 mt-9 mb-[67px] h-full w-full text-sm bg-white rounded-br-lg rounded-tl-lg shadow-[0px_4px_4px_rgba(0,0,0,0.25)]">
                     @if($isEdit)
                        @include('livewire.includes.admin.purchase-order-details')
                    @else
                        @include('livewire.includes.admin.purchase-order-table')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
