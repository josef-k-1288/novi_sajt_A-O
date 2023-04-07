<?php
$conn = mysqli_connect('localhost', 'aoweb_aoweb', '544Sadsff5554Rv', 'aoweb_novi_sajt') or die('connect failed');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $send = mysqli_real_escape_string($conn, $_POST['send']);
    // $number = $_POST['number'];
    // $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `ao_contact` (name, email, send) VALUES('$name', '$email', '$send')") or die('query failed');

    if ($insert) {
        $message[] = 'uspešno ste poslali poruku!';
        //header("Location: /dentist_sajt");
    } else {
        $message[] = 'greška';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <!-- <a href="#home" class="logo">dental<span>Care.</span></a>  -->
                <img src="images/nove_ikonice/logo.png" alt="logo" width="100" height="55">


                <nav class="nav">
                    <a href="#home">početna</a>
                    <a href="#about">o nama</a>
                    <a href="#services">naši servisi</a>
                    <a href="#process">proces izrade</a>
                    <!-- <a href="#reviews">zadovoljni klijenti</a> -->
                    <a href="#contact">kontakt</a>
                </nav>

                <a href="#contact" class="link-btn">Kontakt</a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <!-- header section ends -->

    <!-- home section -->

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>AO <span>web development</span> & graphic design</h3>
                    <p>Lorem ipsum dolor sit, sequi aliquid vel asperiores non similique necessitatibus! Ab, nostrum amet.</p>
                    <a href="#contact" class="link-btn">Kontakt</a>
                </div>
            </div>
        </div>

    </section>

    <!-- home section ends -->





    <!-- about section starts -->

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/pocetna.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>O nama</span>
                    <h3>Lorem Ipsum is simply dummy text....</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry .................</p>
                    <a href="#contact" class="link-btn">Kontakt</a>
                </div>

            </div>

        </div>

    </section>


    <!-- about section ends -->



    <!-- services section starts -->

    <section class="services" id="services">
        <h1 class="heading">Naši servisi</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/nove_ikonice/wordpress.svg" alt="">
                <h3>Izrada sajtova CMS - wordpress</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>Izrada custom sajtova</h3>
                <p>Custom dizajn sajta podrazumijeva programiranje sajta od početka ili prilagođavanje koda uključujući CSS, JavaScript, PHP, MySQL. Prednosti custom web stranice su brzina sajta, preglednost i jednostavnost stranice, pristupačne promjene na stranici jer je programski kod jedinstven</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/shop-cart.svg" alt="">
                <h3>Woocomerce</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/seo.svg" alt="">
                <h3>SEO optimizacija</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>Održavanje i redovno ažuriranje</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/social-media.svg" alt="">
                <h3>Društvene mreže</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->



    <!-- subsection section -->

    <section class="icons">
        <!-- <h1 class="heading">Tools</h1> -->

        <div class="box-container container">
            <div class="box">
                <i class="fab fa-html5"></i>
                <h3>HTML5</h3>
            </div>

            <div class="box">
                <i class="fa-brands fa-css3-alt"></i>
                <h3>CSS3</h3>
            </div>

            <div class="box">
                <i class="fa-brands fa-js"></i>
                <h3>Javascript</h3>

            </div>

            <div class="box">
                <i class="fa-brands fa-php"></i>
                <h3>PHP</h3>
            </div>

            <div class="box">
                <i class="fa-brands fa-wordpress"></i>
                <h3>Wordpress</h3>

            </div>
        </div>


    </section>

    <!-- icons subsection ends -->






    <!-- process section start -->

    <section class="process" id="process">
        <h1 class="heading">proces izrade</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/nove_ikonice/contact.svg" alt="">
                <h3>kontakt</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>



            <div class="box">
                <img src="images/nove_ikonice/deal.svg" alt="">
                <h3>plan</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>



            <div class="box">
                <img src="images/nove_ikonice/responsive.svg" alt="">
                <h3>dizajn</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>razvoj</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>

        </div>


    </section>

    <!-- process section ends -->











    <!-- porfolio section starts -->

    <h1 class="heading">Neki od naših projekata</h1>
    <div class="holder">
        <div class="img-item">
            <img src="images/portfolio/pokret.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/galis.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/pokret.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/neosmile.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/galis.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/pokret.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/neosmile.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/pokret.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <div class="img-item">
            <img src="images/portfolio/pokret.png" alt="Kratak opis projekta">
            <a href="#">Pogledaj</a>
        </div>
        <br><br>
    </div>

    <!-- portfolio section ends -->






    <!-- reviews section starts -->


    <section class="reviews" id="reviews">

        <h1 class="heading"> Zadovoljni klijenti </h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>

        </div>

    </section>

    <!-- reviews sections ends -->








    <!-- contact section starts -->

    <section class="contact" id="contact">
        <h1 class="heading">Kontaktirajte nas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <!-- <p class="message">testing message box</p> -->

            <span>Your name:</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>Your email:</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <!-- <span>Your number:</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required> -->
            <span>send message:</span>
            <textarea name="send" rows="5" class="box" required></textarea>
            <input type="submit" value="kontakt" name="submit" class="link-btn">
        </form>
    </section>

    <!-- contact section ends -->



    <!-- footer section -->

    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>069/3315-316</p>
                <p>+111-222-333</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>gaudijeva, zemun</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>opening hours</h3>
                <p>00:08am to 10pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>obradovic.aleksa@gmail.com</p>
                <p>olukanovic@gmail.com</p>
            </div>
        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>ao web development & graphic design</span> </div>
    </section>


    <!-- footer section ends -->





    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>