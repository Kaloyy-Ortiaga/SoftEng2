<div class="flex flex-col sm:flex-row">
    <div>
        <button wire:click="addRow" type="button"
            class="px-8 py-3 mr-4 text-xs text-left text-white bg-black rounded-md hover:bg-black focus:outline-none focus:bg-black float: left">
            <a class="whitespace-nowrap">ADD ROW</a>
        </button>
    </div>
        <div class="max-w-screen-lg mx-auto lg:px-1">
            <div class="relative bg-white shadow-md dark:bg-white sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 border-2 border-black dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">
                                <span class="m-1 sr-only">Actions</span>
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
                                <td class="flex items-center justify-center px-1 py-3 border-r border-black">
                                    <button wire:click="deleteRow({{ $index }})" class="px-4 py-2 text-white bg-red-500 rounded">X</button>
                                </td>
                                <th scope="row" class="px-1 py-3 border-r border-black">
                                    <input type="text" wire:model="prsItems.{{ $index }}.stock_no" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0">
                                </th>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="text" wire:model="prsItems.{{ $index }}.unit" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0">
                                </td>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="text" wire:model="prsItems.{{ $index }}.item_description" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0">
                                </td>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="number" wire:model="prsItems.{{ $index }}.quantity" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 appearance-none focus:outline-none focus:ring-0">
                                </td>
                                <td class="px-1 py-3 border-r border-black">
                                    <input type="number" wire:model="prsItems.{{ $index }}.unit_cost" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 appearance-none focus:outline-none focus:ring-0 ">
                                </td>
                                <td class="px-1 py-3">
                                    <input type="text" value="{{ floatval($item['quantity']) * floatval($item['unit_cost']) }}" class="w-full px-2 py-2 font-medium text-gray-900 bg-transparent border-0 focus:outline-none focus:ring-0" readonly>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>