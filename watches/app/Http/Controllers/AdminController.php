<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function watches()
    {
        return view('/admin/watches_table');
    }
}
