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
              <h1 class="fonts">Our Products</h1>
           </div>
         </section>
         
       </div>
         
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
            <div class="card">
              <img src="img/product-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Green Tea</h5>
                <p class="card-text">Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asi.</p>
               
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="img/product-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Black Tea</h5>
                <p class="card-text">Black tea, is a type of tea that is more oxidized than oolong, yellow, white and green teas. Black tea is generally stronger in flavour than other teas. All five types are made from leaves of the shrub Camellia sinensis, though Camellia taliensis is also used rarely.</p>
                
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="img/product-3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Herbal Tea</h5>
                <p class="card-text">Herbal teas, also known as herbal infusions and less commonly called tisanes, are beverages made from the infusion or decoction of herbs, spices, or other plant material in hot water. Oftentimes herb tea, or the plain term tea, is used as a reference to all sorts of herbal teas. Many herbs are used in herbal medicine.</p>
               
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