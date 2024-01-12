<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.part.title', ["title" => isset($title) ? $title : "Sotaria Backend"])
    <!-- Google Font CDN -->
   @include('layouts.part.style')
</head>
<body class="">
    <div class="row g-0">
       @include('layouts.part.sidebar')
        <!-- Main Content -->
        <div class="col main d-flex flex-column">
            @include('layouts.part.nav')

            @yield('content')
        </div>
    </div>
    @include('layouts.part.script')
    @include("layouts.part.toast")
</body>
</html>