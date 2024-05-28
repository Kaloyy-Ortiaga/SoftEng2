<div class="flex flex-col mt-6 overflow-x-auto -mb-9">
    <table class="w-full mt-6 mb-8 text-sm text-left text-black border-2 border-black dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="w-2/12 px-4 py-3 border-r border-black">Item no.</th>
                <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Quantity</th>
                <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Unit</th>
                <th scope="col" class="w-3/12 px-4 py-3 border-r border-black">Item Description</th>
                <th scope="col" class="w-2/12 px-4 py-3 border-r border-black">Unit Cost</th>
                <th scope="col" class="w-2/12 px-4 py-3">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adminPurchaseOrder->prsItems as $item)
            <tr class="text-black border-b border-black">
                <td class="px-4 py-2 border-r border-black">{{ $item->item_no }}</td>
                <td class="px-4 py-2 border-r border-black">{{ $item->quantity }}</td>
                <td class="px-4 py-2 border-r border-black">{{ $item->unit }}</td>
                <td class="px-4 py-2 border-r border-black">{{ $item->item_description }}</td>
                <td class="px-4 py-2 border-r border-black">₱ {{ number_format($item->unit_cost, 2, '.', ',') }}</td>
                <td class="px-4 py-2">₱ {{ number_format($item->amount, 2, '.', ',') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>