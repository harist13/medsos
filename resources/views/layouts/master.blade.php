<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <style>
        body {
            background-color: #101010;
            color: #ffffff;
        }
        .sidebar {
            background-color: #151515;
            height: 100vh;
            padding-top: 20px;
        }
        .sidebar a {
            color: #ffffff;
        }
        .post {
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .suggestions {
            background-color: #151515;
            padding: 20px;
            border-radius: 10px;
        }
        .suggestions .user {
            margin-bottom: 10px;
        }
        .user-profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .user-profile .username {
            font-size: 1.2em;
            font-weight: bold;
        }
        .user-profile .fullname {
            font-size: 1em;
            color: #bbbbbb;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar">
               
                <ul class="nav flex-column">
                    @guest
                   <div class="user-profile">
                        <img src="" alt="User Avatar">
                        <div>
                            <div class="username">silakan login dahulu</div>
                            <div class="fullname">ayo login</div>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('hom') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endguest

                    @auth
                   <div class="user-profile">
                        <img src="{{ Auth::user()->photo ? asset('storage/profile/' . Auth::user()->photo) : asset('path/to/default/profile-image.png') }}" alt="User Avatar">
                        <div>
                            <a href="{{ route('user.profile')}}"><div class="username">{{ Auth::user()->username }}</div></a>
                            <div class="fullname">{{ Auth::user()->nama }}</div>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posting.form') }}">Posting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('user.bookmarks')}}">Bookmarks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endauth
                </ul>
            </nav>
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
