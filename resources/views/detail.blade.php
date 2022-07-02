<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show database day 2</title>
    <link rel="stylesheet" href="../css/showdatabase.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .images {
        width: 500px;
        height: auto;
        margin: 20px auto;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="card-title">{{ $fo['name'] }}</h3>
        <h6 class="card-subtitle">globe type chair for rest</h6>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6">
                <!-- {{dd($fo->image)}} -->
                <div class="white-box text-center"><img class="images" src="/images/{{ $fo->image }}"
                        class=" img-responsive">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-6">
                <h4 class="box-title  ">Description: <br> </h4>
                <p>{{$fo['description']}}</p>
                <h2 class="mt-5">
                    Price<small class=" ml-5 text-success">{{$fo['price']}}</small>
                </h2>

                <button class="btn btn-primary btn-rounded">Buy Now</button>
                <h3 class="box-title mt-5">Key Highlights</h3>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                    <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                    <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles
                    </li>
                </ul>
            </div>
        </div>
</body>

</html>