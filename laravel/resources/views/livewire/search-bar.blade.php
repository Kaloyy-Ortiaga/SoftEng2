<div id="search-bar" class="flex flex-col items-start pt-4 mr-6 sm:flex-row sm:items-center">
    <form class="flex w-full sm:w-auto" role="search">
        <input wire:model.live.debounce.300ms="search"
            class="w-full px-3 py-2 text-sm leading-5 text-black bg-white border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 sm:w-64"
            type="search" placeholder="Search" aria-label="Search...">
    </form>
</div>
