<?php
session_start();
//Fetching data from Api
$ratingAverage = API::getRatingAverage();
$reviews = Api::getReviews();

$rating = new RatingAverage();
$allreviews = [];

if($ratingAverage != null && $reviews != null){
    $_SESSION['rating']= 1;
    $_SESSION['reviews']= 1;
}else{
    $_SESSION['rating']= null;
    $_SESSION['reviews']= null;
}

//Storing fetched data into corresponding classed
$rating->setId($ratingAverage["id"]);
$rating->setName($ratingAverage["name"]);
$rating->setAverage($ratingAverage["average"]);
$rating->setRatingsCount($ratingAverage["ratingsCount"]);

foreach ($reviews as $rev) {
    $review = new Review();
    $review->setId($rev["id"]);
    $review->setTitle($rev["title"]);
    $review->setAverage($rev["average"]);
    $review->setComment($rev["comment"]);
    $review->setReviewedBy($rev["reviewedBy"]);
    $review->setCreatedDate($rev["createdDate"]);
    array_push($allreviews, $review);
}
?>

<style>
    .reviews{
        padding: 15px;
        max-width: 768px;
        margin: 0 auto;
    }

    .review-item{
        background-color: white;
        padding: 15px;
        margin-bottom: 5px;
        box-shadow: 1px 1px 5px #343a40;
    }

    .review-item .review-date{
        color: #cecece;
    }
    .review-item .review-text{
        font-size: 16px;
        font-weight: normal;
        margin-top: 5px;
        color: #343a40;
    }

    .review-item .reviewer{
        width: 100px;
        height: 100px;
        border: 1px solid #cecece;
    }   
</style>
<?php if ($_SESSION['rating'] != null && $_SESSION['reviews'] !=null):?>
<section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/all-sports-banner.png&quot;);color:rgba(9, 162, 255, 0.85);">
    <div class="text">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p><button class="btn btn-outline-light btn-lg" type="button">Learn More</button></div>
</section>

<div class="row">
    <div class="col-lg-12">
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><?php echo $rating->getName() ?></h2>
                    <p><?php echo "Average: " . $rating->getAverage() . " Ratings: " . $rating->getRatingsCount() ?></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="<?php
                        if ($rating->getId() === 1) {
                            echo "assets/img/canadians.jpg";
                        }
                        ?>"></div>
                    <div class="col-md-6">
                        <h3>Lorem impsum dolor sit amet</h3>
                        <div class="getting-started-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button" onclick="displayReviews()">All Reviews</button></div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-12" id="reviews" style="display: none;">
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Reviews : <?php echo $rating->getName() ?></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">

                    <?php
                    //Displaying all reviews
                    foreach ($allreviews as $key => $review):
                        $reviewId = $review->getId();
                        $reviewTitle = $review->getTitle();
                        $reviewAverage = $review->getAverage();
                        $reviewComment = $review->getComment();
                        $reviewedBy = $review->getReviewedBy();
                        $reviewCeatedDate = $review->getCreatedDate();
                        
                        $split = explode(" ", $reviewCeatedDate);
                        ?>
                        <div class="reviews col-md-12 feature-box">
                            <div class="row blockquote review-item">
                                <div class="col-md-3 text-center">
                                    <img class="rounded-circle reviewer" src="assets/img/avatar.png">
                                    <div class="caption">
                                        <small>by <?php echo $reviewedBy;?></small>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <h4><?php echo $reviewTitle?></h4>
                                    <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                    <p class="review-text"><?php echo $reviewComment?></p>

                                    <small class="review-date"><?php echo date('D, M jS Y', strtotime($split[0]))?></small>
                                    <small class="review-date"><?php echo " at ". date('h:i a', strtotime($split[1]))?></small>
                                </div>                          
                            </div>  
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php else :?>
<div class=" row justify-content-center" style="margin-top: 15%; margin-bottom: 15%;">
    <h2>Our Servers are down at the moment please try again later</h2>
    <img src="assets/img/500_error.gif" alt="500 Internal server error"/>
</div>
<?php endif;?>

<script>
    
    //Function to DisplayReviews will display alle reviews related to the team when the button is clicked 
    function displayReviews() {
        var x = document.getElementById("reviews");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
