<div>
    <div class="flex flex-col bg-white">
        @include('livewire.includes.header')
        <div class="w-full pr-14 bg-zinc-300 max-md:pr-5 max-md:max-w-full">

            <div class="flex gap-5 max-md:flex-col max-md:gap-0 max-md:">
                @include('livewire.includes.sides')
                <div class="flex flex-col ml-9 w-[84%] max-md:ml-0 max-md:w-full">

                    <div class="flex flex-row justify-between">
                        <div class="mt-10 text-3xl font-semibold text-black max-md:max-w-full">
                            PURCHASE REQUEST (USER SIDE)
                        </div>
                        <button
                            class=" w-[74px] h-9 mt-10 mr-5 justify-center font-medium text-white rounded-md shadow bg-indigo-800">
                            PRINT
                        </button>
                    </div>

                    <div class="h-px mt-3 bg-black shrink-0 max-md:max-w-full"></div> {{-- line --}}
                    <div
                        class=" px-16 py-12 mt-9 mb-[67px] h-full w-full text-sm bg-white rounded-br-lg rounded-tl-lg shadow-[0px_4px_4px_rgba(0,0,0,0.25)] ">
                        {{-- white box container --}}
                        @include('livewire.includes.creating-pr')


                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
