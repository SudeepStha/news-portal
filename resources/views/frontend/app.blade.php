<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Portal</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<header>
    {{-- Top header start --}}
    <div>
        <div class="bg-primary">
            <span class="fw-bold fs-4 text-center">Portal-Name</span>
            <span class="fw-bold fs-5 float-end">Social Media Logo</span>
        </div>
    </div>
</header>
{{-- Top header ends --}}
<body>
   
    {{-- Title And Ads 1 start --}}
    <div class="mt-3 container" style="height: 180px; background-color: forestgreen">
        <div class="row">
            <div class="col-md-12 d-flex mt-3 justify-content-evenly">
                <div class="col-md-6 me-1" style="background-color: burlywood">
                    <h5 class="text-center">Title</h5>
                </div>
                <div class="col-md-6 ms-3" style="background-color: aquamarine">
                    <h5 class="text-center">Ads 1 Goes here</h5>
                </div>
            </div>
        </div>
    </div>
    {{-- Title And Ads 1 ends --}}
    
    {{-- Ads 2 start --}}
    <div>
        <h5 class=" container text-center mt-3"  style="height: 180px; background-color: darkgrey">Ads 2 Goes here</h5>
    </div>
    {{-- Ads 2 ends --}}

    {{-- Navbar menu starts --}}
    <div class="container-fluid mt-3 sticky-top">
        @include('frontend.components.navbar')
    </div>
    {{-- Navbar menu ends --}}

    {{-- Ads 3 starts --}}
    <div class="container text-center mt-3" style="height: 180px; background-color: dimgrey">
        <h5>Ads 3 here</h5>
    </div>

    <div class="container mt-3">
        @yield('pages')
    </div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
<footer class=" text-center bg-primary mt-3">
    <h4>Powered By CodeIT</h4>
</footer>
</html>