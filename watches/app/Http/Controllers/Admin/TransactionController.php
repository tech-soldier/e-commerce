<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Transaction; 

class TransactionController extends Controller
{
    /**
     * search query for transactions 
     * @return array view of search terms specified 
     */
    public function search()
    {
        $search_term = $_GET['query']; 
        $transactions = Transaction::where('id', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_transactions', compact('transactions', 'search_term')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A Transaction'; 
        $transactions = Transaction::all(); 

        return view('/admin/create/create_transaction', compact('title', 'transactions')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'order_id' => 'required|integer',
            'transaction_code' => 'required|string|max:255',
            'transaction' => 'required|string|max:255'
        ]); 

        Transaction::create([
            'order_id' => $valid['order_id'],
            'transaction_code' => $valid['transaction_code'],
            'transaction' => $valid['transaction']
        ]); 

        return redirect('/admin/transactions_table')->with('success', 'Transaction was successfully created'); 
    }

}
