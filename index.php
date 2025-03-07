<?php

$conn = mysqli_connect('localhost', 'root', 'mysql', 'mis');


if (isset($_POST['b'])) {
    $email = $_POST['a'];


    $sql = "INSERT INTO information (email) VALUES ('$email');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert ('Data Added Successfully');</script>";
    }
}
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <title>AkuLapar</title>
</head>

<body>

    <div class="container">
        <div class="header">
            <img src="logo.png.png" class="img" alt="Logo" width="160" height="120">
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="update.php">Restaurant of The Week</a></li>
                <li><a href="option.php">Dining Options</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<li><a href='#'>" . $_SESSION['username'] . "</a><a href='logout.php'><i class='ri-logout-box-line'></i></a></li>";
                } else {
                    echo "<li><a href='login.php' class='login'><img src='user.png' class='img2' width='55' height='50'>Log In</a></li>";
                }
                ?>

            </ul>
        </div>
        <div class="main">
            <div class="text">
                <h4>AkuLapar</h4>
                <h6>Est. 2024</h6>
                <p class="bentuk">| |</p>
                <p class="bentuk">| |</p>
                <p class="bentuk">| |</p>
                <h3 class="one ">Your Go-To Spot For</h3>
                <h3 class="two">Delicious Eats ! !</h3>
            </div>
        </div>
        <div class="main2">

            <h3 class="three" id="timetext">Happy Explore ! !</h3>

        </div>
        <div class="top">
            <div class="topic">
                <div class="topic2">
                    <div class="tanya">
                        <h1>AkuLapar</h1>
                        <br>
                        <p class="sub">Hunger Is Natural</p>
                        <br><br>
                        <p class="isi">
                            AkuLapar is an online platform for popular <br>
                            food recommendations in Indonesia. AkuLapar <br>
                            is here to satisfy food bloggers with delicious <br>
                            and inspiring culinary information.
                        </p>
                    </div>
                </div>
            </div>
            <div class="topic3">
            </div>
        </div>
        <div class="middle">
            <div class="topic4">
            </div>
            <div class="topic5">
                <div class="topic6">
                    <div class="tanya2">
                        <h1>Eat</h1>
                        <br>
                        <p class="sub">Breakfast, Lunch, and Dinner</p>
                        <br><br>
                        <p class="isi">
                            Eat breakfast like a king, lunch like a prince, and dinner like a pauper.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="topic7">
                <div class="topic8">
                    <div class="tanya3">
                        <h1>Enjoy</h1>
                        <br>
                        <p class="sub">Make Yourself at Home</p>
                        <br><br>
                        <p class="isi">
                            Explore popular food, and allow the enticing <br>
                            aromas and flavors of each locale to envelop you in a culinary journey filled with <br>
                            delightful discoveries.
                        </p>
                    </div>
                </div>
            </div>
            <div class="topic9">
            </div>
        </div>
        <div class="main3">
            <div class="blok1">
                <h1>Drop By to Explore Food</h1>
            </div>
            <div class="blok2">
                <div class="blok3">
                    <div class="blok4">
                        <h5>Address</h5>
                        <br>
                        <p class="info">Jl. Movie Land, Mekarmukti, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530</p>
                    </div>
                </div>
                <div class="blok5">
                    <div class="blok6">
                    </div>
                </div>
                <div class="blok7">
                    <div class="blok8">
                        <h5>Opening Hours</h5>
                        <br>
                        <p class="info">
                            Mon - Fri: 9am - 4pm <br>
                            Saturday: 10am - 2pm <br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main4">
            <div class="gambar" style="background-image: url(food8.jpg);"></div>
            <div class="gambar" style="background-image: url(food9.jpg);"></div>
            <div class="gambar" style="background-image: url(food12.jpg);"></div>
            <div class="gambar" style="background-image: url(food11.jpg);"></div>
            <div class="gambar" style="background-image: url(food10.jpg);"></div>
        </div>
        <div class="footer">
            <div class="part1">
                <div class="subpart1">
                    <h2 class="footer1">Newsletter</h2>
                    <br>
                    <p class="subp">
                        Stay up to date with all the latest <br>
                        from AkuLapar
                    </p>
                    <br>
                    <div class="email">
                        <form action="" method="POST" class="subemail">
                            <label for="email" style="color : rgb(225, 220, 220)">Email *</label><br><br>
                            <input type="email" name="a" id="email" class="inputemail" required>
                            <input type="submit" name="b" value="Join" class="inputsubmit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="part2">
                <div class="subpart2">
                    <h2 class="footer1">Talk to Us</h2>
                    <br>
                    <p class="subp">
                        +62 878-6592-9547 <br>
                        akulapar@gmail.com <br><br>
                        Jl. Movie Land, Mekarmukti, Kec. <br>
                        Cikarang Utara, Kabupaten Bekasi, <br>
                        Jawa Barat 17530
                    </p>
                </div>
            </div>
            <div class="part3">
                <div class="subpart3">
                    <h2 class="footer2"><a href="https://www.instagram.com/akulapar.bro?igsh=NXVuNzdiM3RwY3hj" id="media">Instagram</a></h2>
                    <h2 class="footer2"><a href="https://www.facebook.com/akulapar.akulapar.50?mibextid=ZbWKwL" id="media">Facebook</a></h2>
                    <h2 class="footer2"><a href="https://x.com/akulapar_bro?t=UeC8kWrPdun28jbAt2Ck0g&s=09" id="media">Twitter</a></h2>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="copy">
                <p class="end">&copy; 2024 by AkuLapar</p>
            </div>
        </div>
    </div>

    <?php
    mysqli_close($conn);
    ?>

</body>

</html>