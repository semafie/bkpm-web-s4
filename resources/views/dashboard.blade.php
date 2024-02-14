<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Dasboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/modal.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <script src="js/modal.js"></script>
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
        <div class="title">
            <a>Dasboard</a>
            <a><button class="tambah"><i class='bx bx-plus-medical'></i> Tambah</button></a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_user as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                    <button class="edit" onclick="editUser({{ $user->id }})"><i class='bx bxs-pencil'></i> Edit</button>
                    <!-- Tombol Hapus -->
                    <button class="hapus" onclick="deleteUser({{ $user->id }})"><i class='bx bxs-trash'></i> Hapus</button>
                </td>
                </tr>
                @endforeach
                <!-- Tambahkan baris lain sesuai dengan data yang dimiliki -->
            </tbody>
            
        </table>
    </main>
</section>
<div class="modalabsolute">
    <div class="hide_modal" id="hidemodal"></div>
    <div class="modal" id="tambahuser">
        <div class="judul_modal">
            <h1 >Tambah User</h1>
        </div>
        <div class="isi_modal">
            <div class="isi_modal1">
            <label for="">Username </label>
            <input type="text" placeholder="Masukkan Username">
            </div>
            <div class="isi_modal1">
            <label for="">Password </label>
            <input type="text" placeholder="Masukkan Password">
            </div>
            <div class="isi_modal1">
                <label for="">Email </label>
            <input type="text" placeholder="Masukkan Email">
            </div>
        </div>
        <div class="button_modal">
            <button class="close">CLOSE</button>
            <button class="tambah">TAMBAH</button>
        </div>
    </div>
</div>
    
</body>
</html>