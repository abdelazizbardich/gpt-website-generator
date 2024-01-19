<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('templates/coming-soon/css/style.css') }}">
</head>

<body>
    <div class="header" id="header">
        <nav>
            <div class="logo">
                <h1>{{ $title }}</h1>
            </div>
            <ul>
                @foreach ($categories as $category)
                <li><a href="#{{$category}}" id="PORSCHE">{{ $category }}</a></li>
                @endforeach
            </ul>
            <a href="{{ $callToAction }}" class="btn">{{ $callToAction }}</a>

        </nav>
        <div class="info">
            <div>
                <h2 id="mph">1.7 s</h2>
                <p>60 mph</p>
            </div>
            <div>
                <h2 id="speed">180 mph</h2>
                <p>Top Speed</p>
            </div>
            <div>
                <h2 id="range">496 mi</h2>
                <p>Max Range</p>
            </div>
            <div class="line">
            </div>
            <div>
                <h2 id="model">{{ $title }}</h2>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="{{ asset('templates/coming-soon/js/script.js') }}"></script>

</body>

</html>