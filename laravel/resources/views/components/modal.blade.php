@props(['name','title'])
<div
    x-data="{ show: false, name: '{{$name}}'}" 
    x-show="show" 
    x-on:open-modal.window="show=($event.detail.name === name )" 
    x-on:close-modal.window="show=true"
    x-on:keydown.escape.window="show=false"
    style="display:none;"
    
    class = "fixed inset-0 z-50" x-transition.duration>
    
    <div x-on:click="show=false" class = "fixed inset-0 backdrop-blur-sm" x-transition> </div>  
    <div class = "bg-slate-100 border-white border-solid rounded-[50px] m-auto fixed inset-0 max-w-[400px] max-h-[550px] flex-col px-9 py-9 shadow-[0px_4px_4px_rgba(0,0,0,0.25)] ">
    <div class="flex justify-between gap-5">
                @if(isset($title))
                <div class="flex-auto text-2xl font-semibold leading-5 text-black">
                    {{$title}}
                </div>
                @endif
                <div x-on:click="show=false"
                    class="flex justify-center items-center px-0.5 rounded border border-solid aspect-square bg-zinc-100 border-[color:var(--Neutral-Black-Default,#000)] h-[30px] w-[30px]">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/bcef0864135875213bc5678335fab7a427d2581df11e39b4e38db59b823dcba0?apiKey=19339f2aa9954834ba3c5156652a7fa7&"
                        class="w-full aspect-square" />
                </div>
            </div>
            {{$body}}
    </div>
</div> 