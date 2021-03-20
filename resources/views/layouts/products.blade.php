<!-- Stored in resources/views/layouts/master.blade.php -->

<!-- Stored in resources/views/layouts/master.blade.php -->

<body>



<div class="emptySpace">

    @if ($product_id == 1)
        <div>
      <p>Продукт 1</p>
        </div>
    @elseif ($product_id == 2)
        <div>
            <p>Продукт 2</p>
        </div>
    @elseif ($product_id == 3)
        <div>
            <p>Продукт 3</p>
        </div>
    @elseif ($product_id == 4)
        <div>
            <p>Продукт 4</p>
        </div>

    @endif



</div>


</body>