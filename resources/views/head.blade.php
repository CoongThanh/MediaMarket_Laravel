<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--   icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!--   banner -->
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <link href="/assets/vendor/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Slide -->
    <link rel="stylesheet" href="/assets/lib/slider/css/splide-core.min.css" />
    <link rel="stylesheet" href="/assets/lib/slider/css/splide.min.css" />
    <link rel="stylesheet" href="/assets/lib/slider/css/themes/splide-default.min.css" />
    <link rel="stylesheet" href="/assets/lib/slider/css/themes/splide-sea-green.min.css" />
    <link rel="stylesheet" href="/assets/lib/slider/css/themes/splide-skyblue.min.css" />

    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/style-detail.css" />
    <link rel="stylesheet" href="/assets/scss/style.scss" />
    <title>Mediamarket</title>
</head>

<body>
    <header>
        <div class="main-menu">
            <div class="menu-top">
                <ul class="menu-topleft">
                    <li><a href="">EN</a>
                        <ul class="sub-menu">
                            <li><a href="">VN</a></li>

                        </ul>
                    </li>
                    <li><a href="">USD</a></li>
                </ul>
                <ul class="menu-topright">
                    <li><a href="">Help & Contact</a></li>
                    <li><a href="">Order Status</a></li>
                    <li><a href="">My Account</a></li>

                </ul>
            </div>

            <div class="menu-main row">
                <div class="col-sm-3">
                    <h1><b>Media</b>market</1>
                </div>
                <div class="col-sm-6">
                    <div class="seach">
                        <form action="#" method=""
                            class="d-flex justify-content-between align-items-center flex-row w-100 h-100">
                            <input type="text" class="form-control" placeholder="Search for products...">
                            <select
                                class="position-absolute select-wrapper bg-transparent border-0 select-search cursor-pointer"
                                aria-label="Default select example" autocompleted="">
                                <option selected="">All Categories</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 tools">
                    <div class="interact">
                        <span style="position: absolute;">0</span>
                        <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>

                    </div>
                    <div class="interact">
                        <span style="position: absolute;">0</span>
                        <a href="#"><i class="fa-regular fa-heart"></i> </a>

                    </div>
                    <div class="interact">
                        <span style="position: absolute;background-color: red; color:#fff; border: none">2</span>
                        <a href="#"><i class="fa-solid fa-bag-shopping"></i> </a>

                    </div>
                    <p class="current-money">$0.00</p>
                </div>
            </div>
        </div>
        <nav class="menu-botton">
            <div class="row">
                <div class="col-sm-3 menu-btnleft text-left">
                    <li><a href="">Shop by category</a></li>
                </div>
                <div class="col-sm-9 menu-btnmain ">
                    <li><a href="">Home</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="">VN</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Pages</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="">Contact</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">404 Page</a></li>
                            <li><a href="">Coming Soon</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Brains</a></li>
                    <li><a href="">Today Deals</a></li>
                    <li><a href="">New Arrivals</a></li>
                    <a href=""><i class="menu-btnright fa-solid fa-ellipsis-vertical"></i></a>
                </div>
            </div>
        </nav>

    </header>
