<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="quantity" placeholder="Quantity"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"/>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" placeholder="Description"></textarea>
        </div>
        <input type="submit" value="Save Product"/>
    </form>
</body>
</html>