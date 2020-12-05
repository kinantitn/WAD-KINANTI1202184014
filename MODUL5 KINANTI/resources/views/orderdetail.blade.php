<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Order Detail</title>

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
                <a class="nav-link text-dark" href="/product">PRODUCT</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/order">ORDER</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/history">HISTORY</a>
            </li>
        </ul>
    </div>


    <div class="text-center">
        <h3 style="margin-bottom: 40px; margin-top: 20px;">Order</h3>
    </div>

    <div class="container">
        <div class="card mb-5">
            <div class="row no-gutters">

                <div class="col-md-4">
                    <img src="{{'/img_product/'.$product->img_path}}" class="card-img-top" alt="...">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <p class="card-text">Stock : {{$product->stock}}</p>
                        <h3 class="card-title">{{$product->price}}</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 80px;">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Buyer Information</h3>

                <form style="margin: 20px" role="form" method="post" action="/addorder/{{$product->id}}">

                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact">

                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">

                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>

                </form>

            </div>
        </div>
    </div>
</body>

</html>