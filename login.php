<?php
    session_start();
    require "koneksi.php"; global $conn;
    
    if(isset($_POST['login'])) {
        $inputUser = $_POST['usermail'];
        $usermail = strtolower($inputUser);
        $password = $_POST['password'];
        
        $query = "select * from daftar_user where username = '$usermail'";
        
        $hasilLogin =  mysqli_query($conn, $query);
        // cek username
        if(mysqli_num_rows($hasilLogin) === 1) {
            $query .= " and password = '$password'";
            
            // cek password
            $pass = mysqli_fetch_assoc($hasilLogin);
            if (password_verify($password, $pass['password'])) {
                // set session
                $_SESSION['login'] = true;
                
                $_SESSION['id'] = $pass['id'];
                
                header("location:dashboard.php");
                exit;
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
        <div class="col-8 bg-dark position-relative overflow-hidden" 
        style="height: 100%;
        background-image: url('./assets/home/bg-home-3.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;">
            <img src="./assets/home/homepage.png" draggable="false" width="600" class="position-absolute start-0 z-3">
            <div class="position-absolute p-4 px-3 z-3 rounded-4 shadow text-white text-shadow border" 
            style="right: 6rem; top: 11rem; width: 20rem;
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
            style="right: 6rem; top: 21rem; width: 20rem;
            background-color: rgba(255,255,255,0.2); backdrop-filter: blur(3px);">
                <p class="m-0 text-break">
                    NjoTravel menawarkan berbagai ekspedisi tur dan travel dengan pelayanan dan
    kualitas agen yang nyaman untuk nongki kamu bersama orang-orang terdekatmu.
                </p>
            </div>
        </div>
        <div class="col-4 border border-end-0 border-top-0 border-bottom-0 bg-dark column-start px-5 text-white pt-5">
            <a href="home.php" class="nav-link text-center fw-bold w-100 mb-3">
                <img src="./assets/home/logo.png" alt="" height="40">
            </a>
            <p class="text-center fw-light w-100 pt-1" style="margin-bottom: 3rem;">
                Selamat datang kembali, <span class="fs-5 fw-semibold">User!</span> 
            </p>
            <form action="" method="POST" class="w-100 pt-2 column-center position-relative">
                <?php if(isset($error)) : ?>
                    <div class="pop-up-error position-absolute py-1 px-3 bg-danger fw-semibold fst-italic rounded-5 text-center text-white fs-7">
                        <span>Username / Password anda Salah!</span>
                    </div>
                    <div class="item-pop-up-error position-absolute"></div>
                <?php endif; ?>
                <input type="text" name="usermail" id="usermail" class="form-control my-2 text-center rounded-5" placeholder="username">
                <input type="password" name="password" id="password" class="form-control my-2 text-center rounded-5" placeholder="password">
                <div class="w-100 row-center justify-content-between">
                    <a href="home.php" class="btn btn-link text-light fs-7">
                        laman utama
                    </a>
                    <a href="register.php" class="btn btn-link text-warning fs-7">
                        Belum punya Akun?
                    </a>
                </div>
                <input type="submit" value="Login" name="login" class="btn btn-warning bg-gradient py-2 border-0 fw-bold w-100 mt-2 rounded-5">
            </form>
        </div>
    </div>
</div>
</body>
</html>