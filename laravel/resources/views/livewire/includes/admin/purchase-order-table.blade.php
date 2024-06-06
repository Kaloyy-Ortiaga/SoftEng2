{{-- purchase-order-table.blade.php --}}
<div class="flex flex-col p-4 mt-2 -ml-4 bg-white ">
    <form wire:submit.prevent="submitPo">
        <div class="flex flex-col gap-4">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col">
                    <label for="supplier" class="py-2 text-xl font-medium text-black capitalize">Supplier</label>
                    <input type="text" wire:model="supplier" id="supplier"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('supplier')
                        <span class="mt-1 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="tel_no" class="py-2 text-xl font-medium text-black capitalize">Tel No.</label>
                    <input type="text" wire:model="tel_no" id="tel_no"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('tel_no')
                        <span class="mt-1 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="po_date" class="py-2 text-xl font-medium text-black capitalize">Date</label>
                    <input type="date" wire:model="po_date" id="po_date"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('po_date')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col">
                    <label for="address" class="py-2 text-xl font-medium text-black capitalize">Address</label>
                    <input type="text" wire:model="address" id="address"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('address')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="tin" class="py-2 text-xl font-medium text-black capitalize">TIN.</label>
                    <input type="text" wire:model="tin" id="tin"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('tin')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="mop" class="py-2 text-xl font-medium text-black capitalize">MOP</label>
                    <input type="text" wire:model="mop" id="mop"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('mop')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-column">
                @include('livewire.includes.admin.admin-po-table')
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
                                    <input type="text" wire:model="po_auth" id="po_auth"
                                        class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                    @error('po_auth')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label for="po_authPos" class="block font-bold text-gray-700">Position</label>
                                    <input type="text" wire:model="po_authPos" id="po_authPos"
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
                                    <input type="text" wire:model="po_cfa" id="po_cfa"
                                        class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                    @error('po_cfa')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label for="po_cfapos" class="block font-bold text-gray-700">Position</label>
                                    <input type="text" wire:model="po_cfapos" id="po_cfapos"
                                        class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                    @error('po_cfapos')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="po_status">Status:</label>
                                <select wire:model="po_status" id="po_status"
                                    class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                                    <option value="" selected class="text-gray-500">Select status</option>
                                    <option value="pending">Pending</option>
                                    <option value="delayed">Delayed</option>
                                    <option value="complete">Complete</option>
                                </select>
                            </div>
                            <div class="flex justify-start gap-2 mt-2">
                                <button type="submit"
                                    class="px-4 py-2 text-white bg-indigo-800 rounded-md hover:bg-indigo-900 focus:outline-none focus:bg-indigo-900">
                                    Create
                                </button>
                                <button type="button"
                                    onclick="window.location.href='{{ route('purchase-order-admin') }}'"
                                    class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex flex-col gap-1">
                        <label for="po_number" class="block font-bold text-gray-700">Purchase Order No.</label>
                        <input type="text" wire:model="po_number" id="po_number"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('po_number')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="po_word" class="block font-bold text-gray-700">Sub-Total in Word</label>
                        <input type="text" wire:model="po_word" id="po_word"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('po_word')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="po_place" class="block font-bold text-gray-700">Place of Delivery</label>
                        <input type="text" wire:model="po_place" id="po_place"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('po_place')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="po_dateod" class="block font-bold text-gray-700">Date of Delivery</label>
                        <input type="date" wire:model="po_dateod" id="po_dateod"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('po_dateod')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="po_validity" class="block font-bold text-gray-700">Price Validity</label>
                        <input type="text" wire:model="po_validity" id="po_validity"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('po_validity')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="po_term" class="block font-bold text-gray-700">Payment Term</label>
                        <input type="text" wire:model="po_term" id="po_term"
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
