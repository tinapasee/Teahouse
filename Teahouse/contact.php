<?php
    session_start();

    if(isset($_SESSION["username"])){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css/style.css">
    <link rel="stylesheet" href="css/css.scss">
    <link rel="stylesheet" href="js/java.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Welcome to this site</title>
    
   
  </head>
    <body>
        <header class="header">
            <h2 class="logo"><a href="index.php">Tea House</a></h2>
          <ul class="main-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="store.php">Store</a></li>
              <li><a href="product.php">Products</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="profile.php">Profile</a></li>
          </ul>
        </header> 
        <section class="headline">
            <div class="texthover">
                <h1 class="fonts">Contact Us</h1>
             </div>
           </section>
         <div class="container-xxl contact py-5">
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">If You Have Any Query, Please Contact Us</h1>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-envelope fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">info@example.com</p>
                        <p class="mb-0">support@example.com</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-phone fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">+012 345 67890</p>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">123 Street</p>
                        <p class="mb-0">New York, USA</p>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-4">Need a functional contact form?</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <label for="email">Your email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.7355770398412!2d72.63484407505861!3d23.252707407701333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2bf53fb41c95%3A0xe8a2c131b19c109e!2sGovernment%20Polytechnic%20Gandhinagar!5e0!3m2!1sen!2sin!4v1690538165180!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="heads">Our Office</h4>
                  <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</p>
                  <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                  <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="heads">Quick Links</h4>
                  <ul style="list-style-type: none;">
                    <li><a class="Qlinks" href="">About Us</a></li>
                    <li><a class="Qlinks" href="">Contact Us</a></li>
                    <li><a class="Qlinks" href="">Our Services</a></li>
                    <li><a class="Qlinks" href="">Terms & Condition</a></li>
                    <li><a class="Qlinks" href="">Support</a></li>
                  </ul>
              </div>
    
              <div class="col-lg-3 col-md-6">
                  <h4 class="heads">Newsletter</h4>
                  <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                  <div class="position-relative w-100">
                      <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>
<?php
    }else{
        header("Location: ./register.html");
    }

?>