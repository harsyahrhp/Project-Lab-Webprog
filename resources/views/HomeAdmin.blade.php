@extends('StructerAdmin')

@section('container')

<style>
    .imgreycon{
        padding: 1rem;
    }

    .imgreycon img{
        max-width: 100%;
        height: auto;
    }

    .centered {
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: yellow;
        font-size: 50px;
        font-weight: 500px;
    }

    .contain2{
        padding: 1rem;
    }

    .aboutus{
        text-align: center;
        color: green;
    }

    .text{
        text-align: center;
        border-style: dashed;
        border-color: purple;
        padding: 1rem;
    }
</style>

<div class="contain1">
    <div class="imgreycon">
        <img src="https://img1.goodfon.com/wallpaper/nbig/c/1a/recycle-cans-recycled-old.jpg" alt="">
        <div class="centered">RECYON SHOP</div>
    </div>
</div>

<div class="contain2">
    <div class="aboutus">
        <h1>ABOUT US</h1>
    </div>

    <div class="text">
        <h2>We are a shop for buying recycle things and second hand thing</h2>
    </div>
</div>




@endsection


