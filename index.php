<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Trailer Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightslider.css">
    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/lightslider.js"></script>
    <link rel="shortcut icon" href="images/fav_icon.png">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <a href="#" class="logo">
            <img src="images/Popcorn-logos_black.png" width="30" height="40" alt="Logo">
        </a>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="tvshows.php">TV Shows</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Find your favorite movies">
            <i class="fas fa-search"></i>
        </div>
    </nav>

    <section id="main">
        <h1 class="showcase-heading">Showcase</h1>
        <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
                <div class="showcase-box">
                    <a href="https://www.youtube.com/watch?v=QFxN2oDKk0E">
                        <img src="images/s-1.jpg" alt="Showcase Image 1">
                    </a>
                </div>
            </li>
            <!-- Add other showcase items here -->
        </ul>
    </section>

    <section id="latest">
        <h2 id="latest-heading">Latest Movie Trailers</h2>
        <ul id="autoWidth2" class="cs-hidden">
            <li class="item-a">
                <div class="latest-box">
                    <div class="latest-b-img">
                        <a href="https://www.youtube.com/watch?v=Ac5wrM2uYbk">
                            <img src="images/m-1.jpg" alt="KIN 2018">
                        </a>
                    </div>
                    <div class="latest-b-text">
                        <a href="https://www.youtube.com/watch?v=Ac5wrM2uYbk"><strong>KIN 2018</strong></a>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
            <li class="item-b">
                <div class="latest-box">
                    <div class="latest-b-img">
                        <a href="https://www.youtube.com/watch?v=YoHD9XEInc0">
                            <img src="images/m-3.jpg" alt="Inception">
                        </a>
                    </div>
                    <div class="latest-b-text">
                        <a href="https://www.youtube.com/watch?v=YoHD9XEInc0"><strong>Inception</strong></a>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
            <!-- Add other latest movies here -->
        </ul>
    </section>

    <script>
        $(document).ready(function() {
            $('#autoWidth, #autoWidth2').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function() {
                    $('#autoWidth, #autoWidth2').removeClass('cs-hidden');
                } 
            });  
        });
    </script>
</body>
</html>
