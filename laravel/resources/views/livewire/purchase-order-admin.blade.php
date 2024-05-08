{{-- Admin side --}}
<div class="flex flex-col bg-white">

    @include('livewire.includes.header')

    <div class="w-full pr-14 bg-zinc-300 max-md:pr-5 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0 max-md:">

            @include('livewire.includes.sides')

            <div class="flex flex-col ml-6 -mt-16 w-[84%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col self-stretch my-auto max-md:mt-10 max-md:max-w-full">
                    <div class="mt-10 text-3xl font-semibold text-black max-md:max-w-full">
                        PURCHASE REQUEST
                    </div>

                    <div class="h-px mt-3 bg-black shrink-0 max-md:max-w-full"></div>
                    <div
                        class="flex justify-center items-center px-16 py-12 mt-9 text-sm bg-white rounded-br-lg rounded-tl-lg shadow-[0px_4px_4px_rgba(0,0,0,0.25)] max-md:px-5 max-md:max-w-full">
                        
                        <div class="flex flex-col mt-5 mb-28 max-w-full w-[1065px] max-md:mb-10 ">
                            <div
                                class="flex gap-5 justify-between -mt-4 -mb-4 whitespace-nowrap leading-[143%] max-md:flex-wrap max-md:max-w-full">
                                @include('livewire.search-bar')
                            </div>
                            
                            @include('livewire.includes.admin.request-table-admin')


                            <div class="mt-6 leading-[143%] text-gray-800 text-opacity-80 max-md:max-w-full">
                                Showing {{ $purchaseRequests->firstItem() }} to {{ $purchaseRequests->lastItem() }} of
                                {{ $purchaseRequests->total() }} entries
                            </div>
                            <div class="flex self-end gap-0 mt-8 text-zinc-500">
                                {{ $purchaseRequests->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
