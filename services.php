<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>zurukenya</title>
    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

</head>

<body>

    <!--navigation-->

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='fa fa-bars' id="header-toggle"></i> </div>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div><a href="#" class=" nav_logo"> <i class='fa fa-layer-group nav_logo-icon'></i> <span class="nav_logo-name">ZURUKENYA</span></a>
                    <div class="nav_list">
                        <a href="index.php" class="nav_link active">
                            <i class='fa fa-home nav_icon'></i>
                            <span class="nav_name">Home</span>
                        </a>
                        <a href="about.php" class="nav_link">
                            <i class='fa fa-circle-question nav_icon'></i>
                            <span class="nav_name">About</span>
                        </a>
                        <a href="services.php" class="nav_link">
                            <i class='fa-solid fa-hand-holding nav_icon'></i>
                            <span class="nav_name">Services</span>
                        </a>
                        <a href="destinations.php" class="nav_link">
                            <i class='fa fa-location-dot nav_icon'></i>
                            <span class="nav_name">Destinations</span>
                        </a>
                        <a href="gallery.php" class="nav_link">
                            <i class='fa fa-images nav_icon'></i>
                            <span class="nav_name">Gallery</span>
                        </a>
                        <a href="recommendations.php" class="nav_link">
                            <i class='fa fa-thumbs-up nav_icon'></i>
                            <span class="nav_name">Recommendations</span>
                        </a>
                        <a href="reviews.php" class="nav_link">
                            <i class='fa fa-star nav_icon'></i>
                            <span class="nav_name">Reviews</span>
                        </a>
                        <a href="book.php" class="nav_link">
                            <i class='<fa fa-calendar nav_icon'></i>
                            <span class="nav_name">Book</span>
                        </a>
                    </div>
                </div>
                <a href="home.php" class="nav_link ">
                    <i class='fa fa-user nav_icon'></i>
                    <span class="nav_name">User</span>
                </a>
            </nav>
        </div>
        <!--navigation ends-->

        <!--service section -->

        <section class="services" id="services">

                <div class="img container-flex " style="background-image: url(img/cover5.jpg);">
                    <h1 class="text-center text-white mt-5 display-3 fw-bold">Our <span class="theme-text">Services</span></h1>
                    <hr class="mx-auto mb-5 w-25">
                </div>

                <div class="row mb-5 ">
                    <div class="col-md">
                        <!-- card starts here -->
                        <div class="card shadow h-100">
                            <img src="img/hotel.svg " alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Accommodation</h3>
                                <hr class="mx-auto w-75">
                                <p>  Whether you're seeking the luxury of a hotel or the coziness of a budget-friendly hotel,we've got you 
                                    covered. Our carefully selected accommodations are strategically located for easy access to key attractions,
                                     ensuring you make the most of your travel experience. 
                                </p>
                            </div>
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                    <div class="col-sm">
                        <!-- card starts here -->
                        <div class="card shadow h-100 ">
                            <img src="img/food.svg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Food $ Beverages</h3>
                                <hr class="mx-auto w-75">
                                <p> From local flavors to international cuisines, our diverse dining options cater to every taste. 
                                    Explore  culinary events and unique experiences that go beyond the ordinary, making your travels as 
                                    delicious as they are unforgettable.
                                    <br>
                                </p>       
                            </div>
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                    <div class="col-sm">
                        <!-- card starts here -->
                        <div class="card shadow h-100">
                            <img src="img/guide.svg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Safety Guide</h3>
                                <hr class="mx-auto w-75">
                                <p> Our dedicated safety guide service ensures that your journey is not only exciting but also secure. 
                                    Professionals accompany you, providing expert guidance on navigating unfamiliar terrain, 
                                    adhering to local safety protocols, and offering valuable tips for a worry-free adventure.
                                </p>
                            </div>
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                    <div class="col-sm">
                        <!-- card starts here -->
                        <div class="card shadow h-100">
                            <img src="img/aeroplane.svg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Fastest Travel</h3>
                                <hr class="mx-auto w-75">
                                <p> Our streamlined processes ensure swift and efficient travel planning. 
                                    From quick and secure online bookings to instant confirmation
                                    without delay. Our commitment to efficiency extends to personalized itineraries, hassle-free check-ins, and responsive 
                                    customer support.
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                </div>    
            </div> 
            <div class="container-fluid"> 
                <div class="row mb-5">
                    <div class="col-sm">
                        <!-- card starts here -->
                        <div class="card shadow h-100">
                            <img src="img/adventure.svg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Adventures</h3>
                                <hr class="mx-auto w-75">
                                <p>We specialize in crafting exhilarating experiences that push the boundaries of exploration.
                                   Unleash your adventurous spirit where every journey is an opportunity to create unforgettable memories and 
                                    stories that last a lifetime.
                            </div>
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                    <div class="col-sm">
                        <!-- card starts here -->
                        <div class="card shadow h-100">
                            <img src="img/recommendation.svg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Recommendations</h3>
                                <hr class="mx-auto w-75">
                                <p> Discover the art of tailored travel with our personalized recommendations service. Our 
                                    team of travel experts is dedicated to curating unique and unforgettable experiences based on your preferences 
                                    and interests. We make your exploration seamless and extraordinary. 
                                </p>    
                            </div>
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                    <div class="col-sm">
                        <!-- card starts here -->
                        <div class="card shadow h-100">
                            <img src="img/event.svg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Event & Conference Planning</h3>
                                <hr class="mx-auto w-75">
                                <p> Whether you are organizing a corporate meeting, conference, or a special event, our dedicated team is here to 
                                    handle every detail. From venue selection and logistical coordination to catering arrangements and 
                                    audio-visual setups.  Elevate your events 
                                </p>    
                            </div>
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                    <div class="col-sm">
                        <!-- card starts here -->
                        <div class="card shadow h-100">
                            <img src="img/language.svg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="text-center">Language & Cultural Guides</h3>
                                <hr class="mx-auto w-75">
                                <p> Immerse yourself in the richness of diverse cultures. 
                                    Our knowledgeable guides are fluent in local languages and well-versed in the customs, traditions, and 
                                    history of each destination, provide insightful commentary, 
                                    facilitate meaningful interactions with locals, and offer a deeper understanding of the cultural nuances.
                            </div>
                        </div>
                        <!-- card ends here -->
                    </div>
                    <!-- col ends here -->
                </div>
            </div>

        </section>
        <!--service section ends-->

        <!--footer-->

        <section class="footer" id="footer">

            <div class="container">

                <div class="row">
                    <div class="col p-4">
                        <h3>quick links</h3>
                        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
                    </div>

                    <div class="col p-4">
                        <h3>extra links</h3>
                        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
                    </div>

                    <div class="col p-4">
                        <h3>contact info</h3>
                        <a href="#"><i class="fas fa-phone"></i>+254-705-667-551</a>
                        <a href="#"><i class="fas fa-phone"></i>+254-723-250-983</a>
                        <a href="#"><i class="fas fa-envelope"></i>zurukenya@gmail.com</a>
                        <a href="#"><i class="fas fa-map"></i>Nairobi, Kenya</a>
                    </div>

                    <div class="col p-4">
                        <h3>follow us</h3>
                        <a href="href=" #><i class="fab fa-facebook-f"></i>facebook</a>
                        <a href="href=" #><i class="fab fa-twitter"></i>twitter</a>
                        <a href="href=" #><i class="fab fa-instagram"></i>instagram</a>
                        <a href="href=" #><i class="fab fa-linkedin"></i>linkedin</a>
                    </div>
                </div>
            </div>
            <hr class="hr">
            <div class="credit"> &copy;Copyright <span>Esther Kiarie</span> | all rights reserved!</div>

        </section>

        <!--footer ends-->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>

</html>