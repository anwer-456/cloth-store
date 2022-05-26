<?php 
   /* Template Name: Homepage 
   */
   get_header();
   ?>
<!-- hero section start from here -->
<div class="container-fluide">
   <div class="pb-2"><?php echo do_shortcode("[avartanslider alias='home_slider']"); ?></div>
</div>
<!-- collection start here -->
<div class="container-fluide">
   <div class="row">
      <div class="col-sm-12 col-md-4 p-0">
         <img src="<?php the_field('ads_men', 'options'); ?>" alt="logo">
      </div>
      <div class="col-sm-12 col-md-4 p-0">
         <img src="<?php the_field('ads_kids', 'options'); ?>" alt="logo">
      </div>
      <div class="col-sm-12 col-md-4 p-0">
         <img src="<?php the_field('ads_women', 'options'); ?>" alt="logo">
      </div>
   </div>
</div>
<!-- news section start here -->
<div class="container">
   <div class="row">
      <div class="p-2 h3 font-weight-lighter py-4 pt-6 mt-4"><img src="<?php the_field('section_icon','options');?>" alt="icon"> WHAT'S NEW?</div>
      <div class="col-md-12">
         <div class="featured-carousel owl-carousel">
            <?php
               global $product;
               $args = array(
                   'product_cat' => 'latest',
                   'posts_per_page' => 4,
                   'orderby' => 'rand'
               );
               $loop = new WP_Query($args);
               while ($loop->have_posts()) : $loop->the_post();
                    ?>
               <div class="item">
               <div class="blog-entry">
                  <div class="item-image"> <?php echo get_the_post_thumbnail($loop->post->ID);?></div>
                  <div class="text py-4">
                     <div class="green-box">
                        <img src="<?php the_field('cart_icon','options');?>" alt="">
                     </div>
                     <hr >
                     </hr>
                     <div class="news-content text-center">
                        <h6 class="font-weight-lighter"><?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?></h6>
                        <H5 class="font-weight-light">$ <?php echo $product->get_sale_price(); ?> <span style="color: red; text-decoration: line-through; " >$ <?php echo $product->get_regular_price();?></span></H5>
                     </div>
                  </div>
               </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <!-- best seller start from here -->
   <div class="container">
      <div class="p-2 h3 font-weight-lighter py-4 pt-6 mt-4"><img src="<?php the_field('section_icon','options');?>" alt="icon"> BEST SELLERS</div>
      <div class="row">
         <div class="col-md-9">
            <div class=" featured-carousel-two owl-carousel">
               <?php
                  global $product;
                  $args = array(
                      'product_cat' => 'best-sellers',
                      'posts_per_page' => 4,
                      'orderby' => 'rand'
                  );
                  $loop = new WP_Query($args);
                  while ($loop->have_posts()) : $loop->the_post();
                       ?>
               <div class="item">
                  <div class="blog-entry">
                     <div class="item-image"> <?php echo get_the_post_thumbnail($loop->post->ID);?>
                     </div>
                     <div class="text py-4">
                        <div class="green-box">
                           <img src="<?php the_field('cart_icon','options');?>" alt="">
                        </div>
                        <hr >
                        </hr>
                        <div class="news-content text-center">
                           <h6 class="font-weight-lighter"> <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?></h6>
                           <H5 class="font-weight-light"><?php echo $product->get_sale_price(); ?> <span style="color: red; text-decoration: line-through; " >$ <?php echo $product->get_regular_price();?></span></H5>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?>
               <?php wp_reset_query(); ?>
            </div>
         </div>
         <div class="col-md-3">
            <div class="seller">
               <img src="<?php the_field('men_advertisment', 'options'); ?>" alt="img" >
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="row py-4">
      <div class="col-md-3">
         <div class="seller">
            <img src="<?php the_field('women_advertisment', 'options'); ?>" alt="img" >
         </div>
      </div>
      <div class="col-md-9">
         <div class=" featured-carousel-two owl-carousel">
            <?php
               global $product;
               $args = array(
                   'product_cat' => 'best-sellers,latest',
                   'posts_per_page' => 8,
                   'orderby' => 'desc'
               );
               $loop = new WP_Query($args);
               while ($loop->have_posts()) : $loop->the_post();
                    ?>
            <div class="item">
               <div class="blog-entry">
                  <div class="item-image"> <?php echo get_the_post_thumbnail($loop->post->ID);?>
                  </div>
                  <div class="text py-4">
                     <div class="green-box">
                        <img src="<?php the_field('cart_icon','options');?>" alt="">
                     </div>
                     <hr >
                     </hr>
                     <div class="news-content text-center">
                        <h6 class="font-weight-lighter"> <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?></h6>
                        <H5 class="font-weight-light"><?php echo $product->get_sale_price(); ?> <span style="color: red; text-decoration: line-through; " >$ <?php echo $product->get_regular_price();?></span></H5>
                     </div>
                  </div>
               </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
         </div>
      </div>
   </div>
