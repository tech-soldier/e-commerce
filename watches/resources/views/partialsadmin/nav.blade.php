<!-- navigation --> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/admin">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin/watches_table">Watches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/users_table">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/orders_table">Orders</a>
            </li>
   	        <li class="nav-item">
                <a class="nav-link" href="/admin/transactions_table">Transactions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/categories_table">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/taxes_table">Taxes</a>
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

