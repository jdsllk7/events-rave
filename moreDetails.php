<?php include 'head.php';

if (!isset($_GET["eventId"])) {
    header('Location:index.php');
}

$eventId = $_GET["eventId"];

//get data
$data = mysqli_query($conn, "SELECT * FROM events WHERE eventId = $eventId");
$events = mysqli_fetch_assoc($data);
?>

<main>




    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img">
                        <img style="height: 500px;" src="<?php echo $events["target_file"]; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <?php
                            if ($events["companyName"] == $events["name"]) {
                                echo '<h2>' . $events["companyName"] . '</h2>';
                            } else {
                                echo '<h2>' . $events["companyName"] . '</h2>';
                                echo '<h4>' . $events["name"] . '</h4>';
                            }
                            ?>
                        </div>
                        <p class="pera-top">
                            <?php echo $events["description"]; ?>
                        </p>

                        <div class="col-lg-12">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3>Come to our offices.</h3>
                                    <p><?php echo $events["address"]; ?></p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3><a><?php echo $events["email"]; ?></a></h3>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3><?php echo $events["contact"]; ?></h3>
                                    <p>Call us anytime</p>
                                </div>
                            </div>
                        </div>
                        <a href="tel:+<?php echo $events["contact"]; ?>" class="border-btn">Call Now</a>
                        <a target="_blank" href="mailto:<?php echo $events["email"]; ?>?Subject=Hello" class="border-btn">Email Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-2 Area End -->



</main>

<?php include 'footer.php'; ?>