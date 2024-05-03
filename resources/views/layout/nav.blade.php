@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class=""></i>MasterDataBarangUTS</a>
        <button type="button" class="navbar-toggler" data-bstoggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                        class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}"
                        class="nav-link @if ($currentRouteName == 'barangs.index') active @endif">List Barang</a></li>
            </ul>
            <hr class="d-md-none text-white-50">
            <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> Biodata Mahasiswa</a>
        </div>
    </div>
</nav>
