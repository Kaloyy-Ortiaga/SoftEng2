<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body>
    {{--<livewire:supplier-list/> --}
    
    {{-- <x-supplier-modal> </x-supplier-modal> //sample lang to  --}}

    <x-modal name="supplier" title="Add Supplier Information">
        <x-slot:body>
            <div class="mt-2 text-xl leading-5 text-black">Supplier Name:</div>
            <div
                class="justify-center px-4 py-2.5 mt-3.5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Supplier name 1
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Address:</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Address sample 1
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Contact:</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Contact sample 1
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Status:</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Active/Inactive
            </div>
            <div
                class="flex items-center justify-center px-16 py-2 mt-6 text-sm font-medium leading-5 text-white bg-indigo-800 rounded-md shadow">
                ADD
            </div>
        </x-slot>
    </x-modal>

    
    <x-modal name="editsupplier" title="Add Supplier Information">
        <x-slot:body>
            <div class="mt-2 text-xl leading-5 text-black">Supplier Name:</div>
            <div
                class="justify-center px-4 py-2.5 mt-3.5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Supplier name 1
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Address:</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Address sample 1
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Contact:</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Contact sample 1
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Status:</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Active/Inactive
            </div>
            <div
                class="flex items-center justify-center px-16 py-2 mt-6 text-sm font-medium leading-5 text-white bg-indigo-800 rounded-md shadow">
                SAVE
            </div>
        </x-slot>
    </x-modal>



    {{---<livewire:item-list />  --}}

    {{-- @include('livewire.item-list') --}}
    
    <x-modal name="item" title="Add Item Information">
        <x-slot:body>
            <div class="mt-2 text-xl leading-5 text-black">Supplier Name:</div>
            <div
                class="justify-center px-4 py-2.5 mt-3.5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Item name 1
            </div>
            <div class="mt-4 mb-1 text-xl font-medium leading-5 text-zinc-950">
                Description
            </div>
            <div
                class="justify-center self-stretch px-3.5 pt-3 pb-28 text-base font-semibold leading-6 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-zinc-500">
                Enter a description...
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Control no.</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                CNO.123586
            </div>
            <div
                class="flex items-center justify-center px-16 py-2 mt-6 text-sm font-medium leading-5 text-white bg-indigo-800 rounded-md shadow">
                ADD
            </div>
        </x-slot>
    </x-modal>

     <x-modal name="edititem" title="Add Item Information">
        <x-slot:body>
            <div class="mt-2 text-xl leading-5 text-black">Supplier Name:</div>
            <div
                class="justify-center px-4 py-2.5 mt-3.5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                Item name 1
            </div>
            <div class="mt-4 mb-1 text-xl font-medium leading-5 text-zinc-950">
                Description
            </div>
            <div
                class="justify-center self-stretch px-3.5 pt-3 pb-28 text-base font-semibold leading-6 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-zinc-500">
                Enter a description...
            </div>
            <div class="mt-4 text-xl leading-5 text-black">Control no.</div>
            <div
                class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
                CNO.123586
            </div>
            <div
                class="flex items-center justify-center px-16 py-2 mt-6 text-sm font-medium leading-5 text-white bg-indigo-800 rounded-md shadow">
                SAVE
            </div>
        </x-slot>
    </x-modal>







    <livewire:purchase-order/>

    {{--<livewire:invoice-list>--}}

    <livewire:create-pr>
    @livewireScripts
</body>

</html>
