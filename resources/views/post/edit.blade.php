<head>
    @livewireStyles
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="text-secondary">Laravel Livewireページ</h1>
    <div>
        <livewire:post.show :post="$post" />
        @livewireScripts
    </div>
</body>
