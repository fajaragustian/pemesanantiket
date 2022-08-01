{{-- Menu Dinamis  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Adding Library CSS  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--  Adding Title Dinamis --}}
    <title>@yield('title')</title>
</head>

<body>
    {{--  Adding Mavbar Dinamis --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <a class="navbar-brand text-white" href="#">Ticketing</a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            {{--  Adding Heading List Order --}}
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                {{-- <li class="nav-item active">
              <a class="nav-link" href="#">Pesanan <span class="sr-only">(current)</span></a>
            </li> --}}
                {{--  Adding Heading List Item --}}
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{ route('wisata.index') }}">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('daftarharga.index') }}">Daftar Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('reservasi.index') }}">Daftar Reservasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('reservasi.create') }}">Reservasi</a>
                </li>
            </ul>

        </div>
    </nav>
    {{--  END Navbar Dinamis --}}
    {{--  Adding Content Dinamis --}}
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    {{--  Adding Script Dinamis --}}
    @stack('script')
</body>

</html>

