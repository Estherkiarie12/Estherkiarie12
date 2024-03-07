<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>zurukenya</title>
    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

</head>
<body>
    <!--navigation-->
    <body id="body-pd">
    <header class="header bg-gray " id="header">
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
            <div><a href="home.php" class=" nav_logo"> <i class='fa fa-layer-group nav_logo-icon'></i> <span class="nav_logo-name">ZURUKENYA</span></a>
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

    <!--Container Main start-->
    <div class="home">
        <div class="container-flex "  >
            <div class="img container-flex" style="background-image: url(img/cover5.jpg);">
                <div class="content">
                    <h3>Welcome To Kenya</h3>
                    <h1>Visit <span class="changecontent"></span></h1>
                    <p>Embark on a journey like no other with zurukenya. </p>
                    <a href="book.php">Book</a>
                </div>
            </div>
        </div>    
    </div>    
        
         
    
    <!--Container Main end-->

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
                    <a href="href="#><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="href="#><i class="fab fa-twitter"></i>twitter</a>
                    <a href="href="#><i class="fab fa-instagram"></i>instagram</a>
                    <a href="href="#><i class="fab fa-linkedin"></i>linkedin</a>
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
