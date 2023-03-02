<?php
if (isset($_SESSION['auth_user1'])) {
    header('location:admin/index.php');
}
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Carousel wrapper -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image\image1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image\image2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image\image3.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="text-center mb-1">
    <h1 style="color:red">Categories</h1>
</div>
<div class="container text-center mb-1 ">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col">
            <img src="image\bells.jpg" class="d-block w-100" alt="Sunset Over the City" height=350px; />

        </div>
        <div class="col">
            <img src="image\artidiya.png" class="d-block w-100" alt="Sunset Over the City" height=350px; />

        </div>
        <div class="col">
            <img src="image\poojathali.jpg" class="d-block w-100" alt="Sunset Over the City" height=350px; />

        </div>
        <div class="col"> <img src="image\inscence.png" class="d-block w-100" alt="Sunset Over the City"
                height=350px; />
        </div>

    </div>
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="col" style="">Pooja Bell</div>
            <div class="col">Pooja Diya</div>
            <div class="col">Pooja Thali</div>
            <div class="col">Incense stands</div>
        </div>
    </div>
</div>

<hr>


<div class="container">
    <div class="row my-5">
        <h1 class="text-center">Featured Products</h1>
    </div>

    <div class="row g-4 my-5 mx-auto owl-carousel owl-theme">
        <div class="col product-item mx-auto">
            <div class="product-img">
                <img src="image\product slider image\silver page.png" alt="" class="img-fluid d-block mx-auto">
                <span class="heart-icon">
                    <i class="far fa-heart"></i>
                </span>
                <div class="row btns w-100 mx-auto text-center">
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-cart-plus"></i> Add to Cart
                    </button>
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-binoculars"></i> View
                    </button>
                </div>
            </div>

            <div class="product-info p-3">
                <span class="product-type">Electronics & Accessories</span>
                <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Pure Silver Plate with cups
                    $ Spoons (Set of 2 cups and 2 Spoons)</a>
                <span class="product-price">Rs: 250/-</span>
                <div class="rating d-flex mt-1">
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>(25 reviews)</span>
                </div>
            </div>
        </div>

        <div class="col product-item mx-auto">
            <div class="product-img">
                <img src="image\product slider image\agarbati stand.png" alt="" class="img-fluid d-block mx-auto">
                <span class="heart-icon">
                    <i class="far fa-heart"></i>
                </span>
                <div class="row btns w-100 mx-auto text-center">
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-cart-plus"></i> Add to Cart
                    </button>
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-binoculars"></i> View
                    </button>
                </div>
            </div>

            <div class="product-info p-3">
                <span class="product-type">Electronics & Accessories</span>
                <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series
                    3 White Sports Band</a>
                <span class="product-price">Rs: 250/-</span>
                <div class="rating d-flex mt-1">
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>(20 reviews)</span>
                </div>
            </div>
        </div>

        <div class="col product-item mx-auto">
            <div class="product-img">
                <img src="image\product slider image\Brass diya.png" alt="" class="img-fluid d-block mx-auto">
                <span class="heart-icon">
                    <i class="far fa-heart"></i>
                </span>
                <div class="row btns w-100 mx-auto text-center">
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-cart-plus"></i> Add to Cart
                    </button>
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-binoculars"></i> View
                    </button>
                </div>
            </div>

            <div class="product-info p-3">
                <span class="product-type">Electronics & Accessories</span>
                <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series
                    3 White Sports Band</a>
                <span class="product-price">Rs: 250/-</span>
                <div class="rating d-flex mt-1">
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>(10 reviews)</span>
                </div>
            </div>
        </div>

        <div class="col product-item mx-auto">
            <div class="product-img">
                <img src="image\product slider image\incense holder.png" alt="" class="img-fluid d-block mx-auto">
                <span class="heart-icon">
                    <i class="far fa-heart"></i>
                </span>
                <div class="row btns w-100 mx-auto text-center">
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-cart-plus"></i> Add to Cart
                    </button>
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-binoculars"></i> View
                    </button>
                </div>
            </div>

            <div class="product-info p-3">
                <span class="product-type">Electronics & Accessories</span>
                <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series
                    3 White Sports Band</a>
                <span class="product-price">Rs: 250/-</span>
                <div class="rating d-flex mt-1">
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>(5 reviews)</span>
                </div>
            </div>
        </div>

        <div class="col product-item mx-auto">
            <div class="product-img">
                <img src="image\product slider image\cupshaped.png" alt="" class="img-fluid d-block mx-auto">
                <span class="heart-icon">
                    <i class="far fa-heart"></i>
                </span>
                <div class="row btns w-100 mx-auto text-center">
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-cart-plus"></i> Add to Cart
                    </button>
                    <button type="button" class="col-6 py-2">
                        <i class="fa fa-binoculars"></i> View
                    </button>
                </div>
            </div>

            <div class="product-info p-3">
                <span class="product-type">Electronics & Accessories</span>
                <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series
                    3 White Sports Band</a>
                <span class="product-price">Rs: 250/-</span>
                <div class="rating d-flex mt-1">
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>
                        <i class="fa fa-star"></i>
                    </span>
                    <span>(15 reviews)</span>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container mt-2 mb-5" style>

    <div class="row my-5">
        <h1 class="text-center">Reviews</h1>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card p-3 text-center px-4">

                <div class="user-image">

                    <img src="https://i.imgur.com/PKHvlRS.jpg" class="rounded-circle" width="80">

                </div>

                <div class="user-content">

                    <h5 class="mb-0">Zenil Shah</h5>
                    <span>Software Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                </div>

                <div class="ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>

            </div>
        </div>

        <div class="col-md-4">

            <div class="card p-3 text-center px-4">

                <div class="user-image">

                    <img src="https://i.imgur.com/w2CKRB9.jpg" class="rounded-circle" width="80">

                </div>

                <div class="user-content">

                    <h5 class="mb-0">Shubham Chauhan</h5>
                    <span>Web Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                </div>

                <div class="ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card p-3 text-center px-4">

                <div class="user-image">

                    <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">

                </div>

                <div class="user-content">

                    <h5 class="mb-0">Harnil Kdia</h5>
                    <span>Software Architect</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                </div>

                <div class="ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===========================================about us ================================================= -->
<div class="container mb-5">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-3 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="image\inscence.png" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="image\poojathali.jpg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="image\bells.jpg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-1">
            <div class="section-title ml-lg-5">
                <h2 class="text-custom font-weight-normal mb-3 ">About Us</h2>
                <h4 class="title mb-4">
                    Our mission is to <br />
                    make your life easier.
                </h4>
                <h2>Pooja.com<h2>
                        <h4 class="text-muted mb-0">Brings you the best pooja experience with our best services and make
                            youe life more delight and joyfull. </h4>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--enr row-->
</div>

<!-- ====================================================================about us end ===================================== -->

<a href="https://web.whatsapp.com/" class="float" target="_blank">
    <i class="fa fa-whatsapp fa-x my-float"></i>
</a>



<?php
include('includes/footer.php');
include('includes/scripts.php');
?>