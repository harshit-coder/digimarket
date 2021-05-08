<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <title>Document</title>
</head>


<body>

    <header>
        <div class="container_fluid p-0 ">
            <nav class="navbar navbar-expand-lg half ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">Digimarket</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:white"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./index.php">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./bloglist.php">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./liveprojects.php">Live Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./aboutus.php">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./ask_query.php">Contact us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Digication</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                                    <?php
                                        session_start();
                                        if (isset($_SESSION['user_id']) && ($_SESSION['userlogin'] == true))
                                        {
                                            echo '<li><a class="dropdown-item" href="./allcourses.php">View courses</a></li>';
                                        }
                                        else
                                        {
                                            echo '  <li><a class="dropdown-item" href="./allcourses.php">View courses</a></li>
                                            <li><a class="dropdown-item" href="./register.php">Register</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>
                            <?php
                            
                                if (isset($_SESSION['user_id']) && ($_SESSION['userlogin'] == true))
                                    {
                                        echo ' <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown1" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">User</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown1"
                                        <li><a class="dropdown-item" href="./user1_detail.php">account </a></li>
                                          <li><a class="dropdown-item" href="./user_logoutquery.php">Log out</a></li></ul>
                                          </li>';
                                    }
                                else if(isset($_SESSION['admin_id']) && ($_SESSION['adminlogin'] == true))
                                    {

                                        echo '<li class="nav-item">
                                        <a class="nav-link" href="../admin/admin_homepage.php">Admin</a>
                                         </li>';

                                    }
                                else  
                                    {
                                    echo '<li class="nav-item">
                                        <a class="nav-link" href="./user_login.php">Log in</a>
                                    </li>';
                                    }
                            ?>


                        </ul>


                    </div>
                </div>
            </nav>



        </div>
    </header>