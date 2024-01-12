<nav class="d-flex justify-content-between align-items-center px-2 px-md-4" style="padding-bottom: 0.75rem; padding-top: 0.75rem;">
    <div class="d-md-none ps-2">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#leftNav" aria-controls="leftNav">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="title">
        Dashboard/Main Page
    </div>
    <div class="d-flex gap-3">
        <div>
            <button class="btn border border-2 circle">
                <img src="{{asset('img/notification.png')}}" alt="" class="img-fluid">
            </button>
        </div>
        <div>
            <button class="btn border profile circle"></button>
        </div>
        <div>
            @if(auth()->guard('admin')->check())
            <p>Welcome, {{ auth()->guard('admin')->user()->name }}</p>
            <a href="{{ route('adminLogout') }}">Logout</a>
            @endif
        </div>
    </div>
</nav>