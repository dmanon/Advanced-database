<?php

namespace App\Models;
namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Sale;



class SellController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('name')->get();
        return view('sell', compact('items'));
    }
    
    public function store()
    {
        $data = request()->validate([
            'item_id' => 'required',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);
    
        $item = Item::findOrFail($data['item_id']);
        $total_price = $data['quantity'] * $data['price'];

        Sale::create([
            'item_id' => $item->id,
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'total_price' => $total_price,
        ]);
        
        $item->decrement('quantity', $data['quantity']);
        return redirect()->back()->with('success', 'Sale recorded successfully.');
    } 
}
