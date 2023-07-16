<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ session('admin_name') }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li
                    class="nav-item has-treeview {{ request()->routeIs('admin.category.list') || request()->routeIs('admin.category.add') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('admin.category.list') || request()->routeIs('admin.category.add') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Category Manager
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.category.list') }}"
                                class="nav-link {{ request()->routeIs('admin.category.list') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.add') }}"
                                class="nav-link {{ request()->routeIs('admin.category.add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="nav-item has-treeview {{ request()->routeIs('admin.product.gallery') || request()->routeIs('admin.product.list') || request()->routeIs('admin.product.add') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('admin.product.gallery') || request()->routeIs('admin.product.list') || request()->routeIs('admin.product.add') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>Product Manager <i class="right fas fa-angle-left"></i> </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li
                            class="nav-item has-treeview {{ request()->routeIs('admin.product.gallery') || request()->routeIs('admin.product.list') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product List <i class="right fas fa-angle-left"></i> </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.product.list') }}"
                                        class="nav-link {{ request()->routeIs('admin.product.list') ? 'active' : '' }}">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Product Information</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.product.gallery') }}"
                                        class="nav-link {{ request()->routeIs('admin.product.gallery') ? 'active' : '' }}">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Product Image Gallery</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.add') }}"
                                class="nav-link {{ request()->routeIs('admin.product.add') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="nav-item has-treeview {{ request()->routeIs('admin.order.list') || request()->routeIs('admin.order.detail') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('admin.order.list') || request()->routeIs('admin.order.detail') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-cart-shopping"></i>
                        <p>Order Manager <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.order.list') }}"
                                class="nav-link {{ request()->routeIs('admin.order.list') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Order List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->routeIs('admin.customer.list') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.customer.list') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>Customer Manager <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.list') }}"
                                class="nav-link {{ request()->routeIs('admin.customer.list') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->routeIs('admin.feedback.list') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.feedback.list') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-comments"></i>
                        <p>Feedback Manager <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.feedback.list') }}"
                                class="nav-link {{ request()->routeIs('admin.feedback.list') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Feedback List</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>


    </div>

</aside>
