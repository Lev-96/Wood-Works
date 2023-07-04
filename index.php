<?php
    require_once __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wood Works</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./image/Favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    <!-- /* **************************************** HEADER START *********************************** */ -->

    <header>
        <div class="container">
            <div class="text">
                <p>Default Welcome Message</p>
            </div>
            <div class="country">
                <select name="country" id="country">
                    <option value="English">English</option>
                    <option value="Հայերեն">Հայերեն</option>
                    <option value="Русский">Русский</option>
                </select>
                <span>|</span>
                <select name="valute" id="course">
                    <option value="usd">USD</option>
                    <option value="amd">AMD</option>
                    <option value="rub">RUB</option>
                </select>
            </div>
        </div>
        <div class="heading">
            <div class="logo">
                <img class="header_logo" src="./image/Favicon/favicon.ico" alt="">
                <h1>Wood Works</h1>
            </div>
            <div class="icons">
                <ul>
                    <li>
                        <a href="#" onclick="showSearch()" id="openSearch">
                            <i class="ri-search-line"></i>
                            <span>|</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="bag" onclick="showCart()">
                            <div id="counts">0</div>
                            <i class="ri-shopping-bag-line"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <nav>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#">Home <i class="fa-solid fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="#">Home1</a>
                            </li>
                            <li>
                                <a href="#">Home2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Home Furniture <i class="fa-solid fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="#">Bedroom</a>
                            </li>
                            <li>
                                <a href="#">Dining</a>
                            </li>
                            <li>
                                <a href="#">Living</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Office Furniture <i class="fa-solid fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="#">Lounge</a>
                            </li>
                            <li>
                                <a href="#">Office Chair</a>
                            </li>
                            <li>
                                <a href="#">Office Table</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Hospital Furniture <i class="fa-solid fa-angle-down"></i></a>
                        <ul>
                            <li>
                                <a href="#">Hospital Bed</a>
                            </li>
                            <li>
                                <a href="#">Hospital Utility</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </header>
    <!-- /* **************************************** /HEADER START *********************************** */ -->

    <!-- Header-Carousel  (Start) -->

    <main>
        <div class="animate">
            <h4 class="animate__animated animate__fadeInUp">New Products</h4>
            <h2 class="animate__animated animate__fadeInUp">Flexible Chair</h2>
            <p class="animate__animated animate__fadeInUp">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
            <a class="animate__animated animate__fadeInUp">Shop Now</a>
        </div>
        <div class="animate__animated animate__fadeInUp slide"></div>
    </main>

    <div class="itemses"></div>

    <!-- Header-Carousel (End) -->
    <!-- /* **************************************** SECTION START *********************************** */ -->
    <section>
        <div class="container">
            <ul class="services">
                <li>
                    <div class="overlay"></div>
                    <a href="#">
                        <img src="./image/1.png">
                        <p>Bedroom</p>
                    </a>
                </li>
                <li>
                    <div class="overlay"></div>
                    <a href="#">
                        <img src="./image/2.png">
                        <p>Living</p>

                    </a>
                </li>
                <li>
                    <div class="overlay"></div>
                    <a href="#">
                        <img src="./image/3.png">
                        <p>Dining</p>
                    </a>
                </li>
                <li>
                    <div class="overlay"></div>
                    <a href="#">
                        <img src="./image/4.png">
                        <p>Lounge</p>

                    </a>
                </li>
                <li>
                    <div class="overlay"></div>
                    <a href="#">
                        <img src="./image/5.png">
                        <p>Office Chair</p>
                    </a>
                </li>
            </ul>

            <div class="products">
                <div class="lorem">
                    <h2>Our Products</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste officia culpa nesciunt, explicabo
                        vitae deserunt libero?</p>
                </div>
                <div class="links">
                    <a class="active" href="javascript:void(0)" id="all" onclick="getData('All', this)">All Products</a>
                    <a href="javascript:void(0)" onclick="getData('New Arrival', this)">New Arrival</a>
                    <a href="javascript:void(0)" onclick="getData('Featured', this)">Featured</a>
                    <a href="javascript:void(0)" onclick="getData('On Sale', this)">On Sale</a>
                    <a href="javascript:void(0)" onclick="getData('Tending', this)">Tending</a>
                </div>
            </div>
            <div class="items"></div>
        </div>
        <div class="sofa">
            <div class="bg_page">
                <div class="sofa-text1">
            <div class="logo_page">
                <img class="header_logo" src="./image/Favicon/favicon.ico" alt="">
                <h1>Wood Works</h1>
            </div>
                </div>
            </div>
        </div>

        <div class="news">
            <h2>Latest News</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste officia culpa nesciunt, explicabo vitae
                deserunt libero?</p>
        </div>
        <div class="imgse"></div>
    </section>
    <!-- /* **************************************** /SECTION START *********************************** */ -->

    <!-- /* **************************************** /FOOTER START *********************************** */ -->

    <footer>
        <div class="container">
            <div class="only-footer">
                <div class="youtube">
                    <h3>ABOUT US</h3>
                    <p>Lorem ipsum dolor sit amet cons adipisicing elit sed do eiusm tempor incididunt ut labor et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
                <div class="information">
                    <h3>INFORMATION</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Manufactures</a></li>
                        <li><a href="#">Tracking Order</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="account">
                    <h3>MY ACCOUNT</h3>
                    <ul>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
                <div class="adheres">
                    <h3>NEWSLETTER</h3>
                    <!-- <input type="name" name="name" placeholder="User your n` -->
                    <input type="email" placeholder="Enter E-Mail Adheres">
                    <a href="#" id="bts"><i class="fa-solid fa-paper-plane"></i> Subscribe</a>
                </div>
            </div>
            <div class="viber">
                <a href="https://www.facebook.com/artush.shahverdyan.1" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>    
                <a href="https://www.tiktok.com/@payte__nverner?_t=8dQoN5y7eBG" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>
    <div class="footer">
    <div class="mini-footer">
        <div class="finish1">
             &copy; 2010<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Wood Works. All rights reserved.
            <i class="fa-solid fa-heart"></i>
        </div>
</div>
</div>
    
    <!-- /* **************************************** /FOOTER END *********************************** */ -->

    <div id="cartBox" onclick="showCart()">
        <i id="cartBoxBag" class="ri-shopping-bag-3-line"></i>
        <span id="cartBoxCount">0 Items</span>
        <span id="cartBoxTotal">0 AMD</span>
    </div>
    <div id="cart">
        <div class="cartHeader">
            <p>Cart</p>
            <div class="cartHeaderIcon" onclick="hideCart()">
                <span class="first">|</span>
                <span class="second">|</span>
            </div>
        </div>
        <div class="cartSectionIcon"></div>
        <div class="cursorpoint">
            <p>To pay</p>
            <div>
                <p class="cartTotal">0.00 AMD</p>
            </div>
        </div>
    </div>
    <div class="openSearch">
        <div class="srch">
            <form>
                <input type="search">
                <a href="#" class="clickSearch">
                    <i class="ri-search-line"></i>
                </a>
            </form>

        </div>
        <div class="searchHeader">
            <div>
                <span></span>
                <a href="#">bed</a>
                <a href="#">chair</a>
            </div>
            <div class="searchHeaderIcon" onclick="hidenSearch()">
                <span class="first">|</span>
                <span class="second">|</span>
            </div>
        </div>
    </div>
    <div class="hidenSearchs" onclick="hidenSearch()"></div>
    <div class="darkBg" onclick="hideCart()"></div>

    <script src="./js/script.js" defer></script>
</body>

</html>