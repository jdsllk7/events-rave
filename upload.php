<?php include 'head.php';
if (!isset($_COOKIE["userId"])) {
	header('Location:login.php');
}
?>

<main>



    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding30">
        <div class="container">
            <div class="row align-items-center">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Let's Get Advertizing</h2>
                    </div>
                    <div class="col-lg-8">
                        <?php include 'db/db_upload.php'; ?>
                        <form class="form-contact contact_form" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="row">

                                <div class="col-sm-12 mb-4">
                                    <div class="form-group">
                                        <label for="">Event Type</label>
                                        <br>
                                        <select class="form-control" name="type" style="width: 300px;" required>
                                            <option value="" selected>- Select Type -</option>
                                            <option value="Venue">Venue</option>
                                            <option value="Decor">Decor</option>
                                            <option value="Catering">Catering</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input class="form-control" name="name" value="" type="text" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Details</label>
                                        <textarea class="form-control w-100" name="description" id="message" cols="30" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea class="form-control w-100" name="address" id="message" cols="30" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input class="form-control" name="pImage" type="file" required accept=".jpg,.png,.jpeg">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Open From</label>
                                        <input class="form-control" name="timeFrom" type="time">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">To</label>
                                        <input class="form-control" name="timeTo" type="time">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-2 Area End -->



</main>

<?php include 'footer.php'; ?>