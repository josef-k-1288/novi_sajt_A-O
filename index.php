<?php
$conn = mysqli_connect('localhost', 'root', '', 'dentist_db') or die('connect failed');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date) VALUES('$name', '$email', '$number', '$date')") or die('query failed');

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
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
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
                    <span>about us</span>
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
        <h1 class="heading">our services</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>Izrada sajtova CMS - wordpress</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>Responzivni dizajn</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>Dizajn Logo-a</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt=""> 
                <h3>SEO optimizacija</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>Održavanje i redovno ažuriranje</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="box">
                <img src="images/nove_ikonice/code.svg" alt="">
                <h3>Cavity inspection</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->



    <!-- process section start -->

    <section class="process">
        <h1 class="heading">work process</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>kontakt</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>



            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>planiranje</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>



            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>razvoj</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>

        </div>


    </section>

    <!-- process section ends -->

    <!-- reviews section starts -->


    <section class="reviews" id="reviews">

        <h1 class="heading"> satisfied clients </h1>

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
            <span>Your number:</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date:</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="kontakt" name="submit" class="link-btn">
        </form>
    </section>

    <!-- contact section ends -->



    <!-- footer section -->




    <!-- footer section ends -->





    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>