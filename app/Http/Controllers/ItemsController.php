<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;

class ItemsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ListItems(Request $request){
        $this->validate($request,[
           'item_name' => 'required',
           'description' => 'required',
           'category' => 'required',
           'condition' => 'required',
           'start_price' => 'required',
           'minimum_price' => 'required',
           'end_day' => 'required',
           'inst_price' => 'required',
            'returns' => 'required'
        ]);

        $item = new Item([
            'user_id' => Auth::user()->id,
            'item_name' => $request->input('item_name'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'condition' => $request->input('condition'),
            'start_price' =>$request->get('start_price'),
            'minimum_price' => $request->get('minimum_price'),
            'end_day' => $request->input('end_day'),
            'inst_price' => $request->get('inst_price'),
            'returns' => $request->input('returns'),

        ]);
        $item->save();
        return redirect()->back()->with("status","Item Has Been Added");
    }
    public function addItems(){
        return view('items_add');
    }
}
