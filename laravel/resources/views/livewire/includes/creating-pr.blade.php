<div class="flex flex-col p-4 mt-2 -ml-4 bg-white">
    <form wire:submit.prevent="submit">
        <div class="flex flex-col gap-4">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col">
                    <label for="department" class="py-2 text-xl font-medium text-black capitalize">Department</label>
                    <select wire:model="department" id="department"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                        <option value="" selected class="text-gray-500">Select Department</option>
                        <option value="CHASS">CHASS</option>
                        <option value="CET">CET</option>
                        <option value="CN">CN</option>
                        <option value="CS">CS</option>
                        <option value="CISTM">CISTM</option>
                    </select>
                    @error('department')
                        <span class="mt-1 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="pr_no" class="py-2 text-xl font-medium text-black capitalize">P.R No.</label>
                    <input type="text" wire:model="pr_no" id="pr_no"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('pr_no')
                        <span class="mt-1 text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="pr_date" class="py-2 text-xl font-medium text-black capitalize">Date</label>
                    <input type="date" wire:model="pr_date" id="pr_date"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('pr_date')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col">
                    <label for="section" class="py-2 text-xl font-medium text-black capitalize">Section</label>
                    <input type="text" wire:model="section" id="section"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('section')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="sai_no" class="py-2 text-xl font-medium text-black capitalize">SAI No.</label>
                    <input type="text" wire:model="sai_no" id="sai_no"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('sai_no')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="sai_date" class="py-2 text-xl font-medium text-black capitalize">Date</label>
                    <input type="date" wire:model="sai_date" id="sai_date"
                        class="block w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
                    @error('sai_date')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div  class="overflow-x-auto">
                <div class="flex flex-column">
                    @include('livewire.includes.pr-table')
                </div>
            </div>

            <div class="mt-4">
                <!-- Pagination placeholder -->
            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <label for="purpose" class="block mb-2 font-bold text-gray-700">Purpose:</label>
                    <input type="text" wire:model="purpose" id="purpose"
                        class="block w-full h-[100px] px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    @error('purpose')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="flex justify-start gap-2 mt-4">
                        <button type="submit"
                            class="px-4 py-2 text-white bg-indigo-800 rounded-md hover:bg-indigo-900 focus:outline-none focus:bg-indigo-900">
                            Create
                        </button>
                        <button type="button" onclick="window.location.href='{{ route('purchase-order') }}'"
                            class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">
                            Cancel
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col">
                        <label for="requested_by" class="block font-bold text-gray-700">Requested by:</label>
                        <input type="text" wire:model="requested_by" id="requested_by"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('requested_by')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="designation" class="block font-bold text-gray-700">Designation:</label>
                        <input type="text" wire:model="designation" id="designation"
                            class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        @error('designation')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
