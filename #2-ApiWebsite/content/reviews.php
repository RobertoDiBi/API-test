

<?php
session_start();
if ($_SESSION['rating'] != null && $_SESSION['reviews'] !=null):?>
<section class="clean-block clean-blog-list dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">More Reviews</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="block-content">
            <?php for ($i = 0;$i<4;$i++): ?>
            <div class="clean-blog-post">
                <div class="row">
                    <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/sports.jpg"></div>
                    <div class="col-lg-7">
                        <h3>Lorem Ipsum dolor sit amet</h3>
                        <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                            vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php else : ?>
<div class=" row justify-content-center" style="margin-top: 15%; margin-bottom: 15%;">
    <h2>Our Servers are down at the moment please try again later</h2>
    <img src="assets/img/500_error.gif" alt="500 Internal server error"/>
</div>
<?php endif;

