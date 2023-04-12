<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use Illuminate\Database\Eloquent\Model;

class ReceiveItemsController extends Controller
{
    public function index()
    {   
        return view('receive-items');
    }

    public function store(Request $request)
    {
            $validatedData = $request->validate([
                'name' => 'required',
                'quantity' => 'required|integer|min:1',
                'cost' => 'required|numeric|min:0',
                'sell_price' => 'required|numeric|min:0',
            ]);

            // DB::table('items')->insert([
            //     'name' => $validatedData['name'],
            //     'quantity' => $validatedData['quantity'],
            //     'cost' => $validatedData['cost'],
            //     'sell_price' => $validatedData['sell_price'],
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);
            Item::create($validatedData);

            return redirect('/receive-items')->with('success', 'Item received successfully.');
    }
}
