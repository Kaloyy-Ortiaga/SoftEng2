<div class="flex flex-col mt-2 -ml-4 bg-white">
    <form wire:submit.prevent="submit">
        <div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col sm:flex-row">
                    <label for="department" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Department
                    </label>
                    
                    <select name="department" wire:model="department" id="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[250px] p-2.5 ">
                        <option value="" disabled>Select an option</option>
                        <option value="0">CHASS</option>
                        <option value="1">CET</option>
                        <option value="2">CN</option>
                        <option value="3">CS</option>
                        <option value="4">CISTM</option>
                    </select>
                </div>

<<<<<<< HEAD
    <div>
        <form action="" class="flex flex-col justify-between space-y-4 sm:flex-row sm:space-y-0">

            <div class="flex flex-col space-y-2">
                <label for="department" class="text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Department</label>
                <input type="text" name="department" id="department"
                    class="w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
            </div>

            <div class="flex flex-col space-y-2">
                <label for="prNo" class="text-xl font-medium leading-none tracking-wide text-black capitalize">
                    P.R No.</label>
                <input type="text" name="prNo" id="prNo"
                    class="w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
            </div>

            <div class="flex flex-col space-y-2">
                <label for="date" class="text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Date</label>
                <input type="text" name="date" id="date"
                    class="w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
            </div>

        </form>
    </div>

    <div class="mt-4">
        <form action="" class="flex flex-col justify-between space-y-4 sm:flex-row sm:space-y-0">

            <div class="flex flex-col space-y-2">
                <label for="section" class="text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Section </label>
                <input type="text" name="section" id="section"
                    class="w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
            </div>

            <div class="flex flex-col space-y-2">
                <label for="saiNo" class="text-xl font-medium leading-none tracking-wide text-black capitalize">
                    SAI No.</label>
                <input type="text" name="saiNo" id="saiNo"
                    class="w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
            </div>

            <div class="flex flex-col space-y-2">
                <label for="date2" class="text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Date</label>
                <input type="text" name="date2" id="date2"
                    class="w-full pl-2 text-base text-black bg-white border border-black rounded-md shadow h-9 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300">
            </div>

        </form>
    </div>


    <div class="flex flex-column mt-9">
        <div class="bg-blue-800 basis-1/12">
            <button class=" w-[100px] h-9  justify-center font-medium text-white rounded-md shadow bg-black">
                ADD ROW
            </button>

        </div>
        <div class="bg-red-500 basis-11/12">
            @include('livewire.includes.pr-table')
=======
                <div class="flex flex-col sm:flex-row">
                    <label for="pr_no" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        P.R No.
                    </label>
                    <input type="text" wire:model="pr_no" id="pr_no" class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>

                <div class="flex flex-col sm:flex-row">
                    <label for="pr_date" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Date
                    </label>
                    <input type="date" wire:model="pr_date" id="pr_date" class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>
            </div>
>>>>>>> 229c262b6a728f5875c94981d9bc17b4acd69a65
        </div>

        <div class="mt-4">
            <div class="flex flex-row">
                <div class="flex flex-col sm:flex-row">
                    <label for="section" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Section
                    </label>
                    <input type="text" wire:model="section" id="section" class="block w-full sm:w-[250px] h-9 border-black ml-12 pl-2 mr-10 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>

                <div class="flex flex-col sm:flex-row">
                    <label for="sai_no" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        SAI No.
                    </label>
                    <input type="text" wire:model="sai_no" id="sai_no" class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip mr-10">
                </div>

                <div class="flex flex-col sm:flex-row">
                    <label for="sai_date" class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                        Date
                    </label>
                    <input type="date" wire:model="sai_date" id="sai_date" class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
                </div>
            </div>
        </div>

        <div class="flex flex-column mt-9">
            <div>
                @include('livewire.includes.pr-table')
            </div>
        </div>

        <div class="mt-4">
            <!-- Pagination placeholder -->
        </div>

        <div class="flex justify-between">
            <div class="w-4/10">
                <label for="purpose" class="block mb-2 font-bold text-gray-700">Purpose:</label>
                <input type="text" wire:model="purpose" id="purpose" class="block w-[300px] h-[100px] px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 text-white bg-indigo-800 rounded-md hover:bg-indigo-900 focus:outline-none focus:bg-indigo-900">
                        Create
                    </button>
                    <button type="button" wire:click="cancel" class="px-4 py-2 ml-2 text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">
                        Cancel
                    </button>
                </div>
            </div>
            <div>
                <div class="flex items-center">
                    <label for="requested_by" class="block mr-2 font-bold text-gray-700">Requested by:</label>
                    <input type="text" wire:model="requested_by" id="requested_by" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div class="flex items-center mt-4">
                    <label for="designation" class="block mr-2 font-bold text-gray-700">Designation:</label>
                    <input type="text" wire:model="designation" id="designation" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                </div>
            </div>
        </div>
    </form>
</div>