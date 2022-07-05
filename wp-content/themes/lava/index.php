<!-- This is a required file, it is the fallback page for when others don't work -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>LAVA</title>

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
    
    <!-- FontAwesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style-test.css" media="screen">

    <!-- FONTS -->

    <!-- Pinyon Script -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Pinyon+Script&display=swap" rel="stylesheet">   
    
    <!-- Raleway Light 300
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet"> -->

    <!-- Righteous -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

</head>

<body>
    
    <!-- NAVBAR -->
    
    <!-- container with no padding (p-0) -->

    <!-- Need to Fix Dropdown menu and add targets to each of the links -->
    <!-- I also want to add click animation for links when user clicks a link -->

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
                                <a href="#intro-section" class="nav-link" target="">
                                About Us
                                </a>
                            </div>
                        </li>
                        
                        <!-- DROPDOWN MENU SECTION -->

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#services-section">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link-tab">
                                <a href="#app-section" class="nav-link" target="">
                                    Downloads            
                                </a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <div class="nav-link-tab">
                                <a href="#faces-section" class="nav-link" target="">
                                    Our Team
                                </a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <div class="nav-link-tab">
                                <a href="#footer-container" class="nav-link" target="">
                                    Contact
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- HEADER SECTION-->

    <header id="header-container" class="container-fluid text-center overlay">        
        <div id="header-intro" class="row pt-4 pb-4">
            <div class="col-md-7 col-sm-12 ">
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
                <img class="bkg-img" src="assets/images/thematic/bird.png" alt="Image from freesvg.com">
            </div>
        </div>
    </header>

    <!-- MAIN -->

    <main>

        <!-- INTRO SECTION -->
        <section id="intro-section" class="container-fluid">
            <div class="row pt-4 pb-4">
                <div class="col-md-12 col-sm-12">
                    <h1 class="text-center">About Us</h1><br>
                    <p class="text-left big-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque repellendus optio ut aperiam, aliquid debitis perferendis distinctio magnam officia modi! Adipisci suscipit dignissimos, consectetur maiores tempora quisquam totam? Veritatis, voluptatibus.</p>
                </div>
            </div>
            
            <container class="text-center justify-content-center">
                <div class="row pt-4 pb-4">
                    <div class="col-md-6">
                        <img class="section-1-img" src="assets/images/backgrounds/landscape1.jpg" alt="section 1 image 1">
                        <div class="panel pt-4 pb-4">
                            <h1 class="text-center pb-4">Our History</h1>
                            <!-- paragraph with top padding of 4px (') -->
                            <p class="text-left ml-4 mr-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum architecto quia numquam eaque impedit ea quos fugit non, voluptatibus eius! Excepturi reiciendis labore debitis ratione voluptas. Nemo qui hic natus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quos dolore voluptas. Corrupti, culpa vero unde omnis perferendis voluptatum illum commodi eveniet quis quas minus quae quia officia! Suscipit, magni! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="section-1-img" src="assets/images/backgrounds/landscape2.jpg" alt="section 1 image 2">
                        <div class="panel pt-4 pb-4">
                            <h1 class="text-center pb-4">Our Mission</h1>
                            <!-- paragraph with top padding of 4px (') -->
                            <p class="text-left ml-4 mr-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint omnis distinctio beatae, voluptatum amet modi. Numquam vel, odio, repellat explicabo placeat nesciunt perferendis quasi deleniti laboriosam quisquam eos dolorum accusamus.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </container>
        </section>

        <!-- SERVICES SECTION -->

        <section id="services-section" class="section-2 container-fluid">
            
            <div class="row pt-4 pb-4">
                <div class="col-md-12 col-sm-12">
                    <h1 class="text-center">Our Services</h1><br>
                    <p class="big-margin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fuga corporis, vitae voluptas necessitatibus blanditiis delectus reiciendis. Fugiat explicabo labore doloremque quas sunt nemo magnam aperiam consequuntur, inventore modi voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
                </div>
            </div>

            <div class="container-fluid text-center pt-4 pb-4">
                
                <!-- desktop shadow over this section -->
                <div class="desktop shadow-lg">
                    <!-- addign a flex container with wrapping and centered (d-flex flex-md-row flex-wrap justify-content-center) -->
                    <div class="cards d-flex flex-md-row flex-wrap justify-content-center section-color">
                        <div class="card">
                            <img src="assets/images/ribbons/satisfaction.png" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Satisfaction<br>Guarantee</h3>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">More Info</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/images/ribbons/satisfaction.png" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Friendly<br>Staff</h3>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">More Info</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/images/ribbons/satisfaction.png" alt="card image top" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Great<br>Service</h3>
                                <p class="card-text">services galore</p>
                                <a href="#" class="btn btn-primary">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customer Testimony -->

            <div class="row">
                <div class="row pt-4 pb-4">
                    <div class="col-md-12 col-sm-12">
                        <center>
                            <h1 class="text-center">What our Customers Say</h1>
                        </center>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="testimonial">
                        <blockquote>
                            <p class="text-left">
                                <i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                </i><br>
                            <span class="name">
                                -Julie
                            </span>
                        </blockquote>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="testimonial">
                        <blockquote>
                            <p class="text-left">
                                <i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                </i><br>
                            <span class="name">
                                -Julie
                            </span>
                        </blockquote>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="testimonial">
                        <blockquote>
                            <p class="text-left">
                                <i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                </i><br>
                            <span class="name">
                                -Julie
                            </span>
                        </blockquote>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="testimonial">
                        <blockquote>
                            <p class="text-left">
                                <i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                </i><br>
                            <span class="name">
                                -Julie
                            </span>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider -->

        <hr>

        <!-- APP SECTION -->

        <section id="app-section" class="section-3 container-fluid text-center">
            <div class="row pt-4 pb-4">
                <div class="col-md-12 col-sm-12">
                    <h1>Download Our App</h1><br>
                    <p class="big-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi consequuntur facilis possimus, non incidunt delectus excepturi quibusdam ea quae quisquam rerum alias asperiores, numquam sapiente quaerat ut maiores doloremque itaque? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
                </div>
            </div>
            <!-- Platform row -->
            <div id="app-icon-row" class="row platform pt-4 pb-4">
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row flex-wrap justify-content-center pt-4 pb-4 platform-content">
                            <!-- Desktop icon that is 3x larger than normal (fa-3x) --> 
                            <div class="text text-left">
                                <!-- padding 1, margin 0 -->
                                <h3 class="pt-2 m-0 text-center"><i class="fas fa-desktop fa-2x py-2 pr-3"></i>Desktop</h3>
                                <p class="p-4 ml-2 mr-2">Get in touch with our services on your Windows Device.</p>                                
                                <center>
                                    <a href="#" class="btn btn-primary flex-nowrap justify-content-center text-center">
                                        <i class="fa-brands fa-windows fa-2x" aria-hidden="true"></i>
                                        Download<br>
                                        <small class="muted"> 
                                            <i>For Windows</i> 
                                        </small>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <!-- Subtle shadow effect over this section of the page -->
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row flex-wrap justify-content-center pt-4 pb-4">
                            <!-- Desktop icon that is 3x larger than normal (fa-3x) -->
                            <div class="text text-left">
                                <h3 class="pt-2 m-0"><i class="fas fa-mobile fa-2x py-2 pr-3"></i>Mobile</h3>
                                <p class="p-4 m-2 mr-2">For your mobile needs</p>   
                                <center>
                                    <a href="#" class="btn btn-primary flex-nowrap justify-content-center text-center">
                                        <i class="fa-brands fa-android fa-2x" aria-hidden="true"></i>
                                        Download<br>
                                        <small class="muted"> 
                                            <i>For Android</i> 
                                        </small>     
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Unit here -->
            <hr>
            <hr>
        </section>

        <!-- FACES SECTION -->
        
        <section id="faces-section" class="section-4">
            <div class="row pt-4 pb-4">
                <div class="col-md-12 col-sm-12">
                    <h1 class="text-center">Our Team</h1><br>
                </div>
            </div>
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

    <!-- FOOTER -->
    
    <footer>
        <div id="footer-container" class="container-fluid">

            <!-- Conclusion Text -->
            <div id="footer-content-left" class="footer-module row text-left">
                <div class="col-md-5">
                    <h2 class="text-light">
                        <h2>We're Here to Help</h1><br>
                        <p class="footer-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aspernatur quasi distinctio consectetur consequuntur voluptate possimus eveniet veritatis commodi a perspiciatis harum cum animi quia reiciendis sapiente ad, soluta natus.
                        </p>
                    </h1>
                </div>


                <!-- Contact Form -->
                <div id="footer-content-center" class="footer-module col-md-5">
                    <h2 class="text-light">Newsletter</h2>
                    <p class="footer-content">Stay Updated!</p><br>
                    <form action="email-form" class="form" role="form">
                        <div class="row">
                            <div class="col-md-6">

                                <!-- Name -->
                                <div class="form-group">
                                    <label class="form-control" for="name">Name</label>
                                    <input id="name" type="text" name="name" onfocus="this.value=''" placeholder="(Required) Your Name" class="form-control bg-dark text-white" required> 
                                </div>
        
                                <!-- Email -->
                                <div class="form-group">
                                    <label class="form-control" for="email">Email</label>
                                    <input id="email" type="text" name="email" onfocus="this.value=''" placeholder="(Required) Your Email" class="form-control bg-dark text-white" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Message -->
                                <div class="form-group">
                                    <textarea id="message" class="form-control" name="message" id="message-area" onfocus="this.value=''" cols="30" rows="5" placeholder="(Optional) Leave a Message..."></textarea>
                                </div>
        
                                <!-- Arrow -->
                                <div class="form-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-arrow-right"></i>
                                        <input type="submit" id="form-button" class="btn btn-default" href="#" onclick="formSubmit()">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Social -->
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
            <div id="copyright" class="row pt-4 pb-4">
                <p class="text-center">
                    <h6>&copy;2022 | This page was made by <span>Cinderblock Labs</span></h6>    
                </p> 
            </div>
        </div>
    </footer>
</body>

<!-- SCRIPTS -->
<!-- MOBILE HAMBURGER MENU SCRIPT -->

<script type="text/javascript" id="hamburger()">
    
</script>

<!-- Header Button Script -->

<!-- <script type="text/javascript" id="testButtonAction()">
    alert("You have clicked the button");
</script> -->

<!-- Form Submission Script -->

<script type="text/javascript" id="dropdown()">
    
    // formSubmit()

    function formSubmit() {
        
        document.email-form.submit();
        document.email-form.reset();
    
    }
</script>
</html>