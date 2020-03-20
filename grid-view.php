<?php if (!defined('ABSPATH')) die(); ?>

<?php    
    $the_query = new WP_Query(array(
        'post_type' => 'sfa_suggestion',
        'post_status' => 'publish',
        'posts_per_page' => -1
    ));
    
    if ($the_query->have_posts()) {
?>
<main class="container">
    <section class="row justify-content-center">
        <?php while ($the_query->have_posts()) { 
            $the_query->the_post();
        ?>
        <div class="wrapper">
            <div class="card" style="font-family:sans;">
                <div class="card-body">
                    <div class='card-subtitle' style="overflow:hidden;z-index:1;position:relative;">
                        <p style="background-color:#333;transform:skew(-25deg);margin-left:calc(10% + 5px);font-size:10pt;margin-bottom:0px;color:lightgrey;">
                            <span style="transform:skew(25deg);display:block;"><?php the_author() ?></span>
                        </p>
                    </div>
                    <div style="overflow:hidden;margin-top:-15px;z-index:-1;">
                        <p class="card-text text-clamp" style="transform:skew(-25deg);background-color:#e84628;max-width:100%;margin-left:-10%;padding:20px 0 5px calc(5px + 10%);">
                        <?php the_content() ?></p>
                </div>
            </div>
            <span class="btn-primary badge badge-pill badge-primary">
                <a href="javascript:void(0)">&#128077; 45</a>
            </span>
        </div>
        <?php } ?>
    </section>
</main>
<?php } ?>
