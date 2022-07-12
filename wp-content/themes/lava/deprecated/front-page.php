<!-- This is the front page for the website -->

<?php 

    get_header();

?>

<!-- MAIN -->

<?php 

    get_header();

?>

<main>

    <!-- INTRO SECTION -->
    <section id="intro-section" class="container-fluid">
        <div class="row pt-5 pb-5">
            <div class="col-md-12 col-sm-12">
                <h1 class="text-center">About Us</h1><br>
                <p class="text-left big-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque repellendus optio ut aperiam, aliquid debitis perferendis distinctio magnam officia modi! Adipisci suscipit dignissimos, consectetur maiores tempora quisquam totam? Veritatis, voluptatibus.</p>
            </div>
        </div>
        
        <container class="text-center justify-content-center">
            <div class="row pt-5 pb-5">
                <div class="col-md-6">
                    <img class="section-1-img" src="landscape1.jpg" alt="section 1 image 1">
                    <div class="panel pt-5 pb-5">
                        <h1 class="text-center pb-4">Our History</h1>
                        <!-- paragraph with top padding of 4px (') -->
                        <p class="text-left ml-4 mr-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum architecto quia numquam eaque impedit ea quos fugit non, voluptatibus eius! Excepturi reiciendis labore debitis ratione voluptas. Nemo qui hic natus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quos dolore voluptas. Corrupti, culpa vero unde omnis perferendis voluptatum illum commodi eveniet quis quas minus quae quia officia! Suscipit, magni! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ea? Nulla neque ipsa facilis molestias quasi. Voluptate eius dolor asperiores suscipit minima sunt vitae doloribus nemo iste, facilis, optio omnis?</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="section-1-img" src="landscape2.jpg" alt="section 1 image 2">
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

    <section id="services-section" class="section-2 container-fluid">
        
        <div class="row pt-5 pb-5">
            <div class="col-md-12 col-sm-12">
                <h1 class="text-center">Our Services</h1><br>
                <p class="big-margin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fuga corporis, vitae voluptas necessitatibus blanditiis delectus reiciendis. Fugiat explicabo labore doloremque quas sunt nemo magnam aperiam consequuntur, inventore modi voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
            </div>
        </div>

        <div class="container-fluid text-center pt-5 pb-5">
            
            <!-- desktop shadow over this section -->
            <div class="desktop shadow-lg pt-5 pb-5">
                <!-- addign a flex container with wrapping and centered (d-flex flex-md-row flex-wrap justify-content-center) -->
                <div id="satisfaction" class="cards d-flex flex-md-row flex-wrap justify-content-center section-color">
                    <div class="card">
                        <img src="satisfaction.png" alt="card image top" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Satisfaction<br>Guarantee</h3>
                            <p class="card-text">services galore</p>
                            <button class="btn btn-primary text-center p-3"><i class="fas fa-info p-1"></i>More Info</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="satisfaction.png" alt="card image top" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Friendly<br>Staff</h3>
                            <p class="card-text">services galore</p>
                            <button class="btn btn-primary text-center p-3"><i class="fas fa-info p-1"></i>More Info</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="satisfaction.png" alt="card image top" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Great<br>Service</h3>
                            <p class="card-text">services galore</p>
                            <button class="btn btn-primary text-center p-3"><i class="fas fa-info p-1"></i>More Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Testimony -->

        <div class="row pt-5 pb-5">
            <div class="col-md-12">
                <h1 class="text-center ml-10">What our Customers Say</h1><br>
            </div>
        </div>

        <div id="testimonials" class="container-fluid text-center pt-5 pb-5">

            <div class="row flex-wrap justify-content-center">
                <div class="col-md-3">
                    <div class="testimonial desktop shadow-lg">
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
                    <div class="testimonial desktop shadow-lg">
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
                    <div class="testimonial desktop shadow-lg">
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
                    <div class="testimonial desktop shadow-lg">
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

    <section id="app-section" class="section-3 container-fluid text-center">
        <div class="row pt-5 pb-5">
            <div class="col-md-12 col-sm-12">
                <h1>Download Our App</h1><br>
                <p class="big-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi consequuntur facilis possimus, non incidunt delectus excepturi quibusdam ea quae quisquam rerum alias asperiores, numquam sapiente quaerat ut maiores doloremque itaque? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero eveniet libero asperiores debitis perspiciatis, in beatae ex aspernatur rerum quia qui laudantium nobis recusandae corrupti natus porro laboriosam iusto facere.</p>
            </div>
        </div>
        <!-- Platform row -->
        <div id="app-icon-row" class="row platform pt-5 pb-5">
            <div class="col-md-6 col-sm-12 text-right">
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
            <div class="col-md-6 col-sm-12 text-left">
                <!-- Subtle shadow effect over this section of the page -->
                <div class="desktop shadow-lg">
                    <div class="d-flex flex-row flex-wrap justify-content-center pt-5 pb-5">
                        <!-- Desktop icon that is 3x larger than normal (fa-3x) -->
                        <div class="text text-left">
                            <center>
                                <h3 class="pt-2 m-0"><i class="fas fa-mobile fa-2x py-2 pr-3"></i>Mobile</h3>
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

    <section id="faces-section" class="section-4">
        
        <!-- Title -->

        <div class="row pt-5 pb-5">
            <div class="col-md-12 col-sm-12">
                <h1 class="text-center">Our Team</h1><br>
            </div>
        </div>

        <!-- Face Images -->

        <div class="container text-center flex-wrap">
            
            <div class="row team-row pt-5 pb-5">
            
                <!-- Face 1 -->

                <div class="col-md-4">
                    <div id="face1" class="img-col desktop shadow-md">
                        
                        <!-- STOPGAP -->
                        <img src="face1.jpg" alt="Image from Unsplash" height="400" width="300">
                        <div class="description pt-2 pb-2">
                            <h3 class="text-center pt-2 pb-2">Jake</h3>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est doloribus quis, doloremque dolorem dicta provident repudiandae veniam at reiciendis eum officia consectetur fugiat harum rem exercitationem labore. Ipsam, facilis!</p>
                        </div>
                    </div>
                </div>
                
                <!-- Face 2 -->
                
                <div class="col-md-4">
                    <div id="face2" class="img-col desktop shadow-md">
                        
                        <!-- STOPGAP -->
                        <img src="face2.jpg" alt="Image from Unsplash" height="400" width="300">
                        <div class="description pt-2 pb-2">
                            <h3 class="text-center pt-2 pb-2">Madison</h3>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est doloribus quis, doloremque dolorem dicta provident repudiandae veniam at reiciendis eum officia consectetur fugiat harum rem exercitationem labore. Ipsam, facilis!</p>
                        </div>
                    
                    </div>
                </div>
                
                <!-- Face 3 -->
                
                <div class="col-md-4">
                    <div id="face3" class="img-col desktop shadow-md">
                    
                        <!-- STOPGAP -->
                        <img src="face3.jpg" alt="Image from Unsplash" height="400" width="300">

                        <div class="description pt-2 pb-2">
                            <h3 class="text-center pt-2 pb-2">Olivia</h3>
                            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est doloribus quis, doloremque dolorem dicta provident repudiandae veniam at reiciendis eum officia consectetur fugiat harum rem exercitationem labore. Ipsam, facilis!</p>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- LOADS FOOTER IN WP -->
<?php 

    get_footer();

?>
