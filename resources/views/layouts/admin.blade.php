<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet"></link>
    <title>@yield('title', 'Admin - Blog')</title>
</head>
<body>
    <div class="row">
    <!-- sidebar -->
    <div class="p-3 row fixed text-white bg-dark top">
        <h2 class="fs-4 text-center">Admin Panel</h2>
        </a>
        <hr/>
        <ul class="nav flex-row justify-content-between">
            <li><a href="{{ route('admin.index') }}" class="nav-link text-white">Posts</a></li>
            <li><a href="{{ route('admin.addpost') }}" class="nav-link text-white">Add Post</a></li>
            <li>
            <a href="{{ route('welcome') }}" class="btn  text-white">Readers' view</a>
            </li>
        </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
        <div class="g-0 m-5">
            @yield('content')
        </div>
      </div>
    </div>
    <div class="copyright py-4 text-center text-white bg-dark">
        <div class="container">
            <small>
            Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
            href="https://twitter.com/dre1_dre">
            Wasukira Ian
            </a>
            </small>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</body>
</html>