<?php include 'head.php'; ?>

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
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
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