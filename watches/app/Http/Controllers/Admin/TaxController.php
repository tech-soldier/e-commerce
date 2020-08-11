<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Tax; 

class TaxController extends Controller
{ 
    /**
     * search query for taxes 
     * @return array view of search terms specified 
     */
    public function search()
    {
        $search_term = $_GET['query']; 
        $taxes = Tax::where('province', 'LIKE', '%'.$search_term.'%')->orWhere('PST', 'LIKE', '%'.$search_term.'%')->get(); 

        return view('/admin/search/search_taxes', compact('taxes', 'search_term')); 
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A New Tax'; 
        $taxes = Tax::all(); 

        return view('/admin/create/create_tax', compact('title', 'taxes')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {

        if((isset($request->GST) && isset($request->HST)) || (isset($request->PST) && isset($request->HST)) ) {
            return redirect('/admin/create/create_tax')->with('error', 'Only either GST and PST or HST.'); 
        }

        $valid = $request->validate([
            'province' => 'required|string|max:255',
            'GST' => "nullable|regex:/^\d+(\.\d{1,2})?$/", 
            'PST' => "nullable|regex:/^\d+(\.\d{1,2})?$/", 
            'HST' => "nullable|regex:/^\d+(\.\d{1,2})?$/"
        ]); 


        Tax::create([
            'province' => $valid['province'],  
            'GST' => $valid['GST'] ?? 0.00,
            'PST' => $valid['PST'] ?? 0.00, 
            'HST' => $valid['HST'] ?? 0.00

        ]); 

        return redirect('/admin/taxes_table')->with('success', 'PST was successfully created'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taxes=Tax::find($id);
        $title = 'Edit Tax'; 

        return view('/admin/edit/edit_tax', compact('taxes', 'title')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
            'PST' => 'nullable|regex:/^\d+(\.\d{1,2})?$/', 
            'HST' => 'nullable|regex:/^\d+(\.\d{1,2})?$/'
        ]); 

         $taxes = Tax::find($request['id']);
         $taxes->PST = $valid['PST']; 
         $taxes->HST = $valid['HST']; 
    
        if($taxes->save() ) {
            return redirect('/admin/taxes_table')->with('success', 'Tax was successfully updated');
        }
        return redirect('/admin/taxes_table')->with('error', 'There was a problem updating the tax');
    }

    /**
     * get the tax that was deleted
     * @return deleted category
     */
    public function restoreTax()
    {
        $taxes = Tax::onlyTrashed()->get();;
        $title = "Taxes Archives";
        return view('/admin/restore/restore_tax', compact('taxes', 'title'));
    }

    /**
     * Restore the deleted tax recor
     * @param  int $id 
     * @return \Illuminate\Http\Response  
     */
    public function restoreBack($id)
    {
        Tax::withTrashed()
        ->where('id', $id)
        ->restore();

        if(isset(request()->id)){
            return redirect('/admin/restore/restore_tax')->with('success', 'Your Province was successfully restored. Go back and check the Taxes Table'); 
        }
        return redirect('/admin/restore/restore_tax')->with('error', 'There was a problem storing the tax.');  
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required|integer'
        ]);
        
        if( Tax::find($valid['id'] )->delete() ) {
            return back()->with('success', 'The tax has been deleted!');
        }
        return back()->with('error', 'There was a problem deleting that tax');
    }

}
