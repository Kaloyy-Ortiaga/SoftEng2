<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    {{-- <livewire:supplier-list/> --}}
    {{-- <livewire:item-list/> --}}
    <livewire:purchase-order/>
   <x-supplier-modal>
   
   </x-supplier-modal>

   <x-modal></x-modal>
</body>

</html>
