<?php
$args = array(
    'post_type' => 'blogs',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
);
$loop = new WP_Query($args); 
$posts = $loop->posts;
?>

<div class="heading">
    <h2><?php echo $block['heading']; ?></h2>
</div>
<div class="blog">

    <div class="align">
        <?php foreach($posts as $post) { 
            setup_postdata($post);
            ?>
            <div class="card" style="background-image:url(/wp-content/uploads/2024/05/Group_16.svg);">
                <div class="text-container">
                    <div class="heading">
                        <h1><?php echo get_the_title($post->ID); ?></h1>
                    </div>
                    <div class="bent">
                        <img src="/wp-content/uploads/2024/05/Vector-2-1-1.png">  
                    </div>
                    <div class="text">
                        <p><?php echo get_the_excerpt($post->ID); ?></p>
                    </div>
                    <div class="button">
                        <a href="<?php echo get_permalink($post->ID); ?>">Read More</a>
                    </div>
                </div>
            </div>
        <?php } 
        wp_reset_postdata(); ?>
    </div>
</div>

<script>


$('.blog .align').slick({
    dots: false,
    slidesToShow: 3,
    infinite: true,
    variableWidth: false,
    speed: 500,
    arrows: true,
    responsive: [
        {
        breakpoint: 1510,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                centerMode: false,
                autoWidth: false,
                variableWidth: false
            }
        },
        {
        breakpoint: 850,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                centerMode: false,
                autoWidth: false,
                variableWidth: false
            }
        },
        {
        breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows:false,
                dots: false,
                centerMode: false,
                autoWidth: false,
                variableWidth: false
            }
        }
    ]
});


</script>