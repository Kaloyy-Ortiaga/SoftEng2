<div class="flex flex-col mt-6 overflow-x-auto -mb-9">
     <table class="w-full mt-6 mb-8 text-sm text-left text-black border-2 border-black dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="w-2/12 px-4 py-3 border-r border-black">Stock No.</th>
                        <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Unit</th>
                        <th scope="col" class="w-3/12 px-4 py-3 border-r border-black">Item Description</th>
                        <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Quantity</th>
                        <th scope="col" class="w-2/12 px-4 py-3 border-r border-black">Unit Cost</th>
                        <th scope="col" class="w-2/12 px-4 py-3">Amount</th>
                    </tr>
                </thead>
        <tbody>
            @foreach ($createPr->prsItems as $item)
            <tr class="text-black border-b border-black">
                <th class="px-4 py-2 border-r border-black">
                    <input type="text" value="{{ $item->stock_no }}" class="w-full text-left bg-transparent border-0 focus:outline-none" readonly>
                </th>
                <td class="px-4 py-2 border-r border-black">
                    <input type="text" value="{{ $item->unit }}" class="w-full text-left bg-transparent border-0 focus:outline-none" readonly>
                </td>
                <td class="px-4 py-2 border-r border-black">
                    <input type="text" value="{{ $item->item_description }}" class="w-full text-left bg-transparent border-0 focus:outline-none" readonly>
                </td>
                <td class="px-4 py-2 border-r border-black">
                    <input type="text" value="{{ $item->quantity }}" class="w-full text-left bg-transparent border-0 focus:outline-none" readonly>
                </td>
                <td class="px-4 py-2 border-r border-black">
                    <input type="text" value="₱ {{ number_format($item->unit_cost, 2, '.', ',') }}" class="w-full text-left bg-transparent border-0 focus:outline-none" readonly>
                </td>
                <td class="px-4 py-2">
                    <input type="text" value="₱ {{ number_format($item->amount, 2, '.', ',') }}" class="w-full text-left bg-transparent border-0 focus:outline-none" readonly>
                </td>
            </tr>
            @endforeach
            <tr class="border-b border-black">
                <td colspan="5" class="px-4 py-2 font-bold text-right border-r border-black">Total:</td>
                <td class="px-4 py-2 font-bold">₱ {{ number_format($createPr->prsItems->sum('amount'), 2, '.', ',') }}</td>
            </tr>
        </tbody>
    </table>
</div>