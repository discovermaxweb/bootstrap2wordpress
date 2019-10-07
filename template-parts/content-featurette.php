<?php
 //Advanced Custom Fields
 $video_feature_title       = get_field('video_feature_title');
 $video_feature_iframe      = get_field('video_feature_iframe');
?>

<!-- VIDEO FEATURETTE
================================================== -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $video_feature_title; ?>HI</h2>
                <?php echo $video_feature_iframe; ?>
            </div><!-- end col -->
        </div><!-- row -->			
    </div><!-- container -->
</section><!-- featurette -->
