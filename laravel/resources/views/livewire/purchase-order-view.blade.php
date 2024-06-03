{{-- Admin side --}}
<div class="flex flex-col bg-white">
    @include('livewire.includes.header')
    <div class="w-full pr-5 bg-zinc-300">
        <div class="flex flex-col gap-5 md:flex-row">
            @include('livewire.includes.sides')
            <div class="flex flex-col md:ml-6 mt-10 w-full md:w-[84%]">
                <div class="flex flex-col self-stretch my-auto -mt-5">
                    <div class="mt-10 text-3xl font-semibold text-black">
                        PURCHASE ORDER
                    </div>
                    <div class="h-px mt-3 bg-black shrink-0"></div>
                    <div class="flex justify-center items-center px-5 py-12 mt-9 text-sm bg-white rounded-br-lg rounded-tl-lg shadow-[0px_4px_4px_rgba(0,0,0,0.25)]">
                        <div class="flex flex-col w-full mt-5 mb-10">
                            <div class="flex flex-wrap gap-5 justify-between items-center ml-6 -mt-4 -mb-4 whitespace-nowrap leading-[143%]">
                                <div class="w-full md:w-auto">
                                    @include('livewire.search-bar')
                                </div>
                                <button onclick="window.location.href='{{ route('purchase-order-admin') }}'" class="justify-center h-10 mr-6 px-4 py-2 mt-3.5 font-medium text-white rounded-md shadow bg-zinc-900 w-full md:w-auto">
                                    VIEW PURCHASE REQUEST
                                </button>

                                
                            </div>
                            <div class="overflow-x-auto">
                                @include('livewire.includes.admin.po-table-view')
                            </div>
                            {{-- <div class="mt-6 leading-[143%] text-gray-800 text-opacity-80">
                                Showing {{ $purchaseRequests->firstItem() }} to {{ $purchaseRequests->lastItem() }} of {{ $purchaseRequests->total() }} entries
                            </div>
                            <div class="flex self-end gap-0 mt-8 text-zinc-500">
                                {{ $purchaseRequests->links('vendor.pagination.custom') }}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>