<?php
    include "koneksi.php"; global $conn;
    if(isset($_SESSION['login'])) {
        $id = $_SESSION['id'];

        $query_login = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = $id");
        $result_login = mysqli_fetch_assoc($query_login);
    
        $role_login = $result_login['role'];
    }

    
    $navbarVar;

    $query_settings = mysqli_query($conn, "SELECT * FROM settings ORDER BY dateSet DESC LIMIT 1");
    $result_settings = mysqli_fetch_assoc($query_settings);
?>
<style>
    .page_nav:hover {
        translate: 0px -2px;
        scale: 1.1;
        transition: all .3s ease-in-out;
    }

    .page_nav::after {
        content: "";
        display: block;
        position: absolute;
        background: #fff;
        bottom: -10px;
        left: 50%;
        border-radius: 10px;
        transform: translate(-50%,-50%);    
        width: 0px;
        height: 4px;
        transition: all .2s ease;
    }

    .page_nav:hover::after {
        content: "";
        display: block;
        position: absolute;
        background: #fff;
        bottom: -10px;
        left: 50%;
        border-radius: 10px;
        transform: translate(-50%,-50%);    
        width: 35px;
        height: 4px;
        transition: all .2s ease;
    }

    .page_nav:nth-child(<?= $navbarVar ?>)::after {
        content: "";
        display: block;
        position: absolute;
        background: #fff;
        bottom: -10px;
        left: 50%;
        border-radius: 10px;
        transform: translate(-50%,-50%);    
        width: 35px;
        height: 4px;
        transition: all .4s ease;
    }
</style>
</head>
<body>
<nav class="w-100 d-flex justify-content-between align-items-center position-fixed py-4 z-3 px-5">
    <a href="home.php" id="logoCompany" class="ms-3 text-decoration-none">
        <img src="./assets/image/<?= $result_settings['logo'] ?>" width="213px" draggable="false">
    </a>
    <div class="navbar d-flex justify-content-end align-items-center fs-6">
        <?php
            include "koneksi.php"; global $conn;
            $nav_link = "select * from daftar_halaman";

            $hasil_nav_link = mysqli_query($conn, $nav_link);
            while($daftar_nav_link = mysqli_fetch_assoc($hasil_nav_link)) {
                $daftar_nav = str_replace("_", " ", $daftar_nav_link['titlePage']);
        ?>
        <a href="<?= $daftar_nav_link['titlePage'] ?>.php" class="page_nav nav-link text-white mx-3 position-relative">
            <?= $daftar_nav ?>
        </a>
        <?php }; ?>
        <div class="login ms-3">
            <?php if(!isset($_SESSION['login'])) : ?>
                <a href="login.php" class="btn btn-warning py-1 px-3 m-0 rounded-5 shadow">
                    login
                </a>
                <a href="register.php" class="btn btn-outline-warning py-1 px-3 m-0 rounded-5 shadow">
                    register
                </a>
                <?php elseif($role_login == "Admin" || $role_login == "Author") : ?>
                    <a href="dashboard.php" class="btn btn-warning bg-gradient py-1 px-3 m-0 rounded-5 shadow">
                        dashboard
                    </a>
                <?php else : ?>
                <?php endif; ?>
        </div>
        <div class="logout ms-1 me-3">
            <?php if(isset($_SESSION['login'])) : ?>
                <a href="logout_process.php?id=<?= $result_login['id'] ?>" class="btn btn-outline-warning bg-gradient py-1 px-3 m-0 rounded-5 fw-bold shadow">
                    Logout
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav><!-- end navbar -->

<script>
    // scroll effect
    var prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        
        if (prevScrollpos > currentScrollPos) {
            document.querySelector("nav").style.top = "0";
        } else {
            document.querySelector("nav").style.top = "-120px";
        }
        
        if (document.body.scrollTop > 720 || document.documentElement.scrollTop > 720) {
            document.querySelector("nav").style.backgroundColor = "#1a1a1a";
            document.querySelector("nav").style.transition = "all 1s ease";
        } else {
            document.querySelector("nav").style.backgroundColor = "transparent";
            document.querySelector("nav").style.transition = "all 1s ease";
        }
    
        prevScrollpos = currentScrollPos;
        
    };
</script>
