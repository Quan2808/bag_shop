<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light p-3 mb-5">
    <div class="container">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#Bar" aria-controls="Bar"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="Bar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'link-warning' : '' }}"
                        href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('introduce') ? 'link-warning' : '' }}"
                        href="{{ url('/introduce') }}">Introduce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('product') ? 'link-warning' : '' }}"
                        href="{{ route('product.index') }}">Product</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact-us') ? 'link-warning' : '' }}"
                        href="{{ url('/contact-us') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('product.search') }}" method="GET">
                        <div class="form-outline">
                            <input type="text" id="searchTerm" name="searchTerm" class="form-control" />
                            <label class="form-label" for="searchTerm">Search <i class="fas fa-search"></i></label>
                        </div>
                    </form>
                </li>

            </ul>
        </div>
        <div class="d-flex align-items-center">
            <a class="text-reset me-3" href="{{ route('cart.index') }}">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <div class="dropdown">
                <a class="text-reset dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                    id="User" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">

                    @if (session('customer_id'))
                        <li>
                            <span class="dropdown-item-text">Account</span>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('auth.profile') }}">
                                Your profile
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('checkout.viewOrders') }}">
                                Your order
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('auth.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li>
                            <span class="dropdown-item-text">Account</span>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('auth.login') }}">Log in</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('auth.register') }}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
