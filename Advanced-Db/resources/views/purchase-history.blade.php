@extends('layouts.app')
@section('content')
    <h1>Purchase History</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Cost</th>
                <th>Total Cost</th>
                <th>Sell Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $purchase)
                <tr>
                    <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                    <td>{{ $purchase->name }}</td>
                    <td>{{ $purchase->quantity }}</td>
                    <td>{{ $purchase->cost }}</td>
                    <td>{{ $purchase->cost * $purchase->quantity }}</td>
                    <td>{{$purchase->sell_price}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button> <a href="/"> Home</a></button>

@endsection
