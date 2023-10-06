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
              <h1 class="fonts">Green Tea</h1>
           </div>
         </section>
         
       </div>
        <br>
       <h1 style="color: hwb(165 18% 44%);font-size: 50px;">About Green Tea</h1>
       <br>
       <p style="color: black; font-size: 20px;">Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.</p>
       <br>

         
       <div class="row1">
        <div class="column1">
          <img src="img/view1.jpg" alt="" style="height: 50%; width:100%">
        </div>
        <div class="column1">
          <img src="img/view1-1.jpg" alt="" style="height: 50%; width:100%">
        </div>
        <div class="column1">
          <img src="img/view1-2.jpg" alt="" style="height: 50%; width:100%">
        </div>
      </div>
      <br>
      <h1 style="color: hwb(165 18% 44%);font-size: 50px;">History</h1>
      <br>
      <p style="color: black; font-size: 20px;">Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process which is used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.</p>.</p>
      <h1 style="color: black;">History and origin of green tea</h1><br>
      <br><p style="color: black; font-size: 20px;" >Green tea has a long history, but historians believe only a few of them are true. There are several versions of the story surrounding the discovery of green tea. It was discovered 5,000 years ago, according to legend, and there is documentation and evidence to back up these assertions.

      The most accepted tale is that it was found by Shen Nung, a Chinese Emperor while sipping a hot cup of water one day. A camellia Sinensis blossom fell into his cup, infusing his drink with the distinct flavor of the tea. He instantly ordered his guards to locate the tea, which they did, and thus green tea was discovered. Another version tells the story of Shien Non-Shei, a normal Chinese man who eats the leaves of the camellia Sinensis, or tea plant, by accident. He was so taken with the flavor that he boiled the leaves in hot water and began to eat them. He later shared this drink with everyone else in the area.
      
      During the Tang Dynasty, around 800 A.D., a Chinese man named Lu Yu wrote an original book titled "Cha Jing," often known as "The Classic of Tea." This book is significant in the history of green tea. Lu Yu was adopted by a Buddhist monk as a child and grew up making and serving tea. His interest in tea grew as he grew older, and his ability to make tea improved. He chose to isolate himself from the rest of the world in order to conduct research and write down his findings. The earliest written work to explain green tea culture and art was "The Classic of Tea."
      
      Green tea's origins, according to some cultural historians, can also be traced back to 3000 years ago, when people who farmed it all across Southeast Asia chewed and ate fresh tea leaves for leisure. Freshly harvested leaves were not exposed to any type of processing prior to being steeped in hot water until considerably later.</p>
      <br>
      s
      <div class="video">
         
          <iframe width="560" height="315" src="https://www.youtube.com/embed/megEBleqFHA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <br>
      <h1 style="color: hwb(165 18% 44%);font-size: 50px;">Benefits Of Green Tea</h1><br>
      <p style="color: black;font-size: 20px;">Many studies have shown that green tea extract can promote weight loss, blood sugar regulation, disease prevention, and exercise recovery. It can also help keep your skin and liver healthy, reduce blood fat levels, regulate blood pressure, and improve brain health.</p>
      <br>
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