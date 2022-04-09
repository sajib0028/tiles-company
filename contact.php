<!DOCTYPE html>
<html lang="en">

<head> 
    <?php include 'includes/cdn.php' ?>
    <title>Contact || Kashmir Tiles and Marbles Fixing LLC.</title>
</head>

<body>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include 'includes/header.php' ?>

        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-img2.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-header__wrapper">
                            <div class="page-header__content">
                                <h2>Contact us</h2>
                                <div class="page-header__menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Header-->



        <!--Contact Page Google Map Start-->
        <section class="contact-page-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.550650560483!2d55.23020941500792!3d25.117067883933505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x288182eb247435f5!2zMjXCsDA3JzAxLjQiTiA1NcKwMTMnNTYuNiJF!5e0!3m2!1sen!2sin!4v1649526861307!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--Contact Page Google Map End-->




        <!--Start Contact Page-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <!--Start Get In Touch-->
                    <div class="col-xl-5 col-lg-5">
                        <div class="contact-page__get-in-touch">
                            <div class="title">
                                <h2>Stay in touch with us</h2>
                                <p>You can also reach out to us by phone <br>or email are many variations</p>
                            </div>

                            <ul>
                                <li>
                                    <div class="icon rotate">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <span>Phone</span>
                                        <p class="telephone">Call : <a href="tel:045913320">045913320</a></p>
                                    </div>
                                </li>
                                 <li>
                                    <div class="icon">
                                        <span class="fa fa-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <span>Email</span>
                                        <p class="telephone"> <a href="mailto:contact@kashmirtiles.com">contact@kashmirtiles.com</a></p>
                                    </div>
                                </li>
                               
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <span>Address</span>
                                        <p>Al Quoz - Al Quoz Industrial Area 4 Dubai, United Arab Emirates</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Get In Touch-->



                    <!--Start Contact Page Comment Form-->
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-page__comment-form">
                            <div class="title">
                                <h2>Send a message</h2>
                                
                            </div>
                            <form action="" class="comment-one__form contact-form-validated" novalidate="novalidate" method="POST">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Full Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Your Message here"></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="thm-btn comment-form__btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End Contact Page Comment Form-->

                </div>
            </div>
        </section>
        <!--End Contact Page-->



<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['message'];



        $to='sajibb813@gmail.com'; // Receiver Email ID, Replace with your email ID
        $subject='Comapny Enquiry';
        $message="Name :".$name."\n"."Email :".$email."\n"."Phone :".$phone."\n"."Message is :".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            ?>
            <script type="text/javascript">
                alert("Sent Successfully! Thank you. We will contact you shortly!");
            </script>
            <?php
           
        }
        else{
            ?>
            <script type="text/javascript">
                alert("Something went wrong!");
            </script>
            <?php
        }
    }
?>


        <?php include 'includes/footer.php' ?>
        <?php include 'includes/script.php' ?>
 

</body>

</html>