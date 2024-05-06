<div class="flex flex-col mt-2 -ml-4 bg-white">
    <form wire:submit.prevent="updatePr">
        <div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col sm:flex-row">
                    <label for="department" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Department
                    </label>
                    <input type="text" value="{{ $createPr->department}}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>

                <div class="flex flex-col sm:flex-row">
                    <label for="pr_no" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        P.R No.
                    </label>
                    <input type="text" value="{{ $createPr->pr_no }}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>

                <div class="flex flex-col sm:flex-row">
                    <label for="pr_date" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Date
                    </label>
                    <input type="text" value="{{ $createPr->pr_date }}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="flex flex-row">
                <div class="flex flex-col sm:flex-row">
                    <label for="section" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Section
                    </label>
                    <div class="flex flex-col">
                        <input type="text" value="{{ $createPr->section }}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>

                <div class="flex flex-col sm:flex-row">
                    <label for="sai_no" class=" pr-4 text-lg font-medium leading-none tracking-wide text-black capitalize">
                        SAI No.
                    </label>
                    <input type="text" value="{{ $createPr->sai_no }}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>

                <div class="flex flex-col sm:flex-row">
                    <label for="sai_date" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Date
                    </label>
                    <input type="text" value="{{ $createPr->sai_date }}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>
            </div>
        </div>

        <div class="flex flex-column mt-9">
            <div>
                @include('livewire.includes.admin.admin-pr-table')

            </div>
        </div>

        <div class="mt-4">
            <!-- Pagination placeholder -->
        </div>

        <div class="flex justify-between">
            <div class="w-4/10">
                <label for="purpose" class="block mb-2 font-bold text-gray-700">
                    Purpose:
                </label>
                    <input type="text" value="{{ $createPr->designation }}" readonly class="block w-[300px] h-[100px] px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                
                    <div>
                        <label for="status">Status:</label>
                        <select wire:model="status" id="status" class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                            <option value="denied">Denied</option>
                            <option value="approved">Approved</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>    
                    <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 text-white bg-indigo-800 rounded-md hover:bg-indigo-900 focus:outline-none focus:bg-indigo-900">
                        Update
                    </button>
                    <button type="button" onclick="window.location.href='{{ route('purchase-order-admin') }}'" class="px-4 py-2 ml-2 text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">
                        Cancel
                    </button>
                </div>
            </div>
            <div>
                <div class="flex items-center">
                    <label for="requested_by" class="block mr-2 font-bold text-gray-700">
                        Requested by:
                    </label>
                    <input type="text" value="{{ $createPr->requested_by }}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>
                <div class="flex items-center mt-4">
                    <label for="designation" class="block mr-2 font-bold text-gray-700">
                        Designation:
                    </label>
                    <input type="text" value="{{ $createPr->designation }}" readonly class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>
                <div class="flex items-center">
                    <label for="approvedBy" class="block mr-2 font-bold text-gray-700">
                        Approved by:
                    </label>
                    <div class="flex flex-col">
                    <input type="text" wire:model="approvedBy" id="approvedBy" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    @error('approvedBy') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex items-center mt-4">
                    <label for="approvedDesignation" class="block mr-2 font-bold text-gray-700">
                        Designation:
                    </label>
                    <div class="flex flex-col">
                    <input type="text" wire:model="approvedDesignation" id="approvedDesignation" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    @error('approvedDesignation') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <label for="note" class="block mb-2 font-bold text-gray-700">
                    Note:
                </label>
                <div class="flex flex-col">
                    <input type="text" wire:model="note" id="note" class="block w-[300px] h-[100px] px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    @error('note') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </form>
</div>