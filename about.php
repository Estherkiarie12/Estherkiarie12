<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zurukenya</title>
    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

</head>

<body>

    <!--navigation-->

    <body id="body-pd">
        <header class="header  " id="header">
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

        <!--about section-->

        <section class="about">
            <div class="container">
                <div class="img container-flex" style="background-image: url(img/cover5.jpg);">
                    <h1 class="text-center text text-white mt-5 display-3 fw-bold">About <span class="theme-text text-primary">Us</span></h1>
                    <hr class="mx-auto mb-5 w-25">
                </div>
            </div>

            <div class="content container">
                <div class="row" style="margin-top:50px">

                    <div class="col-md-6 py-3 py-md-0">
                        <div class="card">
                            <img src="img/img1.jpg">
                        </div>
                    </div>

                    <div class="col-md-6 py-3 py-md-0">
                        <h3>why choose us?</h3>
                        <p>What sets us apart is our unwavering dedication to making your travel dreams a reality.
                            We ensure that every detail is taken care of, providing you with hassle-free and
                            personalized experiences. From handpicked destinations to transparent pricing to accomodation,
                            we prioritize your satisfaction at every step. Choose Zurukenya for a travel companion that goes
                            the extra mile, turning your vacation into a cherished adventure..</p>
                    </div>
                </div>


                <div class="why row div--fadeInRight">

                    <div class="col ">
                        <i class="fas fa-map"></i>
                        <span>top destinations</span>
                    </div>

                    <div class="col ">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>afordable price</span>
                    </div>

                    <div class="col ">
                        <i class="fas fa-headset"></i>
                        <span>24/7 guide service</span>
                    </div>

                    <div class="col  ">
                        <i class="fa fa-hotel"></i>
                        <span>accommodataion</span>
                    </div>

                    <div class="col col-md-2 ">
                        <i class="fa fa-phone"></i>
                        <span>reliable customer service</span>
                    </div>

                    <div class="col col-md-2 ">
                        <i class="fa fa-utensils"></i>
                        <span>food & beverages</span>
                    </div>

                </div>

            </div>


            <div class="us container" id="us">
                <div class="border"></div>
                <div class="row" style="margin-top:50px">

                    <div class="col-md-6 py-3 py-md-0">
                        <h3>Our Story</h3>
                        <p>Founded in 2010, Zurukenya started as a dream shared by a group of
                            avid travelers who wanted to share their love for discovering the world with others.
                            Over the years, our team has grown, but our dedication to creating immersive and personalized
                            travel experiences remains unwavering.</p>
                        <br>
                        <br>
                        <h3>Our Values</h3>
                        <p>At the heart of our operations are our core values: authenticity, customer satisfaction,
                            and responsible travel. We are committed to delivering journeys that not only meet but exceed
                            your expectations. Whether you're seeking adventure, luxury, or cultural immersion, our values
                            guide us in curating the perfect itinerary for you.</p>
                    </div>

                    <div class="col-md-6 py-3 py-md-0">
                        <div class="card">
                            <img src="img/zuru.jpg">
                        </div>
                    </div>

                </div>
            </div>


            <div class="team container" id="team">
                <div class="border"></div>
                <div>
                    <h3>Meet Our Team</h3>
                    <p>Our team is a diverse group of travel enthusiasts, each bringing a unique set of skills and
                        experiences to the table. From seasoned travel experts to destination specialists, we are united by a
                        common goal — to make your travel dreams a reality. Meet the passionate individuals who are dedicated
                        to ensuring your journey is seamless and unforgettable.</p>
                </div>

                <!--<div class="row row-cols-1 row-cols-md-4 g-4 py-5">
                    <div class="col">
                        <div class="profile-card ">
                            <div class="img">
                                <img src="img/image3.jpg">
                            </div>
                            <div class="caption">
                                <h3>Jay Halsted</h3>
                                <p>Founder</p>
                                <div class="social-links">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col">
                        <div class="profile-card ">
                            <div class="img">
                                <img src="img/image2.jpg">
                            </div>
                            <div class="caption">
                                <h3>Erin Lindsay</h3>
                                <p>Co-Founder</p>
                                <div class="social-links">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="profile-card ">
                            <div class="img">
                                <img src="img/image6.jpg">
                            </div>
                            <div class="caption">
                                <h3>Hank Voight</h3>
                                <p>Manager</p>
                                <div class="social-links">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="profile-card ">
                            <div class="img">
                                <img src="img/image4.jpg">
                            </div>
                            <div class="caption">
                                <h3>Fiona Gallagher</h3>
                                <p>Financial Expert</p>
                                <div class="social-links">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="profile-card ">
                            <div class="img">
                                <img src="img/image3.jpg">
                            </div>
                            <div class="caption">
                                <h3>Adam Ruzek</h3>
                                <p>Travel Expert</p>
                                <div class="social-links">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="profile-card ">
                            <div class="img">
                                <img src="img/image5.jpg">
                            </div>
                            <div class="caption">
                                <h3>Amy santiago</h3>
                                <p>Marketing $ communications</p>
                                <div class="social-links">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="profile-card ">
                            <div class="img">
                                <img src="img/image1.jpg">
                            </div>
                            <div class="caption">
                                <h3>Esther Kiarie</h3>
                                <p>Tech Specialist</p>
                                <div class="social-links">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>-->

            </div>


            <div class="contact container">
                <div class="border"></div>
                <h3>Contact Us</h3>
                <p>Ready to start your journey with Wanderlust Adventures? Contact our team of
                    travel experts today to begin planning your next adventure.</p>

                <div class="row">
                    <div class="col-md-7">
                        <h4>Message & Feedback</h4>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-5 ">
                        <h4>Contacts</h4>
                        <hr>
                        <div class="mt-4">
                            <div class="d-flex">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>Bidii house, Nairobi, Kenya</p>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <i class="fa-solid fa-phone"></i>
                                <p>Contact : <a href="#"><b>+254-705-667-551, +254-723-250-983</b></a></p>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <i class="fa-solid fa-envelope"></i>
                                <p>Email: <a href="#"><b>zurukenya@gmail.com</b></a></p>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <i class="fa-brands fa-chrome"></i>
                                <p>Website: <a href=""><b>www.zurukenya.com</b></a></p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--about section-->

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