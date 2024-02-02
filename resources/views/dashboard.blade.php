<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Dasboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <script src="js/dashboard.js"></script>
    <section id="sidebar">
        <div class="brand">
    <a style="transition: all .3s ease;" href="#" ><img  src="" alt="Your logo" width="50px"></a>
    {{-- <a class="navbar-brand" href="#" ><img style="padding-left: 15px;" src="/image/tulisanlogo.png" alt="Rescom Jember" width="140px"></a> --}}
    </div>
    <ul class="side-menu">
        <li><a class="active" href=""><i class='bx bxs-home icon'></i>Dasboard</a></li>
    <li class="divider" data-text="main">Main</li>
    <li><a href=""><i class='bx bxs-book-content icon' ></i>Content<i class='bx bx-chevron-right icon-right'></i></a>
    <ul class="side-dropdown">
        <li><a href="#">Paket</a></li>
        <li><a href="#">Program</a></li>
    </ul>
</li>    
<li><a href=""><i class='bx bxs-lemon icon' ></i>Halo</a></li>
<li><a href=""><i class='bx bxs-widget icon' ></i>Widget</a></li>
<li class="divider" data-text="gass">Gasss</li>
<li><a href=""><i class='bx bxs-book-content icon' ></i>Content<i class='bx bx-chevron-right icon-right'></i></a>
    <ul class="side-dropdown">
        <li><a href="#">Paket</a></li>
        <li><a href="#">Program</a></li>
    </ul>
</li>    
<li><a href=""><i class='bx bxs-lemon icon' ></i>Halo</a></li>
<li><a href=""><i class='bx bxs-widget icon' ></i>Widget</a></li>
<li><a href=""><i class='bx bxs-book-content icon' ></i>Content<i class='bx bx-chevron-right icon-right'></i></a>
    <ul class="side-dropdown">
        <li><a href="#">Paket</a></li>
        <li><a href="#">Program</a></li>
    </ul>
</li>    
<li><a href=""><i class='bx bxs-lemon icon' ></i>Halo</a></li>
<li><a href=""><i class='bx bxs-widget icon' ></i>Widget</a></li>
</ul>    
</section>
<section id="content">
    <nav>
        <div class="atas">
            <a href="">Logo Dashboard</a>
            <a href="">Username</a>
        </div>    
    </nav>
    <main>
        <a><i class='bx bxs-home icon'></i></a>
        <ul>
            @foreach ($data_user as $user)
                <li>{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ul>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_user as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
                <!-- Tambahkan baris lain sesuai dengan data yang dimiliki -->
            </tbody>
        </table>
    </main>
</section>
    
    
</body>
</html>