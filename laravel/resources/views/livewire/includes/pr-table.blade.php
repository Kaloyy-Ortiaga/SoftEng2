<div>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-lg lg:px-1">
            <div class="bg-white dark:bg-white relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-black">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">
                                <span class="sr-only">Actions</span>
                            </th>
                            <th scope="col" class="w-2/12 px-4 py-3 border-r border-black">Stock No.</th>
                            <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Unit</th>
                            <th scope="col" class="w-3/12 px-4 py-3 border-r border-black">Item Description</th>
                            <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Quantity</th>
                            <th scope="col" class="w-2/12 px-4 py-3 border-r border-black">Unit Cost</th>
                            <th scope="col" class="w-2/12 px-4 py-3">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prsItems as $index => $item)
                            <tr class="border-b border-black">
                                <td class="px-4 py-3 flex items-center justify-center border-r border-black">
                                    <button wire:click="deleteRow({{ $index }})" class="px-4 py-2 bg-red-500 text-white rounded">X</button>
                                </td>
                                <th scope="row" class="border-r border-black">
                                    <input type="text" wire:model="prsItems.{{ $index }}.stock_no" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0">
                                </th>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="text" wire:model="prsItems.{{ $index }}.unit" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0">
                                </td>
                                <td class="px-1 py-3 text-green-500 border-r border-black">
                                    <input type="text" wire:model="prsItems.{{ $index }}.item_description" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0">
                                </td>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="number" wire:model="prsItems.{{ $index }}.quantity" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0 appearance-none">
                                </td>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="number" wire:model="prsItems.{{ $index }}.unit_cost" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0 appearance-none ">
                                </td>
                                <td class="px-1 py-3">
                                    <input type="text" value="{{ floatval($item['quantity']) * floatval($item['unit_cost']) }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <button wire:click="addRow" type="button" class="px-4 py-2 text-white bg-black rounded-md hover:bg-black focus:outline-none focus:bg-black">
                        ADD ROW
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>