<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body>

    <livewire:purchase-order/>
    <livewire:create-pr>
    <livewire:purchase-order-admin/>
    <livewire:printrequest/>
   
    @livewireScripts
</body>

</html>
