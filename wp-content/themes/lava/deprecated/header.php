<!-- Everything from <head> and <header> -->

<!-- Get Header PHP Function -->

<!DOCTYPE html>

<html lang="en">
    <head>
        
        <!-- TITLE-->
        <title>LAVA</title>
        
    <!-- Dynamic PHP Title -->
    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <!-- Optional Meta Tags -->
        <meta name="author" content="Cinderblock Labs">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- OPTIONAL JAVASCRIPT -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
        
        <!-- FontAwesome -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        
        <!-- Custom CSS Stylesheet -->
        <!-- <link rel="stylesheet" type="text/css" href="style.css" media="screen" integrity=""> -->
        
        <!-- Custom CSS PHP function -->
        
        
        <!-- FONTS -->
        
        <!-- Pinyon Script -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Pinyon+Script&display=swap" rel="stylesheet">   
        
        <!-- Righteous -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        
        <?php 
    
            wp_head();
        
        ?>
    </head>
    
    <body>
        <div id="navigation" class="container-fluid p-0 desktop shadow-lg">
            
            <nav class="navbar navbar-expand-lg section-color">
                
                <div class="container-fluid">
                    
                    <a class="navbar-brand limelight-font" href="#"><h1><i>Lava</i></h1></a>
                    
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
            
            <!-- Backrgound Video -->
            
            <!-- COMMENTED OUT FOR NOW -->
            
            <!-- <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
            </video> -->
        
            <div id="header-intro" class="row pt-5 pb-5">
                <div class="col-md-7 col-sm-12 ">
                    <div class="title-section">
                        <h1 class="limelight-font"><b>The Lava Theme</b></h1>
                        <h3 class="pt-2"><i>A Sizzling Theme to Heat Up Your Business</i></h3>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eveniet debitis commodi ab illum numquam libero est ea, neque, odio eos? Unde asperiores nisi nostrum impedit magni ipsam amet quos.</p>
                    <!-- button with padding of 5px in x and 2px in y directions ('px-5 py-2') -->
                    <button id="header-button" class="btn px-5 py-2" onclick="testButtonAction()">Click Here For More</button>
                </div>
                <!-- with 25% height added ('h-25') -->
                <div class="col-md-5 col-sm-12 h-25">
                    <!-- MAIN BACKGROUND IMAGE -->
                    <img class="bkg-img" src="bird.png" alt="Image from freesvg.com">
                </div>
            </div>
        </header>
    </body>
</html>

