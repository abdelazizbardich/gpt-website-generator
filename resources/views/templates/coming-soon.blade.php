<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .header {
            width: 100%;
            height: 100vh;
            background-image: url(https://images.unsplash.com/photo-1666658442535-3c8317e077bf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-color: rgba(0, 0, 0, 0.7);
            background-blend-mode: multiply;
            background-position: center;
            background-size: cover;
            padding: 0 7%;
            transition: background-image 1s ease;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
        }

        .logo {
            cursor: pointer;
            color: #fff;
            font-size: 24px;
            font-weight: 500;
        }

        nav ul {
            display: flex;
            align-items: center;
            list-style: none;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: color 0.3s ease;
            /* Added smooth color transition on hover */
        }

        nav ul li a:hover {
            color: #ffcc00;
            /* Changed hover color */
        }

        nav .btn {
            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav .btn:hover {
            background-color: #fff;
            color: #000;
        }

        .info {
            width: 100%;
            padding: 0 7%;
            display: flex;
            align-items: center;
            color: #fff;
            position: fixed;
            bottom: 30px;
            left: 0;
            z-index: 1000;
        }

        .info div {
            margin: 0 20px;
        }

        .info div h2 {
            font-size: 36px;
            font-weight: 500;
        }

        .info .line {
            flex: 1;
            background: #ffcc00;
            height: 3px;
        }
    </style>
</head>

<body>
    <div class="header" id="header">
        <nav>
            <div class="logo">
                <h1>{{ @$title }}</h1>
            </div>
            <ul>
                @foreach ($categories as $category)
                <li><a href="#{{$category}}" id="PORSCHE">{{ @$category }}</a></li>
                @endforeach
            </ul>
            <a href="{{ @$callToAction }}" class="btn">{{ @$callToAction }}</a>

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
                <h2 id="model">{{ @$title }}</h2>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="{{ asset('templates/coming-soon/js/script.js') }}"></script>

</body>

</html>