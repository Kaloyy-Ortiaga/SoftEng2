<div class="flex flex-col mt-2 -ml-4 bg-white">

    <div>
        <form action="" class="flex flex-row justify-between ">

            <div class="flex flex-col sm:flex-row">
                <label for="department"
                    class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Department</label>
                <input type="text" name="department" id="department"
                    class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>


            <div class="flex flex-col sm:flex-row">
                <label for="department"
                    class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                    P.R No.</label>
                <input type="text" name="department" id="department"
                    class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>


            <div class="flex flex-col sm:flex-row">
                <label for="department"
                    class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Date</label>
                <input type="text" name="department" id="department"
                    class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>

        </form>

    </div>

    <div class="mt-4">
        <form action="" class="flex flex-row ">

            <div class="flex flex-col sm:flex-row">
                <label for="department"
                    class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Section </label>
                <input type="text" name="department" id="department"
                    class="block w-full sm:w-[250px] h-9 border-black ml-12 pl-2 mr-10 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>

            <div class="flex flex-col sm:flex-row ">
                <label for="department"
                    class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                    SAI No.</label>
                <input type="text" name="department" id="department"
                    class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip mr-10">
            </div>

            <div class="flex flex-col sm:flex-row">
                <label for="department"
                    class="py-2 pr-4 text-xl font-medium leading-none tracking-wide text-black capitalize">
                    Date</label>
                <input type="text" name="department" id="department"
                    class="block w-full sm:w-[250px] h-9 border-black ml-1 pl-2 justify-center ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
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
        </div>

    </div>
    <div class="w-2 h-2 p-2 bg-black"></div>
    <div class="w-2 h-2 p-2 bg-black"></div>


</div>
