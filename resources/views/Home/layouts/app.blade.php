<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $artikel->title ?? 'News - Home' }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('home/favicon.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('home/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>


        @include('home.layouts.components.navbar')


        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to News Home!</h1>
                    <p class="lead mb-0">Portal Berita Sederhana</p>
                </div>
            </div>
        </header>
        
        <div class="container">
            <div class="row">
                @yield('main')
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <form action="/">
                            <div class="input-group">
                                    <input class="form-control" type="text" name="search" placeholder="Search artikel..." value="{{ old('search') }}"/>
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    @include('home.layouts.components.categories')
                    <!-- Side widget-->
                    @include('home.layouts.components.widget')
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-primary">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('home/js/scripts.js') }}"></script>
    </body>
</html>
