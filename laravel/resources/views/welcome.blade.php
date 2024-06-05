<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .container {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        @if (Route::is('purchase-order'))
            <livewire:purchase-order />
        @elseif(Route::is('admin.pr'))
            <livewire:admin-pr :id="$id" />
        @elseif(Route::is('admin-po'))
            <livewire:admin-po :id="$id" />
        @elseif(Route::is('purchase-order-admin'))
            <livewire:purchase-order-admin />
        @elseif (Route::is('purchase-order-view'))
            <livewire:purchase-order-view />
        @elseif(Route::is('create-pr'))
            <livewire:create-pr />
        @elseif(Route::is('print-request'))
            <livewire:print-request :id="$id" />
        @else
<<<<<<< Updated upstream
            <div class="row">
                <div class="col">
                    <livewire:purchase-order />
                </div>
                <div class="col">
                    <livewire:purchase-order-admin />
                </div>
=======
            <div class="col">
                <livewire:purchase-order />
            </div>
            <div class="col">
                <livewire:purchase-order-admin />
>>>>>>> Stashed changes
            </div>
        @endif
    </div>
    @livewireScripts
</body>

</html>
