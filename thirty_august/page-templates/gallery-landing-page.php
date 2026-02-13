<?php
/**
 * Template Name: Gallery Page Template
 */

get_header();
?>  
<main id="primary" class="site-main main-content">
    <?php if (have_rows('sections')) : ?>
        <?php while (have_rows('sections')) :  the_row(); ?>
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
                    <?php else: ?>
                    <section class="banner-section" style="background-color: <?php echo $background_color; ?>;">
                        <?php endif; ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 column <?php echo $items = ($position == "Left") ?  'order-1' : 'order-2'; ?>">
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
                                        <div class="title-image text-center">
                                            <img src="<?php echo get_template_directory_uri(); ?>/imgs/title_icn.png" alt="">
                                        </div>  
                                        <?php  if( get_sub_field('description') ): ?>
                                        <div class="description text-center">
                                            <?php echo $description; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12  col-md-6  <?php echo $items = ($position == "Left") ?  'order-2' : 'order-1'; ?>">

                                </div>
                            </div>
                        </div>
                </section>
            <?php endif; ?>
    
                <?php if( get_row_layout() == 'gallery' ): ?>
                    <section class="gallery-section">
                        <?php if (have_rows('items')) : 
                            $modalId = 0;
                        ?>
                            <div class="container">
                                <div class="row">
                                    <?php while (have_rows('items')) : the_row(); 
                                        $title = get_sub_field('title');                                      
                                        $Images = get_sub_field('images');
                                        ?>
                                        <div class="col-sm-12 col-md-6 col-xl-4 col-xxl-3 category-column">
                                            <div class="card">
                                                <div class="card-content">
                                                    <a data-bs-toggle="modal"  data-bs-target="#modal-<?php echo $modalId; ?>">
                                                        <div class="imgs-title">
                                                            <?php if ($Images) {
                                                                $firstImage = $Images[0]['imageurl']; ?>
                                                                <div class="img">
                                                                    <img src="<?php echo $firstImage; ?>" class=" lazyloaded"> 
                                                                </div>
                                                            <?php } ?>
                                                            <div class="icon_title">
                                                                <h5 class="card-title"> <?php echo $title; ?></h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>  
                                            <div class="modal fade" id="modal-<?php echo $modalId; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?php echo $modalId; ?>Label"  aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content"> 
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="<?php echo $modalId; ?>Label"><?php echo $title; ?></h4>
                                                            <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button> -->
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="gallery-slider">    
                                                                <?php if ($Images) {
                                                                    foreach ($Images as $image) {
                                                                        $imageUrl = $image['imageurl'];
                                                                        ?>
                                                                        <div class="item">
                                                                            <img src="<?php echo $imageUrl; ?>" class="d-block img-responsive lazyloaded" alt="Slide">
                                                                        </div>
                                                                    <?php }
                                                                } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>  
                                        <script>
                                            jQuery('#modal-<?php echo $modalId; ?>').on('shown.bs.modal', function() {
                                                jQuery('.gallery-slider').slick('setPosition'); // Refresh slider position
                                                
                                                // Adjust slider width
                                                jQuery('.gallery-slider').css('width', '100%'); // Adjust the width as needed
                                            });

                                            jQuery('#modal-<?php echo $modalId; ?>').on('hidden.bs.modal', function() {
                                                // Reset slider width when modal is closed
                                                jQuery('.gallery-slider').css('width', ''); // Reset to default width or remove the style
                                            });
                    
                                        </script>
                                    <?php 
                                    $modalId++;
                                    endwhile; ?>
                                </div>   
                            </div>    
                        <?php endif; ?>
                    </section>            
                <?php endif; ?>


            

             
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php
get_footer();