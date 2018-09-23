<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" type="text/css" href="resources/scss/admin.scss">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="body-admin">
<section id="sideMenu">
    <nav>
        <a href="v_admin.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="v_admin_verif.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verification</a>
        <a class="active" href="v_admin_regis.php"><i class="fa fa-address-card" aria-hidden="true"></i> Registrasi</a>
    </nav>
</section>
<header>
    <div class="search-admin">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" name="" value="">
    </div>
    <div class="admin-field">
        <a href="#" class="notification">
            <i class="fa fa-bell-o" aria-hidden="true"></i>
            <span class="circle-bell">3</span></a>
        <a href="home.php">
            <div class="admin-img"></div>
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
    </div>
</header>
<section id="content-area">
    <div class="form-regis-admin">
        <form method="post">
            <input type="hidden" name="controller" value="register">
            <input type="hidden" name="action" value="createPetani">
            <p>Nama</p>
            <input type="text" name="nama" placeholder="Nama" required>
            <p>Email</p>
            <input type="text" name="email" placeholder="Email" required>
            <p>Alamat</p>
            <input type="text" name="alamat" placeholder="Alamat" required autofocus>
            <p>No Telp</p>
            <input type="text" name="notelp" placeholder="No telpon" required>
            <p>Username</p>
            <input type="text" name="username" placeholder="Username" required autofocus>
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Regis" name="regis">
        </form>
    </div>
</section>
</body>

</html>