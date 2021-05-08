<?php include ("connection.php");?>
<?php include ("register_query.php");?>
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
                        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:white;"></i></span>
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
                                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown"
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

        <div class="container text-center ">
            <div class="row ">
                <div class="col-md-7 col-sm-12 ">
                    <h6>Alina Tomy</h6>
                    <h1>Digimarket</h1>

                    <p>THE ONE STOP DESTINATION FOR ALL YOUR CONTENT AND CREATIVE
                        REQUIREMENTS</p>
                    <a href="#services" class="btn btn-dark px-5 py-2 ">Our Services</a>
                </div>
                <div class="col-md-5 h-25 ">
                    <img src="https://image.freepik.com/free-vector/marketing-specialists-computer-with-megaphone-social-media-icons-social-media-marketing-social-networking-internet-marketing-concept-pinkish-coral-bluevector-isolated-illustration_335657-2290.jpg"
                        class="img-fluid " style="height: 500px; " alt=" ">
                </div>
            </div>

        </div>
    </header>
    <main>
        <section class="section-1 ">
            <div class="container text-center ">
                <div class="row ">
                    <div class="col-md-6 ">
                        <div class="pray ">
                            <img class="img-fluid "
                                src="https://image.freepik.com/free-vector/company-employees-planning-task-brainstorming_74855-6316.jpg "
                                alt=" " style="height: 400px; ">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2 ">
                        <div class=" panel text-left ">
                            <h1>Vision</h1>

                            <p class="mb-4 ">
                            <p>Empowering organizations and brands to implement their vision and accelerate growth by
                                offering hassle-free management of content and creative requirements.</p>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services mt-5 ">
            <div class="container ">

                <div class="section-title text-center ">
                    <h2>Services</h2>

                </div>

                <div class="row mt-2 ">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch ser " data-aos="zoom-in "
                        data-aos-delay="100 ">
                        <div class="icon-box iconbox-blue ">
                            <div class="icon ">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABsElEQVRIS82W7TEEQRCG34sAESACREAGZIAMiAARIAJEwEWgRIAIkAERUI/q3mpzY3dmx9XpP/tjZ+bpfvtjZqIF2WRBXNWCdyRtm7NPkh4kvY9xvhS8KelKEt9oQA8l3dXCS8DA7iUt9xwO/LoGXgJG0g079MwARLon6ULSksm9XiP7EJhoHwP0NImKnKMGdmyOFAUewUi5n0gKmMgwossV0pHtQZk01zeSXnOeRDAHnBe5W75oGhz/sSuCkfGk/MyilbQb6Zixfwt+k0QKRg0J20fuqyOmfdJKLtJ4aNGQ1BFM1Xs/D52b+/8hqYu+BkxbrI4hhj3dhKsBfzZC2d4pOAbMUPC57FMr59NlGCi+rhl8YCQm1e4vSmxZTtckvdiaJjCttWIHxVke+XFixYnYBAYQLwTgtBwTigJEBW9BOoFLhqibc+yRuZR9NZemojlihyEjRZQaEd5mXix/BgZIzonMrz+u0fSJ5I5lwfFSn1koaW59DIw2oTB8QsWROVdwX6EgKe+rFsuOzKEDUYMn7lh7tpb7vmKHHnspJL7Bahzw/u7u9VpwDax37cLAX/OpdR8h/rcOAAAAAElFTkSuQmCC " />
                            </div>
                            <h4>WEBSITE DESIGNING</h4>
                            <small>Convey your brand story with aesthetically designed websites that are functional,
                                responsive
                                and user friendly at the same time. Our website designing services provide you a
                                customized
                                experience. Get your compelling website designed today that will boost your brand
                                visibility and
                                generate you leads!</small>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 ser " data-aos="zoom-in "
                        data-aos-delay="200 ">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon ">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAA9UlEQVRIS+2WURHCMAyGvznAATjAAjgABYADHDAUIAFwgAOwgANwgAO4f9dy225jHXR0D81br93/NWmWJCGQJYG49Ao8AoaeI3EHbnnNsscHYOEZauWkvbKLPHgJ7DuCWtk5cNIiD06BjTkx9XyBs9HbAuLUgn0n3TOC6944hvrXJI/JFf/jd8nMyppHs3qNJdMjsyDVL/Aa2HXlqtFVP1ZfLmT1ALgA447gV2ACPMpgrQWfARp/Ppn27aRyLI81FR9q7NEAkEGrwK7O6ua2uWtoUKRa2bdd6K9gW+ibPHNyxumQIQUDu1Yzp3NtPG4Kcav9YOAXSPc/H7bZpLkAAAAASUVORK5CYII=" />
                            </div>
                            <h4>CONTENT WRITING</h4>
                            <smalll>In the internet era, content is king! And is definitely the way to the heart of your
                                audience. We
                                are here to help you create compelling content that informs, inspires and persuades your
                                customers to take action.</small>
                        </div>
                    </div>

                    <div class=" col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 ser " data-aos="zoom-in "
                        data-aos-delay="300 ">
                        <div class="icon-box iconbox-pink ">
                            <div class="icon ">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABB0lEQVRIS+2X4Q0BQRCFPx3oAB3oABUogQ7ogA60oAQdoAMqQAd0IC+5TcYkt4ncnONif93mcvNl3rzZnevQ0Oo0xOWrwH2gF6zEDbjamD5jQS/B0BRuYOEePAb2NYEnwCHF/nnwA1gDJ6PWENiYfXjGZ0AlursS+bKFg18CGnjtYOsTybsA1B1dQPu0QjM+FjKn4DtgWtIVtYLVLqPWgeXiZZGVnOxbSLXVmgOzyBr7upYddOrrVRNgb7TK5tItsy0y0a2TnpO86WaT1Gqrj7RTO11tzeSN9s/YqlPZ1e2S+t1h7x1zZYc9ySi4bfzc7Jc7q+13OnSy420OEvruq/4kQjMrC/YEj85dHzBTXL4AAAAASUVORK5CYII=" />
                            </div>
                            <h4>DIGITAL MARKETING</h4>
                            <small>Establish your brand identity, improve your sales funnel and sell more products
                                online with our
                                assured digital marketing services. We use strategically proven and trending methods to
                                attract
                                organic traffic.</small>
                        </div>
                    </div>



                </div>

            </div>
        </section>

        <section class="section-2 container-fluid p-0 mt-5 ">
            <div class="cover "
                style=" background: url( 'https://image.freepik.com/free-vector/modern-business-background-with-digital-technology-design_1361-3299.jpg'); ">
                <div class="content text-center container ">
                    <h1> PLEASE WRITE A HEADING HERE</h1>
                    <p>PLEASE GIVE SOME 4-5 LINE CONTENT HERE?</p>
                </div>

            </div>
            <div class="container mt-4 ">
                <h2 style="font-family: 'Times New Roman', Times, serif; ">Recent Posts:</h2>

            </div>
            <div class="container text-center blog mt-1 ">
                <div class="row row-cols-1 row-cols-md-2 g-4 ">
                    <?php

                    $sql3 = "SELECT * FROM blog ";
                    $result3 =  mysqli_query($conn, $sql3);
                    $i = 1;
                    while($row3 = mysqli_fetch_assoc($result3))
                    {
                        if($i <=3)
                        {
                            $blog_id = $row3['blog_id'];
                            $blog_name = $row3['blog_name'];
                            $blog_date = $row3['blog_date'];
                            $blog_url = $row3['blog_url'];
                            $blog_desc = $row3['blog_desc'];
                            $blog_image_url = $row3['blog_image_url'];
                        
                            echo '<div class="col-md-4 ">
                                    <section class="mx-auto my-5 " style="max-width: 23rem; ">

                                        <div class="card ">
                                            <div class="card-body d-flex flex-row ">

                                                <div>
                                                    <h5 class="card-title font-weight-bold mb-2 ">' .$blog_name  . '</h5>
                                                    <p class="card-text "><i class="far fa-clock pe-2 "></i>' .$blog_date  . '</p>
                                                </div>
                                            </div>
                                            <div class="bg-image hover-overlay ripple rounded-0 " data-mdb-ripple-color="light ">
                                                <img class="img-fluid " src="' . $blog_image_url . ' " alt="Card image cap " />
                                                <a href="./blog1.php?blogid=' . $blog_id. '">
                                                    <div class="mask " style="background-color: rgba(251, 251, 251, 0.15); "></div>
                                                </a>
                                            </div>
                                            <div class="card-body ">

                                            <div class="d-flex justify-content-between ">
                                                <a class="btn btn-link link-danger p-md-1 my-1 "  href="./blog1.php?blogid=' . $blog_id. '">Read more</a>

                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>';
                        }
                        $i++;
                    }
                    ?>



                </div>
            </div>
        </section>

    </main>
    <?php include("footer.php");?>