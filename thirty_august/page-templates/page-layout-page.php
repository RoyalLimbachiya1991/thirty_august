<?php

/**
 * Template Name: Page Layout
 */

get_header();
?>
<main id="primary" class="site-main main-content">
    <?php if (have_rows('sections')) : ?>
    <?php while (have_rows('sections')) :  the_row(); ?>
        <?php if( get_row_layout() == 'image_banner_section' ): 
                    $background_color = get_sub_field('bg_color');
                ?>
            <section class="common-slider">
                <div class="hero-slider">
                    <?php if (have_rows('items')) : ?>
                    <?php while (have_rows('items')) :  the_row();
                                        $title = get_sub_field('title');
                                        $subtitle = get_sub_field('sub_title');
                                        $background_image = get_sub_field('image');
                                        $text_color = get_sub_field('text_color');
                                        $position = get_sub_field('position');
                                        $description = get_sub_field('description');
                                    ?>
                    <?php if($background_image): ?>
                    <div class="hero-item-slider" style="background-image: url('<?php echo $background_image; ?>');">
                        <?php else: ?>
                        <div class="hero-item-slider" style="background-color: <?php echo $background_color; ?>;">
                            <?php endif; ?>
                            <div class="hero-slider-caption">
                                <div class="container">
                                    <div
                                        class="hero-slider-caption-content <?php echo $dirClass = $position == 'Left' ? 'float-start' :( $position == 'Right' ? 'float-end' :  'text-center'); ?>">
                                        <?php  if( get_sub_field('sub_title') ): ?>
                                            <?php if($position == "Left" ): ?>
                                            <h5 style="color: <?php echo $text_color; ?>;" class="animate__animated"
                                                data-animation-in="animate__fadeInLeft" data-duration-in="2">
                                                <?php echo $subtitle; ?></h5>
                                            <?php else: ?>
                                            <h5 style="color: <?php echo $text_color; ?>;" class="animate__animated"
                                                data-animation-in="animate__fadeInRight" data-duration-in="2">
                                                <?php echo $subtitle; ?></h5>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php  if( get_sub_field('title') ): ?>
                                            <?php if($position == "Left" ): ?>
                                            <h2 style="color: <?php echo $text_color; ?>;" class="animate__animated"
                                                data-animation-in="animate__fadeInLeft" data-duration-in="2"><?php echo $title; ?>
                                            </h2>
                                            <?php else: ?>
                                            <h2 style="color: <?php echo $text_color; ?>;" class="animate__animated"
                                                data-animation-in="animate__fadeInRight" data-duration-in="2"><?php echo $title; ?>
                                            </h2>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php  if( get_sub_field('description') ): ?>
                                            <?php if($position == "Left" ): ?>
                                            <div class="description" class="animate__animated"
                                                data-animation-in="animate__fadeInLeft" data-duration-in="2">
                                                <?php echo $description; ?>
                                            </div>
                                            <?php else: ?>
                                            <div class="description" class="animate__animated"
                                                data-animation-in="animate__fadeInRight" data-duration-in="2">
                                                <?php echo $description; ?>
                                            </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if (have_rows('buttons')) : ?>
                                        <div class="buttons">
                                            <?php while (have_rows('buttons')) :  the_row();
                                                                    $button_link = get_sub_field('link_url');
                                                                    $button_name = get_sub_field('link_text'); 
                                                                ?>
                                                <a href="<?php echo $button_link; ?>" class="btn make-appointment animate__animated"
                                                    data-animation-in="animate__fadeInUp"
                                                    data-duration-in="2"><?php echo $button_name; ?></a>
                                            <?php endwhile; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
            </section>
        <?php endif; ?>

       

        <?php if( get_row_layout() == 'about_us' ): 
                    $background_color = get_sub_field('bg_color');
                    $title = get_sub_field('title');
                    $sub_title = get_sub_field('sub_title');
                    $description = get_sub_field('description');
                ?>
            <section class="about-us" style="background-color: <?php echo $background_color; ?>;">
                <div class="container">
                    <div class="row">
                        <?php if (have_rows('items')) : ?>
                            <?php while (have_rows('items')) :  the_row(); 
                                            $image = get_sub_field('image');
                                            $items_title = get_sub_field('title');
                                            $link = get_sub_field('link');
                                        ?>
                                <div class="treatment-content col-md-6 col-lg-3 col-xl-3">
                                    <div class="content-wrap">
                                        <a href="<?php echo $link; ?>">
                                            <div class="image-box">
                                                <img src="<?php echo $image; ?>" alt="">
                                            </div>
                                        </a>
                                        <?php  if( get_sub_field('title') ): ?>
                                        <div class="title">
                                            <?php  if( get_sub_field('link') ): ?>
                                            <a href="<?php echo $link; ?>">
                                                <h4><?php echo $items_title; ?></h4>
                                            </a>
                                            <?php else: ?>
                                            <h4><?php echo $items_title; ?></h4>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="about-content col-md-12 col-lg-6 col-xl-6">
                            <div class="content-wrap text-center">
                                <?php  if( get_sub_field('sub_title') ): ?>
                                <span class="sub-title"><?php echo $sub_title; ?></span>
                                <?php endif; ?>
                                <?php  if( get_sub_field('title') ): ?>
                                <h2 class="title"><?php echo $title; ?></h2>
                                <?php endif; ?>
                                <?php  if( get_sub_field('description') ): ?>
                                <div class="description">
                                    <?php echo $description; ?>
                                </div>
                                <?php endif; ?>
                                <?php if (have_rows('buttons')) : ?>
                                <?php while (have_rows('buttons')) :  the_row();
                                                $button_link = get_sub_field('link_url');
                                                $button_name = get_sub_field('link_name'); 
                                            ?>
                                <a href="<?php echo $button_link; ?>" class="btn read-more"><?php echo $button_name; ?></a>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'treatments' ): 
                    $background_color = get_sub_field('bg_color');
                    $title = get_sub_field('title');
                    $sub_title = get_sub_field('sub_title');
                ?>
            <section class="treatments-section">
                <div class="container">
                    <?php  if( get_sub_field('title') ): ?>
                        <div class="title-subtitle">
                                <?php  if( get_sub_field('sub_title') ): ?>
                                <span class="sub-title">
                                    <?php echo $sub_title; ?>
                                </span>
                                <?php endif; ?>
                                <?php  if( get_sub_field('title') ): ?>
                                <h2 class="title text-center">
                                    <?php echo $title; ?>
                                </h2>
                                <?php endif; ?>
                                <!-- <div class="title-image text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/sec-shape-1.png" alt="">
                                </div> -->
                        </div>
                    <?php endif; ?>
                    <?php  if( get_sub_field('items') ): ?>
                        <div class="treatments-content">
                            <?php while (have_rows('items')) :  the_row();
                                            $icons = get_sub_field('icons');
                                            $title = get_sub_field('title');
                                            $link = get_sub_field('link');
                                        ?>
                                <div class="items">
                                    <div class="content-wrap">
                                        <?php  if( get_sub_field('link') ): ?>
                                        <a href="<?php echo $link; ?>" target="_blank">
                                            <div class="category-icon">
                                                <img src="<?php echo $icons; ?>" alt="">
                                            </div>
                                            <h3 class="category-name">
                                                <?php echo $title; ?>
                                            </h3>
                                        </a>
                                        <?php else: ?>
                                        <div class="category-icon">
                                            <img src="<?php echo $icons; ?>" alt="">
                                        </div>
                                        <h3 class="category-name">
                                            <?php echo $title; ?>
                                        </h3>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'page_banner' ): 
                    $background_color = get_sub_field('bg_color');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $Image = get_sub_field('image');
                    $sub_title = get_sub_field('sub_title');
                    $position = get_sub_field('position');
                    $custom_class = get_sub_field('custom_class');
                ?>
        <?php if($Image): ?>
            <section class="banner-section  <?php echo $custom_class; ?>" style="background-image: url('<?php echo $Image; ?>');">
                <?php elseif($background_color): ?>
                <section class="banner-section" style="background-color: <?php echo $background_color; ?>;">
                    <?php else: ?>
                        <section class="banner-section  <?php echo $custom_class; ?>" style="background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/dummy_page_banner.png');">                       
                    <?php endif; ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 column <?php echo $items = ($position == "Left") ?  'order-1' : 'order-2'; ?>">
                                <?php  if( get_sub_field('title') ): ?>
                                <div class="title-subtitle">
                                   <div class="content">
                                      <?php  if( get_sub_field('sub_title') ): ?>
                                        <span class="sub-title">
                                            <?php echo $sub_title; ?>
                                        </span>
                                        <?php endif; ?>
                                        <?php  if( get_sub_field('title') ): ?>
                                        <h2 class="title text-center">
                                            <?php echo $title; ?>
                                        </h2>
                                        <?php endif; ?>
                                        <div class="title-image text-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/title_icn.png" alt="">
                                        </div>      
                                        <?php  if( get_sub_field('description') ): ?>
                                        <div class="description text-center">
                                            <?php echo $description; ?>
                                        </div>
                                        <?php endif; ?>
                                   </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12  col-md-6  <?php echo $items = ($position == "Left") ?  'order-2' : 'order-1'; ?>">

                            </div>
                        </div>
                    </div>
            </section>
        <?php endif; ?>

        <?php if (get_row_layout() == 'onetwo_columns') :
                    $title = get_sub_field('title');
                    $columns = get_sub_field('columns');
                    $bg_color = get_sub_field('bg_color');
                    $subtitle = get_sub_field('subtitle');
                    $custom_class = get_sub_field('custom_class')
                ?>

                <section class="onetwo_columns  <?php echo $custom_class; ?>" style="background-color: <?php echo $bg_color; ?>; ">
                    <div class="container">
                        <?php if (get_sub_field('title')) : ?>
                            <div class="title-subtitle">
                                <?php if (get_sub_field('title')) : ?>
                                    <h2 class="title text-center">
                                        <?php echo $title; ?>
                                    </h2>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_sub_field('columns')) : ?>
                            <div class="video_image_content row">
                                <?php
                                $columns = get_sub_field('columns'); // Get the columns repeater field

                                $column_count = count($columns); // Count the number of columns
                                $column_class = ($column_count === 1) ? 'col-12' : 'col-12 col-md-6';

                                // Loop through columns
                                foreach ($columns as $column) :
                                    $title = $column['title'];
                                    $items = $column['items'];
                                    ?>
                                

                                    <?php if ($items) : ?>
                                        <div class="column-items <?php echo ($column_class); ?>">
                                            <?php if ($title) : ?>
                                                <h3 class="title">
                                                    <?php echo esc_html($title); ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php foreach ($items as $item) : ?>
                                                <?php
                                                $type = $item['type'];
                                                $image = $item['image'];
                                                $video_sources = $item['video_source'];
                                                // $youtube = $item['youtube'];
                                                $text = $item['text'];
                                                $buttons = $item['buttons'];
                                            
                                                ?>

                                                <div class="item">
                                                    <?php if ($type === "Image") : ?>
                                                        <div class="item_image">
                                                        <img src="<?php echo ($image); ?>" alt="">
                                                        </div>
                                                    <?php elseif ($type === "Video") : ?>
                                                        <?php foreach ($video_sources as $video_source) : 
                                                            $video_select = $video_source['video_select'];
                                                            $youtube = $video_source['youtube'];                                          
                                                            ?>  
                                                             <?php if ($youtube) :?>   
                                                                <div class="video_content">
                                                                  <?php echo ($youtube); ?>
                                                                </div>
                                                             <?php endif; ?>
                                                          
                                                             <?php if ($video_select) :?>   
                                                                <video  controls  crossorigin playsinline >
                                                                    <source src="<?php echo $video_select; ?>" type="video/mp4">
                                                                </video>
                                                                <?php endif; ?>   
                                                                
                                                        <?php endforeach; ?>                                                
                                                             
                                                        
                                                    <?php elseif  ($type === "Text"): ?>
                                                        <div class="description"><?php echo ($text); ?></div>                               
                                                    <?php else : ?>
                                                        <?php if ($buttons) :?>                                   
                                                                <div class="button_section">                                            
                                                                        <a href="<?php echo ($buttons['button_url']); ?>" class="btn"><?php echo ($buttons['button_name']); ?></a>                                          
                                                                </div>
                                                            <?php endif; ?>
                                                    
                                                    <?php endif; ?>
                                                </div>

                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </section>
        <?php endif; ?>    

        <?php if( get_row_layout() == 'two_column' ): 
                    $heading_title = get_sub_field('heading_title');
                    $background_color = get_sub_field('bg_color');
                    $title = get_sub_field('title');
                    $sub_title = get_sub_field('subtitle');
                    $description = get_sub_field('description');
                    $img = get_sub_field('image');
                    $video = get_sub_field('video');
                    $type = get_sub_field('type');                
                    $position = get_sub_field('position');
                    $custom_class = get_sub_field('custom_class');
                ?>

            <section class="two_column <?php echo $custom_class; ?>" style="background-color: <?php echo $background_color; ?>;">
                <div class="container">
                <?php  if( get_sub_field('heading_title') ): ?>
                        <div class="title-subtitle">                              
                                <?php  if( get_sub_field('heading_title') ): ?>
                                <h2 class="title text-center">
                                    <?php echo $heading_title; ?>
                                </h2>
                                <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="about-image col-md-12 col-lg-6 col-xl-6 <?php echo $items = ($position == "Left") ?  'order-1' : 'order-2'; ?>">
                            <div class="image_contents">
                                        <?php if($type == "Image" ): ?>
                                                    <img src="<?php echo $img; ?>" alt="">
                                                <?php else: ?>                                           
                                                    <video controls autoplay crossorigin playsinline >
                                                        <source src="<?php echo $video; ?>" type="video/mp4">
                                                    </video>
                                            <?php endif; ?>
                            
                            </div>
                        </div>
                        <div class="about-content col-md-12 col-lg-6 col-xl-6 <?php echo $items = ($position == "Left") ?  'order-2' : 'order-1'; ?>">
                            <div class="content-wrap">
                                <?php  if( get_sub_field('subtitle') ): ?>
                                <span class="sub-title"><?php echo $sub_title; ?></span>
                                <?php endif; ?>
                                <?php  if( get_sub_field('title') ): ?>
                                <h2 class="title"><?php echo $title; ?></h2>
                                <?php endif; ?>
                                <?php  if( get_sub_field('description') ): ?>
                                <div class="description">
                                    <?php echo $description; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php if (have_rows('items')) : ?>
                                <?php while (have_rows('items')) :  the_row(); 
                                        $image = get_sub_field('image');
                                        $items_title = get_sub_field('title');
                                        $subtitle = get_sub_field('subtitle');
                                    ?>
                                    <div class="content-wrap-item">

                                        <?php  if( get_sub_field('image') ): ?>
                                            <div class="icon">
                                                <img src="<?php echo $image; ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                        <?php  if( get_sub_field('title') ): ?>
                                            <div class="content">
                                                <h6><?php echo $items_title; ?></h6>
                                                <p><?php echo $subtitle; ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'discover' ): 
                $background_color = get_sub_field('bg_color');
                $title = get_sub_field('title');
                $Images = get_sub_field('image');
                $items = get_sub_field('items');
                $sub_title = get_sub_field('subtitle')
                        ?>
            <section class="discover" style="background-color: <?php echo $background_color; ?>;">
                <div class="container">

                    <?php  if( get_sub_field('subtitle') ): ?>
                    <h5><span class="sub-title"><?php echo $sub_title; ?></span></h5>
                    <?php endif; ?>
                    <div class="section-title">
                        <h2><?php echo $title;?></h2>
                        <!-- <div class="title-image text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/sec-shape-1.png" alt="">
                        </div> -->
                    </div>
                    <div class="shape-mockup-wrap">
                        <div class="container-xl">

                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-6 col-lg-5 col-xxl-auto">
                                    <!-- <div class="row"> -->
                                    <?php
                                                $counter = 0;

                                    while (have_rows('items')) : the_row();
                                            $counter++;

                                            // Skip even-numbered items
                                        if ($counter % 2 == 0) {
                                            continue;
                                            }

                                                $icon = get_sub_field('image');
                                                $title = get_sub_field('title');
                                                $description = get_sub_field('description');
                                                ?>
                                    <div class="item_column reverse">
                                        <!-- <div class="items items_one"> -->
                                        <!-- <div class="pink_border"> -->
                                        <div class="under_img"><img src="<?php echo $icon; ?>" /></div>
                                        <div class="image_content">
                                            <h4 class="title"><?php echo $title; ?></h4>
                                            <div class="description"><?php echo $description; ?></div>
                                        </div>
                                        <!-- </div> -->
                                        <!-- </div> -->
                                    </div>
                                    <?php endwhile; ?>

                                    <!-- 
                            </div> -->
                                </div>
                                <div class="col col-xxl-auto text-center d-none d-lg-block Image">

                                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/imgs/green.png"
                                        alt="" class="mt-n4">


                                </div>
                                <div class="col-md-6 col-lg-5 col-xxl-auto">
                                    <!-- <div class="row"> -->
                                    <?php
                                                $counter = 0;

                                                while (have_rows('items')) : the_row();
                                                    $counter++;

                                                    // Skip odd-numbered items
                                                    if ($counter % 2 != 0) {
                                                        continue;
                                                    }

                                                    $icon = get_sub_field('image');
                                                    $title = get_sub_field('title');
                                                    $description = get_sub_field('description');
                                                ?>
                                                    <div class="item_column">
                                                        <!-- <div class="items items_two"> -->
                                                        <!-- <div class="pink_border"> -->
                                                        <div class="under_img"><img src="<?php echo $icon; ?>" /></div>

                                                        <div class="image_content">
                                                            <h4 class="title"><?php echo $title; ?></h4>
                                                            <div class="description"><?php echo $description; ?></div>
                                                        </div>
                                                        <!-- </div> -->
                                                        <!-- </div> -->
                                                    </div>
                                                <?php endwhile; ?>


                                    <!-- </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'category_posts' ): 
                    $title = get_sub_field('title');  
                    $categorys = get_sub_field('select_category'); 
                    $background_color = get_sub_field('bg_color'); 
                    $custom_class = get_sub_field('custom_class'); 
                
                ?>
                <section class="common-grid <?php echo $custom_class; ?>" style="background-color: <?php echo $background_color; ?>;">
                    <div class="container">
                        <!-- <div class="col-md-12"> -->
                            <div class="section-title">
                                <h2><?php echo $title; ?></h2>
                            </div>
                        <!-- </div> -->
                        <ul class="row">
                            <?php
                                $cats = get_categories($categorys);
                                if (is_array($cats) && count($cats)>=1): 
                                foreach ($cats as $cat) {
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    // $posts_per_page = 16;
                                    $posts_per_page = 8;
                                    $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => $posts_per_page, 
                                    'paged' =>$paged,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'term_id',
                                            'terms'    => $cat->cat_ID,
                                            ),
                                        ),
                                    );
                                    $query = new WP_Query($args);

                                    if ( $query->have_posts() ): ?>
                                    <?php

                                        while($query -> have_posts()) : $query -> the_post(); 
                                        $permalink = get_permalink( $query->post->ID );
                                        $categoryname = $cat->cat_name;
                                        $categorylink = get_category_link( $categorys->term_id );
                                    ?>
                                    
                                        <li class="grid-box-content col-md-6 col-lg-4 col-xl-3">  
                                        <div class="grid-box">
                                        <div class="content-wrap">
                                                <div class="thumbnail-wrap">
                                                    <?php  if( the_post_thumbnail() ): ?>
                                                        <?php echo the_post_thumbnail($query->post->ID); ?>
                                                    <?php else : ?>
                                                        <a href="<?php echo esc_url( $permalink ); ?>">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/default.png'" alt="">
                                                        </a>
                                                    <?php endif; ?>
                                                </div> 
                                                <div class="summary-wrap">
                                                    <div class="title">
                                                        <a href="<?php echo esc_url( $permalink ); ?>">
                                                            <h3><?php the_title(); ?></h3>
                                                        </a>
                                                    </div>  
                                                    <div class="date">
                                                        <span><i class="far fa-clock"></i></span>
                                                        <span><?php echo get_the_date(); ?></span>
                                                    </div>
                                                    <!-- <div class="category-name">
                                                        <a href="<?php echo esc_url( $categorylink ); ?>">
                                                            <span><i class="fa fa-list-alt"></i></span>
                                                            <?php echo $categoryname; ?>
                                                        </a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                <?php
                                        endwhile;
                                    endif; 
                                    wp_reset_query() ; 
                                } ?>
                        <?php else: ?>
                            <li class="no-posts-found"><p style="color: <?php echo $text_color; ?>;">No posts found!</p></li>
                            <?php endif;
                            ?>
                        </ul>
                    
                    </div>
                </section>
        <?php endif; ?>
    
        <?php if( get_row_layout() == 'contact_us' ): 
                    $background_color = get_sub_field('bg_color');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                ?>
            <section class="contact-section"  style="background-color: <?php echo $background_color; ?>;">
                <div class="container">
                    <?php  if( get_sub_field('title') ): ?>
                        <div class="title-subtitle">
                            <?php  if( get_sub_field('title') ): ?>
                                <h2 class="title text-center">
                                    <?php echo $title; ?>
                                </h2>
                            <?php endif; ?>
                            <?php  if( get_sub_field('description') ): ?>                        
                                <?php echo $description; ?>
                            <?php endif; ?>   
                        </div>
                    <?php endif; ?>
                    <?php  if( get_sub_field('items') ): ?>
                        <div class="contact-content">
                            <div class="row">
                                <?php while (have_rows('items')) :  the_row();
                                                $inner_title = get_sub_field('title');
                                                $image = get_sub_field('image');
                                                $address = get_sub_field('address');
                                                $email = get_sub_field('email');
                                                $open_days = get_sub_field('open_days');
                                                $mo_number = get_sub_field('mo_number');
                                            ?>
                                    <div class="col-12 col-lg-6 items_container">
                                        <div class="items">
                                            <div class="content-wrap">
                                                <?php if($inner_title): ?>
                                                    <div class="title">
                                                    
                                                        <h2><?php echo $inner_title; ?></h2>
                                                    </div>
                                                <?php endif; ?>
                                                <?php  if( get_sub_field('image') ): ?>
                                                    <div class="image_content">
                                                    <img src="<?php echo $image; ?>" alt="">
                                                    </div>
                                                <?php endif; ?>
                                                <?php  if( get_sub_field('address') ): ?>
                                                    <div class="contact-table">
                                                        <div class="tr">
                                                            <div class="tb-col">
                                                            <span class="th">Address :</span><span class="td address"><?php echo $address; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php  if( get_sub_field('email') ): ?>
                                                
                                                        <div class="contact-table">
                                                            <div class="tr">
                                                                <div class="tb-col">
                                                                    <span class="th">Email :</span>
                                                                        <span class="td">
                                                                            <a href="#" class="text-inherit"><?php echo $email; ?></a>
                                                                        </span>
                                                                </div>
                                                                <div class="tb-col">
                                                                    <span class="th">Open :</span>
                                                                        <span class="td"><?php echo $open_days; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                <?php endif; ?>
                                                <?php  if( get_sub_field('mo_number') ): ?>
                                                    <div class="h2 contact_heading">
                                                        <a class="text-inherit" href="#">
                                                            <i class="fal fa-headset me-3 text-theme"></i>
                                                            <?php echo $mo_number; ?>
                                                        </a>
                                                    </div>
                                                <?php endif; ?> 
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>      

        <?php if( get_row_layout() == 'careers' ): 
                    $items = get_sub_field('items');
                ?>
            <section class="career-section"  style="background-color: <?php echo $background_color; ?>;">              
               

                    <?php if (have_rows('items')) : 
                        $count = 1;    
                    ?>
                                <?php while (have_rows('items')) :  the_row(); 
                                       $background_color = get_sub_field('bg_color');
                                       $title = get_sub_field('title');
                                       $short_description = get_sub_field('short_description');
                                       $long_description = get_sub_field('long_description');
                                       $Image = get_sub_field('image');
                                       $location = get_sub_field('location');
                                    ?>
                                    <div class="content-wrap-item">
                                        <div class="container box_shadow">
                                            <div class="container_box">
                                                    <div class="row career_column">
                                                            <div class="col-12 col-lg-6 col-xl-4">
                                                            <!-- <div class="col-12 col-lg-4"> -->
                                                                <div class="image_box">
                                                                        <img src="<?php echo $Image; ?>" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-xl-8">
                                                            <!-- <div class="col-12 col-lg-8"> -->
                                                                <?php  if( get_sub_field('title') ): ?>
                                                                    <div class="title-subtitle">
                                                                        <?php  if( get_sub_field('title') ): ?>
                                                                            <h3 class="title">
                                                                                <?php echo $title; ?>
                                                                            </h3>
                                                                        <?php endif; ?>
                                                                        <?php  if( get_sub_field('location') ): ?>                               
                                                                            <P class="location"> <?php echo $location; ?> </P>
                                                                        <?php endif; ?>
                                                                        <?php  if( get_sub_field('short_description') ): ?>                        
                                                                            <?php echo $short_description; ?>
                                                                        <?php endif; ?> 
                                                                        <div class="btn_content"><a onclick="myFunction(<?php echo $count;?>)" id="btn" class="btn"> View More</a> <a class="btn" href="#">Apply</a></div>
                                                                    </div>
                                                                <?php endif; ?>                                
                                                            </div>
                                                    </div>
                                                    <?php  if( get_sub_field('long_description') ): ?>                        
                                                            <div id="hide_show_button-<?php echo $count;?>" class="long_description">
                                                                <?php echo $long_description; ?>
                                                            </div>
                                                    <?php endif; ?> 
                                            </div>
                                        </div>    
                                    </div>
                                <?php 
                                $count++;
                            endwhile; ?>
                             
                            <?php endif; ?>

                  
            </section>            
        <?php endif; ?>       

        <?php if( get_row_layout() == 'treatment_tabbing' ): 
				$bg_color = get_sub_field('bg_color');  		
                $title = get_sub_field('title');  
                $description = get_sub_field('description');  
                $sub_title = get_sub_field('sub_title');  
                $items = get_sub_field('items'); // Get the items repeater field
                $itemCount = count($items); // Count the number of items
                $custom_class = get_sub_field('custom_class');
               ?>
            <section class="about-us-tabs <?php echo $custom_class; ?>" style="background-color: <?php echo $bg_color; ?>">
                <div class="container">
                    
                    <div class="tabbing">
                        <div class="media-style1">
                            <div class="circle_title">
                                <div class="circle-area">
                                    <div class="circle-btn style3">
                                        <svg viewBox="0 0 150 150" class="svg-hidden"><path id="about-tbn" d="M 0,75 a 75,75 0 1,1 0,1 z"></path> </svg>
                                        <a class="btn-icon"><i class="far fa-arrow-right"></i></a>
                                        <div class="btn-text">
                                            <svg viewBox="0 0 150 150">
                                                <text><textPath href="#about-tbn">Adorn Beauty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adorn Beauty</textPath></text>
                                            </svg>
                                        </div>
                                    </div>
                                </div>                                        
                                
                                <?php if ($itemCount > 1): ?>
                                    <div class="slider">                                    
                                        <?php if (have_rows('items')): 
                                            $tabtitlecount = 0;
                                            ?>
                                                <ul class="nav nav-tabs default-nav" id="myTab" role="tablist">
                                                    <?php while (have_rows('items')):  the_row(); 
                                                        $tabTitle = get_sub_field('title');
                                                            ?>
                                                        <li class="nav-item">
                                                            <a class="nav-link <?php if($tabtitlecount == 0): ?>active<?php endif; ?>"
                                                                id="tab_<?php echo $tabtitlecount; ?>" data-bs-toggle="tab"
                                                                data-bs-target="#tab_target_<?php echo $tabtitlecount; ?>" role="tab"
                                                                aria-controls="tab_control<?php echo $tabtitlecount; ?>" aria-selected="false">
                                                                <?php echo $tabTitle; ?>
                                                            </a>
                                                        </li>
                                                    <?php 
                                                        $tabtitlecount++;
                                                        endwhile; 
                                                        ?>
                                                </ul>
                                        <?php endif; ?>
                                    </div>
                                            <!-- Display only the title -->
                                    
                                <?php else: ?>
                                    <h2 class="title text-center single_title"><?php echo $items[0]['title']; ?></h2>
                                <?php endif; ?>
                            </div>

                            <?php if ($pages && count($pages) > 1): ?>
                                <!-- Display modal icon -->
                                <div class="modal_icon">                                        
                                    <button href="#" data-bs-toggle="modal" data-bs-target="#modal_tab1" class="bar-btn sideMenuToggler">
                                        <span class="bar"></span> <span class="bar"></span><span class="bar"></span>
                                    </button>                                       
                                </div>

                                <div class="modal" id="modal_tab1">
                                    <div class="modal-dialog dialog_box_tab">
                                        <div class="modal-content "> 
                                            <button class="closeButton sideMenuCls" id="closeModalButton"><i class="fal fa-times"></i></button>
                                            <div class="header-logo">
                                                <?php the_custom_logo(); ?>
                                            </div>
                                            <h4 class="modal-heading-title"><?php echo $banner_title; ?></h2>
                                            <?php if (have_rows('items')): 
                                                    $tabtitlecount = 0;
                                                ?>
                                                <ul class="nav nav-tabs modal_ul" id="myTab" role="tablist">
                                                    <?php foreach ($pages as $page): 
                                                        $page_title = $page["page_title"];
                                                        $page_link = $page["page_link"];
                                                    ?> 
                                                        <li class="nav-item">
                                                            <a class="" href="<?php echo $page_link; ?>">
                                                                <?php echo $page_title; ?>
                                                            </a>
                                                        </li>
                                                        <?php foreach ($side_items as $side_item):
                                                            $sub_menu_title = $side_item["menu_title"];
                                                            $sub_menu_pages = $side_item["menu_pages"];
                                                            if ($page_title == $sub_menu_title):
                                                            ?>
                                                            <ul class="sub_menu">
                                                                <?php foreach ($sub_menu_pages as $sub_menu_page): 
                                                                    $treatment_page = $sub_menu_page["treatment_page"];
                                                                    $submenu_title  = $sub_menu_page["submenu_title"];
                                                            
                                                                    ?>
                                                                    <li class="nav-item sub_menu_list">
                                                                        <a class="" href="<?php echo $treatment_page; ?>">
                                                                            <?php echo  $submenu_title; ?>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                    <?php endforeach; ?>          
                                                </ul>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>  
                            <?php endif; ?>
                            <?php if ( $itemCount > 1): ?>
                                <!-- Display modal icon -->
                                <h2 class="tabing_title title text-center" id="activeTabTitle"><?php echo $items[0]['title']; ?></h2>
                                <div class="modal_icon new_modal_icon">                                        
                                    <button href="#" data-bs-toggle="modal" data-bs-target="#modal_tab1" class="bar-btn sideMenuToggler">
                                        <span class="bar"></span> <span class="bar"></span><span class="bar"></span>
                                    </button>                                       
                                </div>

                                <div class="modal" id="modal_tab1">
                                    <div class="modal-dialog dialog_box_tab">
                                        <div class="modal-content "> 
                                            <button class="closeButton sideMenuCls" id="closeModalButton"><i class="fal fa-times"></i></button>
                                            <div class="header-logo">
                                                <?php the_custom_logo(); ?>
                                            </div>                                           
                                            <h4 class="modal-heading-title"><?php echo $banner_title; ?></h2>                                
                                            <?php if (have_rows('items')): 
                                                $tabtitlecount = 0;
                                                ?>
                                                    <ul class="nav nav-tabs modal_ul dfsrg" id="myTab" role="tablist">
                                                        <?php while (have_rows('items')):  the_row(); 
                                                            $tabTitle = get_sub_field('title');
                                                                ?>
                                                            <li class="nav-item">
                                                                <a class="nav-link <?php if($tabtitlecount == 0): ?>active<?php endif; ?>"
                                                                    id="tab_<?php echo $tabtitlecount; ?>" data-bs-toggle="tab"
                                                                    data-bs-target="#tab_target_<?php echo $tabtitlecount; ?>" role="tab"
                                                                    aria-controls="tab_control<?php echo $tabtitlecount; ?>" aria-selected="false">
                                                                    <?php echo $tabTitle; ?>
                                                                    
                                                                </a>
                                                            </li>
                                                        <?php 
                                                            $tabtitlecount++;
                                                            endwhile; 
                                                            ?>
                                                    </ul>
                                            <?php endif; ?>                                                                                   

                                        </div>
                                    </div>
                                </div>  
                            <?php endif; ?>
                        
                        </div> 
                    </div>   
                                                                    
                    <div class="tab-content" id="myTabContent">
                        <?php if (have_rows('items')): 
                            $tabdescount = 0;
                        ?>
                        <?php 
                            while (have_rows('items')):  the_row(); 
                            $subtitle = get_sub_field('subtitle');
                            $innertitle = get_sub_field('title');
                            $description = get_sub_field('description');
                        ?>
                        <div class="tab-pane fade show <?php if($tabdescount == 0): ?>active<?php endif; ?>"
                            id="tab_target_<?php echo $tabdescount; ?>" role="tabpanel"
                            aria-labelledby="tab_<?php echo $tabdescount; ?>">
                            <div class="row gx-80 row-flex">
                                <?php if(get_sub_field('gallery')): ?>
                                    <?php while (have_rows('gallery')) :  the_row(); ?>
                                        <?php if(get_sub_field('images')): ?>
                                            <?php
                                                $images = get_sub_field('images');
                                                $hasImages = !empty($images);
                                            ?>
                                            <div class="img_col col-lg-<?php echo $hasImages ? '6' : '12'; ?> wow fadeInUp"
                                                data-wow-delay="0.2s" style="visibility: visible;">
                                                <div class="img-box2">
                                                    <div class="img-1">
                                                        <?php if ($hasImages): ?>
                                                            <div class="images" id="images-<?php echo $tabdescount; ?>">                                                    
                                                                <?php foreach ($images as $image):                              
                                                                    $itemImage = $image['itemimage']; // Access the 'itemimage' subfield
                                                                    ?>
                                                                    <?php if ($itemImage): ?>
                                                                    <div class="image items">
                                                                        <img src="<?php echo $itemImage; ?>"  class="d-block img-responsive lazy_load lazyloaded">
                                                                    </div>
                                                                    <?php else : ?>
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/dummy.png" alt="">                                                                           
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </div>                                                
                                                        <?php endif; ?>
                                                    </div>
                                                    
                                                    <div class="img-2 jump">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/imgs/leaf-1-3.png" alt="">
                                                    </div>
                                                    
                                                    
                                                    <div class="img-shape">
                                                        <span class="img-text jump-reverse">Adorn Beauty</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <div class="col-lg-<?php echo $hasImages ? '6' : '12'; ?> wow fadeInUp" data-wow-delay="0.3s"
                                    style="visibility: visible;">
                                    <div class="content">
                                        <?php if ($itemCount > 1): ?>
                                        <div class="title-subtitle">
                                            <?php if (get_sub_field('subtitle')): ?>
                                            <span class="sub-title">
                                                <?php echo $subtitle; ?>
                                            </span>
                                            <?php endif; ?>
                                            <?php if (!empty($innertitle)): ?>
                                            <h3 class="title">
                                                <?php echo $innertitle; ?>
                                            </h3>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                        <?php echo $description; ?>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <h2>Table</h2>
                                </div> -->
                            </div>
                            <?php if ($hasImages): ?>
                            <script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/slick.js';?>"></script>
                            <script type="text/javascript">
                                jQuery(document).ready(function() {
                                    jQuery('#images-<?php echo $tabdescount;?>').slick({
                                            infinite: true,
                                            dots: false,
                                            slidesToShow: 1,
                                            slidesToScroll: 1,
                                            autoplay:true,
                                            arrows: false,
                                            fade: true                                             
                                        });
                                        
                                    // debugger;
                                    jQuery('a[data-bs-toggle="tab"]').on('shown.bs.tab', function() {  
                                        jQuery('#images-<?php echo $tabdescount;?>').slick('setPosition');                                       

                                        jQuery('.lazy_load').each(function() {
                                            var img = jQuery(this);
                                            img.attr('src', img.data('src'));
                                        });
                                        // Adjust slider width
                                        jQuery('#images-<?php echo $tabdescount;?>').css('width', '100%');

                                        });
                                        // get title on mobile view 
                                        jQuery('.nav-link').on('click', function () {
                                        // Get the text content of the selected tab and update the h2 element
                                        var selectedTabTitle = jQuery(this).text();
                                        jQuery('#activeTabTitle').text(selectedTabTitle);
                                            });
                                    
                                });
                                
                            </script>
                            <?php endif; ?>
                        </div>
                        <?php 
                            $tabdescount++;
                            endwhile; 
                        ?>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </section>
        <?php endif; ?>

        <?php if (get_row_layout() == 'testimonial_videos') :                   
                    $bg_color = get_sub_field('bg_color');    
                    $title = get_sub_field('title');                   

                ?>
                <section class="testimonial_videos" style="background-color: <?php echo $bg_color; ?>; ">
                    <div class="container">
                        
                        <?php if (get_sub_field('title')): ?>
                            <h2 class="title text-center">
                                    <?php echo $title; ?>
                                </h2>
                        <?php endif; ?>    
                        <div class="item row">   
                            <?php if (have_rows('items')) :    
                                 $idcount = 0;                   
                                        ?>
                                <?php while (have_rows('items')) :  the_row(); 
                                        $name = get_sub_field('name');
                                        $date = get_sub_field('date');
                                        $image = get_sub_field('image');
                                        $video = get_sub_field('video');
                                        $video_Type = get_sub_field('video_type');
                                        $Youtube = get_sub_field('youtube');                                   
                                    ?>
                                        <div class="col-md-6 col-lg-4 col-xl-4">
                                            <?php  if( get_sub_field('name') ): ?>
                                                <div class="video_content">
                                                    <div class="video_playbutton  ">
                                                        <?php if($video_Type == "Video_Src" ): ?>                                                
                                                                <video  id="myVideo_<?php echo $idcount; ?>" controls  crossorigin playsinline  poster=" <?php echo $image; ?>" >
                                                                    <source src="<?php echo $video; ?>" type="video/mp4">
                                                                </video>
                                                                <div onClick="togglePlayPause('myVideo_<?php echo $idcount; ?>' , 'playButton_<?php echo $idcount; ?>')" class=" f-play-video video-content"  id="playButton_<?php echo $idcount; ?>">
                                                                    <img src="<?php echo get_template_directory_uri();?>/imgs/playb.png'" alt="">
                                                                </div>                                                
                                                            <?php else: ?>  
                                                                    <?php echo ($Youtube); ?>
                                                        <?php endif; ?>
                                                    </div> 
                                                    
                                                    <div class="text_content">
                                                        <?php  if( get_sub_field('name') ): ?>
                                                            <h4 class="video_title"><?php echo $name; ?></h4>
                                                        <?php endif; ?>
                                                        <?php  if( get_sub_field('date') ): ?>
                                                        <div class="date">
                                                            <?php echo $date; ?>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>    
                                        </div>                            
                                <?php 
                                    $idcount++;
                                    endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php if (have_rows('button')) : ?>
                          
                           <?php while (have_rows('button')) :  the_row(); 
                                    $link_name = get_sub_field('link_name');
                                    $link_url = get_sub_field('link_url');                           
                                ?>
                                 <?php  if( $link_name || $link_url ) : ?>
                                    <div class="button_section">  <a href="<?php echo $link_url; ?>" class="btn "><?php echo $link_name; ?></a>  </div>                      
                                 <?php endif; ?>
                            <?php endwhile; ?>
                        
                        <?php endif; ?>
                        <script>
                            let currentPlayingVideo = null;  // Variable to store the currently playing video element

                            function togglePlayPause(id, buttonId) {
                                let video = document.getElementById(id);
                                let playButton = document.getElementById(buttonId);

                                if (currentPlayingVideo && currentPlayingVideo !== video) {
                                    // Pause the currently playing video and show its play button
                                    currentPlayingVideo.pause();
                                    let currentPlayButtonId = currentPlayingVideo.id.replace('myVideo_', 'playButton_');
                                    let currentPlayButton = document.getElementById(currentPlayButtonId);
                                    currentPlayButton.style.display = 'block';
                                }

                                if (video.paused || video.ended) {
                                    video.play();
                                    playButton.style.display = 'none'; // Hide the play button
                                    currentPlayingVideo = video; // Set the currently playing video
                                } else {
                                    video.pause();
                                    playButton.style.display = 'block'; // Show the play button when paused
                                    currentPlayingVideo = null; // Reset the currently playing video
                                }
                            }
                        </script>

                        <!-- <script>
                            function togglePlayPause(id, buttonId) {
                                let video = document.getElementById(id);
                                let playButton = document.getElementById(buttonId);

                                if (video.paused || video.ended) {
                                    video.play();
                                    playButton.style.display = 'none'; // Hide the play button
                                } else {
                                    video.pause();
                                    playButton.style.display = 'block'; // Show the play button when paused
                                }
                            }
                        </script> -->

                        
                    </div>
                </section>
        <?php endif; ?>    

        <?php if (get_row_layout() == 'treatment_detail') :
                $bg_color = get_sub_field('bg_color');
             ?>
            <section class="treatment_detail padding_bottom_zero" style="background-color: <?php echo $bg_color; ?>;">
                <div class="container">                           
                        <?php  if( get_sub_field('treatment_items') ): ?>
                            <div class="row">
                                <?php while (have_rows('treatment_items')) :  the_row();
                                                $title = get_sub_field('title');
                                                $image = get_sub_field('image');
                                                $button = get_sub_field('button')
                                            ?>
                                    <div class="col-md-6 treatment_detail_column mx-auto">
                                        <div class="image_content">
                                            <div class="image_div">
                                                <?php  if( get_sub_field('image') ): ?>
                                                    <img src="<?php echo $image; ?>" alt="">
                                                <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/imgs/dummy_grey_bg.jpg" alt=""> 
                                                <?php endif; ?>
                                            </div>
                                            <div class="over_image">
                                                <h4><?php echo $title; ?></h4>                           
                                                <?php  if( get_sub_field('button') ): ?>
                                                    <div class="">
                                                        <?php while (have_rows('button')) :  the_row();
                                                                        $link_name = get_sub_field('link_name');
                                                                        $link_url = get_sub_field('link_url');
                                                                    ?>
                                                            <a href="<?php echo $link_url; ?>" class="btn "><?php echo $link_name; ?></a> 
                                                        <?php endwhile; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?> 
                </div>
            </section>
        <?php endif; ?>  

         <!-- <?php if (have_rows('testimonial_videos', 'option')) :
                 $bg_color = get_sub_field('bg_color');    
                 $title = get_sub_field('title'); 
                  ?>  
                            <?php
                            //   $locationName = "Select Location";
                            // $found = false; // Initialize the $found variable
                            while (have_rows('sections', 'option')) : the_row();
                                if (get_row_layout() == 'locations') :
                                    $items = get_sub_field('items');
                                    if($items && count($items) > 0){								
                                        if($_COOKIE['location']) {
                                            $found = true;
                                            foreach ($items as $key => $value) {
                                                $code = $_COOKIE['location'];	
                                                if($code && $value["code"] == $code){
                                                    $locationName = $value["name"];	                                                   
                                                    $climbo_reviews = $value["climbo_reviews"];
                                                    foreach ($climbo_reviews as $climbo_review) :
                                                        $source = $climbo_review["source"];
                                                        $token = $climbo_review["token"];
                                                        $wlndig = $climbo_review["wlndig"];							

                                                    endforeach;		                                                   
                                                    $found = false;
                                                }											
                                            }
                                            if($found){
                                                $locationName = $items[0]["name"];		
                                                
                                                $climbo_reviews_first = $items[0]["climbo_reviews"];
                                            if (!empty($climbo_reviews_first) && is_array($climbo_reviews_first)) {
                                                
                                                // Access the first social profile in the $socials_first array
                                                $first_climbo = $climbo_reviews_first[0];

                                                $source = $first_climbo["source"];
                                                $token = $first_climbo["token"];
                                                $wlndig = $first_climbo["wlndig"];	
                                            }
                                            }
                                            
                                        }else{
                                            $locationName = $items[0]["name"];		
                                           
                                            $climbo_reviews_first = $items[0]["climbo_reviews"];
                                            if (!empty($climbo_reviews_first) && is_array($climbo_reviews_first)) {

                                                // Access the first social profile in the $socials_first array
                                                $first_climbo = $climbo_reviews_first[0];

                                                $source = $first_climbo["source"];
                                                $token = $first_climbo["token"];
                                                $wlndig = $first_climbo["wlndig"];	
                                            }      
                                        }
                                    }else{
                                        $locationName = "Select Location";
                                    }
                                ?>
                                    <section class="testimonial_videos" style="background-color: <?php echo $bg_color; ?>; ">
                                        <div class="container">
                                            
                                            <?php if (get_sub_field('title')): ?>
                                                <h2 class="title text-center">
                                                        <?php echo $title; ?>
                                                    </h2>
                                            <?php endif; ?>    
                                            <div class="item row">   
                                                <?php if (have_rows('items')) :    
                                                    $idcount = 0;                   
                                                            ?>
                                                    <?php while (have_rows('items')) :  the_row(); 
                                                            $name = get_sub_field('name');
                                                            $date = get_sub_field('date');
                                                            $image = get_sub_field('image');
                                                            $video = get_sub_field('video');
                                                            $video_Type = get_sub_field('video_type');
                                                            $Youtube = get_sub_field('youtube');                                   
                                                        ?>
                                                            <div class="col-md-6 col-lg-4 col-xl-4">
                                                                <?php  if( get_sub_field('name') ): ?>
                                                                    <div class="video_content">
                                                                        <div class="video_playbutton  ">
                                                                            <?php if($video_Type == "Video_Src" ): ?>                                                
                                                                                    <video  id="myVideo_<?php echo $idcount; ?>" controls  crossorigin playsinline  poster=" <?php echo $image; ?>" >
                                                                                        <source src="<?php echo $video; ?>" type="video/mp4">
                                                                                    </video>
                                                                                    <div onClick="togglePlayPause('myVideo_<?php echo $idcount; ?>' , 'playButton_<?php echo $idcount; ?>')" class=" f-play-video video-content"  id="playButton_<?php echo $idcount; ?>">
                                                                                        <img src="<?php echo get_template_directory_uri();?>/imgs/playb.png'" alt="">
                                                                                    </div>                                                
                                                                                <?php else: ?>  
                                                                                        <?php echo ($Youtube); ?>
                                                                            <?php endif; ?>
                                                                        </div> 
                                                                        
                                                                        <div class="text_content">
                                                                            <?php  if( get_sub_field('name') ): ?>
                                                                                <h4 class="video_title"><?php echo $name; ?></h4>
                                                                            <?php endif; ?>
                                                                            <?php  if( get_sub_field('date') ): ?>
                                                                            <div class="date">
                                                                                <?php echo $date; ?>
                                                                            </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>    
                                                            </div>                            
                                                    <?php 
                                                        $idcount++;
                                                        endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (have_rows('button')) : ?>
                                            
                                            <?php while (have_rows('button')) :  the_row(); 
                                                        $link_name = get_sub_field('link_name');
                                                        $link_url = get_sub_field('link_url');                           
                                                    ?>
                                                        <div class="button_section">  <a href="<?php echo $link_url; ?>" class="btn "><?php echo $link_name; ?></a>  </div>                      
                                                <?php endwhile; ?>
                                            
                                            <?php endif; ?>
                                            <script>
                                                let currentPlayingVideo = null;  // Variable to store the currently playing video element

                                                function togglePlayPause(id, buttonId) {
                                                    let video = document.getElementById(id);
                                                    let playButton = document.getElementById(buttonId);

                                                    if (currentPlayingVideo && currentPlayingVideo !== video) {
                                                        // Pause the currently playing video and show its play button
                                                        currentPlayingVideo.pause();
                                                        let currentPlayButtonId = currentPlayingVideo.id.replace('myVideo_', 'playButton_');
                                                        let currentPlayButton = document.getElementById(currentPlayButtonId);
                                                        currentPlayButton.style.display = 'block';
                                                    }

                                                    if (video.paused || video.ended) {
                                                        video.play();
                                                        playButton.style.display = 'none'; // Hide the play button
                                                        currentPlayingVideo = video; // Set the currently playing video
                                                    } else {
                                                        video.pause();
                                                        playButton.style.display = 'block'; // Show the play button when paused
                                                        currentPlayingVideo = null; // Reset the currently playing video
                                                    }
                                                }
                                            </script>

                                        </div>
                                    </section>
                                    
                            <?php
                                endif; // End 'locations' layout check
                            endwhile; // End 'sections' loop
                            ?>
            <?php endif; ?> -->

    <?php endwhile; ?>
    <?php endif; ?>
</main>

<script>

    function myFunction(id) {
        console.log("id",id);
    var x = document.getElementById("hide_show_button-"+id);
    if (x.style.display === "block") {
        x.style.display = "none";
        event.target.innerText = 'View More'
    } else {
        x.style.display = "block";
        event.target.innerText = 'View Less'

    }
    }

</script>
<?php
get_footer();

