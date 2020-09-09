<?php
include 'head.php';
if (isset($_COOKIE["userId"])) {
    header('Location:index.php');
}
?>

<main>



    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding30">
        <div class="container">
            <div class="row align-items-center">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Login</h2>
                    </div>
                    <div class="col-lg-8">
                        <?php include 'db/login_db.php'; ?>
                        <form method="post" class="form-contact contact_form" id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Company Email</label>
                                        <input class="form-control" name="email" type="email" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input class="form-control" name="password" type="password" required>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Login</button>
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