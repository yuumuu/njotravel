<?php
    session_start();
    require "koneksi.php"; global $conn;

    if(isset($_POST['register'])) {
        $name = strtolower(trim($_POST['name']));
        $username = strtolower(trim($_POST['username']));
        $email = $_POST['email'];
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_acak = password_hash($password, PASSWORD_DEFAULT);

        $x = explode(" ", $name, 2);
        $firstName = $x[0];
        $lastName = $x[1];

        $photo_name = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];
        $photo_size = $_FILES['photo']['size'];

        $y = explode(".", $photo_name);
        $format_foto = strtolower(end($y));

        $nama_foto = uniqid();
        $nama_foto .= "." . $format_foto;

        $role = "Author";

        if(isset($_FILES['photo'])) {
            // cek username
            $query_username = mysqli_query($conn, "select username from daftar_user where username = '$username'");
            if(!mysqli_fetch_assoc($query_username)) {
                $query = "INSERT INTO daftar_user VALUES (NULL, '$firstName', '$lastName', '$username', '$email', '$password_acak', '$nama_foto', '$role', '$password');";
    
                move_uploaded_file($photo_tmp, "assets/library_image/" . $nama_foto);
                $query .= "INSERT INTO daftar_gambar VALUES (NULL, '$nama_foto', '$username', NOW());";
                
                $result_reg = mysqli_multi_query($conn, $query);

                if($result_reg) {
                    header("Location:login.php");
                }
            } else {
                echo "<script>
                    alert('Username sudah ada');
                    document.location.href='register.php';
                </script>";
                return false;
            }
        }
        $error = true;
    }
?>
<?php include "head.php"; ?>
<style>
    .text-shadow {
        text-shadow: 0px 0px 7px rgba(0, 0, 0, 0.3);
    }
    
    .pop-up-error {
        top: -1.6rem;
    }

    .item-pop-up-error {
        height:0px;
        width:0px;
        border-top:solid 15px #dc3545;
        border-left:solid 15px transparent;
        border-right:solid 15px transparent;
        margin-bottom: 3px;
        top: -0.1rem;
    }
</style>
<title>NJOTRAVEL - Login</title>
</head>
<body class="overflow-hidden w-100 vh-100 bg-light row-center" style="background: url('./assets/home/download.jpeg');
background-size: cover;">
<div class="w-100 vh-100 row-center" 
style="background: rgba(255,255,255,0.5); padding: 0 7rem 0 7rem;">
    <div class="w-100 row bg-dark rounded-5 overflow-hidden shadow-lg" 
    style="height: 85%; user-select: none; outline: 5px solid #fff; outline-offset: 9px;">
        <div class="col-7 bg-dark position-relative overflow-hidden" 
        style="height: 100%;
        background-image: url('./assets/home/bg-home-3.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;">
            <img src="./assets/home/homepage.png" draggable="false" width="600" class="position-absolute start-0 z-3">
            <div class="position-absolute p-4 px-3 z-3 rounded-4 shadow text-white text-shadow border" 
            style="right: 3rem; top: 18rem; width: 20rem;
            background-color: rgba(255,255,255,0.2); backdrop-filter: blur(3px);">
                <h1 class="fw-bold text-uppercase m-0 display-5">
                    njotravel
                </h1>
                <h6 class="text-capitalize m-0 w-100">
                    agent tour & travellings
                </h6>
                <hr class="w-100 bg-dark rounded-5 border-0 mt-3 mb-0" style="height: 1.5px; opacity: 1;">
            </div>
            <div class="position-absolute p-4 px-3 z-3 rounded-4 shadow text-white text-shadow border" 
            style="right: 3rem; bottom: 3rem; width: 20rem;
            background-color: rgba(255,255,255,0.2); backdrop-filter: blur(3px);">
                <p class="m-0 text-break">
                    NjoTravel menawarkan berbagai ekspedisi tur dan travel dengan pelayanan dan
    kualitas agen yang nyaman untuk nongki kamu bersama orang-orang terdekatmu.
                </p>
            </div>
        </div>
        <div class="col-5 border border-end-0 border-top-0 border-bottom-0 bg-dark column-start px-5 text-white pt-5">
            <a class="nav-link text-center fw-bold w-100 mb-3">
                <img src="./assets/home/logo.png" alt="" height="40">
            </a>
            <p class="text-center fw-light w-100 pt-1" style="margin-bottom: 1rem;">
                Selamat datang, <span class="fs-5 fw-semibold">User!</span> 
            </p>
            <form action="" method="POST" enctype="multipart/form-data" class="w-100 pt-0 column-center position-relative">
                <?php if(isset($error)) : ?>
                    <div class="pop-up-error position-absolute py-1 px-3 bg-danger fw-semibold fst-italic rounded-5 text-center text-white fs-7" style="top: -2rem!important;">
                        <span>Ada kesalahan dengan data anda!</span>
                    </div>
                    <div class="item-pop-up-error position-absolute" style="top: -0.6rem!important;"></div>
                <?php endif; ?>
                <div class="w-100 row-center row">
                    <label for="" class="m-0"><small>full name</small></label>
                    <input type="text" name="name" id="name" class="form-control col-6 px-2 mb-2 text-center rounded-5" placeholder="full name" autocomplete="off" required>
                    <label for="" class="m-0"><small>username</small></label>
                    <input type="text" name="username" id="username" class="form-control col-6 px-2 mb-2 text-center rounded-5" placeholder="username" autocomplete="off" required>
                    <label for="" class="m-0"><small>email</small></label>
                    <input type="email" name="email" id="email" class="form-control col-6 px-2 mb-2 text-center rounded-5" placeholder="email" autocomplete="off" required>
                    <label for="" class="m-0"><small>photo profile</small></label>
                    <input type="file" name="photo" id="photo" class="form-control col-6 px-2 mb-2 text-center rounded-5" autocomplete="off" accept="image/*" required>
                    <input type="hidden" name="role" id="role" class="form-control col-6 px-2 my-2 text-center rounded-5" autocomplete="off" required>
                    <label for="" class="m-0"><small>password</small></label>
                    <input type="password" name="password" id="password" class="form-control col-6 pb-2 my-2 text-center rounded-5" placeholder="password" autocomplete="off" required>
                </div>
                <div class="w-100 row-center justify-content-between">
                    <a href="home.php" class="btn btn-link text-light fs-7">
                        laman utama
                    </a>
                    <a href="login.php" class="btn btn-link text-warning fs-7">
                        Sudah punya Akun?
                    </a>
                </div>
                <input type="submit" value="Register" name="register" class="btn btn-warning bg-gradient py-2 border-0 fw-bold w-100 mt-2 rounded-5">
            </form>
        </div>
    </div>
</div>
</body>
</html>