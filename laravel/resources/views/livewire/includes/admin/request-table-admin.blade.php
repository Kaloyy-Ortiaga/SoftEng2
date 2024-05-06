<div class="flex justify-between gap-0 mt-20 whitespace-nowrap max-md:flex-wrap max-md:mt-10 max-md:max-w-full">
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize aspect-[1.3] bg-slate-100 leading-[114%]">
            No.
        </div>
        @foreach ($purchaseRequests as $index => $purchaseRequest)
        <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} aspect-[1.3]">
            {{ $index + 1 }}
        </div>
        @endforeach
    </div>
    <div class="flex flex-col flex-1 border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            Date created
        </div>
        @foreach ($purchaseRequests as $index => $purchaseRequest)
        <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
            {{ $purchaseRequest->date_created }}
        </div>
        @endforeach
    </div>
    <div class="flex flex-col flex-1 border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            P.R. No.
        </div>
        @foreach ($purchaseRequests as $index => $purchaseRequest)
        <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
            {{ $purchaseRequest->pr_no }}
        </div>
        @endforeach
    </div>
    <div class="flex flex-col flex-1 border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            Department
        </div>
        @foreach ($purchaseRequests as $index => $purchaseRequest)
        <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
            {{ $purchaseRequest->department }}
        </div>
        @endforeach
    </div>
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize aspect-[1.57] bg-slate-100 leading-[114%]">
            Amount
        </div>
        @foreach ($purchaseRequests as $index => $purchaseRequest)
        <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} ">
            {{ $purchaseRequest->creatingPr->amount }}
        </div>
        @endforeach
    </div>
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize  bg-slate-100 leading-[114%]">
            Status
        </div>
        @foreach ($purchaseRequests as $index => $purchaseRequest)
        <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} ">
            {{ $purchaseRequest->status }}
        </div>
        @endforeach
    </div>
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize aspect-[1.57] bg-slate-100 leading-[114%]">
            Actions
        </div>
        @foreach ($purchaseRequests as $index => $purchaseRequest)
        <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} ">
            <a href="">View</a>
        </div>
        @endforeach
    </div>
</div>