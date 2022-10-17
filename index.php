<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0,  target-densitydpi=device-dpi">
  <title>Galaxy.mu</title>
  <link rel="icon" href="img/favicon.ico" type="image/ico">

  <!-- *************** Font Awesome *************** -->
  <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- *************** Bootstrap *************** -->
  <link rel="stylesheet" href="js/vendor/bootstrap/dist/css/bootstrap.min.css" />

  <!-- *************** slick slider *************** -->
  <link rel="stylesheet" href="js/vendor/slick/slick-theme.css" />
  <link rel="stylesheet" href="js/vendor/slick/slick.css" />
  <!-- *************** Google Font *************** -->
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">
  <!-- *************** Start Common CSS *************** -->
  <link rel="stylesheet" href="css/common/main.css" type="text/css" />
  <link rel="stylesheet" href="css/common/header-footer.css" type="text/css" />
  <link rel="stylesheet" href="css/pages/home.css" type="text/css" />
</head>

<body>
<?php include('./header.php'); ?>
  <!-- ======= start banner ======= -->
  <section class="banner-section">
    <div class="container">

      <div class="d-flex flex-wrap justify-content-between">
        
        <!-- add left-menu in here -->
        <?php include('./side-nav.php'); ?>

        <div class="left-content main-slide">
          <a href=""><img src="img/banner.png" alt=""></a>
          <a href=""><img src="img/banner-4.png" alt=""></a>
        </div>
        <div class="right-content">
          <div class="top">
            <a href=""><img src="img/banner-2.png" alt="" class="img-full"></a>
          </div>
          <div class="bottom position-relative">
            <a href=""><img src="img/banner-3.png" alt="" class="img-full"></a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- ======= end banner ======= -->

  <!-- ======= start popular items ======= -->
  <section class="popular-item">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="d-flex justify-content-center align-items-center">
            <img src="img/fast-delivery.png" alt="" class="mr-2">
            <div>
              <p class="text-uppercase mb-0">Free Delivery</p>
              <small class="text-muted">Free Delivery for purchase
                above Rs. 2,000</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-center align-items-center">
            <img src="img/money-back.png" alt="" class="mr-2">
            <div>
              <p class="text-uppercase mb-0">Cash back</p>
              <small class="text-muted">Free Delivery for purchase
                above Rs. 2,000</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-center align-items-center">
            <img src="img/bubble-chat.png" alt="" class="mr-2">
            <div>
              <p class="text-uppercase mb-0">chat support</p>
              <small class="text-muted">Free Delivery for purchase
                above Rs. 2,000</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= end popular items ======= -->

  <!-- best sellers start -->
  <section class="section-padding">
    <div class="container">
      <div class="title-wrap d-lg-flex justify-content-between align-items-center border-bottom">
        <h2 class="title mb-0">Best Sellers</h2>
        <div class="position-relative">
          <div class="select-item d-flex hide-desktop">
            <p type="text" class="form-control">All</p>
            <button class="menu-toggle"><span class="fa fa-caret-down"></span></button>
          </div>
          <ul class="menu-item">
            <li><a href="javascript:void(0)" class="active">All</a></li>
            <li><a href="javascript:void(0)">Smart Phones</a></li>
            <li><a href="javascript:void(0)">Tablet</a></li>
            <li><a href="javascript:void(0)">Laptop</a></li>
            <li><a href="javascript:void(0)">TV</a></li>
            <li><a href="javascript:void(0)">House hold</a></li>
          </ul>
        </div>
      </div>
      <div class="product">
        <div class="product-item">
          <div class="img-wrap">
            <img src="img/laptop.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">

          <div class="img-wrap">
            <img src="img/phone.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">

          <div class="img-wrap"><img src="img/iron.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img-wrap"><img src="img/watch.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img-wrap"><img src="img/vacuum.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">

          <div class="img-wrap"><img src="img/laptop.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">

          <div class="img-wrap"><img src="img/phone.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- best sellers end -->

  <!-- category search start -->
  <section class="category-search section-padding pt-0">
    <div class="container">
      <div class="title-wrap d-lg-flex justify-content-between align-items-center border-bottom">
        <h2 class="title mb-0">Popular Categories</h2>
        <div class="position-relative">
          <div class="select-item d-flex hide-desktop">
            <p type="text" class="form-control">All</p>
            <button class="menu-toggle"><span class="fa fa-caret-down"></span></button>
          </div>
          <ul class="menu-item">
            <li><a href="javascript:void(0)" class="active">All</a></li>
            <li><a href="javascript:void(0)">Smart Phones</a></li>
            <li><a href="javascript:void(0)">Tablet</a></li>
            <li><a href="javascript:void(0)">Laptop</a></li>
            <li><a href="javascript:void(0)">TV</a></li>
            <li><a href="javascript:void(0)">House hold</a></li>
          </ul>
        </div>
      </div>

      <div class="">
        <!-- all -->
        <div class="row">
          <div class="col-md-6 position-relative">
            <img src="img/category-tablet.png" alt="" class="img-full">
            <div class="category-content">
              <div class="text-uppercase category-text mb-4">
                <h3>tablets</h3>
                <h4>sale upto 70%</h4>
              </div>
              <button class="btn btn-primary">Show Now</button>
            </div>
          </div>
          <div class="col-md-6 position-relative">
            <img src="img/category-phone.png" alt="" class="img-full">
            <div class="category-content">
              <div class="text-uppercase category-text mb-4">
                <h3>Smart Phones</h3>
                <h4>sale upto 70%</h4>
              </div>
              <button class="btn btn-primary">Show Now</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 position-relative">
            <img src="img/category-watch.png" alt="" class="img-full">
            <div class="category-content">
              <div class="text-uppercase category-text mb-3">
                <h4>watches</h4>
                <h5>sale upto 70%</h5>
              </div>
              <button class="btn btn-primary">Show Now</button>
            </div>
          </div>
          <div class="col-md-4 position-relative">
            <img src="img/category-headphone.png" alt="" class="img-full">
            <div class="category-content">
              <div class="text-uppercase category-text mb-3">
                <h4>headphone</h4>
                <h5>sale upto 70%</h5>
              </div>
              <button class="btn btn-primary">Show Now</button>
            </div>
          </div>
          <div class="col-md-4 position-relative">
            <img src="img/category-vacuum.png" alt="" class="img-full">
            <div class="category-content">
              <div class="text-uppercase category-text mb-3">
                <h4>vacuum</h4>
                <h5>sale upto 70%</h5>
              </div>
              <button class="btn btn-primary">Show Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- category search end -->

  <!-- fatured product start -->
  <section class="featured-wrap section-padding pt-0">
    <div class="container">
      <div class="title-wrap d-lg-flex justify-content-between align-items-center border-bottom">
        <h2 class="title mb-0">FEatured products</h2>
        <div class="position-relative">
          <div class="select-item d-flex hide-desktop">
            <p type="text" class="form-control">All</p>
            <button class="menu-toggle"><span class="fa fa-caret-down"></span></button>
          </div>
          <ul class="menu-item">
            <li><a href="javascript:void(0)" class="active">All</a></li>
            <li><a href="javascript:void(0)">Smart Phones</a></li>
            <li><a href="javascript:void(0)">Tablet</a></li>
            <li><a href="javascript:void(0)">Laptop</a></li>
            <li><a href="javascript:void(0)">TV</a></li>
            <li><a href="javascript:void(0)">House hold</a></li>
          </ul>
        </div>
      </div>
      <div class="product-list d-lg-flex">
        <div class="product-item featured-item col-md-2">
          <div class="h-100"><img src="img/featured-product.png" alt=""></div>
        </div>
        <div class="product-item-wrap col-md-10 p-0">
          <div class="product-item">
            <div class="img-wrap"><img src="img/laptop.png" alt="">
              <div class="btn-group-hover">
                <button class="">
                  <i class="fa fa-heart"></i>
                  <span>Add to wishlist</span>
                </button>
                <button class="">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Add to cart</span>
                </button>
                <button class="">
                  <i class="fa fa-eye"></i>
                  <span>Quick View</span>
                </button>
              </div>
            </div>
            <div class="item-detail">
              <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
              <h5 class="primary mt-2">34,000NRs</h5>
              <div class='rating-stars text-center'>
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='WOW!!!' data-value='5'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                </ul>
                <small class="grey text-uppercase">( 6 Reviews )</small>
              </div>
            </div>
          </div>
          <div class="product-item">
            <div class="img-wrap"><img src="img/phone.png" alt="">
              <div class="btn-group-hover">
                <button class="">
                  <i class="fa fa-heart"></i>
                  <span>Add to wishlist</span>
                </button>
                <button class="">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Add to cart</span>
                </button>
                <button class="">
                  <i class="fa fa-eye"></i>
                  <span>Quick View</span>
                </button>
              </div>
            </div>
            <div class="item-detail">
              <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
              <h5 class="primary mt-2">34,000NRs</h5>
              <div class='rating-stars text-center'>
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='WOW!!!' data-value='5'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                </ul>
                <small class="grey text-uppercase">( 6 Reviews )</small>
              </div>
            </div>
          </div>
          <div class="product-item">
            <div class="img-wrap"><img src="img/iron.png" alt="">
              <div class="btn-group-hover">
                <button class="">
                  <i class="fa fa-heart"></i>
                  <span>Add to wishlist</span>
                </button>
                <button class="">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Add to cart</span>
                </button>
                <button class="">
                  <i class="fa fa-eye"></i>
                  <span>Quick View</span>
                </button>
              </div>
            </div>
            <div class="item-detail">
              <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
              <h5 class="primary mt-2">34,000NRs</h5>
              <div class='rating-stars text-center'>
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='WOW!!!' data-value='5'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                </ul>
                <small class="grey text-uppercase">( 6 Reviews )</small>
              </div>
            </div>
          </div>
          <div class="product-item">
            <div class="img-wrap"><img src="img/watch.png" alt="">
              <div class="btn-group-hover">
                <button class="">
                  <i class="fa fa-heart"></i>
                  <span>Add to wishlist</span>
                </button>
                <button class="">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Add to cart</span>
                </button>
                <button class="">
                  <i class="fa fa-eye"></i>
                  <span>Quick View</span>
                </button>
              </div>
            </div>
            <div class="item-detail">
              <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
              <h5 class="primary mt-2">34,000NRs</h5>
              <div class='rating-stars text-center'>
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='WOW!!!' data-value='5'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                </ul>
                <small class="grey text-uppercase">( 6 Reviews )</small>
              </div>
            </div>
          </div>
          <div class="product-item">
            <div class="img-wrap"><img src="img/laptop.png" alt="">
              <div class="btn-group-hover">
                <button class="">
                  <i class="fa fa-heart"></i>
                  <span>Add to wishlist</span>
                </button>
                <button class="">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Add to cart</span>
                </button>
                <button class="">
                  <i class="fa fa-eye"></i>
                  <span>Quick View</span>
                </button>
              </div>
            </div>
            <div class="item-detail">
              <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
              <h5 class="primary mt-2">34,000NRs</h5>
              <div class='rating-stars text-center'>
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='WOW!!!' data-value='5'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                </ul>
                <small class="grey text-uppercase">( 6 Reviews )</small>
              </div>
            </div>
          </div>
          <div class="product-item">
            <div class="img-wrap"><img src="img/phone.png" alt="">
              <div class="btn-group-hover">
                <button class="">
                  <i class="fa fa-heart"></i>
                  <span>Add to wishlist</span>
                </button>
                <button class="">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Add to cart</span>
                </button>
                <button class="">
                  <i class="fa fa-eye"></i>
                  <span>Quick View</span>
                </button>
              </div>
            </div>
            <div class="item-detail">
              <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
              <h5 class="primary mt-2">34,000NRs</h5>
              <div class='rating-stars text-center'>
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                  <li class='star' title='WOW!!!' data-value='5'>
                    <a href=""><i class='fa fa-star fa-fw'></i></a>
                  </li>
                </ul>
                <small class="grey text-uppercase">( 6 Reviews )</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- fatured product end -->

  <!-- start flash sale -->
  <section class="flash-sale text-center text-white img-pos">

    <h4 class="text-uppercase">Flash sale</h4>
    <p class="mb-2">Ends on</p>
    <div id="timer" class="d-flex justify-content-center">
      <div id="days"></div>
      <div id="hours"></div>
      <div id="minutes"></div>
      <div id="seconds"></div>
    </div>
  </section>
  <section class="section-padding">
    <div class="container">
      <div class="product">
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/laptop.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/phone.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/iron.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/watch.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/vacuum.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/laptop.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/phone.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end flash sale -->





  <section>
    <a href=""><img src="img/ad.png" alt="" class="img-full"></a>
  </section>

  <!-- latest product start -->
  <section class="section-padding">
    <div class="container">
      <div class="title-wrap d-lg-flex justify-content-between align-items-center border-bottom">
        <h2 class="title mb-0">Latest Products</h2>
        <div class="position-relative">
          <div class="select-item d-flex hide-desktop">
            <p type="text" class="form-control">All</p>
            <button class="menu-toggle"><span class="fa fa-caret-down"></span></button>
          </div>
          <ul class="menu-item">
            <li><a href="javascript:void(0)" class="active">All</a></li>
            <li><a href="javascript:void(0)">Smart Phones</a></li>
            <li><a href="javascript:void(0)">Tablet</a></li>
            <li><a href="javascript:void(0)">Laptop</a></li>
            <li><a href="javascript:void(0)">TV</a></li>
            <li><a href="javascript:void(0)">House hold</a></li>
          </ul>
        </div>
      </div>
      <div class="product">
        <div class="product-item">
          <div class="img-wrap"><img src="img/laptop.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">
          <div class="img-wrap"><img src="img/phone.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">
          <div class="img-wrap"><img src="img/iron.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img-wrap"><img src="img/watch.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img-wrap"><img src="img/vacuum.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="img-wrap"><img src="img/laptop.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
        <div class="product-item">
          <span class="new-tag">-20%</span>
          <div class="img-wrap"><img src="img/phone.png" alt="">
            <div class="btn-group-hover">
              <button class="">
                <i class="fa fa-heart"></i>
                <span>Add to wishlist</span>
              </button>
              <button class="">
                <i class="fa fa-shopping-cart"></i>
                <span>Add to cart</span>
              </button>
              <button class="">
                <i class="fa fa-eye"></i>
                <span>Quick View</span>
              </button>
            </div>
          </div>
          <div class="item-detail">
            <p><a href="">Whirlpool 2500 Super Cool Refrigrirator</a></p>
            <h5 class="primary mt-2">34,000NRs</h5>
            <div class='rating-stars text-center'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <a href=""><i class='fa fa-star fa-fw'></i></a>
                </li>
              </ul>
              <small class="grey text-uppercase">( 6 Reviews )</small>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- latest product end -->

  <!-- brands start -->
  <section class="bg-gray">
    <div class="container">
      <div class="brands">
        <div>
          <img src="./img/samsung-1.png" alt="">
        </div>
        <div>
          <img src="./img/elba-1.png" alt="">
        </div>
        <div>
          <img src="./img/beko-1.png" alt="">
        </div>
        <div>
          <img src="./img/panasonic.png" alt="">
        </div>
        <div>
          <img src="./img/blackdecker.png" alt="">
        </div>
        <div>
          <img src="./img/Skyworth.png" alt="">
        </div>
        <div>
          <img src="./img/elba-1.png" alt="">
        </div>
        <div>
          <img src="./img/Skyworth.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- brands ends -->

  <!-- newsletter start -->
  <section class="bg-primary newsletter">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 d-flex text-white">
          <span class="fa fa-paper-plane-o font-xxl mr-3"></span>
          <div>
            <h5 class="text-uppercase">Sign up for our newsletter</h5>
            <h6 class="font-weight-normal mb-0">and be the <span class="text-yellow">first to get the deal</span></h6>
          </div>
        </div>
        <div class="col-md-5">
          <form action="" class="category email-col d-flex">
            <input type="email" placeholder="Your Email Address">
            <button class="btn btn-secondary">Subscribe</button>
          </form>
        </div>
        <div class="col-md-2 social-media text-right">
          <a href=""><span class="fa fa-facebook"></span></a>
          <a href=""><span class="fa fa-instagram"></span></a>
          <a href=""><span class="fa fa-youtube"></span></a>
        </div>
      </div>
    </div>

  </section>
  <!-- newsletter end -->

  <!-- footer start -->
  <?php include('./footer.php'); ?>
  


  <!--==== Script start ====-->
  <script>
    function myMap() {
      var mapProp = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 5,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
  </script>
  <script src="js/vendor/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="js/vendor/slick/slick.min.js" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/common/main.js" type="text/javascript"></script>
  <script src="js/pages/home.js" type="text/javascript"></script>
</body>

</html>