<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function watches()
    {
        return view('/admin/watches_table');
    }

    public function orders()
    {
        return view('/admin/orders_table');
    }

    public function customers()
    {
        return view('/admin/customers_table');
    }

    public function admin()
    {
        return view('/admin/admin_table');
    }

    public function taxes()
    {
        return view('/admin/taxes_table');
    }

    public function transactions()
    {
        return view('/admin/transactions_table');
    }

    public function categories()
    {
        return view('/admin/categories_table');
    }
}
