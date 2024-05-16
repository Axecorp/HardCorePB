<section class="points-section">
    <div class="points-section-container">
        <div class="points-text-container">
            <div class="heading">
                <h2><?php echo $block['heading']; ?></h2>
            </div>
            <div class="subtext">
                <p><?php echo $block['subtext']; ?></p>
            </div>
        </div>
        <div class="points-images-container">
            <div class="pi-wrap">
                <div class="pi-inner">
                    <?php foreach(($block['points_images']) as $pi){ ?>
                        <div class="single-point">
                            <div class="sp-img">
                                <img src="<?php echo $pi['point_image']; ?>" alt="">
                            </div>
                            <div class="sp-title">
                                <p><?php echo $pi['point_title']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>