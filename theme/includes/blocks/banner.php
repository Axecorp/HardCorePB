<section class="banner" style="background: url('<?php echo $block['background_image']; ?>')">
    <div class="banner-container">
        <div class="banner-text-container">
            <div class="heading">
                <h1><?php echo $block['heading']; ?></h1>
            </div>
            <div class="subheading">
                <h2><?php echo $block['subheading']; ?></h2>
            </div>
            <div class="subtext">
                <p><?php echo $block['subtext']; ?></p>
            </div>
            <div class="bottom-text">
                <h4><?php echo $block['bottom_text']; ?></h4>
            </div>
            <div class="banner-link">
                <a href="<?php echo $block['banner_link']['url']; ?>"><?php echo $block['banner_link']['title']; ?></a>
            </div>
        </div>
        <div class="banner-image-container">
            <div class="image-wrap">
                <img src="<?php echo $block['banner_image']; ?>" alt="">
            </div>
        </div>
    </div>
</section>