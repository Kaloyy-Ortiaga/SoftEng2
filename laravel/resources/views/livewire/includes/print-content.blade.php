<div>
    <div class="flex justify-center">
        <div class="flex items-center gap-5">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/56d0e7314cf49885a03268756804ff4b8e88a4fe8089ee894995b314dd66dbe0?apiKey=19339f2aa9954834ba3c5156652a7fa7&" alt="Logo" class="w-[100px] h-[100px] mr-8">
            <div class="flex flex-col items-center ">
                <h2 class="text-2xl font-bold mb-2">PURCHASE REQUEST</h2>
                <h3 class="text-xl font-bold mb-1">PAMANTASAN NG LUNGSOD NG MAYNILA</h3>
                <p class="text-lg italic">Intramuros, Manila</p>  
            </div>
        </div>  
    </div>
    <div class="mt-10 ">
        <!-- Department, PR No., and Date section -->
        <div class="flex justify-between mb-8">
            <div>
                <p><strong>Department:</strong> {{ $purchaseOrder->creatingPr->department }}</p>
                <p><strong>Section:</strong> {{ $purchaseOrder->creatingPr->section }}</p>
            </div>
            <div>
                <p><strong>P.R. No:</strong> {{ $purchaseOrder->pr_no }}</p>
                <p><strong>SAI No:</strong> {{ $purchaseOrder->creatingPr->sai_no }}</p>
            </div>
            <div>
                <p><strong>Date:</strong> {{ $purchaseOrder->creatingPr->pr_date }}</p>
                <p><strong>Date:</strong> {{ $purchaseOrder->creatingPr->sai_date }}</p>
            </div>
        </div>

        <!-- Item details table -->
        <table class="w-full text-sm text-left text-black dark:text-gray-400 border-2 border-black mt-10 mb-12">
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
                @foreach ($purchaseOrder->creatingPr->prsItems as $index => $item)
                    <tr class="border-b border-black text-black">
                        <th scope="row" class="border-r border-black px-4">
                            {{ $item->stock_no }}
                        </th>
                        <td class="px-4 py-3 border-r border-black">
                            {{ $item->unit }}
                        </td>
                        <td class="px-4 py-3 text-black border-r border-black">
                            {{ $item->item_description }}
                        </td>
                        <td class="px-4 py-3 border-r border-black">
                            {{ $item->quantity }}
                        </td>
                        <td class="px-4 py-3 border-r border-black">
                            {{ $item->unit_cost }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $item->amount }}
                        </td>
                    </tr>
                @endforeach
                <tr class="border-b border-black text-black ">
                    <td colspan="5" class="px-1 py-3 border-r border-black font-bold "></td>
                    <td class="px-4 py-3 font-bold">
                        Total: {{ $purchaseOrder->creatingPr->prsItems->sum('amount') }}
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Purpose, Note, and Signatures section -->
        <div class="flex justify-between mt-12">
            <div>
                <p><strong>Purpose:</strong> {{ $purchaseOrder->creatingPr->purpose }}</p>
                <p class="mt-16"><strong>Note:</strong> {{ $purchaseOrder->creatingPr->note }}</p>
            </div>
            <div class="gap-3">
                <div>
                    <p><strong>Signature:</strong> _________________________</p>
                    <p><strong>Requested by:</strong> {{ $purchaseOrder->creatingPr->requested_by }}</p>
                    <p><strong>Designation:</strong> {{ $purchaseOrder->creatingPr->designation }}</p>
                </div>
                <div class="mt-8">
                    <p><strong>Signature:</strong> _________________________</p>
                    <p><strong>Approved by:</strong> {{ $purchaseOrder->creatingPr->approved_by }}</p>
                    <p><strong>Designation:</strong> {{ $purchaseOrder->creatingPr->approved_designation }}</p>
                </div>
            </div>
        </div>

    </div>
    
</div>