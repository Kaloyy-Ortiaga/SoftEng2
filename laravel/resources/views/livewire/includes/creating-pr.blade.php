<div class="flex flex-col mt-2 bg-white">
    
    <div>
        <form action="" class="flex flex-row justify-between ">
            
            <div class=" flex flex-row ">
            <label for="department" class="text-xl py-2 pr-4  font-medium capitalize leading-none text-black tracking-wide "> Department</label>
            <input type="text"  name="department" id="department" class="block w-[307px] h-9 border-black ml-1 pl-2 justify-center  ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>

            <div class=" flex flex-row">
            <label for="p.r.no" class="text-xl py-2 pr-4  font-medium capitalize leading-none text-black tracking-wide ">P.R. No.</label>
            <input type="text" name="p.r.no" id="p.r.no" class="block w-[307px] h-9 border-black ml-1 pl-2 justify-center  ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>

            <div class=" flex flex-row">
            <label for="p.r.date" class="text-xl py-2 pr-4  font-medium capitalize leading-none text-black tracking-wide ">P.R. Date</label>
            <input type="text" name="p.r.date" id="p.r.date" class="block w-[307px] h-9 border-black ml-1 pl-2 justify-center  ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>
        </form>
        
    </div>

    <div class="mt-4">
        <form action="" class="flex flex-row  ">
            
            <div class=" flex flex-row basis-1/3">
            <label for="section" class="text-xl py-2 pr-[60px]  font-medium capitalize leading-none text-black tracking-wide "> Section</label>
            <input type="text"  name="section" id="section" class="block w-[307px] h-9 border-black ml-1 pl-2 justify-center  ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>
            
            <div class=" flex flex-row justify-start basis-1/3 ml-[45px] ">
            <label for="saino" class="text-xl py-2 pr-4  font-medium capitalize leading-none text-black tracking-wide ">SAI No.</label>
            <input type="text" name="saino" id="saino" class="block w-[307px] h-9 border-black ml-1 pl-2 justify-center  ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>

            <div class=" flex flex-row basis-1/3  ml-[36px]">
            <label for="saidate" class="text-xl py-2 pr-4  font-medium capitalize leading-none text-black tracking-wide ">SAI Date</label>
            <input type="text" name="saidate" id="saidate" class="block w-[307px] h-9 border-black ml-1 pl-2 justify-center  ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-300 bg-white border rounded-md shadow gap-2 text-black text-base text-clip">
            </div>
        </form>
    </div>

    
    <div class="flex flex-column mt-9">
        <div class=" basis-1/12 bg-blue-800 ">
            <button 
                class=" w-[100px] h-9  justify-center font-medium text-white rounded-md shadow bg-black">
                    ADD ROW
            </button>

        </div>
        <div class="basis-11/12 bg-red-500">
            @include('livewire.includes.pr-table')
        </div>

    </div>
    <div class="bg-black w-2 h-2 p-2"></div>
    <div class="bg-black w-2 h-2 p-2"></div>


</div>