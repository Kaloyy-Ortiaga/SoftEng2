<div class="flex flex-col p-4 mt-2 -ml-4 bg-white">
    @if(isset($purchaseOrder))
        <div class="flex flex-col p-4 mt-2 -ml-4 bg-white">
            @if(session('success'))
                <div class="p-4 mb-4 text-green-800 bg-green-200 border border-green-400 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('purchase-order.update', $purchaseOrder->id) }}" method="POST">
                @csrf
                <div class="flex flex-col gap-4">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        <!-- Supplier -->
                        <div class="flex flex-col">
                            <label for="supplier" class="py-2 text-xl font-medium text-black capitalize">Supplier</label>
                            <input type="text" wire:model="supplier" id="supplier" value="{{ $purchaseOrder->supplier }}"
                                class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                            @error('supplier')
                                <span class="mt-1 text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="tel_no" class="py-2 text-xl font-medium text-black capitalize">Tel No.</label>
                            <input type="text" wire:model="tel_no" id="tel_no" value="{{ $purchaseOrder->tel_no }}"
                                class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                            @error('tel_no')
                                <span class="mt-1 text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="po_date" class="py-2 text-xl font-medium text-black capitalize">Date</label>
                            <input type="date" wire:model="po_date" id="po_date" value="{{ $purchaseOrder->po_date }}"
                                class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                            @error('po_date')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        <div class="flex flex-col">
                            <label for="address" class="py-2 text-xl font-medium text-black capitalize">Address</label>
                            <input type="text" wire:model="address" id="address" value="{{ $purchaseOrder->address }}"
                                class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                            @error('address')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="tin" class="py-2 text-xl font-medium text-black capitalize">TIN.</label>
                            <input type="text" wire:model="tin" id="tin" value="{{ $purchaseOrder->tin }}"
                                class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                            @error('tin')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="mop" class="py-2 text-xl font-medium text-black capitalize">MOP</label>
                            <input type="text" wire:model="mop" id="mop" value="{{ $purchaseOrder->mop }}"
                                class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                            @error('mop')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="flex flex-column">
                        @include('livewire.includes.admin.admin-po-table', ['adminPurchaseOrder' => $purchaseOrder])
                    </div>
        
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <div>
                            <div class="flex flex-col gap-3">
                                <div class="flex flex-col gap-3">
                                    <div class="flex flex-col gap-1">
                                        <label class="block font-bold text-gray-700">Note:</label>
                                        <div
                                            class="block w-full h-[100px] px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                            Sample goods
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                                        <div class="flex flex-col gap-1">
                                            <label for="po_auth" class="block font-bold text-gray-700 truncate">Authorized
                                                Official</label>
                                            <input type="text" wire:model="po_auth" id="po_auth" value="{{ $purchaseOrder->po_auth }}"
                                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                            @error('po_auth')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <label for="po_authPos" class="block font-bold text-gray-700">Position</label>
                                            <input type="text" wire:model="po_authPos" id="po_authPos" value="{{ $purchaseOrder->po_authPos }}"
                                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                            @error('po_authPos')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                                        <div class="flex flex-col gap-1">
                                            <label for="po_cfa" class="block font-bold text-gray-700 truncate">CFA Certifiied
                                                by</label>
                                            <input type="text" wire:model="po_cfa" id="po_cfa" value="{{ $purchaseOrder->po_cfa }}"
                                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                            @error('po_cfa')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <label for="po_cfapos" class="block font-bold text-gray-700">Position</label>
                                            <input type="text" wire:model="po_cfapos" id="po_cfapos" value="{{ $purchaseOrder->po_cfapos }}"
                                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                            @error('po_cfapos')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="po_status">Status:</label>
                                        <select name="po_status" id="po_status"
                                                class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                                            <option value="" class="text-gray-500">{{ $purchaseOrder->po_status }}</option>
                                            <!-- Add other status options as necessary -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                    class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:bg-blue-500">
                                Update
                            </button>
                            <a href="{{ route('purchase-order-view') }}"
                                class="px-4 py-2 ml-2 text-white bg-gray-600 rounded-md hover:bg-gray-500 focus:bg-gray-500">
                                Cancel
                            </a>
                        </div>

                        <div class="flex flex-col gap-2">
                            <div class="flex flex-col gap-1">
                                <label for="po_number" class="block font-bold text-gray-700">Purchase Order No.</label>
                                <input type="text" wire:model="po_number" id="po_number" value="{{ $purchaseOrder->po_number }}"
                                    class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                @error('po_number')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="po_word" class="block font-bold text-gray-700">Sub-Total in Word</label>
                                <input type="text" wire:model="po_word" id="po_word" value="{{ $purchaseOrder->po_word }}"
                                    class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                @error('po_word')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="po_place" class="block font-bold text-gray-700">Place of Delivery</label>
                                <input type="text" wire:model="po_place" id="po_place" value="{{ $purchaseOrder->po_place }}"
                                    class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                @error('po_place')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="po_dateod" class="block font-bold text-gray-700">Date of Delivery</label>
                                <input type="date" wire:model="po_dateod" id="po_dateod" value="{{ $purchaseOrder->po_dateod }}"
                                    class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                @error('po_dateod')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="po_validity" class="block font-bold text-gray-700">Price Validity</label>
                                <input type="text" wire:model="po_validity" id="po_validity" value="{{ $purchaseOrder->po_validity }}"
                                    class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                @error('po_validity')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="po_term" class="block font-bold text-gray-700">Payment Term</label>
                                <input type="text" wire:model="po_term" id="po_term" value="{{ $purchaseOrder->po_term }}"
                                    class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                @error('po_term')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    @endif
</div>