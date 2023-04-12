@extends('layouts.app')

@section('content')
    <h1>Sell Items</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/sell">
        @csrf

        <div class="form-group">
            <label for="item_id">Item:</label>
            <select class="form-control" id="item_id" name="item_id">
                @foreach ($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }} - {{ $item->quantity }} available</option>
                @endforeach
            </select>
            @error('item_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" min="1">
            @error('quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Price per item: {{ $item->price }}</label
