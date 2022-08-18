<!-- This is a required file, it is the fallback page for when others don't work -->

<!-- FRONT PAGE FILE -->

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- TITLE-->
        <title>LAVA</title>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Optional Meta Tags -->
        <meta name="author" content="Cinderblock Labs">
        <meta name="organization" content="Cinderblock Labs">
        <meta name="Copyright" content="2022">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- OPTIONAL JAVASCRIPT -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- FONTS -->
        
        <!-- Pinyon Script -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Pinyon+Script&display=swap" rel="stylesheet">   
        
        <!-- Righteous -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

        <!-- CUSTOM CSS STYLESHEET -->
        
        <!-- <link rel="stylesheet" type="text/css" href="./wp-content/themes/lava/style.css" media="screen" integrity=""> -->

        <?php 

            wp_head();
        
        ?>

    </head>

    <body>
        
        <!-- -------------------------------
            ------------------------------- -->
            
        <!-- NAVBAR -->
            
        <!-- container with no padding (p-0) -->
        
        <!-- Need to Fix Dropdown menu and add targets to each of the links -->
        <!-- I also want to add click animation for links when user clicks a link -->
        
        <!-- Need to set scroll behavior so that it focuses content to center of screen instead of all the way on top -->

        
        <div id="navigation" class="container-fluid p-0">   
            
            <nav class="navbar navbar-expand-lg section-color">
                    
                <a class="navbar-brand limelight-font" href="#"><h1><i>Lava</i></h1></a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbarID" class="collapse navbar-collapse">
                    <!-- div mr-auto ('margin-right auto') -->
                    <div class="mr-auto"></div>
                    
                        <!-- NAV ITEMS + LINKS -->
                        
                        <!-- About Us -->
                        <ul id="nav-items" class="navbar-nav">
                            <li class="nav-item">
                                <div class="nav-link-tab">
                                    <a href="#intro-section" class="nav-link" target="">
                                        About Us
                                    </a>
                                </div>
                            </li>
                            
                            <!-- DROPDOWN MENU SECTION -->
                            
                            <!-- Services -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>

                                <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#services-section">Our Services</a>
                                    <a class="dropdown-item" href="#testimonials">Testimonials</a>
                                    <!-- <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a> -->
                                </div>
                            </li>

                            <!-- Downloads -->
                            <li class="nav-item">
                                <div class="nav-link-tab">
                                    <a href="#app-section" class="nav-link" target="">
                                        Downloads            
                                    </a>
                                </div>
                            </li>
                            
                            <!-- Our Team -->
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
                    
            <!-- Backrgound Video -->

            <!-- COMMENTED OUT FOR NOW -->
        
            <!-- <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
            </video> -->

            <div id="header-intro" class="row pt-5 pb-5 flex-center-row">
                <div class="col-md-7 col-sm-12 ">
                    <div class="">
                        <h1 class="header-title"><b>The Lava Theme</b></h1>
                        <h3 class="header-title header-subtitle pt-2"><i>A Sizzling Theme to Heat Up Your Business</i></h3>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eveniet debitis commodi ab illum numquam libero est ea, neque, odio eos? Unde asperiores nisi nostrum impedit magni ipsam amet quos.</p>
                    <!-- button with padding of 5px in x and 2px in y directions ('px-5 py-2') -->
                    <button id="header-button" class="btn btn-danger px-5 py-2" onclick="testButtonAction()">Click Here For More</button>
                </div>
                <!-- with 25% height added ('h-25') -->
                <div class="col-md-5 col-sm-12 h-25">
                    <!-- MAIN BACKGROUND IMAGE -->
                    <img class="bkg-img" src="wp-content/themes/lava/bird.png" alt="Image from freesvg.com">
                </div>
            </div>
        </header>

        <!-- MAIN -->

        <main>

            <!-- INTRO SECTION -->
            <section id="intro-section" class="container-fluid">
                
                <!-- Intro Header -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        
                        <!-- Section Title -->
                        <h1 id="about" class="title-section flex-center-row">About Us</h1><br>
                        
                        <!-- Section Description -->
                        <p id="intro-description" class="text-left ml-4 mr-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque repellendus optio ut aperiam, aliquid debitis perferendis distinctio magnam officia modi! Adipisci suscipit dignissimos, consectetur maiores tempora quisquam totam? Veritatis, voluptatibus.</p>
                    </div>
                </div>
                
                <container class="text-center justify-content-center">
                    <div class="row pt-5 pb-5">
                        <div class="col-md-6">
                            <img class="section-1-img" src="wp-content/themes/lava/landscape1.jpg" alt="section 1 image 1">
                            <div class="panel pt-5 pb-5">
                                <h1 class="text-center pb-4">Our History</h1>
                                <!-- paragraph with top padding of 4px (') -->
                                <p class="text-left ml-4 mr-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum architecto quia numquam eaque impedit ea quos fugit non, voluptatibus eius! Excepturi reiciendis labore debitis ratione voluptas. Nemo qui hic natus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quos dolore voluptas. Corrupti, culpa vero unde omnis perferendis voluptatum illum commodi eveniet quis quas minus quae quia officia! Suscipit, magni! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis?</p>
                            </div>
                        </div>

                        <div class="vr"></div>

                        <div class="col-md-6">
                            <img class="section-1-img" src="wp-content/themes/lava/landscape2.jpg" alt="section 1 image 2">
                            <div class="panel pt-5 pb-5">
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

            <section id="services-section" class="container-fluid">
                
                <!-- Section header -->
                <div class="row pt-5 pb-5">
                    
                    <div class="col-md-12 col-sm-12">

                        <!-- Section Title -->
                        <h1 id="services" class="title-section flex-center-row text-center">Our Services</h1><br>
                        
                        <!-- Section Text -->
                        <p id="services-description" class="section-description big-margin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fuga corporis, vitae voluptas necessitatibus blanditiis delectus reiciendis. Fugiat explicabo labore doloremque quas sunt nemo magnam aperiam consequuntur, inventore modi voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
                    </div>
                </div>

                <!-- Content -->
                <div class="container-fluid text-center pt-5 pb-5">
                    
                    <!-- desktop shadow over this section -->
                    <div id="satisfaction" class="desktop shadow-lg pt-5 pb-5">
                        
                        <!-- addign a flex container with wrapping and centered (d-flex flex-md-row flex-wrap justify-content-center) -->
                        
                        <!-- Satisfaction Cards -->
                        <div class="cards">
                            
                            <!-- Card -->
                            <div class="card desktop shadow-sm">
                                
                                <!-- Card Image -->
                                <img src="wp-content/themes/lava/assets/images/ribbons/satisfaction.png" alt="card image top" class="card-img-top">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                    <!-- Card Title -->
                                    <h3 class="card-title">Satisfaction<br>Guarantee</h3>
                                    
                                    <!-- Card Text -->
                                    <p class="card-text"></p>
                                    
                                    <!-- Card Button -->
                                    <button class="btn btn-primary text-center p-3"><i class="fa-solid fa-circle-info p-1"></i>More Info</button>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="card desktop shadow-sm">
                                
                                <!-- Card Image -->
                                <img src="wp-content/themes/lava/assets/images/ribbons/satisfaction.png" alt="card image top" class="card-img-top">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                    <!-- Card Title -->
                                    <h3 class="card-title">Satisfaction<br>Guarantee</h3>
                                    
                                    <!-- Card Text -->
                                    <p class="card-text"></p>
                                    
                                    <!-- Card Button -->
                                    <button class="btn btn-primary text-center p-3"><i class="fa-solid fa-circle-info p-1"></i>More Info</button>
                                </div>
                            </div>
                            
                            <!-- Card -->
                            <div class="card desktop shadow-sm">
                                
                                <!-- Card Image -->
                                <img src="wp-content/themes/lava/assets/images/ribbons/satisfaction.png" alt="card image top" class="card-img-top">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                    <!-- Card Title -->
                                    <h3 class="card-title">Satisfaction<br>Guarantee</h3>
                                    
                                    <!-- Card Text -->
                                    <p class="card-text"></p>
                                    
                                    <!-- Card Button -->
                                    <button class="btn btn-primary text-center p-3"><i class="fa-solid fa-circle-info p-1"></i>More Info</button>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>

                <!-- SERVICES SECTION (MOBILE) -->
                <!-- !!! Only Appears in Mobile Versions !!! -->

                <div id="services-section-mobile" class="container-fluid text-center pt-5 pb-5">

                    <div class="desktop shadow-lg pt-4 pb-4">       

                        <!-- Section Header -->
                        <div class="row pt-5 pb-5">
                            
                            <div class="col-md-12 col-sm-12">

                                <!-- Section Title -->
                                <h1 class="title-section text-center">Our Services</h1><br>
                                
                                <!-- Section Text -->
                                <p id="services-description" class="section-description big-margin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fuga corporis, vitae voluptas necessitatibus blanditiis delectus reiciendis. Fugiat explicabo labore doloremque quas sunt nemo magnam aperiam consequuntur, inventore modi voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
                            </div>
                        </div>

                        <div class="row">

                            <!--  -->
                            <div class="col-sm-4">
                                <h2 class="pb-2"></h2>
                                <button class="btn btn-primary text-center p-3"><i class="fa-solid fa-circle-info"></i>More Info</button>    
                            </div>
                            
                            <!--  -->
                            <div class="col-sm-4">
                                <h2 class="pb-2"></h2>
                                <button class="btn btn-primary text-center p-3"><i class="fa-solid fa-circle-info"></i>More Info</button>    
                            </div>
                            
                            <!--  -->
                            <div class="col-sm-4">
                                <h2 class="pb-2"></h2>
                                <button class="btn btn-primary text-center p-3"><i class="fa-solid fa-circle-info"></i>More Info</button>    
                            </div>
                        </div>
                    </div>                    
                </div>

                <!-- Customer Testimony -->

                <!-- Section Header -->
                <div class="row pt-5">
                    <div class="col-md-12">

                        <!-- Section Title -->
                        <h1 class="text-center flex-center-row title-section ml-10">What our Customers Say</h1><br>

                    </div>
                </div>

                <div id="testimonials" class="container-fluid text-center pt-5 pb-5">
        
                    <div class="row flex-wrap justify-content-center">
                        <div class="col-md-3">
                            <div class="testimonial desktop shadow">
                                <blockquote>
                                    <p class="text-left big-margin">
                                        <i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                        </i>
                                    <span class="name">
                                        -Julie
                                    </span>
                                </blockquote>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="testimonial desktop shadow">
                                <blockquote>
                                    <p class="text-left big-margin">
                                        <i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                        </i>
                                    <span class="name">
                                        -Brock
                                    </span>
                                </blockquote>
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <div class="testimonial desktop shadow">
                                <blockquote>
                                    <p class="text-left big-margin">
                                        <i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                        </i>
                                    <span class="name">
                                        -Sarah
                                    </span>
                                </blockquote>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="testimonial desktop shadow">
                                <blockquote>
                                    <p class="text-left big-margin">
                                        <i>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis porro labore voluptatibus impedit voluptates rem quos blanditiis, unde similique totam. Deleniti molestias tempore officia error. Harum modi aliquid odio sunt?</p>
                                        </i>
                                    <span class="name">
                                        -Joel
                                    </span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Divider -->

            <hr>

            <!-- APP SECTION -->

            <section id="app-section" class="container-fluid">
                
                <!-- Section Header -->
                <div class="row pt-5">
                    <div class="col-md-12 col-sm-12">
                        
                        <!-- Section Title -->
                        <h1 id="downloads" class="text-center flex-center-row title-section">Download Our App</h1><br>
                        
                        <!-- Section Description -->
                        <p class="text-left ml-4 mr-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi consequuntur facilis possimus, non incidunt delectus excepturi quibusdam ea quae quisquam rerum alias asperiores, numquam sapiente quaerat ut maiores doloremque itaque? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
                    </div>
                </div>

                <!-- Platform row -->
                <div id="app-icon-row" class="row platform pt-5 pb-5">
                    
                    <!-- PC App -->
                    <div class="col-md-4 col-sm-12 text-right">
                        <div class="desktop shadow-lg">
                            <div class="d-flex flex-row flex-wrap justify-content-center pt-5 pb-5 platform-content">
                                <!-- Desktop icon that is 3x larger than normal (fa-3x) --> 
                                <div class="text text-left">
                                    <!-- padding 1, margin 0 -->
                                    <center>
                                        <h3 class="pt-2 m-0 text-center"><i class="fas fa-desktop fa-2x py-2 pr-3"></i>Desktop</h3>
                                        <p class="p-4 ml-2 mr-2">Get in touch with our services on your Windows Device.</p>                                
                                    </center>
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
                    
                    <!-- Android App -->
                    <div class="col-md-4 col-sm-12 text-left">
                        <!-- Subtle shadow effect over this section of the page -->
                        <div class="desktop shadow-lg">
                            <div class="d-flex flex-row flex-wrap justify-content-center pt-5 pb-5">
                                <!-- Desktop icon that is 3x larger than normal (fa-3x) -->
                                <div class="text text-left">
                                    <center>
                                        <h3 class="pt-2 m-0"><i class="fas fa-mobile-alt fa-2x py-2 pr-3"></i>Mobile</h3>
                                        <p class="p-4 m-2 mr-2">Get in touch with our services for your mobile needs.</p>   
                                    </center>
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
            </section>
            
            <!-- Divider -->
            <hr>
            
            <!-- FACES SECTION -->

            <section id="faces-section" class="container-fluid">
                
                <!-- Title -->

                <div class="row pt-5">
                    <div class="col-md-12 col-sm-12">
                        <h1 class="text-center flex-center-row title-section">Our Team</h1><br>
                        <p class="text-left big-margin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae itaque, aliquam tenetur sint provident placeat minus, rerum nam praesentium ad dicta architecto ratione molestiae aliquid pariatur inventore iusto est! Vel!</p>
                    </div>
                </div>

                <!-- Face Images -->
                <!-- Problem with descriptions and margin -->

                <div id="faces-section-bios" class="container-fluid flex-center text-center">
                    
                    <div class="row pt-5 pb-5">
                    
                        <!-- Face 1 -->

                        <div class="col-md-4">
                            <div class="faces-section-bio desktop shadow-md">
                                <div id="face1" class="faces-section-img">
                                </div>
                                <div class="description pt-2 pb-2">
                                    <h3 class="text-center pt-2 pb-2">Jake</h3>
                                    <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est doloribus quis, doloremque dolorem dicta provident repudiandae veniam at reiciendis eum officia consectetur fugiat harum rem exercitationem labore. Ipsam, facilis!</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Face 2 -->
                        
                        <div class="col-md-4">
                            <div class="faces-section-bio desktop shadow-md">
                                <div id="face2" class="faces-section-img">
                                </div>
                                <div class="description pt-2 pb-2">
                                    <h3 class="text-center pt-2 pb-2">Madison</h3>
                                    <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est doloribus quis, doloremque dolorem dicta provident repudiandae veniam at reiciendis eum officia consectetur fugiat harum rem exercitationem labore. Ipsam, facilis!</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Face 3 -->
                        
                        <div class="col-md-4">
                            <div class="faces-section-bio desktop shadow-md">
                                <div id="face3" class="faces-section-img">
                                </div>
                                <div class="description pt-2 pb-2">
                                    <h3 class="text-center pt-2 pb-2">Olivia</h3>
                                    <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est doloribus quis, doloremque dolorem dicta provident repudiandae veniam at reiciendis eum officia consectetur fugiat harum rem exercitationem labore. Ipsam, facilis!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FACES SECTION (MOBILE) -->
            <!-- Needs hamburger selector -->
            <!-- Double Button + wont become white! -->

            <section id="faces-section-mobile" class="container-fluid">
                
                <!-- Title -->

                <div class="row pt-5 pb-5">
                    <div class="col-md-12 col-sm-12">
                        <h1 class="text-center title-section">Our Team</h1><br>
                    </div>
                </div>

                <!-- Face Images -->

                <div class="container-fluid text-center">
                    
                    <!-- Row -->
                    <div class="row team-row pt-5 pb-5">
                        
                        <!-- Column -->
                        <div class="col-md-4">
                            <div class="faces-section-img desktop shadow-md">
                                
                                <!-- Face 1 -->
                                <div class="faces-section-img" id="face1">
                                </div>

                                <!-- Hamburger Menu Code -->
                                <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
                                    
                                    <a class="navbar-brand" href="#">
                                        <h3 class="text-center pt-2 pb-2">Jake</h3>
                                    </a>

                                    <!-- !!! Icon needs to be LIGHT COLORED !!! -->

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">
                                                    <!-- Description -->
                                                    <div class="description pt-2 pb-2">
                                                        <hr class="">
                                                        <p class="text-light text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat accusantium, necessitatibus facilis incidunt eveniet, quasi molestias voluptas sunt qui vel officia? Deserunt cumque inventore iste voluptate voluptatum autem asperiores dignissimos!</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>                        
                            </div>

                            <div id="face2" class="faces-section-img desktop shadow-md">
                                
                                <!-- Face 2 -->
                                <div class="faces-section-img" id="face2">
                                </div>
                                
                                <!-- Hamburger Menu Code -->
                                <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
                                    
                                    <a class="navbar-brand" href="#">
                                        <h3 class="text-center pt-2 pb-2">Madison</h3>
                                    </a>
                                    
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    
                                    <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">
                                                    <!-- Description -->
                                                    <div class="description pt-2 pb-2">
                                                        <hr class="">
                                                        <p class="text-light text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat accusantium, necessitatibus facilis incidunt eveniet, quasi molestias voluptas sunt qui vel officia? Deserunt cumque inventore iste voluptate voluptatum autem asperiores dignissimos!</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>                        
                            </div>

                            <div class="faces-section-img desktop shadow-md">
                                
                                <!-- Face 3 -->
                                <div class="faces-section-img" id="face3">
                                </div>
                                
                                <!-- Hamburger Menu Code -->
                                <nav class="navbar navbar-expand-lg bg-dark navbar-dark text-light">

                                    <a class="navbar-brand" href="#">
                                        <h3 class="text-center pt-2 pb-2">Olivia</h3>
                                    </a>
                                    
                                    <!-- Hamburger Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown3" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>


                                    <div class="collapse navbar-collapse" id="navbarNavDropdown3">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">
                                                    
                                                    <!-- Description -->
                                                    <div class="description pt-2 pb-2">
                                                        
                                                        <!--  -->
                                                        <hr class="">
                                                        <p class="text-light text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat accusantium, necessitatibus facilis incidunt eveniet, quasi molestias voluptas sunt qui vel officia? Deserunt cumque inventore iste voluptate voluptatum autem asperiores dignissimos!</p>
                                                    
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>                        
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- FOOTER -->
        
        <footer>
            <div id="footer-container" class="container-fluid">
                <div class="row p-5">
                    <!-- Conclusion Text -->


                    <!-- Needs mobile version with hamburger menu -->
                    <div id="footer-content-left" class="footer-module row text-left">
                        <div class="col-md-5">
                            <h2 class="text-light">
                                <h2 class="text-left ml-4">We're Here to Help</h1><br>
                                <p class="footer-content ml-4 mr-auto">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim aspernatur quasi distinctio consectetur consequuntur voluptate possimus eveniet veritatis commodi a perspiciatis harum cum animi quia reiciendis sapiente ad, soluta natus.
                                </p>
                            </h1>
                        </div>
        
        
                        <!-- Contact Form -->
                        <!-- Needs mbile version -->
                        <div id="footer-content-center" class="footer-module col-md-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="text-light">Contact Us</h2><br>
                                    <p>If you have a question, do not hesitate. We will anser ASAP!</p><br>
                                </div>
                            </div>
                            
                            <!-- CONTACT FORM -->
                            <div class="row">
                                <div class="col-md-8">
                                        <form action="email-form" class="form" role="form">
                                        
                                            <!-- Name -->
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="name">Name</span>
                                                </div>
                                                <input type="text" class="form-control bg-dark text-light" onfocus="this.value=''" placeholder="Name" aria-label="name" aria-describedby="basic-addon1">
                                            </div>

                                            <!-- Email -->
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text pr-3" id="email">Email</span>
                                                </div>
                                                <input type="text" class="form-control bg-dark text-light" onfocus="this.value=''" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <!-- Message -->
                                <div class="row">
                                    <div class="col-md-8">
        
                                        <!-- TextArea -->
                                        <div class="form-group">
                                            <textarea id="message" class="form-control bg-dark text-light" onfocus="this.value=''" name="message" id="message-area" onfocus="this.value=''" cols="30" rows="5" placeholder="(Optional) Leave a Message..."></textarea>
                                        </div>
                
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
   
                                        <!-- Arrow -->
                                        <div class="form-group">
                                            <span class="input-group-text bg-light">
                                                <button type="submit" id="form-button" class="btn btn-default" href="#" onclick="formSubmit()">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Social -->
                        <div id="footer-content-right" class="footer-module col-md-2 text-right">
                            
                            <h2 class="text-light mr-4">Follow Us!</h2><br>
                    
                            <div id="footer-social" class="footer-content column">
                                
                                <a href="#">
                    
                                    <i class="fa-brands fa-facebook-square fa-2x"></i>
                    
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

                        <!-- WONT FLOAT RIGHT -->

                        <!-- COPYRIGHT -->
                        <p id="footer-copyright" class="text-center">
                            <!-- Copyright Header -->
                            <h6 id="copyright">&copy;2022 | This page was made by <span>Cinderblock Labs</span></h6>    
                        </p> 
                    </div>
                </div>
            </div>
            
            <!-- FOOTER (MOBILE) -->
            <!--  -->
            
            <div id="footer-container-mobile" class="container-fluid">
                <div class="row">

                    <!-- Mobile Exit Text -->
                    <div class="col-sm-6">
                        <nav class="navbar navbar-expand-lg text-light">

                            <a class="navbar-brand" href="#">
                                <h3 class="text-center pt-2 pb-2">Privacy Policy</h3>
                            </a>
                            
                            <!-- Hamburger Button -->
                            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown4" aria-controls="navbarNavDropdown4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <div class="collapse navbar-collapse" id="navbarNavDropdown4">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">
                                            <p class="text-left">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores provident, quaerat odio fugit eveniet eius iure deserunt facere obcaecati quis magnam unde molestiae nihil rerum cum debitis vel voluptatem non?</p>
                                                     
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Contact Form Hamburger Menu -->
                    <div class="col-md-6 col-sm-6">
                        <nav class="navbar navbar-expand-lg text-light">

                            <a class="navbar-brand" href="#">
                                <h3 class="text-center pt-2 pb-2">Contact Us</h3>
                            </a>
                            
                            <!-- Hamburger Button -->
                            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown5" aria-controls="navbarNavDropdown4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <div class="collapse navbar-collapse" id="navbarNavDropdown5">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">
                                            
                                            <!-- Contact Form -->
                                            <form action="email-form" class="form" role="form">
                                        
                                                <!-- Name -->
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="name">Name</span>
                                                    </div>
                                                    <input type="text" class="form-control bg-light text-light" onfocus="this.value=''" placeholder="Name" aria-label="name" aria-describedby="basic-addon1">
                                                </div>
    
                                                <!-- Email -->
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text pr-3" id="email">Email</span>
                                                    </div>
                                                    <input type="text" class="form-control bg-dark text-light" onfocus="this.value=''" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                                                </div>
                                            </form>

                                            
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Social -->
                    <div class="col-sm-6">
                        <nav class="navbar navbar-expand-lg text-light">

                            <a class="navbar-brand" href="#">
                                <h3 class="text-center pt-2 pb-2">Social</h3>
                            </a>
                            
                            <!-- Hamburger Button -->
                            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown6" aria-controls="navbarNavDropdown4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarNavDropdown6">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">
                                            <h2 class="text-light mr-4">Follow Us!</h2><br>

                                                <!-- Social Icons -->
                                                <div id="footer-social" class="footer-content column">
                                                    
                                                    <a href="#">
                                        
                                                        <i class="fa-brands fa-facebook-square fa-2x"></i>
                                        
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
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>