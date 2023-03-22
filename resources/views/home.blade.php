<!DOCTYPE html>
<html lang="en">

@include('head')
<main>
    @include('sidebar')
    <div class="row category" style="flex-wrap: nowrap">
        <div class="row col-sm-4 type" style="background: #5b4bdf">
            <div class="col-sm-7 cate-infor">
                <h2 class="company"><b>dji</b> drone </h2>
                <span class="category-name">Reality Capture</span></br>
                <div class="discober">
                    <a href="" class="category-more">Discober now</a>
                </div>
            </div>
            <div class="col-sm-5 cate-pic">
                <img src="/assets/img/flycam.png" alt="Loading...">
            </div>
        </div>
        <div class="row col-sm-4 type" style="background: #42c673">
            <div class="col-sm-7 cate-infor">
                <h3 class="company"><b>osmo</b> mobile </h3>
                <span class="category-name">Beyond Smart</span></br>
                <div class="discober">
                    <a href="" class="category-more">Discober now</a>
                </div>
            </div>
            <div class="col-sm-5 cate-pic">
                <img src="/assets/img/flycam.png" alt="Loading...">
            </div>
        </div>
        <div class="row col-sm-4 type" style="background: #2090da">
            <div class="col-sm-7 cate-infor">
                <h3 class="company"><b>s3 </b>flexible</h3>
                <span class="category-name">Reality Capture</span></br>
                <div class="discober">
                    <a href="" class="category-more">Discober now</a>
                </div>
            </div>
            <div class="col-sm-5 cate-pic">
                <img src="/assets/img/flycam.png" alt="Loading...">
            </div>
        </div>
    </div>

    <!-- Best Selling Products -->
    <div class="row full-category">
        <div class="col-sm-2 selling-product">
            <h1><b>2017's</b><br>Best Selling Products</h1>
            <a href="">full catalog</a>
        </div>
        <div class="col-sm-10 list-product">
            <section class="splide" id="splide-best-selling" aria-labelledby="carousel-heading"
                style="width: 100%; padding: 0; margin-top: -17px;">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev"
                        style="margin-left: -14pc; margin-top: 2pc;
                                     background-color: #f5f5f5;
                                    border: 2px solid #eeeeee;
                                    font-size: 20px;
                                    color: #7f7f7f;
                                    border-radius: 50%;">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next"
                        style=" margin-right: 67pc; margin-top: 2pc;
                                    background-color: #f5f5f5;
                                    border: 2px solid #eeeeee;
                                    font-size: 20px;
                                    color: #7f7f7f;
                                    border-radius: 50%;">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide" style="display: flex;">

                            @foreach ($menus as $menu)
                                <div id="type-product" class="product" style="padding: 0;">
                                    <img src="/assets/img/flycam.png" alt="Loading..." style="width: 70%;">
                                    <p>{{ $menu->name }}</p>
                                </div>
                            @endforeach
                        </li>

                    </ul>

                </div>
            </section>
        </div>
    </div>
    <!-- End Best Selling Products -->

    <!-- Deal of the month -->
    <div class="row deals-month">
        <div class="col-sm-4 sale">
            <section id="splide-deal-month" class="splide" aria-label="Restriction Example">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="margin-top: -82%;">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="margin-top: -82%;">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="deal">
                                <h1><b>Deals </b>of the month</h1>
                            </div>
                            <div class="product-sale">
                                <div class="deal-sale--green" style="position: absolute;">
                                    <p class="deals-name">Sale</p>
                                    <p class="deals-price">$99.00</p>
                                </div>
                                <img src="/assets/img/flycam.png" alt="Loading...">
                                <div class="price">
                                    <h1 class="price-sale">$169.95</h1>
                                    <strike class="price-cost">$269.00</strike>
                                </div>
                                <div class="info">
                                    <p>ecobee3 lite Smart Thermostar</p>
                                </div>
                                <div class="status">
                                    <div class="available">
                                        <p>Available: <b>7</b></p>
                                    </div>
                                    <div class="already">
                                        <p>Already Sold: <b>2</b></p>
                                    </div>
                                </div>
                                <div class="remaining-quantity-range">
                                    <input type="range" value="7" disabled="">
                                </div>
                            </div>
                            <div class="end">
                                <h1>Hurry up!</h1>
                                <p>Offer Ends In:</p>
                            </div>
                            <div class="row time-sale">
                                <div class="col-sm-3 ">
                                    <p class="day"></p>
                                    <b>days</b>
                                </div>
                                <div class="col-sm-3">
                                    <p class="hours"></p>
                                    <b>hours</b>
                                </div>
                                <div class="col-sm-3">
                                    <p class="minutes"></p>
                                    <b>mins</b>
                                </div>
                                <div class="col-sm-3">
                                    <p class="seconds"></p>
                                    <b>secs</b>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
        <div class="col-sm-8 list-sale">
            <div class="row menu-product">
                <div class="col-sm-10 menu-change">
                    <li><a href="" style="color: red;">New Arrivals</a></li>
                    <li><a href="">On Sale</a></li>
                    <li><a href="">Best Rated</a></li>
                    <li><a href="">Popular Products</a></li>
                </div>
            </div>
            <div class="container-detail-month">
                <section id="list-splide-deal-month" class="splide" aria-label="Restriction Example"
                    style="padding: 0; width: 100%;">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="margin-top: -44%; margin-left: 91%;">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="margin-top: -44%;">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="product-list-sale">
                                    <div class="product">
                                        <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                                        <h4 class="price">$299.95</h4>
                                        <div class="info">
                                            <p>Beats Solo3 Wireless On-Ear Headphones</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                                        <h4 class="price">$299.95</h4>
                                        <div class="info">
                                            <p>Beats Solo3 Wireless On-Ear Headphones</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                                        <h4 class="price">$299.95</h4>
                                        <div class="info">
                                            <p>Beats Solo3 Wireless On-Ear Headphones</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-sale">
                                    <div class="product">
                                        <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                                        <h4 class="price">$299.95</h4>
                                        <div class="info">
                                            <p>Beats Solo3 Wireless On-Ear Headphones</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                                        <h4 class="price">$299.95</h4>
                                        <div class="info">
                                            <p>Beats Solo3 Wireless On-Ear Headphones</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                                        <h4 class="price">$299.95</h4>
                                        <div class="info">
                                            <p>Beats Solo3 Wireless On-Ear Headphones</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Deal of the month -->

    <!-- Best Sellers Products -->
    <div class="best-seller-product">
        <div class="best-seller">
            <h1><b>Best Sellers </b>Products</h1>
        </div>
        <section id="splide-best-seller" class="splide" aria-label="Restriction Example"
            style="width: 100%; padding: 0;">
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev" style="margin-top: -13%; margin-left: 94%;">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <button class="splide__arrow splide__arrow--next" style="margin-top: -13%;">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
            <div class="splide__track" style="width: 100%; padding: 0;">
                <ul class="splide__list">
                    <li class="splide__slide" style="display: flex;">
                        <div class="product">
                            <div class="product-tool">
                                <div class="change-hover-hot" style="position: absolute;">
                                    <a href=""><i class="fa-regular fa-heart"></i></a>
                                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                                <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                            </div>
                            <div class="price">
                                <h3 class="price-sale">$169.95</h3>
                                <strike class="price-cost">$269.00</strike>
                            </div>
                            <div class="info">
                                <p>Hover Camera Passport Personal Photographer</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-tool">
                                <div class="change-hover-hot" style="position: absolute;">
                                    <a href=""><i class="fa-regular fa-heart"></i></a>
                                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                                <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                            </div>
                            <div class="price">
                                <h3 class="price-sale">$169.95</h3>
                                <strike class="price-cost">$269.00</strike>
                            </div>
                            <div class="info">
                                <p>Hover Camera Passport Personal Photographer</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-tool">
                                <div class="change-hover-hot" style="position: absolute;">
                                    <a href=""><i class="fa-regular fa-heart"></i></a>
                                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                                <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                            </div>
                            <div class="price">
                                <h3 class="price-sale">$169.95</h3>
                                <strike class="price-cost">$269.00</strike>
                            </div>
                            <div class="info">
                                <p>Hover Camera Passport Personal Photographer</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-tool">
                                <div class="change-hover-hot" style="position: absolute;">
                                    <a href=""><i class="fa-regular fa-heart"></i></a>
                                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                                <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                            </div>
                            <div class="price">
                                <h3 class="price-sale">$169.95</h3>
                                <strike class="price-cost">$269.00</strike>
                            </div>
                            <div class="info">
                                <p>Hover Camera Passport Personal Photographer</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-tool">
                                <div class="change-hover-hot" style="position: absolute;">
                                    <a href=""><i class="fa-regular fa-heart"></i></a>
                                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                                <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                            </div>
                            <div class="price">
                                <h3 class="price-sale">$169.95</h3>
                                <strike class="price-cost">$269.00</strike>
                            </div>
                            <div class="info">
                                <p>Hover Camera Passport Personal Photographer</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-tool">
                                <div class="change-hover-hot" style="position: absolute;">
                                    <a href=""><i class="fa-regular fa-heart"></i></a>
                                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                                <img src="/assets/img/flycam.png" alt="Loading..." style="width: 80%;">
                            </div>
                            <div class="price">
                                <h3 class="price-sale">$169.95</h3>
                                <strike class="price-cost">$269.00</strike>
                            </div>
                            <div class="info">
                                <p>Hover Camera Passport Personal Photographer</p>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </section>

    </div>


    <!-- Today's Details -->
    <div class="today-details">
        <h1><b>Today's </b>Details</h1>
        <div class="menu-product">
            <div class="menu-change">
                <li><a href="" style="color: #000;">TV & Audio</a></li>
                <li><a href="">Computers & Laptops</a></li>
                <li><a href="">Camera & Photos</a></li>
                <li><a href="">Car Electronics & GPS</a></li>
            </div>
        </div>
        <div class="container-today-details">
            <section>
                <div id="pic-today-details" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <ul class="carousel-indicators">
                        <li data-target="#pic-today-details" data-slide-to="0" class="active"></li>
                        <li data-target="#pic-today-details" data-slide-to="1"></li>
                        <li data-target="#pic-today-details" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row today">
                                <div class="col-sm-3"
                                    style="display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <div><span>(5)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-slideshow row col-sm-6">
                                    <div class="col-sm-7 card-image">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/flycam.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/dienthoai.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                        <section id="thumbnail-carousel" class="splide"
                                            aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/flycam.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/dienthoai.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-sm-5 product-hori">
                                        <div class="detail">
                                            <p class="price" style="font-size: 20px;">$1 199.99</p>
                                            <p class="description" style="font-size: 16px;">55" Class MU85000
                                                Curved QLED 4K UHD TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                            <ul class="outstanding">
                                                <li>- Picture Quality Index: 1300 </li>
                                                <li>- Technological PurColour</li>
                                                <li>- Android TV</li>
                                            </ul>
                                            <button class="add-to-cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"
                                    style="display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row today">
                                <div class="col-sm-3"
                                    style="display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <div><span>(5)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-slideshow row col-sm-6">
                                    <div class="col-sm-7 card-image">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <section id="main-carousel2" class="splide" aria-label="My Awesome Gallery">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/flycam.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/dienthoai.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                        <section id="thumbnail-carousel2" class="splide"
                                            aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/flycam.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/dienthoai.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-sm-5 product-hori">
                                        <div class="detail">
                                            <p class="price" style="font-size: 20px;">$1 199.99</p>
                                            <p class="description" style="font-size: 16px;">55" Class MU85000
                                                Curved QLED 4K UHD TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                            <ul class="outstanding">
                                                <li>- Picture Quality Index: 1300 </li>
                                                <li>- Technological PurColour</li>
                                                <li>- Android TV</li>
                                            </ul>
                                            <button class="add-to-cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"
                                    style="display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row today">
                                <div class="col-sm-3"
                                    style="display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <div><span>(5)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-slideshow row col-sm-6">
                                    <div class="col-sm-7 card-image">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <section id="main-carousel3" class="splide" aria-label="My Awesome Gallery">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/flycam.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/dienthoai.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                        <section id="thumbnail-carousel3" class="splide"
                                            aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/flycam.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/dienthoai.png" alt="">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/assets/img/loabluetooth.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-sm-5 product-hori">
                                        <div class="detail">
                                            <p class="price" style="font-size: 20px;">$1 199.99</p>
                                            <p class="description" style="font-size: 16px;">55" Class MU85000
                                                Curved QLED 4K UHD TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                            <ul class="outstanding">
                                                <li>- Picture Quality Index: 1300 </li>
                                                <li>- Technological PurColour</li>
                                                <li>- Android TV</li>
                                            </ul>
                                            <button class="add-to-cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"
                                    style="display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-hori">
                                        <div class="col-sm-5 thumbnail">
                                            <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                        </div>
                                        <div class="col-sm-7 detail">
                                            <p class="price">$3 299.99</p>
                                            <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                            <div class="evaluate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Left and right controls -->
                    <!-- <a class="carousel-control-prev" href="#pic" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#pic" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a> -->
                </div>
            </section>
        </div>
    </div>

    <!-- Hot New Arrivals -->
    <div class="hot-new-arrivals">
        <div class="row hot-new">
            <div class="col-md-6 title-header">
                <h1><b>Hot </b>New Arrivals</h1>
            </div>
            <div class="col-md-6 menu-product">
                <div class="menu-change">
                    <li><a href="" style="color: #000;">Top 20</a></li>
                    <li><a href="">TV & Audio</a></li>
                    <li><a href="">Cameras & Photos</a></li>
                    <li><a href="">Movie and Music</a></li>
                </div>
            </div>
        </div>
        <div class="container-hot-new">
            <section>
                <div id="pic-hot-new" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#pic-hot-new" data-slide-to="0" class="active"></li>
                        <li data-target="#pic-hot-new" data-slide-to="1"></li>
                        <li data-target="#pic-hot-new" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="rơw product-list-hot">
                                <div class="" style="width: 22%; height: 100%;">
                                    <div class="product" style="height: 50%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 22%; height: 80%;">
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-hot" style="width: 34%; height: 80%;">
                                    <div class="change-hover-hot" style="position: absolute;">
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                        <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                    </div>
                                    <img src="/assets/img/loa.png" alt="Loading...">
                                    <div class="price">
                                        <h1 class="price-sale">$169.95</h1>
                                        <strike class="price-cost">$269.00</strike>
                                    </div>
                                    <div class="info">
                                        <p>ecobee3 lite Smart Thermostar</p>
                                    </div>
                                </div>
                                <div class="" style="width: 22%; height: 80%;">
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="rơw product-list-hot">
                                <div class="" style="width: 22%; height: 100%;">
                                    <div class="product" style="height: 50%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 22%; height: 80%;">
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-hot" style="width: 34%; height: 80%;">
                                    <div class="change-hover-hot" style="position: absolute;">
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                        <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                    </div>
                                    <img src="/assets/img/loa.png" alt="Loading...">
                                    <div class="price">
                                        <h1 class="price-sale">$169.95</h1>
                                        <strike class="price-cost">$269.00</strike>
                                    </div>
                                    <div class="info">
                                        <p>ecobee3 lite Smart Thermostar</p>
                                    </div>
                                </div>
                                <div class="" style="width: 22%; height: 80%;">
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="rơw product-list-hot">
                                <div class="" style="width: 22%; height: 100%;">
                                    <div class="product" style="height: 50%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="width: 22%; height: 80%;">
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-hot" style="width: 34%; height: 80%;">
                                    <div class="change-hover-hot" style="position: absolute;">
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                        <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                    </div>
                                    <img src="/assets/img/loa.png" alt="Loading...">
                                    <div class="price">
                                        <h1 class="price-sale">$169.95</h1>
                                        <strike class="price-cost">$269.00</strike>
                                    </div>
                                    <div class="info">
                                        <p>ecobee3 lite Smart Thermostar</p>
                                    </div>
                                </div>
                                <div class="" style="width: 22%; height: 80%;">
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>
                                    <div class="product" style="height: 40%;">
                                        <div class="change-hover-hot" style="position: absolute;">
                                            <a href=""><i class="fa-regular fa-heart"></i></a>
                                            <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                        </div>
                                        <img src="/assets/img/flycam.png" alt="Loading...">
                                        <h3 class="price">$299.95</h3>
                                        <div class="info">
                                            <p>Nest Learning thermostat 3rd generation</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <!-- <a class="carousel-control-prev" href="#pic" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#pic" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a> -->
                </div>
            </section>
        </div>
    </div>
    <!-- End Hot New Arrivals -->

    <!-- Recommended based on recent browsing -->
    <div class="recommended">
        <div class="container-detail">
            <section>
                <div id="pic-recommended" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#pic-recommended" data-slide-to="0" class="active"></li>
                        <li data-target="#pic-recommended" data-slide-to="1"></li>
                        <li data-target="#pic-recommended" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row recommended-list">
                                <div class="col-md-3 title">
                                    <h1><b>Recommended based </b>on recent browsing</h1>
                                    <img src="/assets/img/flycam2.png" alt="Loading...">
                                </div>
                                <div class="col-md-9 list-product">
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row recommended-list">
                                <div class="col-md-3 title">
                                    <h1><b>Recommended based </b>on recent browsing</h1>
                                    <img src="/assets/img/flycam2.png" alt="Loading...">
                                </div>
                                <div class="col-md-9 list-product">
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row recommended-list">
                                <div class="col-md-3 title">
                                    <h1><b>Recommended based </b>on recent browsing</h1>
                                    <img src="/assets/img/flycam2.png" alt="Loading...">
                                </div>
                                <div class="col-md-9 list-product">
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product-tool">
                                            <img src="/assets/img/flycam.png" alt="Loading...">
                                            <!-- <i class="fa-regular fa-heart"></i> -->
                                        </div>
                                        <div class="price">
                                            <h4 class="price-sale">$499.95</h4>
                                        </div>
                                        <div class="info">
                                            <p>DJI Goggles Immersive FPT</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <!-- <a class="carousel-control-prev" href="#pic" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#pic" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a> -->
                </div>
            </section>
        </div>
    </div>
    <!-- End Recommended based on recent browsing -->

    <!-- Trending Items -->
    <div class="trending">
        <div class="row trending-header">
            <div class="col-md-6 title-header">
                <h1><b>Trending </b>Items</h1>
            </div>
            <div class="col-md-6 menu-product">
                <div class="menu-change">
                    <li><a href="" style="color: #000;">Top 20</a></li>
                    <li><a href="">TV & Audio</a></li>
                    <li><a href="">Cameras & Photos</a></li>
                    <li><a href="">Movie and Music</a></li>
                </div>
            </div>
        </div>
        <div class="list-product">
            <div class="product">
                <div class="change-hover-hot" style="position: absolute;">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                </div>
                <div class="product-tool">
                    <img src="/assets/img/flycam.png" alt="Loading...">
                </div>
                <div class="price">
                    <h3 class="price-sale">$499.95</h3>
                </div>
                <div class="info">
                    <p>HP ENVY 7644 All-in-One Printer</p>
                </div>
            </div>
            <div class="product">
                <div class="change-hover-hot" style="position: absolute;">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                </div>
                <div class="product-tool">
                    <img src="/assets/img/flycam.png" alt="Loading...">
                </div>
                <div class="price">
                    <h3 class="price-sale">$499.95</h3>
                </div>
                <div class="info">
                    <p>HP ENVY 7644 All-in-One Printer</p>
                </div>
            </div>
            <div class="product">
                <div class="change-hover-hot" style="position: absolute;">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                </div>
                <div class="product-tool">
                    <img src="/assets/img/flycam.png" alt="Loading...">
                </div>
                <div class="price">
                    <h3 class="price-sale">$499.95</h3>
                </div>
                <div class="info">
                    <p>HP ENVY 7644 All-in-One Printer</p>
                </div>
            </div>
            <div class="product">
                <div class="change-hover-hot" style="position: absolute;">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                </div>
                <div class="product-tool">
                    <img src="/assets/img/flycam.png" alt="Loading...">
                </div>
                <div class="price">
                    <h3 class="price-sale">$499.95</h3>
                </div>
                <div class="info">
                    <p>HP ENVY 7644 All-in-One Printer</p>
                </div>
            </div>
            <div class="product">
                <div class="change-hover-hot" style="position: absolute;">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                </div>
                <div class="product-tool">
                    <img src="/assets/img/flycam.png" alt="Loading...">
                </div>
                <div class="price">
                    <h3 class="price-sale">$499.95</h3>
                </div>
                <div class="info">
                    <p>HP ENVY 7644 All-in-One Printer</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Trending Items -->

    <!-- Recently Viewed Products -->
    <div class="recently-viewed">
        <div class="row recently-viewed-top">
            <div class="col-md-6 title-header">
                <h1><b>Recently Viewed </b>Products</h1>
            </div>
        </div>
        <div class="list-product-hori">
            <section id="splide-recently-viewed" class="splide" aria-label="Basic Structure Example"
                style="padding: 0;">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="margin-top: -10%; margin-left: 94%;">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="margin-top: -10%;">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="row splide__slide">
                            <div class="row col-sm-4 product-hori">
                                <div class="col-sm-5 thumbnail">
                                    <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                </div>
                                <div class="col-sm-7 detail">
                                    <p class="price">$599.95</p>
                                    <p class="description">DJI Zenmuse X4S Camera</p>
                                    <div class="evaluate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(Based on 5 reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-sm-4 product-hori">
                                <div class="col-sm-5 thumbnail">
                                    <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                </div>
                                <div class="col-sm-7 detail">
                                    <p class="price">$3 299.99</p>
                                    <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                    <div class="evaluate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(Based on 5 reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-sm-4 product-hori">
                                <div class="col-sm-5 thumbnail">
                                    <img src="/assets/img/loabluetooth.png" alt="" width="100%">
                                </div>
                                <div class="col-sm-7 detail">
                                    <p class="price">$3 299.99</p>
                                    <p class="description">65" Class Q8C Curved QLED 4K TV</p>
                                    <div class="evaluate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(Based on 5 reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    </div>
    <!-- End Recently Viewed Products -->

</main>

@include('footer')

</body>

</html>
