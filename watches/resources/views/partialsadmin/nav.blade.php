<!-- navigation --> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle navbar-brand {{ (request()->is('admin')) ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  TechWatch Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/admin">Admin Dashboard</a>
                  <a class="dropdown-item" href="/">TechWatch Home Page</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('*watches_table*','*create_watch*','*edit_watch*')) ? 'active' : '' }}" href="/admin/watches_table">Watches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('*users_table*','*create_user*','*edit_user*')) ? 'active' : '' }}" href="/admin/users_table">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('*orders_table*','*create_order*','*edit_order*')) ? 'active' : '' }}" href="/admin/orders_table">Orders</a>
            </li>
   	        <li class="nav-item">
                <a class="nav-link {{ (request()->is('*transactions_table*','*create_transaction*','*edit_transaction*')) ? 'active' : '' }}" href="/admin/transactions_table">Transactions</a>
            </li>
            <li class="nav-item {{ (request()->is('*categories_table*','*create_category*','*edit_category*')) ? 'active' : '' }}">
                <a class="nav-link" href="/admin/categories_table">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('*taxes_table*','*create_tax*','*edit_tax*')) ? 'active' : '' }}" href="/admin/taxes_table">Taxes</a>
            </li>
            <!-- logout dropdown  -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Logout <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a style="color:black" class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li> <!-- end logout dropdown  -->
        </ul>
    </div>
</nav>
<!-- end of navigation -->

