<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>

        body{
            margin: 0;
        }

        .navbar{
            padding: 1rem;
            background-color: blue;
        }

        .navbar a{
            text-decoration: none;
            color: white;
        }

        .wrapper{
            display: flex;
            gap: 1rem;
        }

        ul{
            text-decoration: none;
        }

        li{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="navbar">
        <div class="wrapper">
                <a href="/HomeUser">Home</a>
                <a href="">Show Product</a>
                <a href="">My Cart</a>
                <a href="">Transaction History</a>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>


                <a href="/Login" type="button" class="btn btn-outline-light btn-sm">Logout</a>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
