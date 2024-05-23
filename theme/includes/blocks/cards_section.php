<section class="cards-section">
    <div class="cards-section-container">
        <div class="underlined-heading">
            <div class="text">
                <h4><?php echo $block['heading']; ?></h4>
            </div>
            <div class="img">
                <img src="<?php echo "/wp-content/uploads/2024/05/Vector-2.png" ?>" alt="">
            </div>
        </div>
        <div class="cards-wrapper">
            <div class="cards-wrap">
                <?php foreach($block['cards'] as $card){ ?>
                    <div class="card-single">
                        <div class="single-card-wrap">
                            <div class="card-underlined-heading">
                                <div class="text">
                                    <h4><?php echo $card['title']; ?></h4>
                                </div>
                            </div>
                            <div class="single-card-img">
                                <img src="<?php echo $card['image'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>