<!-- This is a required file, it is the fallback page for when others don't work -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Custom Wordpress Theme</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional Meta Tags -->
    <meta name="author" content="Cinderblock Labs">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Custom CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style-test.css" media="screen">

    <!-- PINYON SCRIPT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Pinyon+Script&display=swap" rel="stylesheet">   
    
    <!-- RALEWAY LIGHT 300
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet"> -->

    <!-- RIGHTEOUS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

</head>
<body>

    
    <!-- NAVBAR -->
    <!-- container with no padding (p-0) -->
    <div id="navigation" class="container-fluid p-0 desktop shadow-md">
        <nav class="navbar navbar-expand-lg section-color">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Custom WP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <!-- div mr-auto ('margin-right auto') -->
                    <div class="mr-auto"></div>

                    <!-- NAV ITEMS + LINKS -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                About

                            </a>
                        </li>

                        <!-- DROPDOWN MENU SECTION -->

                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <a href="#" class="nav-link">
                                    Services
                                </a>
                                <div class="dropdown-content">
                                    <a href="#">Page 1</a>
                                    <a href="#">Page 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- HEADER -->
    <header>        
        <div id="header-container" class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h1>Main Content</h2>
                    <h2>Get Ready for Content Bonanza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eveniet debitis commodi ab illum numquam libero est ea, neque, odio eos? Unde asperiores nisi nostrum impedit magni ipsam amet quos.</p>
                    <!-- button with padding of 5px in x and 2px in y directions ('px-5 py-2') -->
                    <button id="header-button" class="btn px-5 py-2 orange-bkg">Click Here For More</button>
                </div>
                <!-- with 25% height added ('h-25') -->
                <div class="col-md-5 col-sm-12 h-25">
                    <!-- MAIN BACKGROUND IMAGE -->
                    <img src="bird.png" alt="Image from freesvg.com">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1 container-fluid">
            <container class="text-center">
                <div class="row">
                    <div class="col-md-6">
                        <img class="section-1-img" src="landscape1.jpg" alt="section 1 image 1">
                        <div class="panel text-right">
                            <h1>Content</h1>
                            <!-- paragraph with top padding of 4px ('pt-4') -->
                            <p class="pt4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis?</p>
                            <p class="pt4"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="section-1-img" src="landscape2.jpg" alt="section 1 image 2">
                        <div class="panel text-left">
                            <h1>Content</h1>
                            <!-- paragraph with top padding of 4px ('pt-4') -->
                            <p class="pt4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis?</p>
                            <p class="pt4"></p>
                        </div>
                    </div>
                </div>
            </container>
        </section>
        <section class="section-2 container-fluid p0">
            <div class="container-fluid text-center">
                <!-- desktop shadow over this section -->
                <div class="desktop shadow-lg">
                    <!-- addign a flex container with wrapping and centered (d-flex flex-md-row flex-wrap justify-content-center) -->
                    <div class="cards d-flex flex-md-row flex-wrap justify-content-center section-color">
                        <div class="card">
                            <img src="" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services text-center">
                <h1>We Serve You to Your Heart's Desire</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </section>
        <section class="section-3 container-fluid p-0 text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Download Our App</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
                </div>
            </div>
            <!-- Platform row -->
            <div class="platform row">
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row flex-wrap justify-content-center">
                            <!-- Desktop icon that is 3x larger than normal (fa-3x) -->
                            <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
                            <div class="text text-left">
                                <!-- padding 1, margin 0 -->
                                <h3 class="pt-1 m-0">Desktop</h3>
                                <p class="p-0 m-0">For your computer needs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <!-- Subtle shadow effect over this section of the page -->
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row flex-wrap justify-content-center">
                            <!-- Desktop icon that is 3x larger than normal (fa-3x) -->
                            <i class="fas fa-mobile fa-3x py-2 pr-3"></i>
                            <div class="text text-left">
                                <!-- padding 1, margin 0 -->
                                <h3 class="pt-1 m-0">Mobile</h3>
                                <p class="p-0 m-0">For your mobile needs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-4">
            <div class="container text-center">
                <h1 class="text-dark">What our Customers Say</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="team-row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top">
                                <img src="face1.jpg" class="img-fluid" alt="card-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top">
                                <img src="face2.jpg" class="img-fluid" alt="card-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top">
                                <img src="face3.jpg" class="img-fluid" alt="card-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Unit here -->
    </main>
    
    <footer>
        <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5">
                    <h2 class="text-light">
                        <h2>We're Here to Help</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aspernatur quasi distinctio consectetur consequuntur voluptate possimus eveniet veritatis commodi a perspiciatis harum cum animi quia reiciendis sapiente ad, soluta natus.
                        </p>
                        <p class="pt-4 text-muted">
                            <h6>&copy;2022 | This page was made by <span>Cinderblock Labs</span></h6>    
                        </p> 
                    </h1>
                </div>
                <div class="col-md-5">
                    <h2 class="text-light">Newsletter</h2>
                    <p class="">Stay Updated!</p>
                    <form action="" class="form-inline">
                        <div class="col">
                            <div class="input-group pr-5">
                                <input type="text" placeholder="Email" class="form-control bg-dark text-white">
                                <div class="input-group-prepend">
                                    <input-group-text><i class="fas fa-arrow-right"></i></input-group-text>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <h2 class="text-light">Follow Us!</h2>
                    <p class=""></p>
                    <div class="column">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>