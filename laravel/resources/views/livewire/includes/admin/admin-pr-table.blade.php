<div>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-lg lg:px-1">
            <div class="bg-white dark:bg-white relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-black">
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
                            <tr class="border-b border-black">
                                <th scope="row" class="border-r border-black">
                                    <input type="text" value="{{ $item->stock_no }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </th>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="text" value="{{ $item->unit }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </td>
                                <td class="px-1 py-3 text-green-500 border-r border-black">
                                    <input type="text" value="{{ $item->item_description }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </td>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="number" value="{{ $item->quantity }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </td>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="number" value="{{ $item->unit_cost }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </td>
                                <td class="px-1 py-3">
                                    <input type="text" value="{{ $item->amount }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>