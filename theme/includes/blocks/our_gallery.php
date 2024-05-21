<section class="gallery-section">
    <div class="gallery-container">
        <div class="underlined-heading">
            <div class="text">
                <h4><?php echo $block['heading']; ?></h4>
            </div>
            <div class="img">
                <img src="<?php echo "/wp-content/uploads/2024/05/Vector-2.png" ?>" alt="">
            </div>
        </div>
        <div class="gallery-images">
            <div class="gallery-wrapper">
                <?php foreach($block['gallery_images'] as $gallery){ ?>
                    <div class="gallery-img">
                        <div class="img">
                            <img src="<?php echo $gallery['images']; ?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>