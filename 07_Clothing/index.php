<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>İnanılmaz bir ödev</title>

  <!-- Bootstrap CSS 'file' -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Files (overrides CSS) -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

  <!-- Header/Navbar -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Ceylan <em>Clothing</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Products</h2>
            <a id="cart-btn-right" href="#"> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                data-target="#cart">Cart
                (<span class="total-count"></span>)</button>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Boots</h4>
              </a>
              <h6>$35.75</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span><button class="btn btn-danger add-to-cart" data-name="Boots" data-price="35.75">Add to
                  Cart</button></span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Beret</h4>
              </a>
              <h6>$12.25</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span><button class="btn btn-danger add-to-cart" data-name="Beret" data-price="12.25">Add to
                  Cart</button></span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Scarf</h4>
              </a>
              <h6>$20.45</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span><button class="btn btn-danger add-to-cart" data-name="Scarf" data-price="20.45">Add to
                  Cart</button></span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Snowman</h4>
              </a>
              <h6>$4.75</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span><button class="btn btn-danger add-to-cart" data-name="Orange" data-price="4.75">Add to
                  Cart</button></span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Sweater</h4>
              </a>
              <h6>$25.50</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span><button class="btn btn-danger add-to-cart" data-name="Sweater" data-price="25.50">Add to
                  Cart</button></span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Snow finch</h4>
              </a>
              <h6>$4.75</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span><button class="btn btn-danger add-to-cart" data-name="Snowfinch" data-price="4.75">Add to
                  Cart</button></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Example Placeholder</h4>
            <p>This website was built with Bootstrap using a free front-end template. 
              Changes were made in the first files according to the requirements. 
              Javascript, AJAX and PHP files have been added for various serverside operations.
              <a rel="nofollow" href="https://github.com/DevCeylan" target="_blank">Contact us</a> for more info.</p>
            <ul class="featured-list">
              <li>All pages have responsive design</li>
              <li><a href="#">Login/Resgister functions</a></li>
              <li><a href="#">User table (database) for login control</a></li>
              <li><a href="#">Functional shopping cart</a></li>
              <li><a href="#">Order table to control transactions </a></li>
            </ul>
            <a href="#" class="filled-button">Read More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/feature-image.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="show-cart table">

          </table>
          <div>Total price: $<span class="total-cart"></span></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="btn-order" type="button" class="btn btn-primary" data-dismiss="modal">Order now</button>
        </div>
      </div>
    </div>
  </div>



  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
                <h4>Creative &amp; Unique <em>Ceylarino</em> Products</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.
                </p>
              </div>
              <div class="col-md-4">
                <a href="#" class="filled-button">Purchase Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright &copy; 2021 Bil387 - Başkent Üniversitesi

              - Manipulation :D : <a rel="nofollow noopener" href="https://github.com/DevCeylan" target="_blank">Mehmet
                Ceylan</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>
  <script src="cart.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>