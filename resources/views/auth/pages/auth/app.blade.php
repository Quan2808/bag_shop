<ul class="nav nav-pills nav-justified mb-3 mt-3">
    <li class="nav-item">
        <a class="nav-link{{ request()->routeIs('auth.login') ? ' active' : '' }}" href="{{ route('auth.login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link{{ request()->routeIs('auth.register') ? ' active' : '' }}" href="{{ route('auth.register') }}">Register</a>
    </li>
</ul>