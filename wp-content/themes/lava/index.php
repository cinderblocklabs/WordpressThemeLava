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

<!-- NEED TO VERTICALLY ALIGN DIV ITEMS -->

<body>
    <!-- NAVBAR -->
    <!-- container with no padding (p-0) -->
    <div id="navigation" class="container-fluid p-0 desktop shadow-md">
        <nav class="navbar navbar-expand-lg section-color">
            <div class="container-fluid">
                <a class="navbar-brand limelight-font" style="color:orange;" href="#"><h1><i>Lava</i></h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <!-- div mr-auto ('margin-right auto') -->
                    <div class="mr-auto"></div>

                    <!-- NAV ITEMS + LINKS -->

                    <ul id="nav-items" class="navbar-nav">
                        <li class="nav-item">
                            <div class="nav-link-tab">
                                <a href="#" class="nav-link">
                                    Home
                                </a>
                            </div>
                        </li>

                        <!-- DROPDOWN MENU SECTION -->

                        <li class="nav-item dropdown">
                            <div class="nav-link-tab">
                                <a href="#" class="nav-link">
                                    Services
                                </a>
                            </div>
                            <!-- <div class="dropdown">
                                <a href="#" class="nav-link">
                                    Services
                                </a>
                                <div class="dropdown-content">
                                    <a href="#">Page 1</a>
                                    <a href="#">Page 2</a>
                                </div>
                            </div> -->
                        </li>
                        <li class="nav-item">
                            <div class="nav-link-tab">
                                <a href="#" class="nav-link">
                                    Contact
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- HEADER -->
    <header id="header-container" class="container-fluid text-center overlay">        
        <div id="header-intro" class="row">
            <div class="col-md-7 col-sm-12">
                <div class="title-section">
                    <h1 class="limelight-font"><b>The Lava Theme</b></h1>
                    <h3 class="pt-2"><i>A Sizzling Theme to Heat Up Your Business</i></h3>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eveniet debitis commodi ab illum numquam libero est ea, neque, odio eos? Unde asperiores nisi nostrum impedit magni ipsam amet quos.</p>
                <!-- button with padding of 5px in x and 2px in y directions ('px-5 py-2') -->
                <button id="header-button" class="btn px-5 py-2 orange-bkg" onclick="testButtonAction()">Click Here For More</button>
            </div>
            <!-- with 25% height added ('h-25') -->
            <div class="col-md-5 col-sm-12 h-25">
                <!-- MAIN BACKGROUND IMAGE -->
                <img class="bkg-img" src="bird.png" alt="Image from freesvg.com">
            </div>
        </div>
    <hr>
    </header>
    <main>
        <section id="section-1" class="container-fluid pt-4 pb-4">
            <container class="text-center">
                <div class="row">
                    <div class="col-md-6">
                        <img class="section-1-img" src="landscape1.jpg" alt="section 1 image 1">
                        <div class="panel">
                            <center><h1 class="pt-4">Content</h1></center>
                            <!-- paragraph with top padding of 4px ('pt-4') -->
                            <p class="text-left ml-2 mr-2 pt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="section-1-img" src="landscape2.jpg" alt="section 1 image 2">
                        <div class="panel">
                            <center><h1 class="pt-4">Content</h1></center>
                            <!-- paragraph with top padding of 4px ('pt-4') -->
                            <p class="text-left ml-2 mr-2 pt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis?</p>
                        </div>
                    </div>
                </div>
            </container>
        </section>

        <hr>

        <section class="section-2 container-fluid p-4">
            <div class="container-fluid text-center">
                <!-- desktop shadow over this section -->
                <div class="desktop shadow-lg">
                    <!-- addign a flex container with wrapping and centered (d-flex flex-md-row flex-wrap justify-content-center) -->
                    <div class="cards d-flex flex-md-row flex-wrap justify-content-center section-color">
                        <div class="card">
                            <img src="#" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="#" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="#" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="#" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h1 class="card-title">1234</h1>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">Go Somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section id="app-section" class="section-3 container-fluid pt-4 text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Download Our App</h1><br>
                    <p style="color: whitesmoke;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
                </div>
            </div>
            <!-- Platform row -->
            <div id="app-icon-row" class="platform row">
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
            <!-- Hero Unit here -->

            <div class="row pt-4">
                <div class="col-md-12 col-sm-12 p-4">
                    <h1>What our Customers Say</h1><br>
                    <p class="paramargin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempora placeat cum, eveniet ipsum eligendi ut quasi accusamus ratione ex delectus molestias ab excepturi ipsam optio illum veritatis unde ad.</p>
                </div>
            </div>

        </section>

        <hr>

        <section id="faces-section" class="section-4 pt-4">
            <div class="container text-center flex-wrap">
                <div class="row team-row">
                    <div class="col-md-4">
                        <div id="face1" class="img-col desktop shadow-md">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="face2" class="img-col desktop shadow-md">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="face3" class="img-col desktop shadow-md">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <hr>
    
    <footer>
        <div id="footer-container" class="container-fluid pt-4">
            <div id="footer-content-left" class="footer-module row text-left">
                <div class="col-md-5">
                    <h2 class="text-light">
                        <h2>We're Here to Help</h1><br>
                        <p class="footer-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aspernatur quasi distinctio consectetur consequuntur voluptate possimus eveniet veritatis commodi a perspiciatis harum cum animi quia reiciendis sapiente ad, soluta natus.
                        </p>
                    </h1>
                </div>
                <div id="footer-content-center" class="footer-module col-md-5">
                    <h2 class="text-light">Newsletter</h2>
                    <p class="footer-content">Stay Updated!</p><br>
                    <form action="email-form" class="form-inline">
                        <div class="col">
                            <div id="email-form-ig" class="input-group">
                                <label class="form-control" for="email">Email</label><br>
                                <input type="text" name="email" placeholder="Email" class="form-control bg-dark text-white" >
                                <span class="input-group-text">
                                    <a href="#">
                                        <i class="fas fa-arrow-right" style="width: fit-content;height: auto;"></i>
                                    </a>
                                </span>
                                <!-- <div class="input-group-prepend">
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
                <div id="footer-content-right" class="footer-module col-md-2">
                    <h2 id="follow" class="text-light">Follow Us!</h2>
                    <p class=""></p>
                    <div class="footer-content column">
                        <a href="#">
                            <i class="fab fa-facebook-f fa-2x"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram fa-2x ml-2"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter fa-2x ml-2"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube fa-2x ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="copyright" class="row">
                <p class="pt-4">
                    <h6>&copy;2022 | This page was made by <span>Cinderblock Labs</span></h6>    
                </p> 
            </div>
        </div>
    </footer>
</body>

<!-- SCRIPTS -->
<!-- MOBILE HAMBURGER MENU SCRIPT -->

<script type="text/javascript" id="testButtonAction()">
    alert("You have clicked the button")
</script>

<script type="text/javascript" id="hamburger()">

</script>

<!-- DROPDOWN MENU SCRIPT -->
<script type="text/javascript" id="dropdown()">
    function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 
</script>
</html>