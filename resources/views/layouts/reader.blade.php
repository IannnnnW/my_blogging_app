<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
        <title>@yield('title')</title>
    </head>
        <body>
        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="#">Ian's Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href=#">Home</a>                    
                </div>
            </div>
          </div>
        </nav>
        <!-- header -->
        <div class="container my-4">
            @yield('content')
        </div>
        
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://twitter.com/dre1_dre">Wasukira Ian</a> <b>- DRE</b>
                </small>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        </body>
</html>