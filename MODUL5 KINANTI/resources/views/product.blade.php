<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Product</title>

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

    @if($product -> isEmpty())
    <div class="text-center">
        <p style="margin-top: 20px; color: gray">There is no data...</p>
        <a type="button" class="btn btn-secondary btn-sm" href="/addproduct">Add Product</a>
    </div>

    @else
    <div class="container" style="margin-bottom: 80px;">
        <div class="text-center" style="margin-bottom: 20px; margin-top: 40px;">
            <h3>List Product</h3>
        </div>

        <a href="/addproduct" type="button" class="btn btn-secondary">Add Product</a>
        <table class="table" style="margin-top: 20px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $x = 1 ?>
                @foreach($product as $p)
                <tr>
                    <th scope="row"><?php echo $x;
                                    $x++ ?></th>
                    <td>{{$p->name}}</td>
                    <td>{{$p->price}}</td>
                    <td><a type="button" href="/updateproduct/{{$p->id}}" class="btn btn-primary">Edit</a>
                        <a href="deleteproduct/{{$p->id}}" type="button" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

</body>

</html>