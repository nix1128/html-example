
<!doctype html>
<html lang="en">
<head>
<script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .carousel-control-prev{
            color:black;

        }
    </style>

</head>
<body>


<div id="app">
    <div class="contaner">
        <template>

        <Slider/>
        </template>
       
    </div>

        <div class="contaner">
        <template>

        <Test/>
        </template>
       
    </div>
</div>

<!-- <div id="slider">
    
</div> -->





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

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
body {
  margin: 0px;
}
</style>

</html>
