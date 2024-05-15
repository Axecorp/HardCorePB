<?php 
    $site_logo = get_field("site_logo","options");
    $nav_links = get_field("nav_links","options");
    $cart_link = get_field("cart_link","options");
    $header_buttons = get_field("header_buttons","options");    
?>
<header>
    <div class="header-container">
        <div class="site-logo">
            <a href="<?php echo get_site_url(); ?>"><img src="<?php echo $site_logo; ?>" alt="HardCorePB-Logo"></a>
        </div>
        <div class="header-links">
            <div class="nav-container">
                <div class="nav-wrap">
                    <?php foreach($nav_links as $nav){ ?>
                        <a href="<?php echo $nav['link']['url']; ?>"><?php echo $nav['link']['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="cart-link">
                <a href="<?php echo $cart_link['link']; ?>"><img src="<?php echo $cart_link['cart_icon'] ?>" alt=""></a>
            </div>
            <div class="header-buttons">
                <?php foreach($header_buttons as $buttons){ ?>
                    <a href="<?php echo $buttons['button']['url']; ?>" class="header-button"><?php echo $buttons['button']['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>