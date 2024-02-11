<div
    x-data="{ show: false}" 
    x-show="show" 
    x-on:open-suppliermodal.window="show=true" 
    x-on:close-suppliermodal.window="show=true"
    x-on:keydown.escape.window="show=false"
    
    class = "fixed z-50 inset-0">
    
    <div x-on:click="show=false" class = "fixed inset-0 backdrop-blur-sm"> </div>  
    <div class = "bg-slate-100 border-white border-solid rounded-[50px] m-auto fixed inset-0 max-w-[400px] max-h-[550px] flex-col px-9 py-9 shadow-[0px_4px_4px_rgba(0,0,0,0.25)] ">
    <div class="flex justify-between gap-5">
                <div class="flex-auto text-2xl font-semibold leading-5 text-black">
                    Add Supplier Information
                </div>
                <div x-on:click="show=false"
                    class="flex justify-center items-center px-0.5 rounded border border-solid aspect-square bg-zinc-100 border-[color:var(--Neutral-Black-Default,#000)] h-[30px] w-[30px]">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/bcef0864135875213bc5678335fab7a427d2581df11e39b4e38db59b823dcba0?apiKey=19339f2aa9954834ba3c5156652a7fa7&"
                        class="w-full aspect-square" />
                </div>
            </div>
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
    </div>
</div> 