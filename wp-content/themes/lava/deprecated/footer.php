<!-- Footer -->

<!-- Get Footer PHP Function -->
<?php 

    get_footer();

?>

<footer>
    <div id="footer-container" class="container-fluid">
        <div class="row p-5">
            <!-- Conclusion Text -->
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
                <div id="footer-content-center" class="footer-module col-md-5">

                    <h2 class="text-light">Contact Us</h2><br>
                    <p>If you have a question, do not hesitate. We will anser ASAP!</p><br>
                    
                    <div class="row">
                        <div class="col-md-6">
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
                                            <span class="input-group-text" id="email">Email</span>
                                        </div>
                                        <input type="text" class="form-control bg-dark text-light" onfocus="this.value=''" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                                    </div>
                                
                                    <!-- Name -->
                                    <!-- <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" name="name" onfocus="this.value=''" placeholder="(Required) Your Name" class="form-control bg-dark text-white" required> 
                                    </div> -->
            
                                    <!-- Email -->
                                    <!-- <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" name="email" onfocus="this.value=''" placeholder="(Required) Your Email" class="form-control bg-dark text-white" required>
                                    </div> -->
                                </form>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                                <!-- Message -->
                                <div class="form-group">
                                    <textarea id="message" class="form-control bg-dark text-light" onfocus="this.value=''" name="message" id="message-area" onfocus="this.value=''" cols="30" rows="5" placeholder="(Optional) Leave a Message..."></textarea>
                                </div>
        
                                <!-- Arrow -->
                                <div class="form-group">
                                    <span class="input-group-text">
                                        <button type="submit" id="form-button" class="btn btn-default" href="#" onclick="formSubmit()">
                                            <i class="fas fa-arrow-right bg-light"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Social -->
                <div id="footer-content-right" class="footer-module col-md-2 text-right">
            
                    <h2 class="text-light">Follow Us!</h2><br>
            
                    <div id="footer-social" class="footer-content column">
                        
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

                <!-- WONT FLOAT RIGHT -->
                <p id="footer-copyright" class="text-center ml-4 mr-4">
            
                    <h6>&copy;2022 | This page was made by <span>Cinderblock Labs</span></h6>    
            
                </p> 
            </div>
        </div>
    </div>
</footer>