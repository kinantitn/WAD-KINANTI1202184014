<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>History</title>

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

    @if($order -> isEmpty())
    <div class="text-center">
        <p style="margin-top: 20px; color: gray">There is no data...</p>
        <a type="button" class="btn btn-secondary btn-sm" href="/addproduct">Add Product</a>
    </div>

    @else
    <div class="container" style="margin-bottom: 80px;">
        <div class="text-center" style="margin-bottom: 55px; margin-top: 30px;">
            <h3>History</h3>
        </div>

        <table class="table" style="margin-top: 5px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Buyer Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>

            <tbody>
                <?php $x = 1 ?>
                @foreach($order as $p)
                <tr>
                    <th scope="row"><?php echo $x;
                                    $x++ ?></th>
                    <td>{{$p->product->name}}</td>
                    <td>{{$p->buyer_name}}</td>
                    <td>{{$p->buyer_contact}}</td>
                    <td>${{$p->amount}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

</body>

</html>