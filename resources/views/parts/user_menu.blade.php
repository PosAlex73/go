@auth
<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->full_name }}</span>
        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <a class="dropdown-item" href="{{ route('user_profile') }}"><i class="bx bx-user font-size-16 align-middle me-1"></i>
            {{ __('Profile') }}</a>
        <a class="dropdown-item" href="{{ route('progress') }}"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
            {{ __('My progress') }}</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger" href="pages-login.html"><i
                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
    </div>
</div>
@else
    @include('buttons.link', ['text' => __('Sign in'), 'route' => 'register'])
    @include('buttons.link', ['text' => __('Sign up'), 'route' => 'login'])
@endauth
