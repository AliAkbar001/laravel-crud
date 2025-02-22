<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Products</h1>
        <button>
            <a href="{{route('product.create')}}">Create New Product</a>
        </button>
        <div>
            @if(session()->has('success'))
                <div>{{session('success')}}</div>
            @endif
        </div>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                                    @csrf 
                                    @method('delete')
                                    <input type="submit" value="Delete"/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>