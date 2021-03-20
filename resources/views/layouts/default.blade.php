
<!doctype html>
<html lang="en">
<head>

    <style>

        .carousel-control-prev{
            color:black;

        }
    </style>






</head>


<body>


<div id="carouselExampleCaptions" class="carousel" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>


<div class="carousel-inner">
<div class="carousel-item active">
<img src="assets/images/girl-eichorn-outdoor.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>First slide label</h5>
<p class="text-success">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
</div>
</div>
<div class="carousel-item">
<img src="assets/images/girl-eichorn-outdoor.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>Third slide label</h5>
<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
</div>
</div>

<div class="carousel-item">

<img src="assets/images/eichhorn_wooden_train.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>Second slide label</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>

</div>


</div>






<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only text-light bg-dark">Next</span>
</a>

<hr>
<div class="container">
<div class="row">
<div class="col text-center">
<button class="btn btn-warning">КАТЕГОРИИ</button>
</div>
</div>
</div>



<hr>


<div class="row col">

<div class=" col-md-3 col-xs-4 ">
<a class="thumbnail" href="{{route('products.index',['product'=>1])}}">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>
<div class=" col-md-3 col-xs-4 ">
    <a class="thumbnail" href="{{route('products.index',['product'=>2])}}">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>
<div class=" col-md-3 col-xs-45 ">
    <a class="thumbnail" href="{{route('products.index',['product'=>3])}}">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>

<div class=" col-md-3 col-xs-4 ">
    <a class="thumbnail" href="{{route('products.index',['product'=>4])}}">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>

</div>



<hr>

<div class=" d-flex justify-content-center">

<div class=" ">
<a class="thumbnail" href="#">
<img class="img-responsive" src="http://placehold.it/650x300" alt="">
</a>
</div>
<div class=" col-md-6  ">
<a class="thumbnail" href="#">
<img class="img-responsive" src="http://placehold.it/650x300" alt="">
</a>
</div>

</div>

<hr>



<hr>
<div class="container">
<div class="row">
<div class="col text-center">
<button class=" btn btn-warning">ИЗБРАНИ ПРОДУКТИ</button>
</div>
</div>
</div>

<hr>
<div class="row col">

<div class=" col-md-3 col-xs-4 ">
<a class="thumbnail" href="#">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>
<div class=" col-md-3 col-xs-4 ">
<a class="thumbnail" href="#">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>
<div class=" col-md-3 col-xs-45 ">
<a class="thumbnail" href="#">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>

<div class=" col-md-3 col-xs-4 ">
<a class="thumbnail" href="#">
<img class="img-responsive" src="http://placehold.it/350x300" alt="">
</a>
</div>

</div>

<hr>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>