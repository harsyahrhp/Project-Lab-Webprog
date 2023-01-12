    <style>
        .navbar{
            padding-left: 2rem;
            background-color: blue;

        }

        .navbar a{
            text-decoration: none;
            color: white;
        }

        .wrapper{
            display: flex;
        }

        .right{
            display: flex;
            gap: 2rem;
        }

        .left{
            padding-left: 18cm;
        }

    </style>


{{-- @auth
<div class="navbar">
    <div class="wrapper">
            <a href="/HomeUser">Home</a>
            <a href="">Show Product</a>
            <a href="">My Cart</a>
            <a href="">Transaction History</a>


            <a href="/Login" type="button" class="btn btn-outline-light btn-sm">Logout</a>

    </div>
</div>
    @else
    <div class="navbar">
        <div class="wrapper">
            <div class="right">
                <a href="/">Home</a>
                <a href="">Show Product</a>
            </div>

            <div class="left">
                <a href="/Register" type="button" class="btn btn-outline-light btn-sm">Register</a>
                <a href="/Login" type="button" class="btn btn-outline-light btn-sm">Login</a>
            </div>
        </div>
    </div>
@endauth --}}


    <div class="navbar">
        <div class="wrapper">
            <div class="right">
                <a href="/">Home</a>
                <a href="/Product">Show Product</a>
            </div>

            <div class="left">
                <a href="/Register" type="button" class="btn btn-outline-light btn-sm">Register</a>
                <a href="/Login" type="button" class="btn btn-outline-light btn-sm">Login</a>
            </div>
        </div>
    </div>
