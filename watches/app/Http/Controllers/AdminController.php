<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tax;
use App\Transaction;

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
        $taxes = Tax::all();
        $title = "Taxes";
        return view('/admin/taxes_table', compact('taxes', 'title'));
    }

    public function transactions()
    {
        $transactions = Transaction::all();
        $title = "Transactions";
        return view('/admin/transactions_table', compact('transactions', 'title'));
    }

    public function categories()
    {
        return view('/admin/categories_table');
    }
}
