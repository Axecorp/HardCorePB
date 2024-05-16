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
                <a href="<?php echo $cart_link['link']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M0 1.41029C0.24227 0.76116 0.72418 0.516915 1.39371 0.568266C1.59583 0.584066 1.79991 0.568266 2.00268 0.568266C2.53331 0.5788 3.0659 0.568266 3.59389 0.611058C4.51031 0.688743 5.37142 1.42411 5.57616 2.32275C5.71902 2.94422 5.8079 3.57887 5.89414 4.21153C5.92179 4.41496 5.98697 4.46236 6.18316 4.46236C11.722 4.4571 17.2611 4.45578 22.8004 4.45841C23.4205 4.45841 23.8412 4.75138 23.9696 5.29319C24.0054 5.44432 24.0096 5.60119 23.9821 5.75403C23.469 8.33737 22.9516 10.9196 22.4297 13.5008C22.3639 13.8299 22.3079 14.1591 22.225 14.4843C21.8471 15.9636 20.7766 16.832 19.2513 16.8372C15.5558 16.8508 11.8605 16.8508 8.16543 16.8372C6.54985 16.8306 5.35759 15.7016 5.15351 14.1031C4.96983 12.6647 4.74073 11.2321 4.53137 9.79757C4.33431 8.44753 4.13681 7.09749 3.93887 5.74745C3.8072 4.86 3.68343 3.96992 3.55176 3.08511C3.50831 2.79149 3.43128 2.72895 3.13569 2.72763C2.54318 2.72763 1.95067 2.70459 1.35816 2.7329C0.689943 2.76516 0.225813 2.52223 0.00197696 1.87705L0 1.41029Z" fill="black"/>
                    <path d="M20.9676 20.6411C20.9672 21.3797 20.6749 22.0882 20.1544 22.6122C19.6339 23.1362 18.9273 23.4332 18.1887 23.4384C17.4463 23.4381 16.7342 23.1438 16.208 22.6201C15.6819 22.0963 15.3845 21.3855 15.3809 20.6431C15.381 19.9043 15.6739 19.1957 16.1953 18.6723C16.7167 18.1489 17.4242 17.8534 18.163 17.8504C18.5308 17.8481 18.8954 17.9187 19.2357 18.058C19.5761 18.1972 19.8856 18.4025 20.1463 18.6619C20.407 18.9213 20.6137 19.2297 20.7547 19.5694C20.8957 19.9091 20.968 20.2733 20.9676 20.6411Z" fill="black"/>
                    <path d="M8.59198 17.8564C10.1555 17.8709 11.361 19.133 11.3432 20.7367C11.3267 22.1883 10.0311 23.4609 8.5933 23.4359C7.06594 23.4115 5.84933 22.1337 5.86315 20.5695C5.87698 19.1086 7.14824 17.8426 8.59198 17.8564Z" fill="black"/>
                    </svg>
                </a>
            </div>
            <div class="header-buttons">
                <?php foreach($header_buttons as $buttons){ ?>
                    <a href="<?php echo $buttons['button']['url']; ?>" class="header-button"><?php echo $buttons['button']['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>