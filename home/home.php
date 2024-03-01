<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('https://img.freepik.com/free-photo/high-angle-forklift-blue-background_23-2149853122.jpg?w=1480&t=st=1709060380~exp=1709060980~hmac=9ff6f269806a64976b1dce5b63a2a3f35289e929f19ba5d56f79943776725f3a');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
<style>
        /* General Styles */
        body {
            font-family: sans-serif;
            background-color: #f5f5f5;
        }

        .page-section {
            margin-top: 5px;
          
        }

        .box-main {
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 10px;
        }

        /* Section Heading and Subheading */
        .section-heading {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 15px;
        }

        .section-subheading {
            font-size: 1.2rem;
            color: #777;
        }

        /* Service Boxes */
        .row {
            margin-top: 30px;
        }

       /* ... other styles ... */

/* Service Boxes */
        .box {
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        text-align: left;
        transition: all 0.3s ease-in-out;
        background-color: white; /* Set the background color to white */
        }   

        /* ... rest of the styles ... */
        .box a:hover {
            text-decoration: none;
        }

        .box:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }

        /* Service Icons */
        .fa-stack {
            margin-bottom: 20px;
        }

        .fas {
            font-size: 3rem;
        }

        .text-primary {
            color: #2980b9;
        }

        /* Service Titles and Text */
        h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1rem;
            line-height: 1.5;
        }

        h2, h3 ,h4{ 
             color: black; 
        }

        /* Responsiveness (optional) */
        @media (max-width: 768px) {
            .col-md-4 {
                flex: 0 0 50%;
                width: 50%;
            }
        }
    </style>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
    </div>

    <section class="page-section" id="services">
    <div class="box-main">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Courier Management Service</h2>
            <h3 class="section-subheading text-muted">The fastest courier service of India</h3>
        </div>
        <div class="row d-flex gap-4 text-center">
            <a href="home.php" class="col-md-4 box">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Home</h4>
                <p class="text-muted">Our home delivery option ensures your parcels reach you conveniently and securely, right to your doorstep.</p>
            </a>

            <a href="price.php" class="col-md-4 box">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Price</h4>
                <p class="text-muted">Discover competitive pricing that fits your budget without compromising on quality or efficiency..</p>
            </a>

            <a href="courierMenu.php" class="col-md-4 box">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Courier</h4>
                <p class="text-muted">Trust us with your courier needs, and experience swift and reliable delivery services every time..</p>
            </a>

            <a href="trackMenu.php" class="col-md-4 box">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Track</h4>
                <p class="text-muted">Keep tabs on your parcels effortlessly with our intuitive tracking system, providing real-time updates from dispatch to delivery</p>
            </a>

            <a href="profile.php" class="col-md-4 box">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Profile</h4>
                <p class="text-muted">Create and manage your profile seamlessly, customizing preferences and accessing past delivery details with ease..</p>
            </a>

            <a href="contactUS.php" class="col-md-4 box">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Contact Us</h4>
                <p class="text-muted">Have questions or need assistance? Reach out to our dedicated support team via our Contact Us page, ready to assist you promptly..</p>
            </a>
        </div>
    </div>
</section>

</body>
</html>