<?php
   /**
    * The template for displaying the footer
    *
    * Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package WordPress
    * @subpackage Twenty_Twenty_One
    * @since Twenty Twenty-One 1.0
    */
   
   ?>
<!-- footer section start from here -->
<div class="container-fluide footer border-bottom">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-4 pt-4 pb-5 border-right border-light left">
            <img src="<?php the_field('footer_logo','options'); ?>" alt="">
            <p class="py-3"><?php the_field('footer_description','options'); ?></p>
            <h5><?php the_field('socials_heading','options'); ?></h5>
            <div class="row">
               <div class="col d-flex socail-icons p-0">
                  <div class="socail-icon"><a href="<?php the_field('facebook','options'); ?>"><i class="fab fa-facebook-f"></i></a></div>
               </div>
               <div class="col d-flex socail-icons p-0">
                  <div class="socail-icon"><a href="<?php the_field('twitter','options'); ?>"><i class="fab fa-twitter"></i></a></div>
               </div>
               <div class="col d-flex socail-icons p-0">
                  <div class="socail-icon"><a href="<?php the_field('google+','options'); ?>"><i class="fab fa-google-plus"></i></a></div>
               </div>
               <div class="col d-flex socail-icons p-0">
                  <div class="socail-icon"><a href="<?php the_field('linkedin','options'); ?>"><i class="fab fa-linkedin"></i></a></div>
               </div>
               <div class="col d-flex socail-icons p-0">
                  <div class="socail-icon"><a href="<?php the_field('pinterest','options'); ?>"><i class=" fab fa-pinterest"></i></a></div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-12 col-lg-8 right ">
            <div class="row p-4 pb-2  pl-5 border-bottom" >
               <h5>NEWSLETTER SIGNUP</h5>
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="email@example.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                     <span class="input-group-text bg-success border-0 text-white" id="basic-addon2">SUBSCRIBE</span>
                  </div>
               </div>
            </div>
            <div class="row pt-3 pl-5 mb-5 d-flex justify-content-between ">
               <div class="col-sm-12 col-md-4" >
                  <p class="font-weight-lighter pt-1 m-0">
                  </p>
                  <?php dynamic_sidebar('sidebar-1');?>
               </div>
               <div class="col-sm-12 col-md-4" >
                  <p class="font-weight-lighter pt-1 m-0">
                  </p>
                  <?php dynamic_sidebar('sidebar-2');?>
               </div>
               <div class="col-sm-12 col-md-4" >
                  <p class="font-weight-lighter pt-1 m-0">
                  </p>
                  <?php dynamic_sidebar('sidebar-3');?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- copyright section -->
<div class="container-fluide footer">
   <div class="container">
      <div class=" row d-flex justify-content-between">
         <div class="col-sm-12 col-md-6 py-4">
            <p><?php the_field('copyright_info','options'); ?></p>
         </div>
         <div class="col-sm-12 col-md-6 py-4">
            <p class="text-right "><?php the_field('designed_by','options'); ?></p>
         </div>
      </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>