</div>
<!-- specail product start here -->
<div class="container">
   <div class="p-2 h3 font-weight-lighter py-4 pt-6 mt-4"><img src="<?php the_field('section_icon','options');?>" alt="icon"> SPECIAL PRODUCT</div>
   <div class="row d-flex justify-content-between specail-product">
      <?php
         global $product;
         $args = array(
             'product_cat' => 'latest',
             'posts_per_page' => 3,
             'orderby' => 'rand'
         );
         $loop = new WP_Query($args);
         while ($loop->have_posts()) : $loop->the_post();
              ?>
      <div class="col-sm-12 col-md-4 specail-card" >
         <div class="row bg-white">
            <div class="col-4 image-wrapper p-4">
               <?php echo get_the_post_thumbnail($loop->post->ID);?>
               <div class="green-box specail-green-box">
                  <img src="<?php the_field('cart_icon','options');?>" alt="">
               </div>
            </div>
            <div class="col-8 content d-flex align-items-center">
               <div class="news-content text-center w-100">
                  <h6 class="font-weight-lighter"> <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?></h6>
                  <H5 class="font-weight-light">$ <?php echo $product->get_sale_price(); ?><span style="color: red; text-decoration: line-through; " >$ <?php echo $product->get_regular_price();?></span></H5>
               </div>
            </div>
         </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
   </div>
   <div class="row d-flex justify-content-between specail-product">
      <?php
         global $product;
         $args = array(
             'product_cat' => 'latest',
             'posts_per_page' => 3,
             'orderby' => 'desc'
         );
         $loop = new WP_Query($args);
         while ($loop->have_posts()) : $loop->the_post();
              ?>
      <div class="col-sm-12 col-md-4 specail-card" >
         <div class="row bg-white">
            <div class="col-4 image-wrapper p-4">
               <?php echo get_the_post_thumbnail($loop->post->ID);?>
               <div class="green-box specail-green-box">
                  <img src="<?php the_field('cart_icon','options');?>" alt="">
               </div>
            </div>
            <div class="col-8 content d-flex align-items-center">
               <div class="news-content text-center w-100">
                  <h6 class="font-weight-lighter"> <?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?></h6>
                  <H5 class="font-weight-light">$ <?php echo $product->get_sale_price(); ?><span style="color: red; text-decoration: line-through; " >   $ <?php echo $product->get_regular_price();?></span></H5>
               </div>
            </div>
         </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
   </div>
</div>
<!-- offer section start from here -->
<div class="container-fluide offer" style="background-image: url(<?php the_field('ads_bg','options'); ?>);">
   <div class="container">
      <div class="row d-flex justify-content-between  py-5">
         <div class="col-sm-12 col-md-4 d-flex align-items-center">
            <div class="row d-flex align-items-center">
               <div class="col-2 p-0">
                  <img src="<?php the_field('icon1', 'options');?>" alt="free-shipping" srcset="">
               </div>
               <div class="col-10 ">
                  <p class="text-white fw-bold m-0"><?php the_field('shipping', 'options'); ?></p>
                  <p class="text-white m-0"><?php the_field('shipping_desc', 'options'); ?></p>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-4 d-flex align-items-center border-right border-left">
            <div class="row d-flex align-items-center">
               <div class="col-2 ">
                  <img src="<?php the_field('icon2', 'options');?>" alt="free-shipping" srcset="">
               </div>
               <div class="col-10 ">
                  <p class="text-white fw-bold m-0"><?php the_field('guarantee', 'options'); ?></p>
                  <p class="text-white m-0"><?php the_field('guarantee_desc', 'options'); ?></p>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-4 d-flex align-items-center">
            <div class="row d-flex align-items-center">
               <div class="col-2 ">
                  <img src="<?php the_field('icon3', 'options');?>" alt="free-shipping" srcset="">
               </div>
               <div class="col-10 ">
                  <p class="text-white fw-bold m-0"><?php the_field('support', 'options'); ?></p>
                  <p class="text-white m-0"><?php the_field('support_desc', 'options'); ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- latest blodg start here -->
<div class="container">
   <div class="p-2 h3 font-weight-lighter py-4 pt-6 mt-4"><img src="<?php the_field('section_icon','options');?>" alt="icon"> LATEST BLOG</div>
   <div class="row pt-3 mb-5 d-flex justify-content-between ">
      <?php 
         // the query
         $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish')); ?>
      <?php if ( $wpb_all_query->have_posts() ) : ?>
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>    
      <div class="col-sm-12 col-md-4 blog" >
         <?php the_post_thumbnail('full');?>
         <p class="font-weight-lighter pt-1 m-0"><?php the_date(); ?></p>
         <p class="fw-bold"><?php the_title(); ?></p>
      </div>
      <?php endwhile; ?>
      <!-- end of the loop -->
      <?php else : ?>
      <?php endif; ?>
   </div>
</div>
<?php get_footer();?>