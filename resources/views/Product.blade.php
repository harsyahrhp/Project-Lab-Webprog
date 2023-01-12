@extends('Structer')

@section('container')

<style>
    .titleproducts{
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .containercard{
        display: flex;
        justify-content: center;
        margin: 10px;
    }
    .card{
        margin: 15px;
    }

    a.btn.btn-primary {
    background: #dddd2e;
    color: black;
    }



</style>

    <div class="titleproducts">
        <h3>Our Products</h3>
    </div>

    <div class="containercard" style="width: 100%;">
        <div class="card" style="width: 20%;">
            <img src="https://images.samsung.com/is/image/samsung/p6pim/id/feature/others/id-feature-wall-charger-for-super-fast-charging-25w-370329-501314241?$FB_TYPE_A_MO_JPG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
        <div class="card" style="width: 20%;">
            <img src="https://images.samsung.com/is/image/samsung/p6pim/id/feature/others/id-feature-wall-charger-for-super-fast-charging-25w-370329-501314241?$FB_TYPE_A_MO_JPG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
        <div class="card" style="width: 20%;">
            <img src="https://images.samsung.com/is/image/samsung/p6pim/id/feature/others/id-feature-wall-charger-for-super-fast-charging-25w-370329-501314241?$FB_TYPE_A_MO_JPG$" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
    </div>



@endsection
