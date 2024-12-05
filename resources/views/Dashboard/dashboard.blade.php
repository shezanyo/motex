@extends("layouts.layout")
@section("title","Dashboard")
@section("content")
    <!--section 1: Carousel start -->
    <section class="dark-gradient-background">
        <div class="">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner container mx-auto">
                    <!-- 1st slide -->
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- 1st column -->
                            <div class="col-12 col-lg-6 col-md-12 marginBottomSpace wow slideInLeft"  >
                                <h3>Welcome to <span class="textRed">MOTEX</span> </h3>
                                <br>
                                <h1>Best Way To Find Your </h1>
                                <h1> <span class="textRed">Dream</span> Car</h1>
                            </div>
                            <!-- 2nd column -->
                            <div class="col-12 col-lg-6 col-md-12 wow slideInRight" >
                                <img src="images/slidesCar/car1.png" class="d-block w-100" alt="Slide 1">
                            </div>
                        </div>
                    </div>
                    <!-- 2nd slide -->
                    <div class="carousel-item ">
                        <div class="row">
                            <!-- 1st column -->
                            <div class="col-12 col-lg-6 col-md-12 marginBottomSpace wow slideInLeft" >
                                <h3>Explore our new car at <span class="textRed">MOTEX</span> </h3>
                                <br>
                                <h1>Where Quality </h1>
                                <h1> Meets the Road!</h1>
                            </div>
                            <!-- 2nd column -->
                            <div class="col-12 col-lg-6 col-md-12 wow slideInRight" >
                                <img src="images/slidesCar/car2.png" class="d-block w-100" alt="Slide 2">
                            </div>
                        </div>
                    </div>
                    <!-- 3rd slide -->
                    <div class="carousel-item ">
                        <div class="row">
                            <!-- 1st column -->
                            <div class="col-12 col-lg-6 col-md-12 marginBottomSpace wow slideInLeft" >
                                <h3> Visit our shop <span class="textRed">Today!</span> </h3>
                                <br>
                                <h1>Rev Up Your Ride with  </h1>
                                <h1> the Best in Town!</h1>
                            </div>
                            <!-- 2nd column -->
                            <div class="col-12 col-lg-6 col-md-12 wow slideInRight" >
                                <img src="images/slidesCar/car3.png" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- previous button -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <!-- next button -->
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Carousel end -->

    <!-- section 2 -->
    <section style="margin-top: 70px;">
        <div class="container mx-auto">
            <div class="row">
                <!-- 1st column -->
                <div class="col-12 col-lg-6 col-md-12 position-relative wow slideInLeft" >
                    <img src="images/poster.png" class="d-block w-100" alt="poster car">
                    <div class="overlay-text">
                        30 Years Of <br> Quality Service
                    </div>
                </div>
                <!-- 2nd column -->
                <div class="col-12 col-lg-6 col-md-12 wow slideInRight">
                    <h2>World Largest </h2>
                    <h2> <span class="textRed">Car Dealer</span>  Marketplace</h2>
                    <!-- list -->
                    <ul>
                        <li>Wide Selection of New and Used Cars</li>
                        <li>Competitive Prices and Financing Options</li>
                        <li>Expert Service and Maintenance for Your Vehicle</li>
                    </ul>
                    <!-- paragraph -->
                    <p><strong>Motex</strong> is your trusted car dealership, offering a vast array of vehicles to suit every need and budget.
                        Whether you are in the market for a brand-new model or a certified pre-owned vehicle, Motex has you covered with competitive
                        prices, expert advice, and exceptional customer service. Our experienced team is here to help you find the perfect car and
                        keep it running smoothly with top-notch maintenance and repair services. Experience a hassle-free car shopping experience
                        with Motex, where quality meets affordability!</p>
                </div>
            </div>

        </div>
    </section>
    <!-- section 2 end -->

    <!-- section 3: latest cars -->
    <section class="container mx-auto" style="margin-top: 70px;">
        <h2 class="text-center" style="margin-bottom: 30px;">Let's Check Latest Cars</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- 1 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/latest/l1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mercedes Benz Car</h5>
                        <p class="card-text textRed">$45,620</p>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/latest/l2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Yellow Ferrari 458</h5>
                        <p class="card-text textRed">$90,250</p>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/latest/l3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Black Audi Q7</h5>
                        <p class="card-text textRed">$44,350</p>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/latest/l4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BMW Sports Car</h5>
                        <p class="card-text textRed">$78,760</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 4: car types -->
    <section class="container mx-auto" style="margin-top: 70px;">
        <h2 class="text-center" style="margin-bottom: 30px;">Car By Body Types</h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4">
            <!-- 1 -->
            <div class="col wow fadeIn" >
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car1.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sedan</h5>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="col wow fadeIn" >
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car2.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Compact</h5>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car3.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Convertible</h5>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car4.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">SUV</h5>
                    </div>
                </div>
            </div>
            <!-- 5 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car5.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Crossover</h5>
                    </div>
                </div>
            </div>
            <!-- 6 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car6.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Wagon</h5>
                    </div>
                </div>
            </div>
            <!-- 7 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car7.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sports</h5>
                    </div>
                </div>
            </div>
            <!-- 8 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car8.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pickup</h5>
                    </div>
                </div>
            </div>
            <!-- 9 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car9.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Family MPV</h5>
                    </div>
                </div>
            </div>
            <!-- 10 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car10.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Coupe</h5>
                    </div>
                </div>
            </div>
            <!-- 11 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car11.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Electric</h5>
                    </div>
                </div>
            </div>
            <!-- 12 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/carTypes/car12.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Luxury</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 5: dealers -->
    <section class="container mx-auto "  style="margin-top: 70px;">
        <h2 class="text-center" style="margin-bottom: 30px;"> Best Dealers In <span class="textRed">Your City</span> </h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- 1 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/dealers/d1.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Automotive Gear</h5>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/dealers/d2.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Keithson Car</h5>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/dealers/d3.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Superious Automotive</h5>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="col wow fadeIn">
                <div class="card h-100 cardStyle">
                    <img src="images/dealers/d4.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Racing Gear Car</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 6: why choose us -->
    <section class="poster-background" style="margin-top: 70px; padding: 40px;">
        <h2 class="text-center marginBottomSpace" >Why Choose Us</h2>
        <div class="container mx-auto ">
            <div class="row">
                <!-- 1st column -->
                <div class="col-12 col-lg-6 col-md-12 marginBottomSpace wow slideInLeft"  >
                    <h2> We are dedicated to provide </h2>
                    <h2> quality service </h2>
                    <br>
                    <p> There are many variations of passages available but the majority have
                        suffered alteration in some form going to use a passage by injected
                        humour randomised words which don't look even slightly believable.
                    </p>
                </div>
                <!-- 2nd column -->
                <div class="col-12 col-lg-6 col-md-12 wow slideInRight" >
                    <img src="images/poster2.png" class="d-block w-100" alt="Slide 1">
                </div>
            </div>
        </div>
    </section>

    <!-- section 7: brands -->
    <section class="container mx-auto" style="margin-top: 70px;">
        <h2 class="text-center" style="margin-bottom: 30px;">Our Top Quality <span class="textRed">Brands</span> </h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4">
            <!-- 1 -->
            <div class="col wow bounce">
                <div class="card h-100 cardStyle">
                    <img src="images/brands/b1.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Ferrari</h5>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="col wow bounce">
                <div class="card h-100 cardStyle">
                    <img src="images/brands/b2.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hyundai</h5>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="col wow bounce">
                <div class="card h-100 cardStyle">
                    <img src="images/brands/b3.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Mercedes Benz</h5>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="col wow bounce">
                <div class="card h-100 cardStyle">
                    <img src="images/brands/b4.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Toyota</h5>
                    </div>
                </div>
            </div>
            <!-- 5 -->
            <div class="col wow bounce">
                <div class="card h-100 cardStyle">
                    <img src="images/brands/b5.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">BMW</h5>
                    </div>
                </div>
            </div>
            <!-- 6 -->
            <div class="col wow bounce">
                <div class="card h-100 cardStyle">
                    <img src="images/brands/b6.png" class="card-img-top px-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Nissan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
