<?php include 'head.php'; ?>

<main>



    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s">Advertise With Us</h1>
                                <p data-animation="fadeInLeft" data-delay=".6s">
                                    Are you looking to host an event and are already tired at the thought of organising and managing it? You're at the right place then! The events Rave is a website built to help you plan your event step by step in the comfort of your own home or office. Yes, we did say in the comfort of your home. That means you dont have to drive around and get exhausted. Let's get started!&nbsp;
                                </p>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="upload.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">PLAN AN EVENT</a>
                                    <?php
                                    if (!isset($_COOKIE["userId"])) {
                                        echo '
                                        <a href="signup.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">SIGN UP AS A VENDOR</a>
                                        ';
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->



    <!--? Our Services Start -->
    <div class="our-services section-padding30">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2>Services Offered</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php

                $countVenues = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM events WHERE type like 'Venue'"));
                $countDecor = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM events WHERE type like 'Decor'"));
                $countCatering = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM events WHERE type like 'Catering'"));


                ?>


                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tools-and-utensils-1"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Venues - <?php echo $countVenues; ?></h5>
                            <p>
                                Some text...
                            </p>
                        </div>
                        <?php
                        if ($countVenues > 0) {
                            echo '<a href="viewCards.php?type=Venues" class="genric-btn primary-border radius">View</a>';
                        }
                        ?>
                    </div>
                </div>

                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tools-and-utensils-1"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Catering - <?php echo $countCatering; ?></h5>
                            <p>
                                Some text...
                            </p>
                        </div>
                        <?php
                        if ($countCatering > 0) {
                            echo '<a href="viewCards.php?type=Catering" class="genric-btn primary-border radius">View</a>';
                        }
                        ?>
                    </div>
                </div>

                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tools-and-utensils-1"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Decor - <?php echo $countDecor; ?></h5>
                            <p>
                                Some text...
                            </p>
                        </div>
                        <?php
                        if ($countDecor > 0) {
                            echo '<a href="viewCards.php?type=Decor" class="genric-btn primary-border radius">View</a>';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Our Services End -->



    <!--? Our Services Start -->
    <div class="our-services section-padding30">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2>Browse Profiles</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php

                $data = mysqli_query($conn, "SELECT * FROM users");

                while ($result = mysqli_fetch_assoc($data)) {



                    echo '<div class=" col-lg-4 col-md-6 col-sm-6">
                            <div class="single-services active text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-restaurant"></span>
                                </div>
                                <h5>' . $result["name"] . '</h5>
                                <span class="contact-info__icon"><i class="ti-email"></i></span> ' . $result["email"] . ' <br><br>
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span> ' . $result["contact"] . ' <br><br>
                                <a href="viewProfile.php?userId=' . $result["userId"] . '" class="genric-btn primary-border radius">View</a>
                            </div>
                        </div>';
                }
                ?>

            </div>
        </div>
    </div>
    <!-- Our Services End -->


</main>

<?php include 'footer.php'; ?>