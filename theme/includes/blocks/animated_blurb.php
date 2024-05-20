<section class="animated-blurb" style="background-image: url('<?php echo $block['background_image']; ?>')">
    <div class="animated-blurb-container">
        <div class="animated-img-container">
            <img src="<?php echo $block['blurb_image'] ?>" alt="">
        </div>
        <div class="animated-text-container">
            <div class="animated-text-top">
                <div class="at-left">
                    <img src="<?php echo $block['detailed_image'] ?>" alt="">
                </div>
                <div class="at-right">
                    <div class="underlined-heading">
                        <div class="text">
                            <h4><?php echo $block['subheading']; ?></h4>
                        </div>
                        <div class="img">
                            <img src="<?php echo "/wp-content/uploads/2024/05/Vector-1.png" ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="animated-heading">
                <h2><?php echo $block['heading']; ?></h2>
            </div>
            <div class="animated-button">
                <a href="<?php echo $block['button']['url']; ?>"><?php echo $block['button']['title']; ?></a>
            </div>
        </div>
    </div>
</section>