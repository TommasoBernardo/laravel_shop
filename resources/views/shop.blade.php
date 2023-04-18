<!DOCTYPE html>
<html>

<head>
    <title>Laravel Shopping Cart Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">

            </div>
            <div class="col-12">
                <div class="navbar-collapse">
                    <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                            class="badge text-bg-success">{{ count((array) session('cart')) }}</span>
                    </a>
                </div>
            </div>
        </div>
    </header>


    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>

    @yield('scripts')
</body>

</html>
