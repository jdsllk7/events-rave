<?php include 'head.php';
$type = $_GET["type"];

?>

<main>



    <!--? Blog Area Start -->
    <section class="blogs-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2><?php echo $_GET["type"] ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php

                $data = mysqli_query($conn, "SELECT * FROM events WHERE type like '$type'");

                while ($result = mysqli_fetch_assoc($data)) {

                    echo '<div class="col-lg-4 col-md-6">
                            <div class="single-blogs mb-100">
                                <div class="blog-img">
                                    <img style="height: 420px" src="' . $result["target_file"] . '">
                                </div>
                                <div class="blog-cap">
                                    <span class="color1">From: ' . $result["timeFrom"] . '</span> |
                                    <span class="color1">To: ' . $result["timeTo"] . '</span>
                                    <h4>Name: ' . $result["name"] . '</h4>
                                    <h6>By: ' . $result["companyName"] . '</h6>
                                    <a href="moreDetails.php?eventId=' . $result["eventId"] . '&type=type=' . $type . '" class="genric-btn primary-border radius">Open</a>
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