<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    } else {
        $id_login = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;

    $query_login = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = $id_login");
    $result_login = mysqli_fetch_assoc($query_login);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/image/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" 
    rel="stylesheet"
    />
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous"
    />
    <style>
        .column-center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        <?php include 'assets/style/style.css'; ?>
    </style>
    <title>Inbox - Dashboard | Njotravel</title>
</head>
<body class="bg-primary overflow-hidden bg-orange">
    <div class="row vh-100 bg-light">
    <div class="col-2 vh-100 bg-dark overflow-hidden shadow z-3 d-flex flex-column justify-content-between align-items-start p-0 ps-3">
            <div class="d-flex flex-column justify-content-start align-items-start w-100 position-relative overflow-y-auto sidebar">
                <div id="logoCompany" class="d-flex justify-content-center align-items-center">
                    <a href="dashboard.php" class="nav-link" style="transform:translateX(-7px) translateY(7px)">
                        <svg width="38" height="45" viewBox="0 0 38 45" fill="none" style="transform:scale(0.7) translateY(-10px)" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.9098 17.1901C37.5959 13.9227 36.4418 10.7923 34.5596 8.10374C32.6775 5.41515 30.1315 3.26 27.1696 1.84815C24.2078 0.436308 20.9309 -0.184113 17.6582 0.0473037C14.3855 0.27872 11.2285 1.35409 8.49457 3.16869C6.14582 4.74 4.17406 6.81225 2.72093 9.23658C1.26781 11.6609 0.369398 14.3771 0.0902333 17.1901C-0.183618 19.9847 0.167736 22.8052 1.1188 25.4471C2.06987 28.0889 3.5968 30.4858 5.58882 32.4639L17.4354 44.3385C17.6432 44.5481 17.8904 44.7145 18.1627 44.828C18.4351 44.9416 18.7273 45 19.0224 45C19.3174 45 19.6096 44.9416 19.882 44.828C20.1543 44.7145 20.4016 44.5481 20.6093 44.3385L32.4112 32.4639C34.4032 30.4858 35.9301 28.0889 36.8812 25.4471C37.8323 22.8052 38.1836 19.9847 37.9098 17.1901ZM29.2819 29.3107L19 39.5976L8.71809 29.3107C7.20283 27.7947 6.04212 25.9615 5.31941 23.9431C4.59669 21.9248 4.32992 19.7712 4.53828 17.6374C4.74798 15.4707 5.4363 13.3776 6.55346 11.5096C7.67063 9.64164 9.18873 8.04535 10.998 6.83618C13.3694 5.26013 16.153 4.41943 19 4.41943C21.847 4.41943 24.6306 5.26013 27.002 6.83618C28.8058 8.04068 30.3205 9.62992 31.4374 11.4897C32.5543 13.3495 33.2456 15.4338 33.4617 17.5927C33.6769 19.7337 33.4135 21.8959 32.6905 23.9225C31.9676 25.9492 30.8033 27.7897 29.2819 29.3107ZM19 9.07246C17.0106 9.07246 15.066 9.66265 13.4119 10.7684C11.7578 11.8742 10.4686 13.4458 9.70726 15.2847C8.94597 17.1235 8.74678 19.1469 9.13488 21.0989C9.52299 23.051 10.481 24.8441 11.8876 26.2515C13.2943 27.6588 15.0866 28.6173 17.0377 29.0056C18.9888 29.3939 21.0112 29.1946 22.8492 28.4329C24.6871 27.6713 26.258 26.3814 27.3632 24.7265C28.4685 23.0716 29.0584 21.126 29.0584 19.1357C29.0525 16.4686 27.9909 13.9124 26.1058 12.0264C24.2208 10.1405 21.6658 9.07836 19 9.07246ZM19 24.7264C17.8948 24.7264 16.8144 24.3985 15.8955 23.7842C14.9765 23.1699 14.2603 22.2967 13.8374 21.2752C13.4144 20.2536 13.3038 19.1295 13.5194 18.045C13.735 16.9605 14.2672 15.9644 15.0487 15.1825C15.8302 14.4006 16.8259 13.8681 17.9098 13.6524C18.9938 13.4367 20.1174 13.5474 21.1384 13.9706C22.1595 14.3937 23.0322 15.1103 23.6462 16.0297C24.2603 16.9491 24.588 18.03 24.588 19.1357C24.588 20.6184 23.9993 22.0405 22.9513 23.0889C21.9034 24.1374 20.482 24.7264 19 24.7264Z" fill="white"/>
                        </svg>
                        <span class="fs-3 fw-bold text-light">NJOPLESIR</span>
                    </a>
                </div>
                <hr class="lineGray text-center w-100 bg-white border-0 rounded-3">
                <div class="nav-side text-white w-100 pb-2">
                    <a href="dashboard.php" class="nav-link w-100 fs-5 py-2 ps-3 fw-normal text-light">
                        Dashboard
                    </a>
                    <div onclick="dropdownActive(this)" class="nav-link position-relative fs-5 py-2 ps-3 fw-normal text-light dropdown">
                        <span class="lh-1 py-2">Posts</span>
                        <a href="post_all.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">All Posts</li></a>
                        <a href="post_new.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">Add New</li></a>
                        <a href="post_categories.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">Categories</li></a>
                    </div>
                    <div onclick="dropdownActive(this)" class="nav-link position-relative fs-5 py-2 ps-3 fw-normal text-light dropdown">
                        <span class="lh-1 py-2">Pages</span>
                        <a href="page_all.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">All Pages</li></a>
                        <a href="page_new.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">Add New</li></a>
                    </div>
                    <div onclick="dropdownActive(this)" class="nav-link position-relative fs-5 py-2 ps-3 fw-normal text-light dropdown">
                        <span class="lh-1 py-2">Media</span>
                        <a href="media_library.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">Library</li></a>
                        <a href="media_new.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">Add New</li></a>
                    </div>
                    <div onclick="dropdownActive(this)" class="nav-link position-relative fs-5 py-2 ps-3 fw-normal text-light dropdown">
                        <span class="lh-1 py-2">Users</span>
                        <a href="user_all.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">All Users</li></a>
                        <a href="user_new.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">Add New</li></a>
                        <a href="user_profile.php" class="nav-link fw-light"><li class="lh-1 py-2 fs-6">Profile</li></a>
                    </div>
                    <a href="settings.php" class="nav-link position-relative fs-5 py-2 bg-orange ps-3 fw-bold text-dark dropdown">
                        <span class="lh-1 py-2">Settings</span>
                    </a>
                </div>
            </div>
            <a href="logout_process.php" class="nav-link bg-white bg-opacity-75 text-dark w-100 py-2 ps-4 fs-5 mb-4 rounded-5 rounded-end-0 fw-bold">
                Log&Ouml;ut
            </a>
        </div>
        <div class="col-10 vh-100 position-relative bg-light overflow-y-auto z-1 d-flex flex-column justify-content-start align-items-start p-0">
            <div class="weltext position-absolute top-0 d-flex justify-content-between align-items-start px-5 py-3 pb-5 w-100 bg-orange">
                <h4 class="text-dark ms-3">
                    Welcome, 
                    <span class="fw-bold"><?= ucwords($result_login['username']) ?>!</span>
                    <br>
                    <span class="fs-6 fw-semibold bg-white rounded-3 px-5">
                        Settings
                    </span>
                </h4>
                <div class="d-flex justify-content-end align-items-center">
                    <div onclick="dropdownProfile(this)" class="profile me-3 rounded-circle bg-dark position-relative" style="background-image:url('./assets/library_image/<?= $result_login['photoProfileName'] ?>')">
                        <div class="dropdown-profile rounded-3 bg-white shadow-lg position-absolute z-3 p-2 text-start">
                            <a href="home.php" class="nav-link py-1 ps-1 fs-6">Home</a>
                            <a href="" class="nav-link py-1 ps-1 fs-6"><?= $result_login['username'] ?></a>
                            <a href="user_profile.php" class="nav-link py-1 ps-1 pb-2 fs-6">My Profile</a>
                            <a href="logout_process.php" class="nav-link py-1 text-center fs-6 bg-secondary fw-semibold rounded-4 text-light">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute z-2 w-100 main">
                <div class="w-100 vh-auto row px-5 py-2 my-2">
                    <div class="bg-white col-12 p-2 mx-2 rounded-4 row justify-content-center shadow mb-4 text-center">
                        <a href="settings.php" class="col-1 column-center btn btn-white mx-1 hov-set">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/Settings-icon-symbol-vector.png" alt="" width="19" class="me-1">
                            <span>main</span>
                        </a>
                        <a href="edit_home.php" class="col-1 column-center btn btn-white mx-1 hov-set" style="opacity: .5; scale: 1.15;">
                            <img src="https://cdn4.iconfinder.com/data/icons/pictype-free-vector-icons/16/home-512.png" alt="" width="19" class="">
                            <span>home</span>
                        </a>
                        <a href="edit_about_us.php" class="col-1 column-center btn btn-white mx-1 hov-set">
                            <img src="https://png.pngtree.com/png-vector/20190418/ourmid/pngtree-vector-information-icon-png-image_956051.jpg" alt="" width="21" class="" style=" filter: contrast(120%);">
                            <span>about</span>
                        </a>
                        <a href="edit_blog.php" class="col-1 column-center btn btn-white mx-1 hov-set">
                            <img src="https://www.iconpacks.net/icons/1/free-blogger-icon-107-thumb.png" alt="" width="19" class="" style=" filter: contrast(120%);">
                            <span>blog</span>
                        </a>
                        <a href="edit_contact_us.php" class="col-1 column-center btn btn-white mx-1 hov-set">
                            <img src="https://icons-for-free.com/download-icon-contact+us+contacts+phone+support+telephone+icon-1320166528627385734_512.png" alt="" width="18" class="">
                            <span>contact</span>
                        </a>
                    </div>
                    <form method="POST" action="set_home_process.php" enctype="multipart/form-data" class="bg-white col-12 p-4 mx-2 rounded-4 row shadow mb-4">
                        <div class="w-100">
                            <h3 class="text-dark fw-bold lh-1">
                                Settings
                                <span class="text-white fw-light border-0 bg-danger bg-gradient px-3 fs-6 py-0 rounded-5" style="user-select: none;">
                                    home
                                </span>
                            </h3>
                            <!-- <p class="lh-1 fw-light">
                                Manage your website settings
                            </p> -->
                        </div>
                        <div class="col-6">
                            <?php
                                $queryHome = mysqli_query($conn, "SELECT * FROM set_home ORDER BY dateSet DESC LIMIT 1");

                                $resultHome = mysqli_fetch_assoc($queryHome);
                            ?>
                            <div class="w-100 px-2 my-2">
                                <label class="fw-light" for="titleFeatureHome"><small>Title</small></label>
                                <input type="text" name="titleFeatureHome" id="titleFeatureHome" class="form-control" value="<?= $resultHome['title'] ?>" autocomplete="off" required>
                            </div>
                            <div class="w-100 px-2 my-2">
                                <label class="fw-light" for="featureImage"><small>Feature Image</small></label>
                                <input type="file" name="featureImage" id="featureImage" class="form-control" accept="image/*" value="" required>
                            </div>
                            <div class="w-100 px-2 my-2">
                                <label class="fw-light" for="bannerImage"><small>Banner Image</small></label>
                                <input type="file" name="bannerImage" id="bannerImage" class="form-control" accept="image/*" value="" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="w-100 px-2 my-2">
                                <label class="fw-light" for="descMain"><small>Main Description</small></label>
                                <textarea name="descMain" id="descMain" cols="30" rows="5" class="form-control"><?= $resultHome['featureDesc'] ?></textarea>
                            </div>
                            <div class="w-100 px-2 my-2">
                                <label class="fw-light" for="bannerDesc"><small>Banner Description</small></label>
                                <textarea name="bannerDesc" id="bannerDesc" cols="30" rows="5" class="form-control"><?= $resultHome['bannerDesc'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-12 px-2 text-center my-2">
                            <input type="submit" name="submitSettings" id="submitSettings" class="btn btn-dark bg-gradient p-2 px-5 rounded-5" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script 
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
    crossorigin="anonymous"
    ></script>
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" 
    crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
</body>
</html>