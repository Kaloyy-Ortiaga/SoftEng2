{{-- Admin side --}}
<div class="flex flex-col bg-white">

    @include('livewire.includes.header')

    <div class="w-full pr-14 bg-zinc-300 max-md:pr-5 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0 max-md:">

            @include('livewire.includes.sides')

            <div class="flex flex-col ml-6 -mt-16 w-[84%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col self-stretch my-auto max-md:mt-10 max-md:max-w-full">
                    <div class="mt-10 text-3xl font-semibold text-black max-md:max-w-full">
                        PURCHASE REQUEST Admin
                    </div>
                    <div class="h-px mt-3 bg-black shrink-0 max-md:max-w-full"></div>
                    <div
                        class="flex justify-center items-center px-16 py-12 mt-9 text-sm bg-white rounded-br-lg rounded-tl-lg shadow-[0px_4px_4px_rgba(0,0,0,0.25)] max-md:px-5 max-md:max-w-full">
                        <div class="flex flex-col mt-5 mb-28 max-w-full w-[1065px] max-md:mb-10 ">
                            <div
                                class="flex gap-5 justify-between -mt-4 -mb-4 whitespace-nowrap leading-[143%] max-md:flex-wrap max-md:max-w-full">
                                @include('livewire.includes.search-box')
                                <button  x-on:click="$dispatch('open-modal',{name: 'supplier'})"
                                    class="justify-center h-10 px-4 py-2 mt-3.5 font-medium text-white rounded-md shadow bg-zinc-900 w-226">
                                    CREATE PURCHASE REQUEST
                                </button>
                            </div>

                            @include('livewire.includes.admin.request-table-admin')


                            <div class="mt-6 leading-[143%] text-gray-800 text-opacity-80 max-md:max-w-full">
                                Showing 1 to 2 of 2 entries
                            </div>
                            <div class="flex self-end gap-0 mt-8 text-zinc-500">
                                <div
                                    class="grow justify-center px-3 py-2 bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] leading-[143%] text-ellipsis">
                                    PREVIOUS
                                </div>
                                <div
                                    class="justify-center px-4 py-2 text-xl font-medium leading-5 text-white whitespace-nowrap rounded-md shadow aspect-[1.17] bg-zinc-900">
                                    1
                                </div>
                                <div
                                    class="justify-center py-2 pl-3 leading-5 bg-white rounded-md border border-solid shadow-sm aspect-[1.94] border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis">
                                    NEXT
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
