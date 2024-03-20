@props(['title'])
<div x-data="{ show: true }" x-show="show" x-on:open-suppliermodal.window="show=true"
    x-on:close-suppliermodal.window="show=true" x-on:keydown.escape.window="show=false" class = "fixed inset-0 z-50">

    <div x-on:click="show=false" class = "fixed inset-0 backdrop-blur-sm"> </div>
    <div
        class = "bg-slate-100 border-white border-solid rounded-[50px] m-auto fixed inset-0 max-w-[400px] max-h-[550px] flex-col px-9 py-9 shadow-[0px_4px_4px_rgba(0,0,0,0.25)] ">
        <div class="flex items-start justify-between gap-5">
            <div class="flex flex-col text-black">
                <div class="text-2xl font-semibold leading-5 whitespace-nowrap">
                    Add Item information
                </div>
                <div class="mt-5 text-xl leading-5">Item Name:</div>
            </div>
            <div
                class="flex justify-center items-center px-0.5 rounded border border-solid aspect-square bg-zinc-100 border-[color:var(--Neutral-Black-Default,#000)] h-[30px] w-[30px]">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/bcef0864135875213bc5678335fab7a427d2581df11e39b4e38db59b823dcba0?apiKey=19339f2aa9954834ba3c5156652a7fa7&"
                    class="w-full aspect-square" />
            </div>
        </div>
        <div
            class="justify-center px-4 py-2.5 mt-5 text-sm font-semibold leading-5 whitespace-nowrap bg-white rounded-md border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)] text-ellipsis text-zinc-500">
            Sample item 1
        </div>
        
    </div>
