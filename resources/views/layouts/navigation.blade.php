@php
$LINKS = [
    [
        'name' => 'Beranda',
        'url' => '/',
    ],
    [
        'name' => 'Daftar Tamu',
        'url' => '/guest',
    ],
];

@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">BUKU TAMU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($LINKS as $link)
                    <li class="nav-item">
                        <a class="nav-link {{ $title === $link['name'] ? 'active' : '' }}" aria-current="page"
                            href="{{ $link['url'] }}">{{ $link['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
