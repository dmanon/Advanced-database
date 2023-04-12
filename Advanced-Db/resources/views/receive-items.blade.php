<!DOCTYPE html>
<html>
    <head>
        <title>Receive Items</title>
    </head>
    <body>
        <h1>Receive Items</h1>
        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        <form method="post" action="/receive-items">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input value="{{old('name')}}" type="text" id="name" name="name" required>
            </div>
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
            <div>
                <label for="quantity">Quantity:</label>
                <input value="{{old('quantity')}}" type="number" id="quantity" name="quantity" required min="1">
            </div>
            <div>
                <label for="cost">Cost:</label>
                <input type="number" id="cost" name="cost" required min="0" step="0.01">
            </div>
            <div>
                <label for="sell_price">Sell Price:</label>
                <input type="number" id="sell_price" name="sell_price" required min="0" step="0.01">
            </div>

            <button type="submit">Receive Item</button>
            <button> <a href="/"> Home</a></button>
        </form>
    </body>
</html>
