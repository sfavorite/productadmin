<!DOCTYPE html>
<html>
<head>
    <title>Products Admin</title>

</head>
<body>
    <ul>
        @foreach($products as $product)
            <li style="background:blue; color: white;"> {!! $product->name !!} - {!! $product->price !!}<li>
        @endforeach
    </ul>
</body>
</html>        
