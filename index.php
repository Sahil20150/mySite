<?php
session_start();

if (isset($_SESSION['Email'])) {

    // echo 'welcome' . '<br>' . $_SESSION['U_name'];
} else {
    echo "<script>alert('login first')</script>";

    echo   header('Location: login.php');
}



?>
<?php
 

  if(isset($_POST["submit"])){

    session_unset();
    session_destroy();
    echo "<script>alert('logout success')</script>";
    echo   header('Location: login.php');
  
  }
  
 

?>

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BYthis</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css?v=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap">


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("6Civ8ZWSRt1sTyt2p");
        })();
    </script>

</head>

<body>




    <nav class="navbar h-nav-resp ">
        <ul class="navlist another v-nav-resp">
            <div class="logo">
                <img src="wallp.jpg" alt="logo">
            </div>

            <li><a href="index.php">Home</a></li>
            <li><a href="aboutUs.html">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#Contact">Contact Us</a></li>
            <li>   <div class="logout">
            <!-- <a style="text-decoration:none;color:red" href="../Logout.php ">Logout</a> -->

            <form action="" method="post" >
                <input class="logout-input" type="submit" name="submit" value="Logout"   >
           </form>
        </div></li>
         

        </ul>
     
        <div class="rightnav v-nav-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">

            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>

        </div>
    </nav>
    <section class="firstsection background">
        <div class="boxmain">
            <div class="firsthalf">
                <p class="small">Lorem ipsum dolor sit amet.</p>
                <p class="big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni tenetur modi officiis nam
                    veniam dignissimos?</p>
                <div class="buttons">
                    <button class="btn">Subscribe</button>
                    <button class="btn  btn2">Watch Video</button>
                </div>

            </div>
            <div class="secondhalf">
                <img src="wallp.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="rightsec" id="services">
        <div class="paraas">
            <p class="sectag">Lorem ipsum dolor sit amet consectetur, adipisicing elit.

            </p>
            <p class="secsubtag">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum saepe dolorum
                culpa voluptates quis laboriosam tempora iusto aperiam. Eaque, molestiae? Laboriosam nisi totam
                accusantium iusto praesentium eaque, nam dolorum! Ea!
                Ex veritatis voluptate exercitationem sapiente voluptatibus delectus laborum soluta et perferendis
                facilis eum, iure fugiat officia perspiciatis temporibus a vel officiis dignissimos similique adipisci.
                Aut qui assumenda earum autem velit.
            </p>
        </div>

        <div class="secimg"><img src="https://source.unsplash.com/random/900x700/?anime,universe" alt="" height="250px" width="300px"></div>
    </section>
    <section class="leftsec">
        <div class="paraas">
            <p class="sectag">Lorem ipsum dolor sit amet consectetur, adipisicing elit.

            </p>
            <p class="secsubtag">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum saepe dolorum
                culpa voluptates quis laboriosam tempora iusto aperiam. Eaque, molestiae? Laboriosam nisi totam
                accusantium iusto praesentium eaque, nam dolorum! Ea!
                Ex veritatis voluptate exercitationem sapiente voluptatibus delectus laborum soluta et perferendis
                facilis eum, iure fugiat officia perspiciatis temporibus a vel officiis dignissimos similique adipisci.
                Aut qui assumenda earum autem velit.
            </p>
        </div>

        <div class="secimg"><img src="https://source.unsplash.com/random/900x700/?anime,character" alt="" height="250px" width="300px"></div>
    </section>
    <section class="rightsec">
        <div class="paraas">
            <p class="sectag">Lorem ipsum dolor sit amet consectetur, adipisicing elit.

            </p>
            <p class="secsubtag">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum saepe dolorum
                culpa voluptates quis laboriosam tempora iusto aperiam. Eaque, molestiae? Laboriosam nisi totam
                accusantium iusto praesentium eaque, nam dolorum! Ea!
                Ex veritatis voluptate exercitationem sapiente voluptatibus delectus laborum soluta et perferendis
                facilis eum, iure fugiat officia perspiciatis temporibus a vel officiis dignissimos similique adipisci.
                Aut qui assumenda earum autem velit.
            </p>
        </div>

        <div class="secimg"><img src="https://source.unsplash.com/random/900x700/?anime,city" alt="" height="250px" width="300px"></div>
    </section>

    <div class="contact" id="Contact">
        <h1 class="text-center">Contact Form</h1>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name">
            <!-- <input class="form-input" type="text" name="phone"  placeholder="Enter your phone"> -->
            <input class="form-input" type="email" id="email" name="email" placeholder="email">
            <textarea name="textarea" id="message" cols="30" rows="10" class="form-input" placeholder="Ellaborate your concern"></textarea>
            <button class="btn btn-dark" onclick="sendEmail()">Submit</button>

        </div>
    </div>
    <footer>
        <div>Copyright &copy; 2023 Sahil Pinjari - All Right Reserved </div>
    </footer>

    <script src="resp.js"></script>
</body>


</html>