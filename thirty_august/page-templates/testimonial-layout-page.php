<?php
/**
 * Template Name: Testimonial Page Template
 */

get_header();
?>  
<main id="primary" class="site-main main-content">
	

    <?php if (have_rows('sections','option')) : ?>
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

        <?php endwhile; ?>
    <?php endif; ?> 
    
    <?php if (have_rows('sections','option')) : ?>
    
            
        <?php while (have_rows('sections', 'option')) : the_row(); ?>
            <?php  if (get_row_layout() == 'locations') :
                $items = get_sub_field('items');
                if($items && count($items) > 0){								
                    if($_COOKIE['location']) {

                     
                        foreach ($items as $key => $value) {
                            $code = $_COOKIE['location'];	
                            if($code && $value["code"] == $code){
                            
                                $climbo_reviews = $value["climbo_reviews"];
                                $climbo_review_source = $climbo_reviews["source"];
                                $climbo_review_token = $climbo_reviews["token"];
                                $climbo_review_wlndig = $climbo_reviews["wlndig"];
                            }
                        } 
                   
                    }else{
                        $locationName = $items[0]["name"];	
                        $climbo_reviews_first = $items[0]["climbo_reviews"];
                        $climbo_review_source = $climbo_reviews_first["source"];
                        $climbo_review_token = $climbo_reviews_first["token"];	
                        $climbo_review_wlndig = $climbo_reviews_first["wlndig"];	
                    }
                    
                }else{
                    $locationName = "Select Location";
                }
                        ?>
                               <section class="climbo-review">
                                    <div class="container">
                                        <div id="wid_1697002702624">
                                            <script>     
                                                sc = document.createElement("script");
                                                sc.setAttribute("defer",String(true));
                                                sc.setAttribute("src","<?php echo $climbo_review_source; ?>");
                                                sc.setAttribute("theme","light");
                                                sc.setAttribute("footer", String(false)); 
                                                sc.setAttribute("widget-type","video");
                                                sc.setAttribute("token","<?php echo $climbo_review_token; ?>");
                                                sc.setAttribute('apiurl', 'https://server.climbo.com/api/v0.0.9');
                                                sc.setAttribute('stats',"true");
                                                sc.setAttribute('addReview',"true");
                                                sc.setAttribute('profile-pic',"true");
                                                sc.setAttribute('review-name',"true");
                                                sc.setAttribute('wl', "false");
                                                sc.setAttribute('wlndig', "<?php echo $climbo_review_wlndig; ?>");
                                                document.getElementById("wid_1697002702624").appendChild(sc);
                                            </script>
                                        </div>    
                                        <div id="wid_1697002702625">
                                            <script>
                                                sc = document.createElement("script");
                                                sc.setAttribute("defer",true);
                                                sc.setAttribute("src","<?php echo $climbo_review_source; ?>");
                                                sc.setAttribute("theme","light");
                                                sc.setAttribute("footer", "true"); 
                                                sc.setAttribute("widget-type","carousel");
                                                sc.setAttribute("token","<?php echo $climbo_review_token; ?>");
                                                sc.setAttribute('apiurl', "https://server.onlinereviews.tech/api/v0.0.9");
                                                sc.setAttribute('stats',"true");
                                                sc.setAttribute('addReview',"true");
                                                sc.setAttribute('profile-pic',"true");
                                                sc.setAttribute('review-name',"true");
                                                sc.setAttribute('wl', "false");
                                                sc.setAttribute('wlndig', "<?php echo $climbo_review_wlndig; ?>");
                                                sc.setAttribute('lang', "us");
                                                sc.setAttribute('brandStyle', "%7B%22sidebar_background%22%3A%22%23000000%22%2C%22sidebar_text%22%3A%22white%22%2C%22brand_button_text_color%22%3A%22white%22%2C%22brand_main_color%22%3A%22%23676767%22%2C%22brand_button_border_radius%22%3A%2216px%22%2C%22brand_button_hover%22%3A%22rgb(118%2C%20118%2C%20118)%22%2C%22brand_button_active%22%3A%22rgb(88%2C%2088%2C%2088)%22%2C%22brand_main_color_opacity%22%3A%22%236767671a%22%2C%22brand_font%22%3A%22Montserrat%22%2C%22star_color%22%3A%22%23128c7e%22%2C%22brand_main_background%22%3A%22%23FBF8F6%22%2C%22brand_card_background%22%3A%22white%22%2C%22poweredByLink%22%3A%22https%3A%2F%2Fclimbo.com%22%2C%22poweredicon%22%3A%22https%3A%2F%2Frecensioni-io-static-folder.s3.eu-central-1.amazonaws.com%2Fpublic_onlinereviews%2Fimages%2Flogo.png%22%7D");
                                                document.getElementById("wid_1697002702625").appendChild(sc);


                                                
                                            </script>
                                        </div>                                
                                    </div>
                               </section>


            <?php endif; ?>
        <?php endwhile;   ?>
    <?php endif; ?>  
</main>

<?php
get_footer();