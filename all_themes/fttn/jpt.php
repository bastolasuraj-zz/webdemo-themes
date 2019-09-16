<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <title>
        <?php if (is_category()) {
            echo '';
            single_cat_title();
            echo ' | ';
            bloginfo('name');
        } elseif (is_tag()) {
            echo '';
            single_tag_title();
            echo ' | ';
            bloginfo('name');
        } elseif (is_archive()) {
            wp_title('');
            echo ' | ';
            bloginfo('name');
        } elseif (is_search()) {
            echo 'Search for &quot;' . wp_specialchars($s) . '&quot; | ';
            bloginfo('name');
        } elseif (is_home() || is_front_page()) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
        } elseif (is_404()) {
            echo 'Error 404 Not Found | ';
            bloginfo('name');
        } elseif (is_single()) {
            wp_title('');
        } elseif (is_page()) {
            wp_title('');
        } else {
            echo wp_title(' | ', false, right);
            bloginfo('name');
        } ?>
    </title>
    <?php wp_head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>



<body>




    <!-- Header Section -->
    <?php include("include/header-front-page.php") ?>






    <!-- Banner Section -->
    <?php include("include/banner.php") ?>

    <div class="clearfix"></div>





    <?php $a = 0;
    if ($a == 1) { ?>
        <div class="highlight">
            <?php
            $highlights_query = new WP_Query(array('post_type' => 'highlights', 'posts_per_page' => '3', 'orderby' => 'id',    'order'   => 'ASC', 'meta_key' => 'published', 'meta_value' => 'Yes'));
            ?>
            <div class="container">
                <div class="row">


                    <?php if ($highlights_query->have_posts()) : ?>
                        <?php while ($highlights_query->have_posts()) : $highlights_query->the_post(); ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="hl-list hl-list-1">
                                    <p><a href="<?php the_field('page_link'); ?>"><?php the_field('small_title'); ?><br> <span><?php the_field('large_title'); ?></span></a></p>
                                </div>
                            </div>
                        <?php endwhile; ?>



                    </div>
                </div>
            <?php endif; ?>
        </div>

    <?php } ?>


    <!-- Intro Section -->
    <section class="section intro-holder bg-white">
        <div class="container">
            <div class="row">

                <?php

                $page_id = 22;
                $page_data = get_page($page_id);
                $title = $page_data->post_title;
                $content = $page_data->post_content;
                ?>

                <div class="col-12">
                    <div class="intro-text">
                        <div class="title">
                            <?php echo '<h2>' . $title . '</h2>'; ?>
                        </div>
                        <p class="focustext"><?php echo (get_the_excerpt(22)); ?></p>
                        <p><?php $trimmed_content = wp_trim_words($content, 30, '');
                            echo $trimmed_content; ?></p>
                        <a href="<?php echo get_permalink(22); ?>" class="btn btn-1">read more</a>
                    </div>
                </div>


            </div>
        </div>
    </section>





    <!-- Latest Update Section -->
    <section class="section recent-update bg-grey">
        <div class="container">
            <div class="title">
                <h2>Announcements</h2>
            </div>

            <div class="row">
                <?php
                $latestupdate_query = new WP_Query(array('cat' => '3', 'posts_per_page' => '3', 'orderby' => 'id', 'order' => 'DESC',));
                while ($latestupdate_query->have_posts()) : $latestupdate_query->the_post();
                    ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="recent-update-block">
                            <div class="recent-update-date">
                                <div class="date"><?php the_time('j') ?> </div>
                                <div class="month"><?php the_time('M') ?></div>
                                <div class="year"><?php the_time('Y') ?></div>
                            </div>

                            <div class="recent-update-content">
                                <h3><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h3>
                                <div class="clearfix"></div>
                                <p><?php
                                    $content = get_the_content();
                                    echo substr($content, 0, 115);
                                    ?></p>
                                <a href="<?= the_permalink() ?>" class="btn btn-5">read more →</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>


            <a href="http://2018.igf.org.np/category/latest-updates/" class="btn btn-1">View all Updates</a>
        </div>
    </section>




    <?php 
    if ($a == 1) { ?>
        <!--Host start-->
        <?php
        $host_query = new WP_Query(array('post_type' => 'host', 'posts_per_page' => '4', 'orderby' => 'id', 'order' => 'ASC'));
        ?>
        <section class="section prm-host bg-colored">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                    <?php if ($host_query->have_posts()) : ?>
                        <?php while ($host_query->have_posts()) : $host_query->the_post(); ?>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <div class="host-list">
                                    <div class="host-img">
                                        <a href="<?php echo (get_the_excerpt()); ?>" title="<?= the_title() ?>" target="_blank"><?= the_post_thumbnail('medium'); ?></a>
                                    </div>
                                    <p><?= the_title() ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!--Host end-->

    <?php } ?>





    <?php 
    if ($a == 1) { ?>
        <!--supporter start-->

        <?php
        $supporter_query = new WP_Query(array('post_type' => 'supporter', 'posts_per_page' => '100', 'orderby' => 'id', 'order' => 'ASC'));
        ?>
        <section class="section logo-display">
            <div class="container">
                <div class="title">
                    <h2>Supporter</h2>
                </div>


                <div class="owl-carousel owl-theme block-slide-1">


                    <div class="item">
                        <div class="row">
                            <?php if ($supporter_query->have_posts()) : ?>
                                <?php while ($supporter_query->have_posts()) : $supporter_query->the_post(); ?>
                                    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                                        <div class="logo-display-block"><a href="<?php echo (get_the_excerpt()); ?>" title="<?= the_title() ?>" target="_blank"><?= the_post_thumbnail('medium'); ?></a></div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>





                    </div>
                <?php endif; ?>
            </div>
        </section>


        <!--supporter end-->

    <?php } ?>





    <!-- Middle Information Section -->
    <?php
    // The Query
    $args = array('cat' => '4', 'posts_per_page' => '2', 'orderby' => 'date', 'order'   => 'DESC',);
    $information_query = new WP_Query($args);
    ?>
    <section class="middle-information">
        <div class="container">
            <div class="row">

                <?php
                $informationcnt = 1;
                while ($information_query->have_posts()) {
                    $information_query->the_post();
                    if ($informationcnt % 2 != 0) {
                        ?>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="information-list">
                                <h2><?= get_the_title() ?></h2>
                                <p><?= get_the_excerpt() ?></p>
                                <a href="<?= get_the_permalink() ?>" class="btn btn-4">read more</a>
                            </div>
                        </div>

                    <?php
                    } else {
                        ?>


                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="information-list information-list-2">
                                <h2><?= get_the_title() ?></h2>
                                <p><?= get_the_excerpt() ?></p>
                                <a href="<?= get_the_permalink() ?>" class="btn btn-4">read more</a>
                            </div>
                        </div>


                    <?php
                    }
                    $informationcnt++;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>



    <?php get_footer() ?>