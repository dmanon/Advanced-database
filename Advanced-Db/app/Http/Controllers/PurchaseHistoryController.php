<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\Item;


class PurchaseHistoryController extends Controller
{
    public function index()
    {  
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('purchase-history', compact('items'));
    }
}
