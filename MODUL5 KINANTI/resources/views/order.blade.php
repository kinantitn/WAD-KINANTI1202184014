<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Order</title>

    <style>
        body {
            background-color: #F5FCFF;
        }
    </style>
</head>

<body>
    <div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/">HOME</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/product">PRODUCT<a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/order">ORDER</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/history">HISTORY</a>
            </li>
        </ul>
    </div>

    @if($product -> isEmpty())
    <div class="text-center">
        <p style="margin-top: 20px;color: gray">There is no data...</p>
        <a type="button" class="btn btn-secondary btn-sm" href="/addproduct">Add Product</a>
    </div>

    @else
    <div class="text-center">
        <h3 style="margin-bottom: 30px; margin-top: 30px;">Order</h3>
    </div>

    @foreach($product as $p)
    <div class="container" style="margin-left: 80px;">
        <div class="card" style="width: 18rem; float: left">
            <img src="{{'/img_product/'.$p->img_path}}" class="card-img-top" alt="..." width="50px">
            <div class="card-body">
                <h6 class="card-title">{{$p->name}}</h6>
                <p class="card-text">{{$p->description}}</p>
                <h4 class="card-title">{{$p->price}}</h4>
                <a href="/orderdetail/{{$p->id}}" class="btn btn-success">Order Now</a>
            </div>
        </div>
    </div>
    @endforeach

    @endif

</body>

</html>