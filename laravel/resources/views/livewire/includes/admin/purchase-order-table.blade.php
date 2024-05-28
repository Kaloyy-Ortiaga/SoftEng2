<div class="flex flex-col p-4 mt-2 -ml-4 bg-white">
    <form wire:submit.prevent="updatePr">
        <div class="flex flex-col gap-4">
            {{-- <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col">
                    <label for="department" class="py-2 text-xl font-medium text-black capitalize">Department</label>
                    <input type="text" value="{{ $createPr->department }}" readonly
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                </div>
                <div class="flex flex-col">
                    <label for="pr_no" class="py-2 text-xl font-medium text-black capitalize">P.R No.</label>
                    <input type="text" value="{{ $createPr->pr_no }}" readonly
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                </div>
                <div class="flex flex-col">
                    <label for="pr_date" class="py-2 text-xl font-medium text-black capitalize">Date</label>
                    <input type="text" value="{{ $createPr->pr_date }}" readonly
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                </div>
            </div> --}}

            {{-- <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col">
                    <label for="section" class="py-2 text-xl font-medium text-black capitalize">Section</label>
                    <input type="text" value="{{ $createPr->section }}" readonly
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                </div>
                <div class="flex flex-col">
                    <label for="sai_no" class="py-2 text-xl font-medium text-black capitalize">SAI No.</label>
                    <input type="text" value="{{ $createPr->sai_no }}" readonly
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                </div>
                <div class="flex flex-col">
                    <label for="sai_date" class="py-2 text-xl font-medium text-black capitalize">Date</label>
                    <input type="text" value="{{ $createPr->sai_date }}" readonly
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                </div>
            </div> --}}

            <div class="flex flex-column">
                @include('livewire.includes.admin.admin-po-table')
            </div>

            <div class="mt-4">
                <!-- Pagination placeholder -->
            </div>

            {{-- <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <label for="purpose" class="block mb-2 font-bold text-gray-700">Purpose:</label>
                    <input type="text" value="{{ $createPr->purpose }}" readonly
                        class="block w-full h-[100px] px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">

                    <div>
                        <label for="status">Status:</label>
                        <select wire:model="status" id="status"
                            class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                            <option value="denied">Denied</option>
                            <option value="approved">Approved</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>

                    <div class="flex justify-start gap-2 mt-4">
                        <button type="submit"
                            class="px-4 py-2 text-white bg-indigo-800 rounded-md hover:bg-indigo-900 focus:outline-none focus:bg-indigo-900">
                            Update
                        </button>
                        <button type="button" onclick="window.location.href='{{ route('purchase-order-admin') }}'"
                            class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">
                            Cancel
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col">
                        <label for="requested_by" class="block font-bold text-gray-700">Requested by:</label>
                        <input type="text" value="{{ $createPr->requested_by }}" readonly
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div class="flex flex-col">
                        <label for="designation" class="block font-bold text-gray-700">Designation:</label>
                        <input type="text" value="{{ $createPr->designation }}" readonly
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div class="flex flex-col">
                        <label for="approvedBy" class="block font-bold text-gray-700">Approved by:</label>
                        <input type="text" wire:model="approvedBy" id="approvedBy"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('approvedBy')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="approvedDesignation" class="block font-bold text-gray-700">Designation:</label>
                        <input type="text" wire:model="approvedDesignation" id="approvedDesignation"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('approvedDesignation')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="note" class="block font-bold text-gray-700">Note:</label>
                        <input type="text" wire:model="note" id="note"
                            class="block w-full h-[100px] px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('note')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div> --}}
        </div>
    </form>
