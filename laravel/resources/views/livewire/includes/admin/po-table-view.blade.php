<div class="flex justify-between gap-0 mt-20 whitespace-nowrap max-md:mt-10 max-md:max-w-full">
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize aspect-[1.3] bg-slate-100 leading-[114%]">
            No.
        </div>
        @foreach ($purchaseorders as $index => $purchaseorder)
            <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} aspect-[1.3]">
                {{ $index + 1 }}
            </div>
        @endforeach
    </div>
    <div class="flex flex-col flex-1 border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            Date created
        </div>
        @foreach ($purchaseorders as $index => $purchaseorder)
            <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
                {{ $purchaseorder->POdate_created }}
            </div>
        @endforeach
    </div>
    <div class="flex flex-col flex-1 border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            P.O. No.
        </div>
        @foreach ($purchaseorders as $index => $purchaseorder)
            <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
                {{ $purchaseorder->po_number }}
            </div>
        @endforeach
    </div>
    <div class="flex flex-col flex-1 border border-solid shadow-sm border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            Supplier
        </div>
        @foreach ($purchaseorders as $index => $purchaseorder)
            <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
                {{ $purchaseorder->supplier }}
            </div>
        @endforeach
    </div>
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            Amount
        </div>
        @foreach ($purchaseorders as $index => $purchaseorder)
            <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
                {{ $purchaseorder->adminPurchaseOrder->prs_items_sum_amount ?? 0 }}
            </div>
        @endforeach
    </div>
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            Status
        </div>
        @foreach ($purchaseorders as $index => $purchaseorder)
            <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
                {{ $purchaseorder->po_status }}
            </div>
        @endforeach
    </div>
    <div class="flex flex-col border border-solid shadow-sm basis-0 border-[color:var(--Neutral-Black-Default,#000)]">
        <div class="justify-center px-2 py-3 font-thin tracking-wide text-black capitalize bg-slate-100 leading-[114%]">
            Actions
        </div>
        @foreach ($purchaseorders as $index => $purchaseorder)
            <div class="justify-center px-2 py-2.5 {{ $index % 2 === 0 ? 'bg-white' : 'bg-slate-50' }}">
                <a href="{{ route('admin.pr', ['id' => $purchaseorder->id]) }}" class="px-4 py-2 text-indigo-800">View</a>
            </div>
        @endforeach
    </div>
</div>
