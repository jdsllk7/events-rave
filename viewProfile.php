<?php include 'head.php';
$userId = $_GET["userId"];

//get data
$data1 = mysqli_query($conn, "SELECT * FROM events WHERE userId = '$userId'");
$events = mysqli_fetch_assoc($data1);


?>

<main>



    <!--? Blog Area Start -->
    <section class="blogs-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2><?php echo $events["companyName"] ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php

                $data = mysqli_query($conn, "SELECT * FROM events WHERE userId = '$userId'");

                while ($result = mysqli_fetch_assoc($data)) {

                    echo '<div class="col-lg-4 col-md-6">
                            <div class="single-blogs mb-100">
                                <div class="blog-img">
                                    <img style="height: 420px" src="' . $result["target_file"] . '">
                                </div>
                                <div class="blog-cap">
                                    <span class="color1">From: ' . $result["timeFrom"] . '</span> |
                                    <span class="color1">To: ' . $result["timeTo"] . '</span>
                                    <h4>' . $result["type"] . '</h4>
                                    <h5>Name: ' . $result["name"] . '</h5>
                                    <a href="moreDetails.php?eventId=' . $result["eventId"] . '&type=type=' . $result["type"] . '" class="genric-btn primary-border radius">Open</a>
                                    ';

                    if ($result["userId"] == $_COOKIE["userId"]) {
                        echo '<a href="db/delete.php?eventId=' . $result["eventId"] . '" class="genric-btn danger-border radius">Delete</a>';
                    }

                    echo '</div>
                            </div>
                        </div>';
                }

                ?>


            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>

<?php include 'footer.php'; ?>