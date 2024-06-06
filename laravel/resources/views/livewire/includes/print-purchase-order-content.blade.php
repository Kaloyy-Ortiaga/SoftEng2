<div class="w-full h-full pt-8 text-sm bg-white sm:px-6">
    <div class="flex flex-col items-center justify-center sm:flex-row">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/56d0e7314cf49885a03268756804ff4b8e88a4fe8089ee894995b314dd66dbe0?apiKey=19339f2aa9954834ba3c5156652a7fa7&"
            alt="Logo" class="w-[100px] h-[100px] mr-4 sm:mr-8">
        <div class="flex flex-col items-center text-center sm:text-left">
            <h3 class="mb-1 text-xl font-bold">PAMANTASAN NG LUNGSOD NG MAYNILA</h3>
            <p class="text-lg italic">(University of the City of Manila) </p>
            <p class="text-lg italic">Intramuros, Manila</p>
            <h2 class="mb-2 text-2xl font-bold">PURCHASE ORDER NO.: {{ $purchaseOrder->po_number }}</h2>
        </div>
    </div>
    <div class="mt-8">
        <!-- Supplier, PO No., and Date section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-10">
            <div class='sm:ml-12'>
                <p><strong>Supplier:</strong> {{ $purchaseOrder->supplier }}</p>
                <p><strong>Address:</strong> {{ $purchaseOrder->address }}</p>
                <p><strong>Tel No.:</strong> {{ $purchaseOrder->tel_no }}</p>
                <p><strong>TIN:</strong> {{ $purchaseOrder->tin }}</p>
            </div>
            <div class="sm:ml-24">
                <p><strong>Date:</strong> {{ $purchaseOrder->po_date }}</p>
                <p><strong>Mode of Procurement:</strong> {{ $purchaseOrder->mop }}</p>
                <p><strong>PR No.:</strong> {{ $purchaseOrder->createPr->pr_no }}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 mb-2 sm:grid-cols-1 sm:gap-x-10">
            <div class='sm:ml-12 w-full'>
                <p class="mt-2"><strong>Gentlemen:</strong></p>
                <p class="ml-12">Please furnish this office the following articles subject to the terms and conditions contained herein:</p> 
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-10">
            <div class='sm:ml-12'>
                <p><strong>Place of Delivery:</strong> {{ $purchaseOrder->po_place }}</p>
                <p><strong>Date of Delivery:</strong> {{ $purchaseOrder->po_dateod }}</p>
            </div>
            <div class="sm:ml-24">
                <p><strong>Price Validity:</strong> {{ $purchaseOrder->po_validity }}</p>
                <p><strong>Payment Term:</strong> {{ $purchaseOrder->po_term }}</p>
            </div>
        </div>

        <!-- Item details table -->
        <div class="overflow-x-auto">
            <table class="w-full mt-2 mb-2 text-sm text-left text-black border-2 border-black dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Item No.</th>
                        <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Quantity</th>
                        <th scope="col" class="w-1/12 px-4 py-3 border-r border-black">Unit</th>
                        <th scope="col" class="w-4/12 px-4 py-3 border-r border-black">Description</th>
                        <th scope="col" class="w-2/12 px-4 py-3 border-r border-black">Unit Cost</th>
                        <th scope="col" class="w-2/12 px-4 py-3">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchaseOrder->createPr->prsItems as $index => $item)
                        <tr class="text-black border-b border-black">
                            <th scope="row" class="px-4 border-r border-black">
                                {{ $index + 1 }}
                            </th>
                            <td class="px-4 py-3 border-r border-black">
                                {{ $item->quantity }}
                            </td>
                            <td class="px-4 py-3 border-r border-black">
                                {{ $item->unit }}
                            </td>
                            <td class="px-4 py-3 text-black border-r border-black">
                                {{ $item->item_description }}
                            </td>
                            
                            <td class="px-4 py-3 border-r border-black">₱
                                {{ number_format($item->unit_cost, 2, '.', ',') }}
                            </td>
                            <td class="px-4 py-3">₱
                                {{ number_format($item->amount, 2, '.', ',') }}
                            </td>
                        </tr>
                    @endforeach
                    <tr class="border-b border-black">
                        <td colspan="2" class="px-4 py-2 font-bold text-right border-r border-black">(Sub-total Amount in Words)</td>
                        <td colspan="3" class="px-2 py-1 font-semibold text-xl text-center border-r border-black">{{ $purchaseOrder->po_word }}</td>
                        <td class="px-4 py-3 font-bold">
                            Total: ₱
                            {{ number_format($purchaseOrder->createPr->prsItems->sum('amount'), 2, '.', ',') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Payment terms, Note, and Signatures section -->
        <p>In case of failure to make the full delivery within the time specified above, a penalty of one-tenth (1/10) of one percent (1%) for every day of delay shall be imposed.</p>
        <div class="grid grid-cols-2 gap-6 sm:grid-cols-2">
            <div class="grid grid-cols-1" >
                <p class="mt-2"> Conforme: </p> 
                <p class="mt-3 ml-12"> _____________________________________________________</p>
                <p class="ml-12">(Signature over Printed Name of the Supplier)</p>
                <p class="ml-24 mt-1">_____________________________</p>
                <p class="ml-40">Date</p>
            </div>
            <div class="grid grid-cols-1">
                <p class="mt-2">Very truly yours,</p>
                <p class="mt-3 ml-12"> _____________________________________________________</p>
                <p class="ml-40">{{ $purchaseOrder->po_auth }}</p>
                <p class="ml-40">{{ $purchaseOrder->po_authPos }}</p>
                <p class="ml-32">(Authorized Official)</p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-6 sm:grid-cols-2 mt-4">
            <div class="grid grid-cols-1">
                <p>Funds Availability Certified by:</p>
                <p class="mt-3 ml-12"> _____________________________________________________</p>
                <p class="ml-40 font-bold">{{ $purchaseOrder->po_cfa }}</p>
                <p class="ml-40">{{ $purchaseOrder->po_cfapos }}</p>
            </div>
            <div class="grid grid-cols-1">
                <p class="ml-12">OS No.: <span >_____________________________________________________</span></p>
                <p class="ml-12">Amount: <span >_____________________________________________________</span></p>
                <p class="ml-12">Date: <span >_____________________________________________________</span></p>
            </div>
        </div>
        <div class="grid grid-cols-1 mt-4">
            <p>Distribution Copies</p>
            <p class="mt-3 ml-12"> ☐ Original copy for the Supplier's Conforme</p>
            <p class="mt-3 ml-12"> ☐ Agency's Property and Supplies Section</p>
            <p class="mt-3 ml-12"> ☐ COA Auditor</p>
        </div>
    </div>
</div>
