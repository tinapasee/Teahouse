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
          <h1 class="fonts">Store</h1>
       </div>
     </section>
         
       </div>

      <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-1.jpg" alt="">
                        <div class="p-4">
                            <h4 class="mb-3">Nature close tea</h4>
                            <p class="mb-4">Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="heads">₹144.00</h4>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Buy Now</a>
                        <div class="store-overlay">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-2.jpg" alt="">
                        <div class="p-4">
                            <h4 class="mb-3">Green tea tulsi</h4>
                            <p class="mb-4">Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="heads">₹400.00</h4>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Buy Now</a>
                        <div class="store-overlay">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-3.jpg" alt="">
                        <div class="p-4">
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p class="mb-4">Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="heads">₹599.00</h4>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Buy Now</a>
                        <div class="store-overlay">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
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