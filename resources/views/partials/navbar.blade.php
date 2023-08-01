<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">CTMM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav text-capitalize">
                <a class="nav-link {{ Route::is('customer.index') ? 'active' : '' }} {{ Route::is('customer.create') ? 'active' : '' }} {{ Route::is('customer.edit') ? 'active' : '' }}" aria-current="page" href="{{ route('customer.index') }}">customer</a>
                <a class="nav-link {{ Route::is('email.campaign') ? 'active' : '' }}" href="{{ route('email.campaign') }}">email campaign</a>
            </div>
        </div>
    </div>
</nav>
