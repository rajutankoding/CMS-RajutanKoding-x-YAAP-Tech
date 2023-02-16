<!doctype html>
<html lang="en">

<head>
    {{-- DaisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.47.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>

<body>
    <div class="app">
            @include('components.navbarRK')
        <div class="container-content">
          @yield('contents')
        </div>
        @include('components.footer')
    </div>
</body>

<style>
    .app{
        background-color: #f0fffd;
        color: #140f0e;
    }
    .navbar{background-color: #2ac491}
    .footer{
        background-color: #2ac491;
        color: #140f0e
    }
    .border{
        border-radius: 0;
    }
    img{
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    .container-content{
        /* margin-top:8px;
        margin-left: 10%;
        margin-right: 10%; */
        padding-bottom: 10% ;
        display: flex;
        align-content: center;
        justify-content: center;
    }
    .card-home{
        margin-top: 50px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .btn-outline{
        color:#a38769;
    }



    /* @media(max-width:1000px){
        .card-home{
            grid-template-columns: repeat(4,1fr);
        }
    } */
</style>

</html>
